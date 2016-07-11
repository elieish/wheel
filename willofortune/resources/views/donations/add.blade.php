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
                    <h2>Add Donation</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                       
                      {!! Form::open(['url'=>'save_donation','method'=>'post','class'=>'form-horizontal form-label-left']) !!}
                      
                      <div class="form-group @if ($errors->has('donation_amount')) has-error has-feedback @endif">

                          {!! Form::label('Donation amount', 'Donation amount', array('class' => 'col-md-3 control-label')) !!}  
                      
                      
                        <div class="col-md-6 col-sm-6 col-xs-12">

                           {!! Form::text('donation_amount',NULL,['class' =>'form-control','id' => 'donation_amount' ,'placeholder' => 'From R500 to R10 000']) !!}   
                          
                        </div>
                      </div>
                      
                               
                  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success">Add Donation</button>
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