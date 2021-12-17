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
            'pagina_1',
            'pagina_2',
            'pagina_3',
        ]
    ];
    return view('home', $data);
});
