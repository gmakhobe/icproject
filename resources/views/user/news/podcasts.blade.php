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

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
            <br><br>
                <!-- Start: Jumbotron -->
                <div class="code--css" style="height: 160px;">
                    <div style="padding: 2%">
                        <h2 style="color:white;">Plugin Podcasts and Radio</h2>
                        <h3 style="color:white;">Plugin Podcast and Radio for users!</h3>
                        <h4 style="color:white;"><i>Discover promising investing opportunities, by laying out money now to get more money back in the future</i></h4><br>
                </div>
                    </div>
                </div>
                <br>
                <!-- End: Jumbotron -->

                <!-- Start: Nav -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#favourates"><span
                                class="my-text-color-white" style="color:purple; font-size: 20px;">Favourites</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#podcasts"><span
                                class="my-text-color-white" style="color:purple; font-size: 20px;">Podcasts</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#top-20-podcasts"><span
                                class="my-text-color-white" style="color:purple; font-size: 20px;">Top 20 Podcasts</span></a>
                    </li>

                </ul>
                <!-- End: Nav -->
                <!-- Start: Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane fade" id="top-20-podcasts">

                        <div class="row my-bg-color-grey">

                            @for ($index = 0; $index < count($GetTopPodcasts); $index++)
                                @php $TopPodcasts = $GetTopPodcasts[$index] @endphp
                                <div class="col-md-4 p-3 card my-bg-color-grey TopPodcast">
                                    <!-- Start: Podcast -->
                                    <div class="p-3  card-body my-text-color-white">
                                        <center>
                                            <img onclick="PlayPodcast('{{ $TopPodcasts['Name'] }}', '{{ $TopPodcasts['Subject'] }}', '{{ $TopPodcasts['Rating'] }}', '{{ $TopPodcasts['Link'] }}', '{{ $TopPodcasts['Id'] }}')"
                                                style="width:100%; height: auto; border-radius: 5%"
                                                src="https://img1.s3wfg.com/web/img/images_uploaded/b/7/financedata620_test_10.jpg"/>
                                            <p class="my-text-color-white">
                                                <strong>
                                                    <span id="Title{{ $index }}">{{ $TopPodcasts['Name'] }}</span>
                                                </strong>
                                                <button class="btn btn-light" data-toggle="popover"
                                                    title="{{ $TopPodcasts['Username'] }}"
                                                    data-content="{{ $TopPodcasts['Description'] }}">
                                                    <i class="fa fa-bars" aria-hidden="true"></i>

                                                </button>
                                                <br />
                                                <span id="Subject{{ $index }}">{{ $TopPodcasts['Subject'] }}</span>
                                                <br />
                                                Stars <span
                                                    id="Rating{{ $index }}">{{ $TopPodcasts['Rating'] }}/5</span>
                                            </p>
                                        </center>
                                    </div>
                                    <!-- End: Post-->
                                </div>

                            @endfor

                        </div>

                    </div>
                    <div class="tab-pane fade" id="favourates">

                        <div class="row my-bg-color-grey">

                            @for ($index = 0; $index < count($GetTopRatedPodcasts); $index++)
                                @php $TopPodcasts = $GetTopRatedPodcasts[$index] @endphp
                                <div class="col-md-4 p-3 card my-bg-color-grey TopPodcast">
                                    <!-- Start: Podcast -->
                                    <div class="p-3  card-body my-text-color-white">
                                        <center>
                                            <img onclick="PlayPodcast('{{ $TopPodcasts['Name'] }}', '{{ $TopPodcasts['Subject'] }}', '{{ $TopPodcasts['Rating'] }}', '{{ $TopPodcasts['Link'] }}', '{{ $TopPodcasts['Id'] }}')"
                                                style="width:100%; height: auto; border-radius: 5%"
                                                src="http://www.dolmanbateman.com.au/wp-content/uploads/2012/09/Financial-Newspapers.jpg" alt=" - Image" />
                                            <p class="my-text-color-white">
                                                <strong>
                                                    <span id="Title{{ $index }}">{{ $TopPodcasts['Name'] }}</span>
                                                </strong>
                                                <button class="btn btn-light" data-toggle="popover"
                                                    title="{{ $TopPodcasts['Username'] }}"
                                                    data-content="{{ $TopPodcasts['Description'] }}">
                                                    <i class="fa fa-bars" aria-hidden="true"></i>

                                                </button>
                                                <br />
                                                <span id="Subject{{ $index }}">{{ $TopPodcasts['Subject'] }}</span>
                                                <br />
                                                Stars <span
                                                    id="Rating{{ $index }}">{{ $TopPodcasts['Rating'] }}/5</span>
                                            </p>
                                        </center>
                                    </div>
                                    <!-- End: Post-->
                                </div>

                            @endfor

                        </div>

                    </div>
                    <div class="tab-pane active" id="podcasts">
                        <div class="row my-bg-color-grey">

                            <div class="col-md-12 card my-bg-color-grey">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="Search for Podcast"
                                                id="newsChannelSearch" />
                                        </div>
                                        <div class="col-md-3">
                                            <button onclick="NewsChannelSearch('newsChannelSearch', 0)"
                                                class="btn btn-light">Search</button>
                                        </div>
                                    </div>

                                </div>
                                <br>
                            </div>

                            <div id="PodcastDesplay" class="col-md-12 row my-bg-color-grey">

                                @for ($index = 0; $index < count($GetLatestPodcasts); $index++)
                                    @php $TopPodcasts = $GetLatestPodcasts[$index] @endphp
                                    <div class="col-md-4 p-3 card my-bg-color-grey TopPodcast">
                                        <!-- Start: Podcast -->
                                        <div class="p-3  card-body my-text-color-white">
                                            <center>
                                                <img onclick="PlayPodcast('{{ $TopPodcasts['Name'] }}', '{{ $TopPodcasts['Subject'] }}', '{{ $TopPodcasts['Rating'] }}', '{{ $TopPodcasts['Link'] }}', '{{ $TopPodcasts['Id'] }}')"
                                                    style="width:100%; height: auto; border-radius: 5%"
                                                    src="https://www.york.ac.uk/media/study/courses/postgraduate/management/msc-mbf-hero-1200.jpg" alt=" - Image" />
                                                <p class="my-text-color-white">
                                                    <strong>
                                                        <span id="Title{{ $index }}">{{ $TopPodcasts['Name'] }}</span>
                                                    </strong>
                                                    <button class="btn btn-light" data-toggle="popover"
                                                        title="{{ $TopPodcasts['Username'] }}"
                                                        data-content="{{ $TopPodcasts['Description'] }}">
                                                        <i class="fa fa-bars" aria-hidden="true"></i>

                                                    </button>
                                                    <br />
                                                    <span id="Subject{{ $index }}">{{ $TopPodcasts['Subject'] }}</span>
                                                    <br />
                                                    Stars <span
                                                        id="Rating{{ $index }}">{{ $TopPodcasts['Rating'] }}/5</span>
                                                </p>
                                            </center>
                                        </div>
                                        <!-- End: Post-->
                                    </div>

                                @endfor

                            </div>

                        </div>
                    </div>
                </div>
                <!-- End: Tab Content-->
                <div class="fixed-bottom my-bg-color-grey p-2">
                       <center>
                            <p id="AudioInfo" class=" my-text-color-white"><strong>Title</strong> &sdot;
                                Topic &sdot;
                                Rating &sdot; <button class="btn btn-light"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                </p>
                        </center>
                        <audio id="AudioPlayer" controls style="width:100%;">
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                </div>

                <script>
                    //myShow = w3.slideshow(".TopPodcast", 0);
                    function PlayPodcast(Name, Subject, Rating, Link, PodcastId) {
                        //Get Elements
                        const AudioInfo = document.getElementById("AudioInfo");
                        const AudioPlayer = document.getElementById("AudioPlayer");
                        //Assign Values to elemt
                        AudioInfo.innerHTML =
                            `<strong>${Name}</strong> &sdot; ${Subject} &sdot; ${Rating}`;
                        //Play with audio tag
                        AudioPlayer.src = Link;
                        AudioPlayer.play("play");

                        fetch(`/user/news/podcasts/increment/${PodcastId}`, {
                                method: "get",
                                headers: {
                                    'X-CSRF-TOKEN': "abcdefghij"
                                }
                            })
                            .then(res => {
                                if (res.status == 200)
                                    return res.text();
                                else
                                    swal("Podcasts", "Could not send a request!");
                            })
                            .then(text => {
                                const response = JSON.parse(text);

                                if(response){
                                    console.log("View");
                                }else{
                                    swal("Podcasts", "Could not add view!");
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

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });

    </script>

</body>

</html>
