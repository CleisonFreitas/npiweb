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
//Auth::routes();
/*
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');
*/

// Configurado para acessar o Tema
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


