<!DOCTYPE html>
<html>

<head>

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
            <br>
                <!-- Start: Jumbotron -->
                <div class="code--css" style="height: 160px;">
                    <div style="padding: 2%">                    
                    <h2 style="color:white;">Plugin Channels</h2>
                    <h3 style="color:white;">News and TV Channels</h3>
                    <h4 style="color:white;"><i>Substantial and well-presented news to keep you on track with your investments</i></h4><br>

                </div>
                </div>
                <br>
                <!-- End: Jumbotron -->

                <!-- Start: Nav -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link active" href="#newsChannel"><span
                                class="my-text-color-white">News Channels
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link" href="#tvChannels"><span class="my-text-color-white">TV
                                Channels</span></a>
                    </li>
                </ul>
                <!-- End: Nav -->

                <div class="tab-content">
                    <div class="tab-pane active" id="newsChannel">

                        <div class="row my-bg-color-grey">

                            <div class="col-md-12 card my-bg-color-grey">


                                <div class="card-body p-3">

                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="Search for channel"
                                                id="newsChannelSearch" />
                                        </div>
                                        <div class="col-md-3">
                                            <button onclick="NewsChannelSearch('newsChannelSearch', 0)"
                                                class="btn btn-light">Search</button>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <div class="col-md-12 card my-bg-color-grey">

                                <div id="newsChannelSearchdes" class="row">

                                    @foreach ($ChannelList as $ChannelItem)



                                        <div class="col-md-3 card my-bg-transparent-grey">

                                            <div class="card-body">

                                                <a
                                                    href="/user/news/channel/name/{{ $ChannelItem['Name'] }}/{{ $ChannelItem['Id'] }}/0">

                                                    <img class="my-news-card-channel-list-image"
                                                        src="http://supportmaxb.com/blog/wp-content/uploads/2016/09/max-b-breaking-news.jpeg"
                                                        alt="{{ $ChannelItem['Name'] }} - Image"
                                                        style="width: 100%; height: 100%; border-radius: 5%">
                                                    <h4 class="newsChannels p-1 my-text-center my-text-color-white" style="color:purple;">
                                                        {{ $ChannelItem['Name'] }}</h4>
                                                    <h5 class="p-1 my-text-color-white">Published Date:
                                                        {{ $ChannelItem['Date'] }}</h5>

                                                </a>
                                            </div>

                                        </div>

                                    @endforeach
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="tab-pane fade" id="tvChannels">

                        <div class="row">
                            <div class="col-md-12 card my-bg-color-grey">


                                <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" placeholder="Search for channel"
                                                    id="tvChannelSearch" />
                                            </div>
                                            <div class="col-md-3">
                                                <button onclick="NewsChannelSearch('tvChannelSearch', 1)"
                                                    class="btn btn-light">Search</button>
                                            </div>
                                        </div>

                                </div>

                                <br>
                            </div>

                            <div class="col-md-12 card my-bg-color-grey">

                                <div id="tvChannelSearchdes" class="row">

                                    @foreach ($TVNewsChannels as $ChannelItem)

                                        <div class="col-md-3 card my-bg-transparent-grey">

                                            <div class="card-body">

                                                <a
                                                    href="/user/news/channel/name/{{ $ChannelItem['Name'] }}/{{ $ChannelItem['Id'] }}/1">

                                                    <img class="my-news-card-channel-list-image"
                                                        src="https://images.theconversation.com/files/124978/original/image-20160602-23293-16gnzi5.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip"
                                                        alt="{{ $ChannelItem['Name'] }} - Image"
                                                        style="width: 100%; height: 100%; border-radius: 5%">
                                                    <h4 class="newsChannels p-1 my-text-center my-text-color-white" style="color:purple;">
                                                        {{ $ChannelItem['Name'] }}</h4>
                                                    <h6 class="p-1 my-text-color-white">Published Date:
                                                        {{ $ChannelItem['Date'] }}</h6>

                                                </a>
                                            </div>

                                        </div>

                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <script>
                            function NewsChannelSearch(param, type) {

                                const search = document.getElementById(param).value;
                                const Link = `/user/news/channel/search/${search}/${type}`;

                                if (!search.length || !search) {
                                    swal("Channel Search", `Search field is empty, try again!`);
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
                                            swal("Channel Search",
                                                "Could not send channel search request!");
                                    })
                                    .then(text => {

                                        results = JSON.parse(text);
                                        const display = document.getElementById(param + "des");

                                        if (results.status == 0) {
                                            swal("Channel Search",
                                                `Could not find any channel with title of ${search}`);
                                        } else {

                                            swal("Channel Search", "Success Results");

                                            display.innerHTML = "";

                                            console.log("Loop");
                                            console.log(results.results);

                                            for ($ChannelItem of results.results) {

                                                console.log("Loop");
                                                console.log($ChannelItem);

                                                display.innerHTML += `

                                                <div class="col-md-3 card my-bg-transparent-grey">

                                                <div class="card-body">

                                                    <a
                                                        href="/user/news/channel/name/${ $ChannelItem['Name'] }/${ $ChannelItem['Id'] }/${type}">

                                                        <img class="my-news-card-channel-list-image"
                                                            src="${ $ChannelItem['Logo'] }"
                                                            alt="${ $ChannelItem['Name'] } - Image">
                                                        <h6 class="newsChannels p-1 my-text-center my-text-color-white">
                                                            ${ $ChannelItem['Name'] }</h6>
                                                        <p class="p-1 my-text-color-white">Published Date:
                                                            ${ $ChannelItem['Date'] }</p>

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
