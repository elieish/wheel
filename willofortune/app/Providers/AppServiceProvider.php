<?php

namespace App\Providers;
use App\BankType;
use App\User;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
         if(\Schema::hasTable('bank_types')) {
            
            $bank_types           = BankType::orderBy('description','ASC')->get();
            $select_bank_types    = array();
            $select_bank_types[0] = 'Select Bank';

            foreach ($bank_types as $bank_type) {

                $select_bank_types[$bank_type->id] = $bank_type->description;
                
            }



            \View::share('selectBankTypes',$select_bank_types);

        }

        if(\Schema::hasTable('users')) {
            
           
            $all_users = User::count();

            \View::share('all_users',$all_users);

        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
