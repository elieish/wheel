@extends('layouts.master')

@section('content')

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

              <div class="row top_tiles">
                  <ul class="nav">

                      <li class="active">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="icon"><i class="fa fa-money"></i></div>
                                <div class="count"><a href="#nav-pills-tab-1" data-toggle="tab">{{ $number_of_gifts }}</a></div>
                                <h3>My Gifts</h3>
                                <p>Money received from community.</p>
                              </div>
                            </div>
                      </li>
                      <li>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="icon"><i class="fa fa-money"></i></div>
                                <div class="count"><a href="#nav-pills-tab-2" data-toggle="tab">{{ $number_of_my_donations }}</a></div>
                                <h3>My Donations</h3>
                                <p>Money donated to the community.</p>
                              </div>
                            </div>
                      </li>
                     

                     @if(\Auth::user()->role_id == 1 )
                     <li>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <div class="count"><a href="#nav-pills-tab-6" data-toggle="tab">{{ $number_of_users }}</a></div>
                                <h3>All Users</h3>
                                <p>Community Users</p>
                              </div>
                            </div>
                      </li>
                     <li>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="icon"><i class="fa fa-globe"></i></div>
                                <div class="count"><a href="#nav-pills-tab-1" data-toggle="tab">{{ $number_of_donations }}</a></div>
                                <h3>All Donations</h3>
                                <p>Community Transactions</p>
                              </div>
                            </div>
                      </li>
                      <li>

                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                <div class="icon"><i class="fa fa-globe"></i></div>
                                <div class="count"><a href="#nav-pills-tab-3" data-toggle="tab">{{ $number_of_transactions }}</a></div>
                                <h3>All Transactions</h3>
                                <p>Community Transactions</p>
                              </div>
                            </div>
                      </li>

                      @endif
                    </ul>
                    
                    
            </div>


            <div class="tab-content panel">
                          
                         
                        @if(\Auth::user()->role_id == 1)

                        <div class="tab-pane fade" id="nav-pills-tab-3">
                            <a href="start-transaction" class="btn btn-success btn-block">Start Transaction</a>
                            <h4>Transactions</h4>

                             <!-- begin panel -->
                              <div class="panel pagination-inverse m-b-0 clearfix">
                                  <table id="transactions-table" data-order='[[0,"desc"]]' class="table-responsive table table-bordered table-hover">
                                      <thead>
                                          <tr class="inverse">
                                              <th>Transaction Id</th>
                                              <th>Username</th>
                                              <th>First Name</th>
                                              <th>Surname</th>
                                              <th>Primary Contact</th>
                                              <th>Status</th>
                                              <th>Amount</th>
                                              <th>Payout Date</th>
                                              <th data-sorting="disabled"></th>
                                          </tr>
                                      </thead>
                                     
                                  </table>
                              </div>
                              <!-- end panel -->
                           
                        </div>


                        <div class="tab-pane fade" id="nav-pills-tab-6">
                            
                            <h4>Users</h4>

                             <!-- begin panel -->
                              <div class="panel pagination-inverse m-b-0 clearfix">
                                  <table id="users-table" data-order='[[0,"desc"]]' class="table-responsive table table-bordered table-hover">
                                      <thead>
                                          <tr class="inverse">
                                             
                                              <th>Username</th>
                                              <th>First Name</th>
                                              <th>Surname</th>
                                              <th>Primary Contact</th>
                                              <th>Action</th>
                                           
                                          
                                          </tr>
                                      </thead>
                                     
                                  </table>
                              </div>
                              <!-- end panel -->
                           
                        </div>
                        @endif

                        <div class="tab-pane active in" id="nav-pills-tab-1">
                                <h4>My Gifts</h4>

                                 <!-- begin panel -->
                                  <div class="">

                                      <table id="gifts-table" data-order='[[0,"desc"]]' class="table table-striped">
                                          <thead>
                                              <tr class="inverse">
                                                  <th>Created at</th>
                                                  <th>Donor Username</th>
                                                  <th>Donor First Name</th>
                                                  <th>Donor Last Name</th>
                                                  <th>Donor Email Address</th>
                                                  <th>Donor Contact number</th>
                                                  <th>Donor Amount</th>                                                       
                                                  <th>Status</th>
                                                  <th data-sorting="disabled"></th>
                                              </tr>
                                          </thead>
                                         
                                      </table>
                                  </div>
                                  <!-- end panel -->      
                          </div>

                            @if(\Auth::user()->role_id == 1)


                             <div class="tab-pane fade" id="nav-pills-tab-">
                                <h4>Donations</h4>

                                 <!-- begin panel -->
                                  <div class="panel pagination-inverse m-b-0 clearfix">
                                      <table id="donations-table" class="table-responsive table table-bordered table-hover">
                                          <thead>
                                              <tr class="inverse">
                                                  <th>Created at</th>
                                                  <th>Donor Username</th>
                                                  <th>Donor First Name</th>
                                                  <th>Donor Surname</th>
                                                  <th>Donor Contact number</th>
                                                  <th>Donated Amount</th>                                                 
                                                  <th>Outstanding Amount</th>       
                                                  <th data-sorting="disabled"></th>
                                              </tr>
                                          </thead>
                                         
                                      </table>
                                  </div>
                                  <!-- end panel -->

                               
                            </div>

                            @endif

                             <div class="tab-pane fade" id="nav-pills-tab-2">
                                <h4>My Donations</h4>

                                 <!-- begin panel -->
                                  <div class="panel pagination-inverse m-b-0 clearfix">
                                      <table id="my-donations-table"  class="table-responsive table table-bordered table-hover">
                                          <thead>
                                              <tr class="inverse">
                                                  <th>Banking Details</th>
                                                  <th>Username</th>
                                                  <th>First Name</th>
                                                  <th>Last Name</th>
                                                  <th>Email Address</th>
                                                  <th>Contact number</th>
                                                  <th>Amount</th>                                                       
                                                  <th>Status</th>
                                                  <th data-sorting="disabled"></th>
                                              </tr>
                                          </thead>
                                         
                                      </table>
                                  </div>
                                  <!-- end panel -->
                              </div>


                             <!-- #modal-dialog -->
                          <div class="modal fade modalBank" id="modalBank">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Banking Details</h4>
                                        </div>
                                        <div class="modal-body">

                                            <!-- begin panel -->
                                            <div class="panel pagination-inverse m-b-0 clearfix">
                                                <table id="sponsors-banking-details-table" data-order='[[0,"asc"]]' class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr class="inverse">
                                                          <th>Bank Name</th>
                                                          <th>Bank Holder</th>
                                                          <th>Bank Account</th>
                                                          <th>Branch Code</th>
                                                          <th>Reference</th>
                                                         
                                                        </tr>
                                                    </thead>
                                                   
                                                </table>
                                            </div>
                                            <!-- end panel -->

                                          
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="modal fade modalAmount" id="modalAmount">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add Payout Amount</h4>
                                        </div>
                                        <div class="modal-body">

                                          {!! Form::open(['url'=>'save_transaction_payout_amount','method'=>'post','class'=>'form-horizontal','id' => 'transaction_amount_form']) !!}
                                        
                                            {!! Form::hidden('transactionID',NULL,['id' => 'transactionID']) !!}
                                          
                                            <div class="form-group m-b-10 @if ($errors->has('payout_amount')) has-error has-feedback @endif">
                                                {!! Form::label('Transaction Amount', 'Transaction Amount', array('class' => 'col-md-3 control-label')) !!}  
                                                
                                                <div class="col-md-7">
                                                    {!! Form::text('transaction_amount',NULL,['class' =>'form-control','id' => 'transaction_amount' ]) !!}   
                                                </div>
                                            </div>
                                         

                                             <div class="form-group m-b-10">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-7">
                                                    <a id="submit_transaction_payout_amount" class="btn btn-success">Add Amount</a>
                                                </div>
                                            </div>

                                      
            
                                          {!! Form::close() !!}

                                         
                                          
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- end tab-content -->

         



          </div>
        </div>
        <!-- /page content <-->


