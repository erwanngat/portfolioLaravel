<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', [Controller::class, 'home']);
Route::get('/cv', [Controller::class,'cv']);
Route::get('/bts', [Controller::class,'bts']);

Route::get('/parcourspro', [Controller::class,'parcourspro']);
Route::get('/projets', [Controller::class,'projets']);
Route::get('competences', [Controller::class,'competences']);

Route::get('veille', [Controller::class,'veille']);
Route::get('patrimoine', [Controller::class,'patrimoine']);

