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
    ['title' => 'A',
    'autore' => 'A',
    'img' => './img/apilogo.jpg'],
    ['title' => 'B',
    'autore' => 'B',
    'img' => './img/apilogo.jpg'],
    ['title' => 'C',
    'autore' => 'C',
    'img' => './img/apilogo.jpg'],
    ['title' => 'D',
    'autore' => 'D',
    'img' => './img/apilogo.jpg'],
    ['title' => 'E',
    'autore' => 'E',
    'img' => './img/apilogo.jpg']
  ]); // ritorna un JSON
});
