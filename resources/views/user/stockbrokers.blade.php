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
                    <h1 style="color:white">TRADING BROKERS</h1>

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
      <h1 style="text-shadow: 2px 2px purple;">OUR BEST BROKERS</h1>

    </hgroup>
    <style>
      * {
        box-sizing: border-box;
      }

      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        padding: 10px;
        height: 90px; /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      </style>


<div class="row">
  <div class="column" style="background-color:#660066; padding-left: 2%;">
      <h2>EXNESS</h2>
                </div>
  <div class="column" style="background-color:#3d3d29; padding-left: 2%; ">
    <h2>JUST2TRADE</h2>
  </div>
  <div class="column" style="background-color:#00134d; padding-left: 2%; ">
    <h2>BDSWISS</h2>
  </div>

</div>

<div class="row">
  <div class="column" style="background-color:#3d3d29; padding-left: 2%; ">
      <h2>FXCM</h2>
    </div>

    <div class="column" style="background-color:#00134d; padding-left: 2%; ">
      <h2>PLUS500</h2>
    </div>

    <div class="column" style="background-color:#660066; padding-left: 2%;">
      <h2>ETORO</h2>

                </div>
</div>

<div class="row">


    <div class="column" style="background-color:#660066; padding-left: 2%;">
      <h2>ICMARKETS</h2>
    </div>

    <div class="column" style="background-color:#3d3d29; padding-left: 2%; ">
      <h2>INTERACTIVE BROKERS</h2>
    </div>

  <div class="column" style="background-color:#00134d; padding-left: 2%; ">
      <h2>ANALYSIS</h2>
    </div>

</div>


    <!-- <ul  class="small-block-grid-2 medium-block-grid-3 flip-cards">

      <li id="investment" ontouchstart="this.classList.toggle('hover');">
        <div  class="large button card-front">
          <a href="#">EMPOWERMENT</a>
          <i class="fa fa-language card-icon"></i>
        </div>
        <div class="panel card-back">
          <i class="fa fa-code card-icon"></i>
          <div class="hub-info">
            <p style="padding-top: 5%; font-size: 18px;">We help build Small
              Companies And
              Businesses into leading
              brand and Global
              phermonanols that
              empower peaople and
              enrich the communities.</p>
          </div>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="http://www.aaronsnowberger.com">ANALYSIS</a>
          <i class="fa fa-pencil-square-o card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-pencil-square-o card-icon"></i>
          <div class="hub-info">
            <p style=" padding-top: 5%; font-size: 18px;">PLUGIN offfers a depth
              Analysis tool that helps 
              investors and traders
              Make Affirmative
              decisions before making
              an investment</p>
          </div>
        </div>
      </li>

      <li ontouchstart="this.classList.toggle('hover');">
        <div class="large button card-front">
          <a href="">INVESTING</a>
          <i class="fa fa-paper-plane-o card-icon"></i>
        </div>

        <div class="panel card-back">
          <i class="fa fa-paper-plane-o card-icon"></i>
          <div class="hub-info">
            <p style="padding-top: 5%; font-size: 18px;">We are a strong advocate
              for financial freedom, and
              one of our tools we intend
              to use to achieve our goal
              is help to help spread
              investing solutions
              amongst both ordinary
              and experts investors</p>
          </div>
        </div>
      </li>

    </ul>
  </div>
  </div>

</div> 
</section> -->



<div class="container-fluid main-content text-align-center bg-color-black text-color-white">
        <h2 class="main-content-heading text-color-white">LEARN ABOUT STOCK BROKERS</h2>
        <p class="aboutus-paragraph">Profitable investing requires
          you use a brokerage service that aligns with your
          investing goals, educational needs and learning style. Especially for new investors,
          selecting the best online stock broker that fits your needs can mean the difference
          between an exciting new income stream and frustrating disappointment.
          While there’s no sure
          fire way to guarantee investment returns, there is a way to set
          yourself up for success by selecting the online brokerage that best suits your needs.
          In this guide, we’ll break down everything you should look for in your
          ideal brokerage, from the obvious (like whether or not the platform allows you to
          trade the securities you’re interested in) to the not so obvious (like how easy it is to
          get support from an actual human when you need it)</p>
    </div>

    <div class="container-fluid main-content text-align-center bg-color-white text-color-black">
      <h2 class="main-content-heading text-color-black">STOCK BROKERS</h2>
      <ul>
        <li class="main-content-heading text-color-black" style="font-size: 25px;">Access to the financial markets is easy and inexpensive thanks to a variety of
          discount brokers that operate through online platforms.</li>
        <li class="main-content-heading text-color-black" style="font-size: 25px;">Different online brokers are optimized for a different type of client from long term
          buy and hold novices to active and sophisticated day traders.</li>
        <li class="main-content-heading text-color-black" style="font-size: 25px;">Choosing the right online broker requires some due diligence to get the most for
          your money. Follow the steps and advice in this article to choose right.</li>
      </ul>
    </div>
</div>

<div class="container-fluid main-content text-align-center bg-color-black text-color-white">
        <h2 class="main-content-heading text-color-white">STOCK BROKERS ARTICLES</h2>
    </div>


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
