<?php


Route::get('/', function () {
    return view('welcome');
});

// lay values
Route::get('/tasks', 'TaskController@index') ;
//thay ngon ngu
Route::get('language/{locale}', 'ChangeLanguage@changelanguage'); 
// thao tac
Route::resource('tasks', 'TaskController');
