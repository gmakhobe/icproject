<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Email From Client "{{ $mailArg["Name"] }}"</h1>
    <p>"{{ $mailArg["Comments"] }}"</p>
    <p>Reply at "{{ $mailArg["Email"] }}"</p>

    <p>Many thanks!</p>
</body>
</html>