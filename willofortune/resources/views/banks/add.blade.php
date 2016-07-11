@extends('layouts.master')


@section('content')


  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Banking Details</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                       {!! Form::open(['url'=>'save_bank','method'=>'post','class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">

                          {!! Form::label('Bank Name', 'Bank Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                      
                      
                        <div class="col-md-6 col-sm-6 col-xs-12">

                           {!! Form::select('bank_type_id',$selectBankTypes,0,array('class' => 'form-control col-md-7 col-xs-12','id' => 'bank_type_id')) !!}
                          
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('Bank Holder Names', 'Bank Holder Names', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}  
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('account_holder',NULL,['class' =>'form-control','id' => 'account_holder' ]) !!}  
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('Bank Account Number', 'Bank Account Number', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}   
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('account_number',NULL,['class' =>'form-control','id' => 'account_number' ]) !!} 
                        </div>
                      </div>
                     
                      <div class="form-group">
                        {!! Form::label('Bank Branch Code', 'Bank Branch Code', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}  
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('branch_code',NULL,['class' =>'form-control','id' => 'branch_code' ]) !!} 
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success">Add Account</button>
                        </div>
                      </div>

                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>

     

        

       

          </div>
        </div>
        <!-- /page content -->



@endsection