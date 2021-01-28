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
                <div class="code--css" style="height: 160px;">
                <div style="padding: 2%">
                    <h2 style="color:white;">Plugin News</h2>
                    <h3 style="color:white;">Daily news</h3>
                    <h4 style="color:white;"><i>Discover promising investing opportunities, by laying out money now to get more money back in the future</i></h4><br>
                </div>
                </div>

                <!-- End: Jumbotron -->

                <!-- Start: Nav -->
                <br>
                <ul class="nav nav-justified nav-pills">
                    @for ($index = 0; $index < count($NewsSubjects); $index++)
                        @if ($index == 0)
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#news{{ $index }}"><span
                                        class="my-text-color-white" style="color:purple;">{{ $NewsSubjects[$index] }}</span></a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#news{{ $index }}"><span
                                        class="my-text-color-white" style="color:purple;">{{ $NewsSubjects[$index] }}</span></a>
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
                                        <img class="my-news-card-img-left" src="https://a.abcnews.com/images/Business/GTY_woman_finance_tk_131022_16x9_992.jpg"
                                            alt="{{ $News['Headline'] }} News" style="width:100%; height: 200px; border-radius: 20px 20px 20px 20px;">
                                            <div class="card-body">
                                            <h2 class="card-title my-text-color-white" style="color:purple;">{{ $News['Headline'] }}</h4>
                                            <h3 class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </h3>
                                            <h4 class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </h4>
                                            <h5 class="card-text my-text-color-white">{{ $News['News'] }}</h5>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-light my-text-color-white">Read
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
                                    <img class="my-news-card-img-left" src="https://www.investors.com/wp-content/uploads/2019/02/Stock-dataQuest-03-adobe.jpg"
                                            alt="{{ $News['Headline'] }} News" style="width:100%; height: 200px; border-radius: 20px 20px 20px 20px;">
                                            <div class="card-body">
                                            <h2 class="card-title my-text-color-white" style="color:purple;">{{ $News['Headline'] }}</h4>
                                            <h3 class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </h3>
                                            <h4 class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </h4>
                                            <h5 class="card-text my-text-color-white">{{ $News['News'] }}</h5>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-light my-text-color-white">Read
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
                                    <img class="my-news-card-img-left" src="https://news.efinancialcareers.com/binaries/content/gallery/efinancial-careers/articles/2018/03/banking-to-fintech_jamesteohart_GettyImages.jpg"
                                            alt="{{ $News['Headline'] }} News" style="width:100%; height: 200px; border-radius: 20px 20px 20px 20px;">
                                            <div class="card-body">
                                            <h2 class="card-title my-text-color-white" style="color:purple;">{{ $News['Headline'] }}</h4>
                                            <h3 class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </h3>
                                            <h4 class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </h4>
                                            <h5 class="card-text my-text-color-white">{{ $News['News'] }}</h5>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-light my-text-color-white">Read
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
                                    <img class="my-news-card-img-left" src="https://thumbs.dreamstime.com/z/review-financial-news-blue-toned-15287879.jpg"
                                            alt="{{ $News['Headline'] }} News" style="width:100%; height: 200px; border-radius: 20px 20px 20px 20px;">
                                        <div class="card-body">
                                            <h2 class="card-title my-text-color-white" style="color:purple;">{{ $News['Headline'] }}</h4>
                                            <h3 class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </h3>
                                            <h4 class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </h4>
                                            <h5 class="card-text my-text-color-white">{{ $News['News'] }}</h5>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-light my-text-color-white">Read
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
                                    <img class="my-news-card-img-left" src="https://www.ifin.usi.ch/assets/images/news/phd.jpg"
                                            alt="{{ $News['Headline'] }} News" style="width:100%; height: 200px; border-radius: 20px 20px 20px 20px;">
                                            <div class="card-body">
                                            <h2 class="card-title my-text-color-white" style="color:purple;">{{ $News['Headline'] }}</h4>
                                            <h3 class="card-text my-text-color-white">
                                                <strong><a
                                                        href="/user/news/channel/name/{{ $News['ChannelName'] }}/{{ $News['ChannelId'] }}/0"><span
                                                            class="my-text-color-white">{{ $News['ChannelName'] }}</span></a></strong>
                                            </h3>
                                            <h4 class="my-text-color-white">{{ $News['Author'] }} / {{ $News['Date'] }}
                                            </h4>
                                            <h5 class="card-text my-text-color-white">{{ $News['News'] }}</h5>

                                            <a href="/user/news/read/{{ $News['Headline'] }}/{{ $News['Id'] }}"
                                                class="btn btn-light my-text-color-white">Read
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
                <div class="code--css" style="height: 150px;">
                <div style="padding: 2%">                    <h3>My TV News</h3>
                    <p class="my-text-color-white">More TV news Channels > </p>
                </div>
                </div>
                <br>

                <!-- End: Jumbotron -->

                <div class="row">

                    @foreach ($NewsVideos as $NV)

                        <div class="col-md-12 card my-bg-color-grey">
                            <div class="card-body my-bg-color-grey">
                                <a href="/user/news/video/{{ $NV['Title'] }}/{{ $NV['Id'] }}">
                                    <video controls class="
                                    my-news-video" poster="http://www.luiss.edu/sites/www.luiss.it/files/images/news/53/HSE_lecture.jpg"
                                    style="width: 100%;">
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
