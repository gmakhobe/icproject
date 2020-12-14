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
</head>

<body>
    <!-- Start: SectionContainerRowColumn -->
    <section></section>
    <!-- End: SectionContainerRowColumn-->
    <nav class="navbar navbar-light navbar-expand-md sticky-top bounce animated navigation-clean-button" style="height: 80px;background: linear-gradient(135deg,#9526a9 5% ,#23212f 95%); color: #ffffff;">
        <div class="container-fluid">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div>
                    <i class="fab fa-laravel"></i>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">Following: 365 <!-- $FollowingCount --></span><br>
                    <i class="fab fa-laravel"></i>
                    <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">Followers: 544 <!-- $FollowerCount --></span>
            </div>

            <div style="padding-top: 75px; padding-left: 200px;">
                <form class="search-container"> 
                    <input type="text" id="search-bar" placeholder="What can we help you with today?">
                    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
                </form>
            </div>
           
            <div class="collapse navbar-collapse" id="navcol-1"></div>
            <div class="dropdown no-arrow" style="color: rgb(186,40,180);"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(172,52,183);">
            <!-- <span class="d-none d-lg-inline mr-2 text-gray-600 small" style="color: rgb(201,55,204);"><strong>{{ $NameAndSurname }}</strong></span> -->
            <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">{{ $NameAndSurname }} &nbsp;</span></div>
                @if ($IsBase64)
                    <img class="border rounded-circle img-profile" src="{{ $ProfilePicture }}">
                @else
                <i class="fa fa-user"></i>
                <!-- <img style="width:60px;height:60px;" class="border rounded-circle img-profile" src="{{ asset('images/user-icon.svg') }}"> -->
                @endif
                </a>
                <div
                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="/user/profile"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Portfolio</a>
                    <div
                        class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="/logout"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                </div>
             
            </div>
    </nav>

    <!-- Start: Side By Side Section -->
    <section class="main-dashboard" >       
            <hgroup class="heading">
            <br>
                <h1>Welcome Back, {{ $NameAndSurname }}</h1>
                <h3>Just keep learning. Make new opportunities.</h3>
            </hgroup>

            <div class="psd-line pos-rel" style="position: relative;width: 1003px; padding-left: 250px;">
                <!-- Start: Circle Nav -->
                <section class="iq-features">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-12"></div>
                  <div class="col-lg-6 col-md-12">
                     <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                            <a href="/user/investment">
                                <span class="itemDot itemDot1" data-tab="1">
                                    <i class="fa fa-chart-line"></i>
                                    <span class="forActive"></span>
                                </span>
                            </a>
                            <a href="/user/ideas">
                                <span class="itemDot itemDot2" data-tab="2">
                                    <i class="fa fa-book"></i>
                                    <span class="forActive"></span>
                                </span>
                            </a>
                           <a href="/user/rawmate">
                                <span class="itemDot itemDot3" data-tab="3">
                                    <i class="fab fa-envira"></i>
                                    <span class="forActive"></span>
                                </span>
                           </a>
                           <a href="/user/profile">
                                <span class="itemDot itemDot4" data-tab="4">
                                    <i class="fa fa-user"></i>
                                    <span class="forActive"></span>
                                </span>
                            </a>
                            <a href="/user/storeroom">
                            <span class="itemDot itemDot5" data-tab="5">
                                <i class="fa fa-upload"></i>
                                <span class="forActive"></span>
                           </span>
                            </a>
                            <a href="">
                                <span class="itemDot itemDot6" data-tab="6">
                                <i class="fa fa-plus-square"></i>
                                <span class="forActive"></span>
                                </span>
                           </a>
                           <a href="/user/news">
                                <span class="itemDot itemDot7" data-tab="7">
                                <i class="fa fa-newspaper"></i>
                                <span class="forActive"></span>
                            </span>
                           </a>
                        </div>
                        <div class="contentCircle">
                           <div class="CirItem title-box active CirItem1">
                              <h2 class="title"><span>INVESTMENTS</span></h2>
                              <i class="fa fa-clock-o"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>IDEAS </span></h2>
                              <i class="fa fa-comments"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem3">
                              <h2 class="title"><span>RAW-MAT</span></h2>
                              <i class="fa fa-user"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>PROFILE</span></h2>
                              <i class="fa fa-tags"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>STORE-ROOM</span></h2>
                              <i class="fa fa-upload"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>CREATE</span></h2>
                              <i class="fa fa-briefcase"  style="color:purple;"></i>
                           </div>
                           <div class="CirItem title-box CirItem7">
                            <h2 class="title"><span>News</span></h2>
                            <i class="fa fa-briefcase"  style="color:purple;"></i>
                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12"></div>
               </div>
            </div>
    </section>
                <!-- End: Circle Nav -->
            <!-- </div>
        </div>
    </section> -->
    <!-- End: Side By Side Section -->
    <!-- Start: Footer with social media icons -->
    <footer>

                <div class="col-md-6 col-lg-8 mx-auto">
                    <!-- Start: paragraph --><p class="copyright text-muted text-center">PLUGIN &copy;  2020 </p>
                    <!-- End: paragraph -->
                </div>

    </footer>
    <!-- End: Footer with social media icons -->
    <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets1/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets1/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets1/js/Circle-Nav.js') }}"></script>
</body>

</html>