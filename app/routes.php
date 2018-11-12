<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('template.theme');
});


Route::get('/contacts', array('as' => 'contact.index', function () {
    return View::make('contact.index');
}));

Route::get('/contacts/create', array('as' => 'contact.create', function () {
    return View::make('contact.create');
}));

Route::post('/contacts/create', array('as' => 'contact.store', function () {
    //store and redirect
}));

Route::get('/contacts/edit/{id}', array('as' => 'contact.edit', function () {
    return View::make('contact.index');
}));

Route::post('/contacts/edit/{id}', array('as' => 'contact.update', function () {
    //update and redirect
}));

Route::get('/contacts/delete/{id}', array('as' => 'contact.delete', function () {
    //delete and redirect
}));