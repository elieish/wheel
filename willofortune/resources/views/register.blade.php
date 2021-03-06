<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Curiosity pays | </title>

   
    <!-- Bootstrap -->
    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">
  </head>


   <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
 

        <div id="register" class="animate form login_form">
          <section class="login_content">
            <form action="{{ url('/register') }}" method="POST" name="register_form" >

               {{ csrf_field() }}
          
              <h1>Create Account</h1>
              <div>


                <input type="text" class="form-control {{ $errors->has('username') ? ' parsley-error' : '' }}" placeholder="Username" required=""  name="username" value="{{ old('username') }}"/>
              </div>
              <div>
                <input type="text" class="form-control {{ $errors->has('cellphone') ? ' parsley-error' : '' }}" placeholder="Cellphone eg. 082 527 0000" required=""  name="cellphone" value="{{ old('cellphone') }}" />
              </div>

              <div>
                <input type="text" class="form-control {{ $errors->has('first_name') ? ' parsley-error' : '' }}" placeholder="First Name" required=""  name="first_name" value="{{ old('first_name') }}"/>
              </div>

              <div>
                <input type="text" class="form-control {{ $errors->has('last_name') ? ' parsley-error' : '' }}" placeholder="Last Name" required=""  name="last_name" value="{{ old('last_name') }}"/>
              </div>

              <div>
                <input type="email" class="form-control {{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="Email" required="" name="email" value="{{ old('email') }}"/>
              </div>
              <div>
                <input type="password" class="form-control {{ $errors->has('password') ? ' parsley-error' : '' }}" placeholder="Password" required="" name="password" value="{{ old('password') }}"/>
              </div>

               <div>
                <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' parsley-error' : '' }}" placeholder="Confirm Password" required="" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{ url('/') }}" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Curiosity pays!</h1>
                  <p>©2016 All Rights Reserved. Curiosity pays! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>

</html>