<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div>
        <h1 class="text-danger">{{$mail->nom}}</h1>
    </div>
    <div>
        <h4 class="text-primary">{{$mail->email}}</h4>
    </div>
    <div>
        <h4>{{$mail->sujet}}</h4>
    </div>
    <div>
        <h4>{{$mail->message}}</h4>
    </div>
</body>
</html>