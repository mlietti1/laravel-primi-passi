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

Route::get('/', function(){

    $welcome = 'Hello Laravel';

    $links = ['Link 1', 'Link 2', 'Link 3', 'Link 4', 'Link 5'];

    return view('home', compact('welcome', 'links'));
});

Route::get('/about', function(){

    $team = [
        [
            "nome"=>"Mario",
            "cognome"=>"Rossi",
            "mail"=>"mario@gmail.com"
        ],
        [
            "nome"=>"Luca",
            "cognome"=>"Bianchi",
            "mail"=>"luca@gmail.com"
        ],
        [
            "nome"=>"Laura",
            "cognome"=>"Ferri",
            "mail"=>"laura@gmail.com"
        ],
        [
            "nome"=>"Anna",
            "cognome"=>"Russo",
            "mail"=>"anna@gmail.com"
        ]
    ];

    return view('about', compact('team'));
});
