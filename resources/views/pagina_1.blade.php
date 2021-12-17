<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 1</title>
</head>
<body>
    <h1>{{$titolo_pagina}}</h1>

    {{-- link per tornare alla home --}}
    <div><a href="{{ route('home') }}">torna alla home</a></div>
</body>
</html>