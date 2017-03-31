<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ $title }}
        </div>
        <div class="content">
            <p>{{ $content }}</p>
        </div>
        <div class="links">
            <a href="/">Home</a>
            <a href="/page/1">Page 1</a>
            <a href="/page/2">Page 2</a>
        </div>
        <div class="time">
            <p>Generation time: {{ round((microtime(true) - LARAVEL_START), 3) }} sec.</p>
        </div>
    </div>
</div>
</body>
</html>
