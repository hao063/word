<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;

class TestController extends Controller
{
    //
    public function index(Request $request) {
       //Khởi tạo đối tượng phpWord
       $phpWord = new PhpWord();

       //Thêm một tài liệu Word
       $section = $phpWord->addSection();

       //Thêm nội dung tài liệu cũng như các định dạng cơ bản của tài liệu
       $section->addText(
           'Nội dung',
           array(
               'name' => 'Arial',
               'size' => 14
           )
       );

       //Khởi tạo đối tượng writer
       $writer = IOFactory::createWriter($phpWord, 'Word2007');

       //Tạo tập tin Word
       $writer->save('filename.docx');
       return response()->download(public_path('filename.html'));
    }

    public function test() {
        $template =  new TemplateProcessor('user.docx');
        $template->setValue('name', 'Nguyễn Văn A');
        $template->setValue('address', 'Hà Nội');
        $template->setValue('age', 30);
        $template->setImageValue('foto', array('path' => 'a.jpg', 'width' => 100, 'height' => 100, 'ratio' => true));
        $template->saveAs('filetest.docx');
        return response()->download('filetest.docx')->deleteFileAfterSend(true);
    } 
}
