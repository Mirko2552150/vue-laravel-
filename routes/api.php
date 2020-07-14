<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// chiamata http://localhost:8000/api/message
Route::get('message', function(){
  return response()->json([
    ['title' => 'Riproduzione DigitalOcean',
    'autore' => 'LM',
    'img' => './img/html.png',
    'link' => 'https://github.com/Mirko2552150/html-css-digitalocean'],
    ['title' => 'Riproduzione SpotifyWeb',
    'autore' => 'LM',
    'img' => './img/html.png',
    'link' => 'https://github.com/Mirko2552150/html-css-spotifyweb'],
    ['title' => 'Js-dadi',
    'autore' => 'LM',
    'img' => './img/jslogo.png',
    'link' => 'https://github.com/Mirko2552150/js-mail-dadi'],
    ['title' => 'Fizz-buzz',
    'autore' => 'LM',
    'img' => './img/jslogo.png',
    'link' => 'https://github.com/Mirko2552150/js-fizzbuzz'],
    ['title' => 'Campominato',
    'autore' => 'LM',
    'img' => './img/jslogo.png',
    'link' => 'https://github.com/Mirko2552150/js-mail-dadi'],
    ['title' => 'Boolzap',
    'autore' => 'LM',
    'img' => './img/jslogo.png',
    'link' => 'https://github.com/Mirko2552150/js-html-css-boolzap'],
    ['title' => 'API Music',
    'autore' => 'LM',
    'img' => './img/apilogo.jpg',
    'link' => 'https://github.com/Mirko2552150/js-mail-dadi'],
    ['title' => 'Rest-Chartbool',
    'autore' => 'LM',
    'img' => './img/apilogo.jpg',
    'link' => 'https://github.com/Mirko2552150/rest-chartbool'],
    ['title' => 'PHP Ajax dischi',
    'autore' => 'LM',
    'img' => './img/phplogo.png',
    'link' => 'https://github.com/Mirko2552150/php-ajax-dischi'],
    ['title' => 'Boolpress Base',
    'autore' => 'LM',
    'img' => './img/phplogo.png',
    'link' => 'https://github.com/Mirko2552150/laravel-boolpress-base'],
    ['title' => 'La Molisana',
    'autore' => 'LM',
    'img' => './img/laravellogo.png',
    'link' => 'https://github.com/Mirko2552150/laravel-boolean'],
    ['title' => 'WildPaper',
    'autore' => 'LM',
    'img' => './img/jquerylogo.png',
    'link' => 'https://github.com/Mirko2552150/wildpaper'],
    ['title' => 'Progetto finale',
    'autore' => 'LM',
    'img' => './img/laravellogo.png',
    'link' => 'https://github.com/Mirko2552'],
    ['title' => 'Sass Teambit',
    'autore' => 'LM',
    'img' => './img/sasslogo.png',
    'link' => 'https://github.com/Mirko2552150/node-sass-teambit'],
    ['title' => 'Vue Primi Passi',
    'autore' => 'LM',
    'img' => './img/vuelogo.jpg',
    'link' => 'https://github.com/Mirko2552150/https-github.com-Mirko2552150-vue-primi-passi'],
    ['title' => 'Vue Laravel',
    'autore' => 'LM',
    'img' => './img/vuelogo.jpg',
    'link' => 'https://github.com/Mirko2552150/vue-laravel-']
  ]); // ritorna un JSON
});
