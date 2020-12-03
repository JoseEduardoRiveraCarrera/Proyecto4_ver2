<?php

Route::view('/','Home')->name('Home');
Route::view('/Experiencia','Experiencia')->name('Experiencia');
Route::view('/Galeria','Galeria')->name('Galeria');
Route::view('/Blog','Blog')->name('Blog');
Route::view('/Contacto','Contacto')->name('Contacto');
Route::view('/Administracion','Administracion')->name('Administracion');

Route::post('Contacto','MessagesController@store');

