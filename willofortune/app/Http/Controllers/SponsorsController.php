<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Facades\Datatables;

use App\User;

use App\UserRegistration;


class SponsorsController extends Controller
{


	public function sponsors_list($user_id)
    {

      
        $sponsors_users = \DB::table('users_registrations')
                            ->join('contacts','contacts.user_id','=','users_registrations.sponsor_user_id')
                            ->join('users','users.id','=','users_registrations.sponsor_user_id')
                            ->join('sponsor_types','sponsor_types.id','=','users_registrations.sponsor_type_id')
                            ->where('users_registrations.sponsored_user_id','=',$user_id)
        					->select(
        						\DB::raw(
        							"
        							 `users`.id,
        							 `users`.username,
        							 `users`.first_name,
        							 `users`.last_name,
									 `users`.email,
                                    `users`.referred_by_id,
                                    `contacts`.`primary_contact`,
                                    `users_registrations`.`amount_due`,
                                    `users_registrations`.`paid`,
                                    `sponsor_types`.`description` as sponsor_type

        							"

        					)
        					);

                         

        return Datatables::of($sponsors_users)
                            ->addColumn('actions','<a class="btn btn-xs  btn-success" onClick="launchBankModal({{$id}});">View</a>')
                            ->make(true);


    }

    public function sponsored_list($user_id)
    {

    
        $sponsored_users = \DB::table('users_registrations')
                            ->join('contacts','contacts.user_id','=','users_registrations.sponsored_user_id')
                            ->join('sponsor_types','sponsor_types.id','=','users_registrations.sponsor_type_id')  
                            ->join('users','users.id','=','users_registrations.sponsored_user_id')
                            ->join('user_registration_statuses','user_registration_statuses.id','=','users.user_registration_statuses_id')
                            ->where('users_registrations.sponsor_user_id','=',$user_id)
                          
                            ->select(
                                \DB::raw(
                                    "
                                    `users`.created_at,
                                    `users`.id,
                                    `users`.username,
                                    `users`.first_name,
                                    `users`.last_name,
                                    `users`.email,
                                    `users`.role_id,
                                    `users`.referred_by_id,
                                    `contacts`.`primary_contact`,
                                    `users_registrations`.`amount_due`,
                                    `users_registrations`.`paid`,
                                    `users_registrations`.`id` as 'reg',
                                    `user_registration_statuses`.`description`,
                                    `sponsor_types`.`description` as sponsor_type
                                    
                                     
                                    "

                            )
                            );
        return Datatables::of($sponsored_users)
                            ->addColumn('actions','
                                                  @if($description == "Pending activation" && $paid == 0)
                                                    <a href="confirm-registration-fees/{{ $username }}/{{ $reg }}" class="btn btn-xs btn-success active">
                                                        Confirm 
                                                    </a>
                                                  @endif
                                                  @if($description == "Activation Complete" && (\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2))

                                                    <a href="add-to-payout-queue/{{ $username }}/{{ $reg }}" class="btn btn-success m-r-5 m-b-5 active">
                                                        Add to Payout
                                                    </a>
                                                  @endif
                                                ')
                            ->make(true);




    }

    public function confirm_payment($username) {

        
        $user                                = User::where('username',$username)->first();
        $user->user_registration_statuses_id = 3;
        $user->save();

    
       
        //SMS NEED TO BE SEND


        return redirect('home');



    }


  
     
}
