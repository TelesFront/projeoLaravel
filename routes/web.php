<?php

use App\Models\produtos;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FormCli;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
 
Route ::get('/', function(){
	return view('home');
});

Route::post('/Formulario', [FormCli::class, 'create']);

Route ::get('/produtos', function(){
	$camisaPreta = new produtos();
	$camisaPreta->descri = "chora sistema";
	$camisaPreta->cor = "preta";
	$camisaPreta->categoria = "Zika Neutra";
	$camisaPreta->save();
	return produtos::all();
});