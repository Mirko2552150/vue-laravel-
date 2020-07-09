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
    'message' => 'ciao Mirko'
  ]); // ritorna un JSON
});
