<?php
//redireccionamiento a la vista a traves del controlador, hacer una linea por cada opcion
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/ubicacion', 'UbicacionController@gestionarubicaciones')->name('ubicacion');
    Route::get('/alumno', 'AlumnoController@gestionaralumnos')->name('alumno');
      /*
      | 
      |Rutas con sesión
      |
      */    
    
});
