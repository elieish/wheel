<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\UserRegistration;
use App\Transaction;
use App\Donation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    
        $number_of_transactions    = Transaction::where('transaction_type_id','<>',5)->count();
      
        $number_of_gifts           = \DB::table('donations_allocation')
                                       
                                        ->where('receiver_id','=',\Auth::user()->id)->where('donation_status','<>',3)->count();


        $number_of_my_donations    = \DB::table('donations_allocation')
                                       
                                        ->where('donor_id','=',\Auth::user()->id)->count();

        $number_of_donations       = Donation::count();

        $number_of_users           = User::count();

                                       

        return view('home',compact('number_of_transactions','number_of_gifts','number_of_donations','number_of_my_donations','number_of_users'));
       
    }
}
