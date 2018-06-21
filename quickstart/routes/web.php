<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    
    return redirect()->back();
}); 