@endsection

@section('custom_stript')
<script>

 function launchAmountModal(transaction_id){



    $("#transaction_amount_form #transactionID").val(transaction_id);
    $(".modalAmount").modal('show');

}


 $("#submit_transaction_payout_amount").on("click",function(){


            
          var myForm   = $("#transaction_amount_form")[0];
          var formData = new FormData(myForm);
          var token    = $('input[name="_token"]').val();


            $.ajax({
            type    :"POST",
            data    : formData,
            contentType: false,
            processData: false,
            headers : { 'X-CSRF-Token': token },
            url     :"{!! url('/save_transaction_payout_amount')!!}",
            beforeSend : function() {
                

            },
            success : function(data){


              if (data) {

                $('#modalAmount').modal('toggle');
                $('#transaction_amount_form')[0].reset();
                location.reload();


              }


            },
          error: function(data){

             
              

              alert("Wrong Amount entered");
             

          }

        })

});



var user_id = "{!! \Auth::user()->id !!}"; 

var transactionsTable = function() {
    "use strict";

    var token =  $('meta[name="csrf-token"]').attr('content');
  

    if ($('#transactions-table').length !== 0) {
        $('#transactions-table').DataTable({
            dom: 'rfrtip',
           
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': token
            },
           
            sAjaxSource : "transactions-list/",
            columns :[
                {data: 'id', name: 'transactions.id'},
                {data: 'username', name: 'users.username'},
                {data: 'first_name', name: 'users.first_name'},
                {data: 'last_name', name: 'users.last_name'},
                {data: 'primary_contact', name: 'contacts.primary_contact'},
                {data: 'description', name: 'transaction_types.description'},
               

                {data : function(data){

                    if (data.description == 'Pending Payout' && data.transaction_amount == false) {

                       
                        return "<a  id='amountModal' class='btn btn-xs btn-block btn-success' onClick='launchAmountModal(" + data.id + ");'>Add Amount</a>";              

                    } else {

                        return "R" + data.transaction_amount;

                    }
                   
                }
                },
                {data: 'transaction_payout_date', name: 'transactions.transactions_payout_date'},
                {data: 'actions',  name: 'actions'}

            ]
        });
    }
};


