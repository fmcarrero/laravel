<?php

Route::get('acerca','PaginasController@acerca');
Route::get('contacto','PaginasController@contacto');

Route::get("/recetas",function(){
	return 'hola';
});

Route::get('/', 'WelcomeController@index');

    
Route::get('home','HomeController@index');

Route::controllers([
	'auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController'
]);
