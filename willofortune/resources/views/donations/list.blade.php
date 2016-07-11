@extends('layouts.master')

@section('content')

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>

            <div class="row">
              
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Donations Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table id="donations-table" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
            
                            <th class="column-title">Donation Amount </th>
                            <th class="column-title">Donation Returns </th>
                            <th class="column-title">Created Date </th>
                          
                          
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                      
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('custom_stript')


<script>


var donations_table = function() {
    "use strict";

    if ($('#donations-table').length !== 0) {
        $('#donations-table').DataTable({
            dom: '<"toolbar">',
            responsive: true,
            autoFill: true,
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           
            sAjaxSource : "donations-list",
            columns :[
               
                {data: 'donation_amount', name: 'donations.donation_amount'},
                {data: function(data){

                    var return_amount = (data.returns_percentage / 100) * data.donation_amount;
                    return_amount     = parseInt(return_amount) + parseInt(data.donation_amount);

                    return return_amount;

                }},
               
                {data: 'actions',  name: 'actions'}

            ]
        });
    }
};


/* Application Controller
------------------------------------------------ */
var PageDemo = function () {
	"use strict";

  var buttonVar= "<a href='add-donation' class='btn btn-inverse m-b-5'><i class='fa fa-plus fa-1x pull-left'> Add New </i></a>";
  donations_table();

  $("div.toolbar").html(buttonVar);

}();

</script>

@endsection