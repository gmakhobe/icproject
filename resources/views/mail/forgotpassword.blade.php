<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi, you recently requested for a link to change your password!</h1>
    <p>Please see the link below and do not share it with anyone including.</p>
    <p>Use this link to change your account password <a href="http://127.0.0.1:8000/passwordreset/{{ $mailArg["ActivatioHash"] }}"> http://127.0.0.1:8000/passwordreset/{{ $mailArg["ActivatioHash"] }} </a></p>

    <p>Many thanks!</p>
</body>
</html>