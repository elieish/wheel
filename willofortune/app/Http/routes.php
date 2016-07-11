<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('signup', function () {
    return view('register');
});

Route::auth();

Route::get('/home', 'HomeController@index');



/*
|---------------------s-----------------------------------------------------
| Banking Details Routes
|--------------------------------------------------------------------------
|
| 
*/

Route::get('banking-details',['Middleware' => 'auth.basic','uses' => 'BankAccountsController@index']);

Route::get('banking-list',['Middleware' => 'auth','uses' => 'BankAccountsController@banking_list']);

Route::get('add-bank',['Middleware' => 'auth','uses' => 'BankAccountsController@add_form']);

Route::post('save_bank',['Middleware' => 'auth','uses' => 'BankAccountsController@save_bank']);

Route::get('delete_bank/{id}',['Middleware' => 'auth','uses' => 'BankAccountsController@delete_bank']);
