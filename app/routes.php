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

Route::get('/', array( 'as' => 'home', function () {
    return View::make('template.theme');
}));


Route::get('/contacts', array('as' => 'contact.index', function () {
    $contacts = Contact::all();
    return View::make('contact.index', compact('contacts'));
}));

Route::get('/contacts/create', array('as' => 'contact.create', function () {
    return View::make('contact.create');
}));

Route::post('/contacts/create', array('as' => 'contact.store', function () {
    //store and redirect
    $data = array(
        'firstname' => Input::get('firstname'),
        'lastname' => Input::get('lastname'),
        'email' => Input::get('email'),
        'phone' => Input::get('phone'),
        'adress' => Input::get('adress'),
    );

    var_dump($data);

    $contact = new Contact();
    $contact->firstname = $data['firstname'];
    $contact->lastname = $data['lastname'];
    $contact->email = $data['email'];
    $contact->phone = $data['phone'];
    $contact->adress = $data['adress'];

    $contact->save();

    return 0;
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