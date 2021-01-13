<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $Title }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="templatemo">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Fonts -->

        <!-- Fonts -->
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets1/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/css/templatemo-style.css') }}">


        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
        <!-- End Styles -->

        <!-- JS CDN Assets-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- End JSCDN Assets-->
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div  class="container">

          <!-- navbar header -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">Plugin</a>
          </div>
     </div>
    </div>
<!-- Home Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="home-img" style="padding-top: 20%; padding-left: 40%;">    
                    <h1 style="color:white">INVESTMENTS</h1>
                    <h3 style="color:white"><i>Open New Doors In Your Financial Life</i></h3>

                    </div>
               </div>

               <!-- <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white">Welcome to  <strong style="color:white" >Plugin</strong> </h1>
                              <p class="wow fadeInUp" data-wow-delay="0.9s"> <i>A HYBRID SOFTWARE </i></p>
                         </div>
                    </div>
               </div> -->


          </div>
     </div>
</section>

<section class="hero-unit">

<div class="row">
  <div class="large-12 columns">
    <hgroup style="color:black;padding-left:40%">
      <h1 style="text-shadow: 2px 2px purple;">System Features</h1>

    </hgroup>


    <ul  class="small-block-grid-2 medium-block-grid-3 flip-cards">

      <li id="investment" ontouchstart="this.classList.toggle('hover');">
        <div  class="large button card-front">
          <a href="#">Investments</a>
          <i class="fa fa-code card-icon "></i>
        </div>
        <div class="panel card-back">
          <i class="fa fa-code card-icon"></i>
          <div class="hub-info">
            <a href="#">JKLCode.com</a>
            <p>Find coding gists, cheatsheets, plugins, themes, resources, and tutorials.</p>
          </div>
          <small class="clear">Updated TTH.</small>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="http://www.aaronsnowberger.com">Raw-Mate</a>
          <i class="fa fa-pencil-square-o card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-pencil-square-o card-icon"></i>
          <div class="hub-info">
            <a href="http://www.aaronsnowberger.com">AaronSnowberger.com</a>
            <p>Take a look at my graphic design portfolio and contact me for design work.</p>
          </div>
          <small class="clear">Updated Saturdays.</small>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="">Store Room</a>
          <i class="fa fa-paper-plane-o card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-paper-plane-o card-icon"></i>
          <div class="hub-info">
            <a href="">Udemy.com</a>
            <p>Join classes about Computers, Technology, Coding, Design, and Language Learning.</p>
          </div>
          <small class="clear">Updated Mondays.</small>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="">News Feed</a>
          <i class="fa fa-map-o card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-map-o card-icon"></i>
          <div class="hub-info">
            <a href="">KeysToAGoodLife.com</a>
            <p>Find resources about business, family, exercise, and other various topics.</p>
          </div>
          <small class="clear">Updated monthly.</small>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="http://www.keytokorean.com">Create</a>
          <i class="fa fa-language card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-language card-icon"></i>
          <div class="hub-info">
            <a href="http://www.keytokorean.com">KeyToKorean.com</a>
            <p>Take your Korean from "foreign" to fluent with vocab lists and grammar guides.</p>
          </div>
          <small class="clear">Updated MWF.</small>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="http://www.aicfchurch.org">Ideas</a>
          <i class="fa fa-users card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-users card-icon"></i>
          <div class="hub-info">
            <a href="http://www.aicfchurch.org">AICFChurch.org</a>
            <p>Listen to sermon podcasts or download church graphic design resources.</p>
          </div>
          <small class="clear">Updated the 4th Sunday.</small>
        </div>
      </li>

    </ul>
  </div>

  <div class="large-12 columns">
    <div class="small-12 small-centered medium-6 medium-centered large-3 large-centered columns clients">
      <a href="#">

        <p class="text-center">
          <span class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-angle-right fa-inverse fa-stack-1x"></i>
                  </span>
        </p>
      </a>
    </div>
    <!-- end .clients -->
  </div>

</div>
</section>



<div class="container-fluid main-content text-align-center bg-color-black text-color-white">
        <h2 class="main-content-heading text-color-white">ABOUT US</h2>

        <p class="aboutus-paragraph">We are a new global plartform with the aim of connecting investors with small business together with Markets!</p>

    </div>

<!-- Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Contact Us</h1>
                              <p class="color-white"></p>
                         </div>

                         <div id="contact-form">

                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="comments" rows="5" class="form-control" id="comments" placeholder="Write your comment..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="ContactFormSubmit" value="Send">
                                   </div>

                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white">Visit my office</h3>
                              <p>Johannesburg, RSA</p>
                         </div>

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p>Contact us and we'll get back to you within 24 hours.</p>
                              <p><i class="fa fa-phone"></i>+27 000000000</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@company.co">info@plugin.co.za</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">plugin.co</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>
<!-- Footer Section -->



<!-- SCRIPTS -->
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

    <footer>
        <div class="container-fluid main-content text-align-center bg-color-black text-color-white">
            <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
        <h2 class="main-content-heading text-color-white">Copyright &copy; {{ date('Y') }}</h2>
        </div>
    </footer>



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
