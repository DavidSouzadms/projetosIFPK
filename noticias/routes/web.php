<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

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



Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function() {
    Route::resource('noticias', NoticiaController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
//Route::get('noticias',[App\Http\Controllers\NoticiaController::class,'index']);
//Route::post('noticias', [NoticiaController::class, 'store']); // Rota responsável por salvar a criação
//Route::get('noticias/create',[App\Http\Controllers\NoticiaController::class,'create']); // Rota responsável pelo formulário de criação
//Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit']);
//Route::put('noticias/{noticia}/edit', [NoticiaController::class, 'update']); // Rota responsável por salvar a edição
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', function () {
//    return view('welcome');
//});


//Route::resource('noticias', NoticiaController::class);
