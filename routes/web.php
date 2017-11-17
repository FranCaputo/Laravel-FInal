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

Route::get("/users/editar", "MainController@editarUsuario");

Route::get("/miSitio", "MainController@main");

Route::get("/genero/{id}", "GenerosController@show");

Route::get("/generos", "GenerosController@listado");

Route::patch("/editarPelicula", "PeliculasController@actualizar");

Route::get("/editarPelicula/{id}", "PeliculasController@editar");

Route::get("/borrarPelicula/{id}", "PeliculasController@borrar");

Route::get("/agregarPelicula", "PeliculasController@agregar");

Route::post("/agregarPelicula", "PeliculasController@guardar");

Route::get("/actor/{id}", "ActoresController@show");

Route::get("/actores", "ActoresController@listado");

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/pelicula/{id}", "PeliculasController@detalle");

Route::get("/pelisBuenRating", "PeliculasController@rating");

Route::get("/saludar/{nombre}/{apellido}", function($nombre, $apellido) {
  echo "Hola $nombre $apellido";
});

Route::get("/bienvenidos", function() {
  echo "Bienvenidos a mi sitio";
});


Route::get('/', function () {
    return view('welcome');
});

//Route::get("/registracion", "Auth\RegisterController@showRegistrationForm")->name("register");

//hola

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
