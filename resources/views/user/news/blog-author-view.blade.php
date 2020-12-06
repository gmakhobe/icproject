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

                <!-- Start: Jumbotron -->
                <div class="jumbotron m-3 my-bg-color-grey">

                    <img src="{{ $GetAuthorInfo[0]["ProfileLink"] }}" class="img-profile" style="width: 60px;"/>
                    <h3>{{ $GetAuthorInfo[0]["Username"] }}</h3>
                    <p class="my-text-color-white">{{ $GetAuthorInfo[0]["Description"] }}</p>
                </div>
                <!-- End: Jumbotron -->

                <div class="row my-bg-color-grey">

                    @foreach ($GetAuthorAllNewsBlogs as $NewsBlogPost)

                        <div class="col-md-12">
                            <!-- Start: Post -->
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-md-6 my-bg-color-grey">

                                        <h5 class="my-text-color-white"><img src="{{ $NewsBlogPost['ProfileLink'] }}"
                                                alt="{{ $NewsBlogPost['Username'] }} Image"
                                                style="width:30px !important;" class="img-profile" /> &sdot;
                                            {{ $NewsBlogPost['Username'] }}
                                        </h5>
                                        <a
                                            href="/user/news/blog/read/{{ $NewsBlogPost['Heading'] }}/{{ $NewsBlogPost['NewsBlogId'] }}">
                                            <h2 class="my-text-color-white">
                                                <strong>{{ $NewsBlogPost['Heading'] }}</strong>
                                            </h2>
                                            <p class="my-text-color-white">{{ $NewsBlogPost['SubHeading'] }}</p>
                                            <p class="my-text-color-white"><i>{{ $NewsBlogPost['Date'] }} &sdot;
                                                    {{ $NewsBlogPost['TimeSpan'] }} Min</i></p>
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-bg-color-grey">
                                        <center>
                                            <a
                                                href="/user/news/blog/read/{{ $NewsBlogPost['Heading'] }}/{{ $NewsBlogPost['NewsBlogId'] }}">
                                                <img class="my-blog-blog-post-thumbnail"
                                                    src="https://via.placeholder.com/350x200"
                                                    alt="{{ $NewsBlogPost['Image'] }} Image" />
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Post-->
                        </div>

                    @endforeach

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
