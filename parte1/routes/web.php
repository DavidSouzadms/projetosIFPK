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
    return view('welcome');
});

Route::get('/index', function () {
    return view ('index');
});

Route::get('/home', function () {
    return view ('home');
});
//Route::get('/footer', function () {
//    return view ('footer');
//});
Route::get('/about_us', function () {
    return view ('about_us');
});
Route::get('/getintouch', function () {
    return view ('getintouch');
});
Route::get('/seemore', function () {
    return view ('seemore');
});

Route::get('/dataHora/','App\Http\Controllers\parte1controller@dataHora');

Route::get('/footer/',[App\Http\Controllers\sitecontroller::class,'footer']);

Route::get('/about/',[App\Http\Controllers\sitecontroller::class,'about_us']);

Route::get('/blog/',[App\Http\Controllers\sitecontroller::class,'blog']);

Route::get('/minhaidade/',function($anoNascimento){
$idade=date('y')-$anoNascimento;
echo $idade;
});


