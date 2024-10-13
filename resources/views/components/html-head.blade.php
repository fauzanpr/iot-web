<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title : "IOT Web" }}</title>
    <link rel="icon" href={{ @asset("assets/antena.png") }}>
    @vite('resources/css/app.css')
</head>
<body>
    {{ $slot }}
</body>
</html>