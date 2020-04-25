<?php

/**
 * Author: Andrew Beatrice
 * Site: http://andrewbeatrice.com/
 * Email: abeatrice.mail@gmail.com
 * Date: 4/25/20
 */

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/contacts');
});

Route::middleware('auth')->group(function() {
    Route::get('contacts/import', 'ContactImportController@create')->name('contactImport.create');
    Route::post('contacts/import', 'ContactImportController@store')->name('contactImport.store');
    Route::resource('contacts', 'ContactController');
});
