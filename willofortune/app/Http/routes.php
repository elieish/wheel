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







/*
|---------------------s-----------------------------------------------------
| TRANSACTIONS Routes
|--------------------------------------------------------------------------
|
| 
*/


Route::get('add-to-payout-queue/{username}',['Middleware' => 'cors','uses' => 'TransactionsController@add_to_payout_queue']);
Route::get('transactions-list',['Middleware' => 'cors','uses' => 'TransactionsController@transactions_list']);
Route::post('save_transaction_payout_amount',['Middleware' => 'cors','uses' => 'TransactionsController@save_transaction_payout_amount']);
Route::get('start-transaction-payout/{transaction_id}',['Middleware' => 'cors','uses' => 'TransactionsController@start_transaction_payout']);
Route::get('gifts-list/{user_id}',['Middleware' => 'cors','uses' => 'TransactionsController@gifts_list']);
Route::get('my-donations-list/{user_id}',['Middleware' => 'cors','uses' => 'TransactionsController@my_donations_list']);
Route::get('start-transaction',['Middleware' => 'cors','uses' => 'TransactionsController@start_transaction']);


/*
|---------------------s-----------------------------------------------------
| DONATIONS Routes
|--------------------------------------------------------------------------
|
| 
*/


Route::get('donations-details',['Middleware' => 'cors','uses' => 'DonationsController@index']);
Route::get('donations-list',['Middleware' => 'cors','uses' => 'DonationsController@donations_list']);
Route::get('add-donation',['Middleware' => 'cors','uses' => 'DonationsController@add_donation']);
Route::post('save_donation',['Middleware' => 'cors','uses' => 'DonationsController@save_donation']);
Route::get('all-donations',['Middleware' => 'cors','uses' => 'DonationsController@all_donations']);
Route::get('confirm-donor-payment/{id}',['Middleware' => 'cors','uses' => 'DonationsController@confirm_donor_payment']);


/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
|
| 
*/

Route::get('list-users', ['Middleware' => 'auth', function() {

	return view('users.list');
}]);

Route::get('users-list',['Middleware' => 'auth','uses' => 'UsersController@index']);

Route::get('send-sms',['Middleware' => 'auth','uses' => 'UsersController@send_sms']);




/*



