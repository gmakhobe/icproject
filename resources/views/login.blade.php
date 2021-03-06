<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">



        <!-- Fonts -->

        <!-- Fonts -->
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('assets1/css/loginPage.css') }}">




        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
        <!-- End Styles -->

        <!-- JS CDN Assets-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- End JSCDN Assets-->
    </head>
    <body >

    <div class="container">
      <div class="login">
         <div class="container" id="reg-container">

              <h1>Log in</h1>

              <label>Username/Email</label>
              <input  placeholder="JohnDoe" type="text" class="form-control" id="log-email">

              <label>Password</label>
              <input placeholder="*******" type="password" class="form-control" id="log-password"><br>
              <input type="checkbox"><span>Remember me</span>
              <a href="/forgotpassword">Forgot password?</a>
              <button id="loginBTN" type="submit" onclick="AppLogin()">Log in</button>


              <div class="clearfix"></div>
              <span class="copyright">&copy;PLUGIN</span>
         </div>
      </div>
      <div class="register">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Welcome back, to Plugin!</h2>
              <p>Enter your personal details and Continue journey with us</p>
              <button  onclick="location.href='/user/register'" >Register <i class="fas fa-arrow-circle-right"></i></button>

              <button  onclick="location.href='/'"  style="background-color:black">Home <i class="fas fa-arrow-circle-right"></i></button>
          </div>
      </div>
</div>



        <script  src="{{ asset('assets1/js/jquery.js') }}"> </script>
        <script   src="{{ asset('assets1/js/smoothscroll.js') }}"> </script>
        <script   src="{{ asset('assets1/css/templatemo-style.css') }}"> </script>
        <script  src="{{ asset('assets1/js/jquery.parallax.js') }}"> </script>
        <script   src="{{ asset('assets1/js/wow.min.js') }}"> </script>
        <script  src="{{ asset('assets1/js/custom.js') }}"> </script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    <!-- Register Modal -->

    <!-- End Register Modal -->
    <input type="hidden" class="form-control" id="index-csrf" value="{{ csrf_token() }}" hidden>
    <!-- Script -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Local Javascript-->
    <script src="{{ asset('js/index.request.js')}}"></script>
    <script>
        //AppNews();
        //loadQuotesFromServer();
    </script>
    <!-- End Script -->

    </body>
</html>
