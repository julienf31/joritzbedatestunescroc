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

Route::get('/contacts/{id}', array('as' => 'contact.show', function ($id) {
    $contact = Contact::where('id',$id)->first();
    return View::make('contact.show', compact('contact'));
}));


Route::post('/contacts/create', array('as' => 'contact.store', function () {
    $data = array(
        'firstname' => Input::get('firstname'),
        'lastname' => Input::get('lastname'),
        'email' => Input::get('email'),
        'phone' => Input::get('phone'),
        'adress' => Input::get('adress'),
    );

    $contact = new Contact();
    $contact->firstname = $data['firstname'];
    $contact->lastname = $data['lastname'];
    $contact->email = $data['email'];
    $contact->phone = $data['phone'];
    $contact->adress = $data['adress'];

    $contact->save();

    return Redirect::route('contact.index');
}));

Route::get('/contacts/edit/{id}', array('as' => 'contact.edit', function ($id) {
    $contact = Contact::find($id)->first();

    return View::make('contact.edit', compact('contact'));
}));

Route::post('/contacts/edit/{id}', array('as' => 'contact.update', function ($id) {
    //update and redirect
    //store and redirect
    $data = array(
        'firstname' => Input::get('firstname'),
        'lastname' => Input::get('lastname'),
        'email' => Input::get('email'),
        'phone' => Input::get('phone'),
        'adress' => Input::get('adress'),
    );

    $contact = Contact::find($id)->first();
    $contact->firstname = $data['firstname'];
    $contact->lastname = $data['lastname'];
    $contact->email = $data['email'];
    $contact->phone = $data['phone'];
    $contact->adress = $data['adress'];

    $contact->save();

    return Redirect::route('contact.index');
}));

Route::get('/contacts/delete/{id}', array('as' => 'contact.delete', function ($id) {
    //delete and redirect
    $contact = Contact::where('id',$id)->first();
    $contact->delete();

    return Redirect::route('contact.index');
}));