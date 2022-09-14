<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('work', [TestController::class, 'index'])->name('work');

Route::get('/test', function () {
    $header = [
        'Content-Type' => 'text/html',
        'Content-Disposition' => 'attachment; Filename=mydoc.doc'
    ];
    return \Response::make(view('welcome'), 200, $header);
});

Route::get('ok', [TestController::class, 'test']);
