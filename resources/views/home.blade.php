<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            a{
                display: inline-block
            }
        </style>
    </head>
    <body>
       <h1 class="hello">{{$hello}}</h1>

       <div class="navbar">
           <ul>
               @foreach ($lista_pagine as $nome_pagina)
               <li><a href=""></a>{{$nome_pagina}}</li>
               @endforeach
           </ul>
       </div>
    </body>
</html>
