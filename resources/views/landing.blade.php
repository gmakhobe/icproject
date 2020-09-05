<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $Title }}</title>

        <!-- Fonts -->
        
        <!-- Fonts -->
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <!-- End Styles -->

        <style>
            
        </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-color-white text-style-bold" href="#">{{ $Title }}</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="text-color-white btn-nav" href="#">About Us</a></li>
                <li><a class="text-color-black btn-nav btn-color-gold text-style-bold" href="#"  data-toggle="modal" data-target="#loginModal" data-backdrop="static">Login</a></li>
                <li><a class="text-color-white btn-nav btn-color-red text-style-bold" href="#"  data-toggle="modal" data-target="#registerModal" data-backdrop="static">Register</a></li>
            </ul>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <div class="item active">
                <img class="carousel-slide-image" src="{{ asset('/images/investment-slide.jpg') }}" alt="Investment Slide">
                <div class="carousel-caption">
                    <h2>Investment</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/create-slide.jpg') }}" alt="Create Slide">
                <div class="carousel-caption">
                    <h2>Create</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/ideas-slide.jpg') }}" alt="Ideas Slide">
                <div class="carousel-caption">
                    <h2>Ideas</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/news-slide.jpg') }}" alt="News Slide">
                <div class="carousel-caption">
                    <h2>News</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/profile-slide.jpg') }}" alt="Profile Slide">
                <div class="carousel-caption">
                    <h2>Profile</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/store-room-slide.jpg') }}" alt="Store Room Slide">
                <div class="carousel-caption">
                    <h2>Store Room</h2>
                </div>
            </div>

            <div class="item">
                <img class="carousel-slide-image" src="{{ asset('/images/raw-materials-slide.jpg') }}" alt="Raw Materials Slide">
                <div class="carousel-caption">
                    <h2>Raw Materials</h2>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid main-content bg-color-grey">
        <h2 class="main-content-heading text-align-center">IC Online Services</h2>

        <div class="cards-services">
            <div class="card-service">
                <h4 clas="text-style-bold">Investment</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/investment-slide.jpg') }}" alt="Investment Image">
                <p class="card-service-paragraph">
                    Investment for business, individual or Financial Advisor by selecting from a wide range of raw materials, companies and shares.
                </p>
            </div>
            <div class="card-service">
                <h4 clas="text-style-bold">Create</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/create-slide.jpg') }}" alt="Investment Image">
                <p class="card-service-paragraph">
                    Create a profile as an individual or business to get investors and platform users to see what it is all about. 
                </p>
            </div>
            <div class="card-service">
                <h4 clas="text-style-bold">Idea</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/ideas-slide.jpg') }}" alt="Investment">
                <p class="card-service-paragraph">
                    Have a great idea that needs funding? well create a profile and publish you profile by folowing the guidelines to get funding.
                </p>
            </div>

        <div class="card-service">
                <h4 clas="text-style-bold">News</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/news-slide.jpg') }}" alt="Investment Image">
                <p class="card-service-paragraph">
                    Stay up to date with the latest financial and economic news so that you are always informed anywhere and anytime.
                </p>
            </div>
            <div class="card-service">
                <h4 clas="text-style-bold">Profile</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/profile-slide.jpg') }}" alt="Investment Image">
                <p class="card-service-paragraph">
                    By having a profile with IC you will receive premium treatment, whenever there are opportunities whatsoever you will stay informed. 
                </p>
            </div>
            <div class="card-service">
                <h4 clas="text-style-bold">Store Rooom</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/store-room-slide.jpg') }}" alt="Investment">
                <p class="card-service-paragraph">
                    Have access to a store room where all of the content you create as a user is stored. You own your content.
                </p>
            </div>

            <div class="card-service">
                <h4 clas="text-style-bold">Raw Materials</4>
                <img class="card-service-image img-rounded" src="{{ asset('/images/raw-materials-slide.jpg') }}" alt="Investment">
                <p class="card-service-paragraph">
                    Want to buy gold, coal or chrome? We got you, we have made it easy for you to buy raw materials. Just create and account and buy any raw material you want from the available list.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid main-content">
        <h2 class="main-content-heading text-align-center">ZAR Current Market<br> Price</h2>

        <div class="cards-services" id="quotes-sections">
            
            <!-- Display infor using innerhtml when loading quotes-->
            
            
        </div>
    </div>

    <!--
    <div class="container-fluid main-content">
        <h2 class="main-content-heading">News Update</h2>
        
        <div class="cards-services">
            <div class="card-service-news">
                <img class="card-service-news-image img-rounded" src="{{ asset('/images/news-slide.jpg') }}" alt="Investment">
            </div>
            <div class="card-service-news">
                <h2 class="card-service-news-title">News Title (E.G) Sasol Share Price Plummets<h2>
                <p class="card-service-news-paragraph"> Yesterday something happened to SASOL share price, the move was not expecte at all this is a shock to the market</p>
                <center>
                    <a href="#" class="card-service-news-continue-btn btn-color-outline-black">Continue reading ></a>
                </center>
            </div>
        </div>

        <div class="cards-services">
            <div class="card-service-news">
                <img class="card-service-news-image img-rounded" src="{{ asset('/images/news-slide.jpg') }}" alt="Investment">
            </div>
            <div class="card-service-news">
                <h2 class="card-service-news-title">News Title (E.G) Sasol Share Price Plummets<h2>
                <p class="card-service-news-paragraph"> Yesterday something happened to SASOL share price, the move was not expecte at all this is a shock to the market</p>
                <center>
                    <a href="#" class="card-service-news-continue-btn btn-color-outline-black">Continue reading ></a>
                </center>
            </div>
        </div>

        <div class="cards-services">
            <div class="card-service-news">
                <img class="card-service-news-image img-rounded" src="{{ asset('/images/news-slide.jpg') }}" alt="Investment">
            </div>
            <div class="card-service-news">
                <h2 class="card-service-news-title">News Title (E.G) Sasol Share Price Plummets<h2>
                <p class="card-service-news-paragraph"> Yesterday something happened to SASOL share price, the move was not expecte at all this is a shock to the market</p>
                <center>
                    <a href="#" class="card-service-news-continue-btn btn-color-outline-black">Continue reading ></a>
                </center>
            </div>
        </div>

    </div>
    -->

    <div class="container-fluid main-content text-align-center bg-color-black text-color-white">
        <h2 class="main-content-heading text-color-white">About Us</h2>

        <p class="aboutus-paragraph">We are a new global plartform the aims at connecting investors with small business together with Markets!</p>

    </div>

    <div class="container-fluid main-content text-align-center">
        <h2 class="main-content-heading">Subscribe</h2>

        <p class="subscribe-paragraph">Subscribe to our news later to receieve any news updates!</p>

        <div class="cards-services">
            <div class="subscribe-form">
              <div class="input-group">
                <input id="s-email" type="email" class="form-control" size="50" placeholder="Email Address" required>
                <div class="input-group-btn">
                  <button id="subscribeBTN" onclick="AppSubscribe()" type="button" class="btn btn-danger">Subscribe</button>
                </div>
              </div>
            </div>
        </div>

    </div>

    <div class="container-fluid main-content text-align-center bg-color-black text-color-white">
        <h2 class="main-content-heading text-color-white">Copyright &copy; {{ date('Y') }}</h2>
    </div>

    <!-- Dashboard Modal -->
    <div class="modal fade" id="dashboardModal" role="dialog">
        <div class="modal-dialog">    
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Dashboard</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <strong>Info!</strong> Please login or create an account to access full features.
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="loginBTN" type="submit" class="btn btn-primary" onclick="AppLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Dashboard Modal -->

    <!-- Login Modal -->

@if ($ActivationVal)
    <div class="modal in" id="loginModal" role="dialog" style="display: block;">
@else
    <div class="modal fade" id="loginModal" role="dialog">
@endif
        <div class="modal-dialog">    
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Login In</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Email address / Username:</label>
                        <input type="text" class="form-control" id="log-email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="log-password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="loginBTN" type="submit" class="btn btn-primary" onclick="AppLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">    
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <div id="reg-container">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="reg-name">
                        </div>
                        <div class="form-group">
                            <label>Surname:</label>
                            <input type="text" class="form-control" id="reg-surname">
                        </div>
                        <div class="form-group">
                            <label>Email address:</label>
                            <input type="email" class="form-control" id="reg-email">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" id="reg-password">
                        </div>
                        <div class="form-group">
                            <label> Confirm Password:</label>
                            <input type="password" class="form-control" id="reg-confirm-password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="registerBTN" type="submit" class="btn btn-primary" onclick="AppRegister()">Register</button>
                </div>
            </div>
        </div>
    </div>
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
        loadQuotesFromServer();
    </script>
    <!-- End Script -->

    </body>
</html>
