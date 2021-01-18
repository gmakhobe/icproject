<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $Title }} - {{ $Name }}</title>
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="{{ asset('assets1/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/Side-By-Side-Section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/Circle-Nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets1/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/homepagetiles.css') }}">

</head>

<body>
    <!-- Start: SectionContainerRowColumn -->
    <section></section>
    <!-- End: SectionContainerRowColumn-->
    <nav class="navbar navbar-light navbar-expand-md sticky-top bounce animated navigation-clean-button"
        style="height: 80px;background: linear-gradient(135deg,#9526a9 5% ,#23212f 95%); color: #ffffff;">
        <div class="container-fluid">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div>

                <i class="fab fa-laravel"></i>
                <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">
                    Dashboard 
                </span>

                <!--
                    <i class="fab fa-laravel"></i>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">Icons: 365  $FollowingCount --></span><br>
                    <!-- <i class="fab fa-laravel"></i>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">Allies: 544 <!-- $FollowerCount --></span>
            </div>

            <div style="padding-top: 75px; padding-left: 200px;">
                <form class="search-container">
                    <input type="text" id="search-bar" placeholder="What can we help you with today?">
                    <a href="#"><img class="search-icon"
                            src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
                </form>
            </div>

            <div>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;&nbsp;&nbsp;&nbsp; Our Services |</span>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;About Us |</span>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Overview |</span>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Partners</span>
            </div>
           
           
            <div class="collapse navbar-collapse" id="navcol-1"></div>
            <div class="dropdown no-arrow" style="color: rgb(186,40,180);"><a class="dropdown-toggle"
                    data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(172,52,183);">
                    <!-- <span class="d-none d-lg-inline mr-2 text-gray-600 small" style="color: rgb(201,55,204);"><strong>{{ $NameAndSurname }}</strong></span> -->
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">{{ $NameAndSurname }}
                        &nbsp;</span></div>
            @if ($IsBase64)
                <img class="border rounded-circle img-profile" src="{{ $ProfilePicture }}">
            @else
                <i class="fa fa-user"></i>
                <!-- <img style="width:60px;height:60px;" class="border rounded-circle img-profile" src="{{ asset('images/user-icon.svg') }}"> -->
            @endif
            </a>
            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                <a class="dropdown-item" role="presentation" href="/user/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    &nbsp;Profile
                </a>
                <a class="dropdown-item" role="presentation" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    &nbsp;Portfolio
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" role="presentation" href="/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    &nbsp;Logout
                </a>
            </div>
        </div>

        </div>
    </nav>

<section class="hero-unit">

  <div class="row" style="padding-left: 5%;">
    <div class="large-12 columns">
      <hgroup>
        <h1>Welcome Back, {{ $NameAndSurname }}</h>
        <h3>Just keep learning. Make new opportunities.</h3>
      </hgroup>

    <div style="padding-left: 30%;">
        <ul class="small-block-grid-2 medium-block-grid-3 flip-cards" >

            <li>
                <div class="large button card-front">
                    <a href="/user/investment">INVESTMENT</a>
                    <i class="fa fa-chart-line card-icon"></i>
                </i>
                </div>
            </li>

            <li>
                <div class="large button card-front">
                    <a href="/user/rawmate">RAW-MATE</a>
                    <i class="fa fa-pencil-square-o card-icon"></i>
                </div>
            </li>

            <li>
                <div class="large button card-front">
                    <a href="/user/storeroom">STORE-ROOM</a>
                    <i class="fa fa-paper-plane-o card-icon"></i>
                </div>
            </li>

            <li>
                <div class="large button card-front">
                    <a href="/user/new">NEWS FEED</a>
                    <i class="fa fa-map-o card-icon"></i>
                </div>
            </li>

            <li>
                <div class="large button card-front">
                    <a href="/user/create">CREATE</a>
                    <i class="fa fa-language card-icon"></i>
                </div>
            </li>

            <li>
                <div class="large button card-front">
                    <a href="/user/profile">PROFILE</a>
                    <i class="fa fa-users card-icon"></i>
                </div>
            </li>

        </ul>
    </div>
   
    </div>
      <!-- end .clients -->
    </div>

  </div>
</section>

    <footer>
        <nav style="height: 80px;background: linear-gradient(135deg,#9526a9 5% ,#23212f 95%); color: #ffffff;">            
                <div style="padding-top: 1%; padding-left: 25%;">
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;&nbsp;&nbsp;&nbsp; Legal Aspects |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Disclosure |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Privacy |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Cookie Preference | </span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Contacts </span>
                </div>
            </nav>



    </footer>
    <!-- End: Footer with social media icons -->
    <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets1/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets1/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets1/js/Circle-Nav.js') }}"></script>
</body>

</html>
