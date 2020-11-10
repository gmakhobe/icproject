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
                <div class="container jumbotron m-3 my-bg-color-grey">
                    <h3>Plugin News</h3>
                    <p class="my-text-color-white">Daily news</p>
                </div>
                <!-- End: Jumbotron -->

                <!-- Start: Nav -->
                <ul class="nav nav-justified nav-pills">
                    @for ($index = 0; $index < count($NewsSubjects); $index++)
                        @if ($index == 0)
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#news{{ $index }}"><span
                                        class="my-text-color-white">{{ $NewsSubjects[$index] }}</span></a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#news{{ $index }}"><span
                                        class="my-text-color-white">{{ $NewsSubjects[$index] }}</span></a>
                            </li>
                        @endif
                    @endfor
                </ul>
                <!-- End: Nav -->

                <div class="tab-content">
                    <div class="tab-pane fade" id="news1">

                        <div class="row">

                            @foreach ($SPNews as $News)

                                <div class="col-md-6 card my-bg-color-grey">
                                    <div class="card-body my-bg-color-grey">
                                        <img class="my-news-card-img-left" src="{{ $News['Banner'] }}"
                                            alt="{{ $News['Headline'] }} News" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title my-text-color-white">{{ $News['Headline'] }}</h4>
                                            <p class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </p>
                                            <p class="card-text my-text-color-white">{{ $News['News'] }}</p>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-block btn-primary my-text-color-white">Read
                                                more...</a>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="news2">

                        <div class="row">

                            @foreach ($InvestmentNews as $News)

                                <div class="col-md-6 card my-bg-color-grey">
                                    <div class="card-body my-bg-color-grey">
                                        <img class="my-news-card-img-left" src="{{ $News['Banner'] }}"
                                            alt="{{ $News['Headline'] }} News" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title my-text-color-white">{{ $News['Headline'] }}</h4>
                                            <p class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </p>
                                            <p class="card-text my-text-color-white">{{ $News['News'] }}</p>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-block btn-primary my-text-color-white">Read
                                                more...</a>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="news3">

                        <div class="row">

                            @foreach ($TechNews as $News)

                                <div class="col-md-6 card my-bg-color-grey">
                                    <div class="card-body my-bg-color-grey">
                                        <img class="my-news-card-img-left" src="{{ $News['Banner'] }}"
                                            alt="{{ $News['Headline'] }} News" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title my-text-color-white">{{ $News['Headline'] }}</h4>
                                            <p class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </p>
                                            <p class="card-text my-text-color-white">{{ $News['News'] }}</p>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-block btn-primary my-text-color-white">Read
                                                more...</a>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="news4">

                        <div class="row">

                            @foreach ($FinanceNews as $News)

                                <div class="col-md-6 card my-bg-color-grey">
                                    <div class="card-body my-bg-color-grey">
                                        <img class="my-news-card-img-left" src="{{ $News['Banner'] }}"
                                            alt="{{ $News['Headline'] }} News" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title my-text-color-white">{{ $News['Headline'] }}</h4>
                                            <p class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </p>
                                            <p class="card-text my-text-color-white">{{ $News['News'] }}</p>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-block btn-primary my-text-color-white">Read
                                                more...</a>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane active " id="news0">

                        <div class="row">

                            @foreach ($EconomicNews as $News)

                                <div class="col-md-6 card my-bg-color-grey">
                                    <div class="card-body my-bg-color-grey">
                                        <img class="my-news-card-img-left" src="{{ $News['Banner'] }}"
                                            alt="{{ $News['Headline'] }} News" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title my-text-color-white">{{ $News['Headline'] }}</h4>
                                            <p class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </p>
                                            <p class="card-text my-text-color-white">{{ $News['News'] }}</p>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-block btn-primary my-text-color-white">Read
                                                more...</a>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                            @endforeach

                        </div>

                    </div>
                </div>

                <!-- Start: Jumbotron -->
                <div class="container jumbotron m-3 my-bg-color-grey">
                    <h3>My TV News</h3>
                    <p class="my-text-color-white">More TV news Channels > </p>
                </div>
                <!-- End: Jumbotron -->

                <div class="row">

                    @foreach ($NewsVideos as $NV)

                        <div class="col-md-3 card my-bg-color-grey">
                            <div class="card-body my-bg-color-grey">
                                <a href="/user/news/video/{{ $NV['Title'] }}/{{ $NV['Id'] }}">
                                    <video controls class="
                                    my-news-video" poster="{{ $NV['Banner'] }}">
                                        <source src="{{ $NV['Video'] }}" type="video/mp4">
                                    </video>

                                    <p class="my-text-color-white">{{ $NV['Title'] }}</p>
                                    <p><small><a
                                                href="/user/news/channel/name/{{ $NV['ChannelName'] }}/{{ $NV['ChannelId'] }}/1"><span
                                                    class="my-text-color-white">{{ $NV['ChannelName'] }}</span></a></small>
                                    </p>
                                </a>
                            </div>
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
