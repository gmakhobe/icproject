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
                            <br>
                                <img class="my-news-card-img-left" src="http://bgfons.com/upload/newspaper_texture2824.jpg"
                                    alt="Card image" style="width:100%; height: 50%; border-radius: 5%">
                                <div class="card-body">
                                    <h2 class="card-title my-text-color-white" style="color:purple;">Fast Business Loans – Working Capital—What You Need to Know</h2>
                                    <h3 class="my-text-color-white"><i>Thabo Sehume /
                                        2019-11-18 13:15:15 /
                                        Economics </i></h3>
                                    <p class="card-text my-text-color-white">
                                    This article was reviewed and updated on June 15, 2020 Nowhere is the saying "you need money to make money" more true than in the crowded, competitive, fast-moving world of small business. As you seek to establish and grow your enterprise, access to capital (or the lack thereof) will be one of your biggest hurdles. For small business owners facing expenses that just can't wait, traditional approaches—SBA loans from banks, for example—can be burdensome, inconvenient, and ultimately disappointing.  
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
                                    <img class="my-news-card-img-left" src="http://i.investopedia.com/dimages/graphics/top_6_apps_for_financial_news.jpg"
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
                <div>

                    <div class="col-sm-6 my-bg-color-grey">
                            <a href="/user/news/article/read/{{ $GLA['Headline'] }}/{{ $GLA['NewsId'] }}">
                                <h3 class="card-title my-text-color-white p-3" style="color:purple;">{{ $GLA['Headline'] }}</h3>
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

                    <div class="col-md-6 my-bg-color-grey">
                            <a href="/user/news/article/read/{{ $GLA['Headline'] }}/{{ $GLA['NewsId'] }}">
                                <img class="my-news-card-img-left p-3" src="http://www.dolmanbateman.com.au/wp-content/uploads/2012/09/Financial-Newspapers.jpg"
                                    alt="{{ $GLA['Headline'] }} image"  style="width:400px; height: 150px; border-radius: 5%">
                            </a>
                    </div>

                </div>
                @endforeach
                <br><br><br><br><br><br>
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
