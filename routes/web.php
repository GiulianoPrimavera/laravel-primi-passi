<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'hello' => 'hello world',
        'lista_pagine' => [
            'pagina_1'=> [
                'nome_pagina' => 'pagina_1',
                'link_pagina' => "pagina_1"
            ],
            'pagina_2'=> [
                'nome_pagina' => 'pagina_2',
                'link_pagina' => "pagina_2"
            ],
            'pagina_3'=> [
                'nome_pagina' => 'pagina_3',
                'link_pagina' => "pagina_3"
            ],
        ]
    ];
    return view('home', $data);
});

Route::get('/pagina_1', function(){
    $data = [
        'titolo_pagina' => 'sono la pagina 1'
    ];
    return view('pagina_1', $data);
})->name('pagina_1');


Route::get('/pagina_2', function(){
    $data = [
        'titolo_pagina' => 'sono la pagina 2'
    ];
    return view('pagina_2', $data);
})->name('pagina_2');


Route::get('/pagina_3', function(){
    $data = [
        'titolo_pagina' => 'sono la pagina 3'
    ];
    return view('pagina_3', $data);
})->name('pagina_3');