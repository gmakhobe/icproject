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


    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">

                <!-- Start: Jumbotron -->
                <div class="container jumbotron m-3 my-bg-color-grey">
                    <h3>Plugin Blogs</h3>
                    <p class="my-text-color-white">Go through Blogs and Blog Posts</p>
                </div>
                <!-- End: Jumbotron -->

                <!-- Start: Nav -->
                <ul class="nav nav-justified nav-pills">
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link active" href="#blogposts"><span
                                class="my-text-color-white">Blog Posts
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link" href="#blogs"><span
                                class="my-text-color-white">Blogs</span></a>
                    </li>
                </ul>
                <!-- End: Nav -->

                <div class="tab-content">
                    <div class="tab-pane active" id="blogposts">

                        <div class="row my-bg-color-grey">

                            @foreach ($GetLatestNewsBlogPosts as $NewsBlogPost)

                                <div class="col-md-12">
                                    <!-- Start: Post -->
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-6 my-bg-color-grey">

                                                <h5 class="my-text-color-white"><img
                                                        src="{{ $NewsBlogPost['ProfileLink'] }}"
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
                    <div class="tab-pane fade" id="blogs">

                        <div class="row">

                            <div class="col-md-12 card my-bg-color-grey">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="Search for blog"
                                                id="newsBlogSearch" />
                                        </div>
                                        <div class="col-md-3">
                                            <button onclick="NewsBlogSearch()"
                                                class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 card my-bg-color-grey">
                                <div id="newsBloSearchdes" class="row">

                                    @foreach ($GetLatestNewsBlogs as $NewsBlogs)

                                        <div class="col-md-3 card my-bg-transparent-grey">
                                            <div class="card-body">
                                                <a href="/user/news/blog/author/{{ $NewsBlogs["Username"] }}/{{ $NewsBlogs["UserId"] }}">
                                                    <img class="my-news-card-channel-list-image"
                                                        src="{{ $NewsBlogs["ProfileLink"] }}" alt="{{ $NewsBlogs["Username"] }} - Image">
                                                    <h6 class="newsChannels p-1 my-text-center my-text-color-white">
                                                        {{ $NewsBlogs["Username"] }}
                                                    </h6>
                                                    <p class="p-1 my-text-color-white my-text-center">
                                                        {{ $NewsBlogs["Date"] }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <script>
                            function NewsBlogSearch() {

                                const search = document.getElementById("newsBlogSearch").value;
                                const Link = `/user/news/blog/search/${search}`;

                                if (!search.length || !search) {
                                    swal("Blog Search", `Search field is empty, try again!`);
                                    return;
                                }

                                //Fetch Api to send a request
                                fetch(Link, {
                                        method: "get",
                                        headers: {
                                            'X-CSRF-TOKEN': "abcdefghij"
                                        }
                                    })
                                    .then(res => {
                                        if (res.status == 200)
                                            return res.text();
                                        else
                                            swal("Blog Search",
                                                "Could not send search request!");
                                    })
                                    .then(text => {

                                        results = JSON.parse(text);
                                        const display = document.getElementById("newsBloSearchdes");

                                        if (results.status == 0) {
                                            swal("Blog Search",
                                                `Could not find any blog with title of ${search}`);
                                        } else {

                                            swal("Blog Search", "Success Results");

                                            display.innerHTML = "";

                                            console.log("Loop");
                                            console.log(results.results);

                                            for ($ChannelItem of results.results) {

                                                console.log("Loop");
                                                console.log($ChannelItem);

                                                display.innerHTML += `

                                                <div class="col-md-3 card my-bg-transparent-grey">
                                                    <div class="card-body">
                                                        <a href="/user/news/blog/author/${ $ChannelItem['Username'] }/${ $ChannelItem['Id'] }">
                                                            <img class="my-news-card-channel-list-image"
                                                                src="${ $ChannelItem['ProfileLink'] }" alt="${ $ChannelItem['Username'] } - Image">
                                                            <h6 class="newsChannels p-1 my-text-center my-text-color-white">
                                                                ${ $ChannelItem['Username'] }
                                                            </h6>
                                                            <p class="p-1 my-text-color-white my-text-center">
                                                                ${ $ChannelItem['Date'] }
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                                `;

                                            }

                                        }

                                    })
                                    .catch(res => {
                                        //Print any error related to sending request
                                        //reject(`icFETCH Catch -> ${res}`);
                                        console.log("Catch");
                                        console.log(res);
                                    });

                            }

                        </script>

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
