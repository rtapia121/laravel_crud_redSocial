<?php

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

//grupo de rutas 
// Route::prefix('admin')->group(function(){
//     Route::get('usuario','UsuariosController@index;'); // ruta sencilla
// });

Route::get('/home', function(){
    return view('test/home');
});

// Route::get('/', function () {
//     return response('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
 Route::get('home', 'RedSocialController@index');
 Route::resource('home', 'RedSocialController');
 Route::post('home/subir', 'RedSocialController@store');
