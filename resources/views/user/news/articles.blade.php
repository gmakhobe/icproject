<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

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
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">

</head>

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">

                <div class="row">

                    <div class="col-md-12 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/article/read/{{ $GetMainArticle[0]['Headline'] }}/{{ $GetMainArticle[0]['NewsId'] }}">
                                <img class="my-news-card-img-left" src="{{ $GetMainArticle[0]['Banner'] }}"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title my-text-color-white">{{ $GetMainArticle[0]['Headline'] }}</h4>
                                    <p class="my-text-color-white">{{ $GetMainArticle[0]['Author'] }} /
                                        {{ $GetMainArticle[0]['Date'] }}  /
                                        {{ $GetMainArticle[0]['Subject'] }}</p>
                                    <p class="card-text my-text-color-white">
                                        {{ $GetMainArticle[0]['News'] }}
                                    </p>

                                </div>
                            </a>
                        </div>
                        <br />
                    </div>

                    @foreach ($GetSubtArticles as $GSA)

                        <div class="col-md-4 card my-bg-color-grey">
                            <div class="card-body my-bg-color-grey">
                                <a href="/user/news/article/read/{{ $GSA['Headline'] }}/{{ $GSA['NewsId'] }}">
                                    <img class="my-news-card-img-left" src="{{ $GSA['Banner'] }}"
                                        alt="{{ $GSA['Headline'] }} image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title my-text-color-white">{{ $GSA['Headline'] }}</h4>
                                        <p class="my-text-color-white">{{ $GSA['Author'] }} / {{ $GSA['Date'] }} /
                                            {{ $GSA['Subject'] }}
                                        </p>
                                        <p class="card-text my-text-color-white">{{ $GSA['News'] }}</p>
                                </a>

                            </div>
                        </div>
                        <br />
                </div>

                @endforeach

            </div>

            <h3 class="p-3 my-text-color-white">Latest Articles</h3>

            <div class="row">

                @foreach ($GetLatestArticles as $GLA)

                    <div class="col-md-6 my-bg-color-grey">
                        <a href="/user/news/article/read/{{ $GLA['Headline'] }}/{{ $GLA['NewsId'] }}">
                            <img class="my-news-card-img-left p-3" src="{{ $GLA['Banner'] }}"
                                alt="{{ $GLA['Headline'] }} image" style="width:100%">
                        </a>

                    </div>

                    <div class="col-sm-6 my-bg-color-grey">
                        <a href="/user/news/article/read/{{ $GLA['Headline'] }}/{{ $GLA['NewsId'] }}">
                            <h4 class="card-title my-text-color-white p-3">{{ $GLA['Headline'] }}</h4>
                            <p class="my-text-color-white p-3">{{ $GLA['Author'] }} / {{ $GLA['Date'] }}
                                <br />
                                <span class="my-text-color-white">
                                    {{ $GLA['Subject'] }}
                                </span>
                            </p>
                            <p class="card-text my-text-color-white p-3">
                                {{ $GLA['News'] }}
                            </p>
                        </a>

                    </div>

                @endforeach


            </div>

            <div class="row">
                <div class="col-md-4 my-bg-color-grey p-3">
                    <h4 class="my-text-center">Where To Investment</h4>
                    <p class="my-text-color-white">Link One</p>
                    <p class="my-text-color-white">Link Two</p>
                    <p class="my-text-color-white">Link Three</p>
                    <p class="my-text-color-white">Link Four</p>
                </div>
                <div class="col-md-4 my-bg-color-grey p-3">
                    <h4 class="my-text-center">Blogs and Webiners</h4>
                    <p class="my-text-color-white">Link One</p>
                    <p class="my-text-color-white">Link Two</p>
                    <p class="my-text-color-white">Link Three</p>
                    <p class="my-text-color-white">Link Four</p>
                </div>
                <div class="col-md-4 my-bg-color-grey p-3">
                    <h4 class="my-text-center">Articles</h4>
                    <p class="my-text-color-white">Link One</p>
                    <p class="my-text-color-white">Link Two</p>
                    <p class="my-text-color-white">Link Three</p>
                    <p class="my-text-color-white">Link Four</p>
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
