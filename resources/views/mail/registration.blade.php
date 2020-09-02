<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi {{ $mailArg["Name"] }} {{ $mailArg["Surname"] }}</h1>
    <p>Thank you for registering to Plugin investment application.</p>
    <p>User this link to activate your account <a href="http://127.0.0.1:8000/activate/{{ $mailArg["ActivatioHash"] }}"> http://127.0.0.1:8000/activate/{{ $mailArg["ActivatioHash"] }} </a></p>

    <p>Many thanks!</p>
</body>
</html>