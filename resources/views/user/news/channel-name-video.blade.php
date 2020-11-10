<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles-1.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles.css">
    <link rel="stylesheet" href="/assets1/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1-1.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="/assets1/css/Bootstrap-Theme-Switchers.css">
    <link rel="stylesheet" href="/assets1/css/Hamburger-side-fold-out-menu-or-navbar-by-ITvider-1.css">
    <link rel="stylesheet" href="/assets1/css/Hamburger-side-fold-out-menu-or-navbar-by-ITvider.css">
    <link rel="stylesheet" href="/assets1/css/icon-star-empty.css">
    <link rel="stylesheet" href="/assets1/css/Juvi---Easy-Smooth-Scroll---Insertn-Go.css">
    <link rel="stylesheet" href="/assets1/css/menu-collapse-ultimate.css">
    <link rel="stylesheet" href="/assets1/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="/assets1/css/Minimal-tabs.css">
    <link rel="stylesheet" href="/assets1/css/Navbar-with-menu-and-login.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">

</head>

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">

                <!-- Start: Jumbotron -->
                <div class="container jumbotron m-3"
                    style="background: url('{{ $ChannelInformation[0]['Banner'] }}') no-repeat center;">
                    <h3 class="my-text-color-white">{{ $ChannelInformation[0]['Name'] }}</h3>
                    <p class="my-text-color-white">{{ $ChannelInformation[0]['Description'] }}</p>
                </div>
                <!-- End: Jumbotron -->
                <!-- Economics-->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[0] }} News</h3>

                <div class="row">

                    @foreach ($ChannelTVNewsEconomics as $CTVNE)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="{{ $CTVNE['Banner'] }}"
                                    alt="{{ $CTVNE['Title'] }} image" style="width:100%">
                                <h4 class="card-title my-text-color-white">{{ $CTVNE['Title'] }}</h4>
                                <p class="my-text-color-white">{{ $CTVNE['Author'] }} / {{ $CTVNE['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CTVNE['Subject'] }}</p>
                                <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">View Video</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>
                <!-- Social and Politics -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[1] }} News</h3>
                <div class="row">

                    @foreach ($ChannelTVNewsSP as $CTVNE)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="{{ $CTVNE['Banner'] }}"
                                    alt="{{ $CTVNE['Title'] }} image" style="width:100%">
                                <h4 class="card-title my-text-color-white">{{ $CTVNE['Title'] }}</h4>
                                <p class="my-text-color-white">{{ $CTVNE['Author'] }} / {{ $CTVNE['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CTVNE['Subject'] }}</p>
                                <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">View Video</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>
                <!-- Investment  -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[2] }} News</h3>
                <div class="row">

                    @foreach ($ChannelTVNewsInvestment as $CTVNE)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="{{ $CTVNE['Banner'] }}"
                                    alt="{{ $CTVNE['Title'] }} image" style="width:100%">
                                <h4 class="card-title my-text-color-white">{{ $CTVNE['Title'] }}</h4>
                                <p class="my-text-color-white">{{ $CTVNE['Author'] }} / {{ $CTVNE['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CTVNE['Subject'] }}</p>
                                <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">View Video</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>

                <!-- Technology news -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[3] }} News</h3>
                <div class="row">

                    @foreach ($ChannelTVNewsTech as $CTVNE)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="{{ $CTVNE['Banner'] }}"
                                    alt="{{ $CTVNE['Title'] }} image" style="width:100%">
                                <h4 class="card-title my-text-color-white">{{ $CTVNE['Title'] }}</h4>
                                <p class="my-text-color-white">{{ $CTVNE['Author'] }} / {{ $CTVNE['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CTVNE['Subject'] }}</p>
                                <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">View Video</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>

                <!-- Finance -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[4] }} News</h3>
                <div class="row">

                    @foreach ($ChannelTVNewsFinance as $CTVNE)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="{{ $CTVNE['Banner'] }}"
                                    alt="{{ $CTVNE['Title'] }} image" style="width:100%">
                                <h4 class="card-title my-text-color-white">{{ $CTVNE['Title'] }}</h4>
                                <p class="my-text-color-white">{{ $CTVNE['Author'] }} / {{ $CTVNE['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CTVNE['Subject'] }}</p>
                                <a href="/user/news/video/{{ $CTVNE['Title'] }}/{{ $CTVNE['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">View Video</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>
            </div>

        </div>
        <div class="col-md-"></div>
    </div>
    </div>


    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->

    <script src="assets/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
