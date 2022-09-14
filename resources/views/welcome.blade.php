<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create Word File in Laravel</title>
        <link rel="stylesheet" href="https://update3.downlater.net/{{asset("css/app.css")}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>z
    </head>
    <body>
        <div >
            <h2>Create Word File in Laravel</h2><br/>
            <form method="post" action="{{route('work')}}">
                @csrf
                <div >
                <div ></div>
                <div >
                <label for="Name">Name:</label>
                <input type="text"  name="name">
                </div>
                </div>
                <div >
                <div ></div>
                <div >
                <label for="Email">Email:</label>
                <input type="text"  name="email">
                </div>
                </div>
                <div >
                <div ></div>
                <div >
                <label for="Number">Phone Number:</label>
                <input type="text"  name="number">
                </div>
                </div>
                <div >
                <div ></div>
                <div >
                <button type="submit" >Submit</button>
                </div>
                </div>
            </form>
        </div>
    </body>
</html>