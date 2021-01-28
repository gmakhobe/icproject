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
    @include('/user/layout/header-style-1')
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <br>
                <!-- Start: Jumbotron -->
                <div class="code--css" style="height: 150px;">
                <div style="padding: 2%">
                    <h3 class="my-text-color-white">{{ $ChannelInformation[0]['Name'] }}</h3>
                    <p class="my-text-color-white">{{ $ChannelInformation[0]['Description'] }}</p>
                </div>
                </div>
                <!-- End: Jumbotron -->
                <!-- Economics-->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[0] }} News</h3>

                <div class="row">

                    @foreach ($ChannelNewsEconomics as $CN)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://blog.feedspot.com/wp-content/uploads/2019/01/financial-education-youtube.jpg"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>
                <!-- Social and Politics -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[1] }} News</h3>
                <div class="row">

                    @foreach ($ChannelNewsSP as $CN)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://2.bp.blogspot.com/-qSheCYstuac/Uk2jzMDh8cI/AAAAAAAAMEA/u89Ge50HZwU/s1600/fun.jpg"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>
                <!-- Investment  -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[2] }} News</h3>
                <div class="row">

                    @foreach ($ChannelNewsInvestment as $CN)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://papersoft-dms.com/wp-content/uploads/2018/01/PaperSoft_Blog_Financialinclusion_v2_2-1030x541.png"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>

                <!-- Technology news -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[3] }} News</h3>
                <div class="row">

                    @foreach ($ChannelNewsTech as $CN)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://i.ytimg.com/vi/RoqANQu9K3Y/maxresdefault.jpg"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>

                <!-- Finance -->
                <h3 class="my-text-color-white p-5">{{ $NewsSubjects[4] }} News</h3>
                <div class="row">

                    @foreach ($ChannelNewsFinance as $CN)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://static3.seekingalpha.com/images/marketing_images/numbers_words_signs/signs/finance.jpeg"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
                            </a>
                        </div>
                        <br />
                    </div>

                    @endforeach

                </div>

                <!-- Articles -->
                <h3 class="my-text-color-white p-5">Article</h3>
                <div class="row">

                    @foreach ($ChannelArticles as $CA)

                    <div class="col-md-4 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">
                            <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}">
                                <img class="my-news-card-img-channel-name" src="https://www.york.ac.uk/media/study/courses/postgraduate/management/msc-mbf-hero-1200.jpg"
                                    alt="Card image" style="width:100%">
                                <h4 class="card-title my-text-color-white" style="color:purple;">{{ $CN['Headline'] }}</h4>
                                <p class="my-text-color-white">{{ $CN['Author'] }} / {{ $CN['Date'] }}</p>
                                <p class="my-text-color-white">Topic: {{ $CN['Subject'] }}</p>
                                <p class="card-text my-text-color-white">{{ $CN['News'] }}</p>
                                <a href="/user/news/read/{{ $CN['Headline'] }}/{{ $CN['Id'] }}"
                                    class="btn btn-block btn-primary my-text-color-white"><span
                                        class="my-text-color-white">Read more...</span></a>
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

    <script>

$(function () {

'use strict';

(function () {
//부트스트랩 햄버거 클릭시 사이드바 on off

  var aside = $('.side-nav'),

      showAsideBtn = $('.show-side-btn'),

      contents = $('#contents');

  showAsideBtn.on("click", function () {

    $("#" + $(this).data('show')).toggleClass('show-side-nav');

    contents.toggleClass('margin');

  });

  if ($(window).width() <= 767) {

    aside.addClass('show-side-nav');

  }
  $(window).on('resize', function () {

    if ($(window).width() > 767) {

      aside.removeClass('show-side-nav');

    }

  });

  // dropdown menu in the side nav
  var slideNavDropdown = $('.side-nav-dropdown');

  $('.side-nav .categories li').on('click', function () {

    $(this).toggleClass('lol').siblings().removeClass('lol');

    if ($(this).hasClass('lol')) {

      $(this).find('.side-nav-dropdown').slideToggle('fast');

      $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

    } else {

      $(this).find('.side-nav-dropdown').slideUp('fast');

    }

  });

  $('.side-nav .close-aside').on('click', function () {

    $('#' + $(this).data('close')).addClass('show-side-nav');

    contents.removeClass('margin');

  });

}());





console.log(Chart.defaults.global);




});



</script>
    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->

    <script src="assets/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