var giftsTable = function(user_id) {
    "use strict";

    if ($('#gifts-table').length !== 0) {
        $('#gifts-table').DataTable({
            dom: 'rfrtip',
           
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           
            sAjaxSource : "gifts-list/" + user_id,
            columns :[
                {data: 'created_at', name: 'transactions_payouts.created_at'},
                {data: 'username', name: 'users.username'},
                {data: 'first_name', name: 'users.username'},
                {data: 'last_name', name: 'users.last_name'},
                {data: 'email', name: 'users.email'},
                {data: 'primary_contact', name: 'contacts.primary_contact'},
                {data : function(data){
                
                    return "R" + data.donation_amount;
                            
                }
                },
                {data : function(data) {

                    if (data.donation_status == 1) {

                       return "<button class='btn btn-xs btn-danger btn-rounded m-b-5' type='button'>Not Paid</button>" ;
                    }

                    if (data.donation_status == 3) {

                       return "<button class='btn btn-xs btn-success btn-rounded m-b-5' type='button'> Paid</button>" ;
                    }

                    

                }},
                {data: 'actions',  name: 'actions'}

            ]
        });
    }
};


var usersTable = function() {
    "use strict";

    if ($('#users-table').length !== 0) {
        $('#users-table').DataTable({
            dom: 'rfrtip',
           
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           
            sAjaxSource : "users-list",
            columns :[
               
                {data: 'username', name: 'users.username'},
                {data: 'first_name', name: 'users.username'},
                {data: 'last_name', name: 'users.last_name'},
                {data: 'primary_contact', name: 'contacts.primary_contact'},
                {data: 'actions',  name: 'actions'}

            ]
        });
    }
};

var myDonationsTable = function(user_id) {
    "use strict";

    if ($('#my-donations-table').length !== 0) {
        $('#my-donations-table').DataTable({
            dom: 'rfrtip',
           
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           
            sAjaxSource : "my-donations-list/" + user_id,
            columns :[
                {data: 'actions',  name: 'actions'},
                {data: 'username', name: 'users.username'},
                {data: 'first_name', name: 'users.username'},
                {data: 'last_name', name: 'users.last_name'},
                {data: 'email', name: 'users.email'},
                {data: 'primary_contact', name: 'contacts.primary_contact'},
                {data : function(data){
                
                    return "R" + data.donation_amount;
                            
                }
                },
                {data : function(data) {

                    if (data.donation_status == 1) {

                       return "<button class='btn btn-xs btn-danger btn-rounded m-b-5' type='button'>Not Paid</button>" ;
                    }

                    if (data.donation_status == 3) {

                       return "<button class='btn btn-xs btn-success btn-rounded m-b-5' type='button'>Paid</button>" ;
                    }

                    

                }}

            ]
        });
    }
};

var donationsTable = function() {
    "use strict";

    if ($('#donations-table').length !== 0) {
        $('#donations-table').DataTable({
            dom: 'rfrtip',
           
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           
            sAjaxSource : "all-donations/",
            columns :[
                {data: 'created_at', name: 'donations.created_at'},
                {data: 'username', name: 'users.username'},
                {data: 'first_name', name: 'users.first_name'},
                {data: 'last_name', name: 'users.last_name'},
                {data: 'primary_contact', name: 'contacts.primary_contact'},
                {data : function(data){

                    return "R " + data.donation_amount;

                   
                }
                },
                {data : function(data){

                    var donated_amount = data.donated_amount;
                    if(!donated_amount) {

                         donated_amount = 0;
                    }

                    return "R " + (parseInt(data.donation_amount) - parseInt(donated_amount)) + " " +data.description;

                   
                }
                },
                {data: 'actions',  name: 'actions'}

            ]
        });
    }
};


var PageDemo = function () {
  "use strict";

   giftsTable(user_id);
   myDonationsTable(user_id);
   donationsTable();
   transactionsTable();
   usersTable();



}();






</script>

@endsection





  