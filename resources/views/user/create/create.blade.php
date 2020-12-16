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

    <div class="">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <br>
                <!-- Start: Jumbotron -->
                <div class="code--css" style="height: 150px;">
                 <div style="padding: 2%">
                    <h3>Plugin Create</h3>
                    <p class="my-text-color-white">Create a company, service, event, news chaannel...</p>
                </div>
                </div>
                <!-- End: Jumbotron -->

                <!-- End: Nav -->

                <div class="row">
                <br>
                    <div class="col-md-12 card my-bg-color-grey">
                        <div class="card-body">
                            <!-- Start: Navigation -->
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading p-2" data-toggle="collapse" data-target="#collapse1"
                                        data-parent="#accordion">
                                        <h4 class="panel-title my-text-color-white">
                                            Create Investment Activities!
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <!-- Start: Navigation -->
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill"
                                                        href="#create-service" style="color:purple; font-size: 20px;">
                                                        Service
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        Event
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        Hedge Fund
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        Start-Up Index
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- End: Navigation -->

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active my-text-color-white" id="create-service">
                                                    <center>
                                                        <h4 class="my-text-color-white">
                                                            Create An Investment Activity
                                                        </h4>
                                                        <p class="my-text-color-white">
                                                            Need investors? Create a service!
                                                        </p>
                                                    </center>
                                                    <br />

                                                    <div class="service-slide">

                                                        <label>Investment Name</label><br />
                                                        <input type="text" id="service-def-name"
                                                            class="form-control" /><br />

                                                        <label>Investment Industry</label><br />
                                                        <select class="form-control" id="service-def-industry">
                                                            <option>Type 1</option>
                                                            <option>Type 2</option>
                                                        </select><br />

                                                        <label>Nature of Investment</label><br />
                                                        <textarea class="form-control" rows="5"
                                                            id="comment"></textarea><br />

                                                    </div>

                                                    <div class="service-slide">

                                                        <label>Address</label><br />
                                                        <input type="text" id="service-def-address"
                                                            class="form-control" /><br />

                                                        <label>Country</label><br />
                                                        <input type="text" id="service-def-country"
                                                            class="form-control" /><br />

                                                        <label>Website</label><br />
                                                        <input type="text" id="service-def-website"
                                                            class="form-control" /><br />

                                                        <label>Telephone</label><br />
                                                        <input type="text" id="service-def-telephone"
                                                            class="form-control" /><br />
                                                    </div>

                                                    <div class="service-slide">

                                                        <label>Pitch Video</label><br />
                                                        <input type="file" class="form-control" />
                                                        <label>Pitch Documentation</label><br />
                                                        <input type="file" class="form-control" />
                                                        <label>Report Documenation</label><br />
                                                        <input type="file" class="form-control" />

                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Strategy and Indicator
                                                        </h4>
                                                        <label>Strategy</label><br />
                                                        <input type="text" id="service-def-strategy"
                                                            class="form-control" /><br />
                                                        <label>Indicator</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="form-control" /><br />

                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Upcomming Calendar Events
                                                        </h4>
                                                        <label>Strategy</label><br />
                                                        <input type="date" id="service-def-strategy"
                                                            class="form-control" /><br />
                                                        <label>Nature of event</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="cform-control" /><br />
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Investment Visuals
                                                        </h4>
                                                        <label>Caption</label><br />
                                                        <input type="text" id="service-def-strategy"
                                                            class="form-control" /><br />
                                                        <label>Upload Image</label><br />
                                                        <input type="file" class="form-control" /><br />

                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Investment Earnings
                                                        </h4>
                                                        <label>Date</label><br />
                                                        <input type="date" id="service-def-strategy"
                                                            class="form-control" /><br />
                                                        <label>Amount</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="cform-control" /><br />
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">
                                                            Add Insured Assets
                                                        </h4>
                                                        <label>Asset Name</label><br />
                                                        <input type="text" id="service-def-strategy"
                                                            class="form-control" /><br />
                                                        <label>Quantity</label><br />
                                                        <input type="number" id="service-def-indicator"
                                                            class="form-control" /><br />

                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading p-2" data-toggle="collapse" data-target="#collapse2"
                                        data-parent="#accordion">
                                        <h4 class="panel-title my-text-color-white">
                                            Create news Activities!
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <!-- Start: Navigation -->
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        News Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        TV Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        Podcast Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#" style="color:purple; font-size: 20px;">
                                                        Blog
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- End: Navigation -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Navigation -->
                        </div>
                    </div>

                    <div class="col-md-12 card">

                    </div>
                </div>


            </div>
            <div class="col-md-1"></div>
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
