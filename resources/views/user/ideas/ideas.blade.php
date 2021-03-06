<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->
    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Profile-Card-1.css">
    <link rel="stylesheet" href="/assets1/css/styles.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="/assets1/css/ideas.css">

    <link rel="stylesheet" href="/assets1/css/newSideNav.css">

    <link rel="stylesheet" href="/assets1/css/indicatorsAndStrategies.css">


</head>

<body>

     <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
     @include('/user/layout/side-nav')
     <!-- End: Vertical Left-SideBar by Jigar Mistry -->
     <!-- Start: Top Navbar -->

     <!-- End: Top Navbar -->

<div class="wrapper" style="width: 100%; display: table;">

<nav> <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a href="#block1">Trending</a></li>
            <li><a href="/user/ideas/financial-literacy#">Financial Literacy</a></li>
            <li><a href="/user/ideas/strategies-and-indicators#">Startegies and Indicators</a></li>
            <li><a href="#block3"  style="color: rgb(245,67,67); font-size: 15px;">POST YOUR IDEA</a></li>
        </ul>
    </nav>

<div style="display: table-row">
  <div class="item item--clip" style="padding-left: 150px; width: 600px; display: table-cell;">
    <div class="demo">
      <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" alt="" style="width:150px; height:150px; align-content: center;"/><br><br>
      <h4 class="card-title" style="color: rgb(245,67,67); font-size: 15px;">Friends: 4M | Shares: 1M</h4>
      <button class="follow"><span>FOLLOW</span></button>
    </div>

    <div class="text">
     <h3 style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: purple;">John Williams</h3>
      <p  style="font-size:15px;">2 December 2020, 07:34 AM</p>
      <br/>
      <div class="code--css" style="font-size:15px;">
            <p style="padding: 5%; color:white; letter-spacing: 1px;">
                Consider a few stats about how the typical American handles money:
                Nearly four out of every five U.S. workers live paycheck to paycheck.
                Over a quarter never save any money from month to month.
                Almost 75% are in some form of debt, and most assume they always will be.
            </p>
      </div>
      <br>

                <i style="font-size:24px; color:red;">❤</i>&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-comments" style="font-size:24px; color:lightblue;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                <i style="font-size:24px">&#128392;</i>&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="fa fa-star checked" style="font-size:15px;"></span>
                <span class="fa fa-star checked" style="font-size:15px;"></span>
                <span class="fa fa-star checked" style="font-size:15px;"></span>
                <span class="fa fa-star" style="font-size:15px;"></span>
                <span class="fa fa-star" style="font-size:15px;"></span> &nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-thumbs-up" style="font-size:24px; color:purple;">Invite </i>
            </div>
        </div>

            <div class="card-body" style="display: table-cell; width: 300px">
                <h4 class="card-title" style="color: rgb(245,67,67);">Related Posts</h4>

                <div class="col" style="color: grey"><i class="fa fa-arrow-circle-right"></i>
                <p class="description" style="color: grey"><strong>Worlds best strategy created by one of the memebers ...</strong></p>
                </div>
                <div class="col" style="color: grey"><i class="fa fa-arrow-circle-right"></i>
                    <p class="description"><strong>Top start up reaches finals in Finland ...</strong></p>
                </div>
                <div class="col" style="color: grey"><i class="fa fa-arrow-circle-right"></i>
                    <p class="description"><strong>Investors look forward to new tech ...</strong></p>
                </div>
                <div class="col" style="color: grey"><i class="fa fa-arrow-circle-right"></i>
                    <p class="description"><strong>How I made my First $1 Million in ...</strong></p>
                </div>
            </div>
        </div>
    </div>

  </div>
  </div>
      <!-- Other POST -->



  </div>
</div>




  </div>
</div>
<div style="padding-top:10%">

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
</body>

</html>
