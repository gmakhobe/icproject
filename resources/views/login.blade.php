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
         <div class="container">
              <h1>Log in</h1>
              <input  placeholder="john255" type="text" class="form-control" id="log-email">login
              <input placeholder="*******" type="password" class="form-control" id="log-password"><br>
              <input type="checkbox"><span>Remember me</span>
              <a href="/forgotpassword">Forgot password?</a>
              <button id="loginBTN"  onclick="AppLogin()">log in</button>

              <hr><p>Or Connect With</p><hr>
              <ul>
                  <li><i class="fab fa-facebook-f fa-2x"></i></li>
                  <li><i class="fab fa-twitter fa-2x"></i></li>
                  <li><i class="fab fa-github fa-2x"></i></li>
                  <li><i class="fab fa-linkedin-in fa-2x"></i></li>
              </ul>
              <div class="clearfix"></div>
              <span class="copyright">&copy;2019</span>
         </div>
      </div>
      <div class="register">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Hello,friend!</h2>
              <p>Enter your personal details and start journey with us</p>
              <button>Register <i class="fas fa-arrow-circle-right"></i></button>
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
