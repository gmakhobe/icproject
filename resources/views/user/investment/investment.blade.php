<!DOCTYPE html>
<html style="width: 1349px;">

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles-1.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles.css">
    <link rel="stylesheet" href="/assets1/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1-1.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="/assets1/css/Bootstrap-Theme-Switchers.css">
    <link rel="stylesheet" href="/assets1/css/Dark-footer-with-social-media-icons.css">
    <link rel="stylesheet" href="/assets1/css/Hamburger-side-fold-out-menu-or-navbar-by-ITvider-1.css">
    <link rel="stylesheet" href="/assets1/css/Hamburger-side-fold-out-menu-or-navbar-by-ITvider.css">
    <link rel="stylesheet" href="/assets1/css/icon-star-empty.css">
    <link rel="stylesheet" href="/assets1/css/Juvi---Easy-Smooth-Scroll---Insertn-Go.css">
    <link rel="stylesheet" href="/assets1/css/menu-collapse-ultimate.css">
    <link rel="stylesheet" href="/assets1/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="/assets1/css/Minimal-tabs.css">
    <link rel="stylesheet" href="/assets1/css/Navbar-with-menu-and-login.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">

    <style>
        .my-bg-color-grey{
            background-color:rgb(52,58,64);
            color: white;
        }
        .my-text-color-black{
            color: black;
        }
        .my-invest-second-nav-btn{
            color: #fff;
            background-color: transparent;
        }
    </style>
</head>

<body style="background-color: rgb(50,46,46);width: 1170px;">
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

    <div class="container m-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>MOST TRADED</strong></button>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>PORTFOLIO</strong></button>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>MOST POPULAR</strong></button>
                        </center>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div class="container m-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown">
                                <button class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow-sm" data-toggle="dropdown" aria-expanded="false">
                                    <strong>MARKETS</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown">
                                <button class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow-lg" data-toggle="dropdown" aria-expanded="false">
                                    <strong>CAREER</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown" style="margin: 0px;margin-top: 0px;">
                                <button class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow" data-toggle="dropdown" aria-expanded="false">
                                    <strong>COUNTRY</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-10 card my-bg-color-grey">

                <div class="card-body">
                    
                    <h2>Company</h2>

                    <div class="row my-text-color-black">

                       <!-- Start : Populate Industries -->
                        <div class="col-md-3 card m-2">
                            <div class="card-body">
                                Body
                            </div>
                            <div class="card-footer">
                                <small>Public Companies</small>
                            </div>
                        </div>
                        <!-- End : Populate Industries -->

                    </div>

                </div>

            </div>
            <div class="col-md-2"></div>

        </div>

    </div>

    
    <!-- Start: Dark footer with social media icons 
    <footer id="footerpad" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                    <!-- Start: paragraph<b>
                        <p class="copyright text-muted text-center">Copyright &copy; Plugin 2020 </p>
                    </b>
                    <!-- End: paragraph 
                </div>
            </div>
        </div>
    </footer>
    End: Dark footer with social media icons -->

    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->

    <script src="/assets1/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="/assets1/js/theme.js"></script>
    <script src="/assets1/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="/assets1/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
