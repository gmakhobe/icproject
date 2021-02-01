<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer-1.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer-2.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar.css">
    <link rel="stylesheet" href="/assets1/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="/assets1/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="/assets1/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="/assets1/css/Pretty-Table.css">
    <link rel="stylesheet" href="/assets1/css/styles.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">
    <link rel="stylesheet" href="/assets1/css/awards.less">
    <link rel="stylesheet" href="/assets1/css/awardsNav.css">
    <link rel="stylesheet" href="/assets1/css/awards-modal.css">
    <link rel="stylesheet/less" type="text/css" href="/assets1/css/awards.less" />
    <script src="//cdn.jsdelivr.net/npm/less@3.11"> </script>

</head>

<body onload="onload">
    @include('/user/layout/header-style-1')
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/header-style-1')
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->


<script>
          window.onload = function onload() {
            $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
          }

</script>
    <!-- Start: Top Navbar -->

    <div class='some-page-wrapper'>
  <div class='row'>
    <div class='column'>

    </div>
    <div class='column'>
      <div class='green-column'>
      <section class="container">
    <div class="containerr">
	<div class="tabs">
		<input type="radio" id="radio-1" name="tabs" checked />
		<label class="tab" for="radio-1">Home<span class="notification">2</span></label>
		<input type="radio" id="radio-2" name="tabs" />
		<label class="tab" for="radio-2">Explore</label>
		<input type="radio" id="radio-3" name="tabs" />
		<label class="tab" for="radio-3">Country/Region</label>
		<span class="glider"></span>
	</div>
    </div>


    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CHOOSE ONE
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">PROFILE</a></li>
    <li><a href="#">NOMINEES</a></li>
    <li><a href="#">WINNERS</a></li>
    <li><a href="#">RANKING </a></li>
    <li><a href="#">TIMELINE</a></li>

  </ul>
</div>


<div class="page-header">
        <h1>The highest growth of the year</h1>
    </div>
    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>Christopher Walken</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-christopher-walken.jpg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>Sean Penn</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-sean-penn.jpg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Purple">
                <h2>
                    <span>Clint Eastwood</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Million Dollar Baby
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-clint-eastwood.jpg">
                    </div>
                    <div class="mc-description">
                        He rose to international fame with his role as the Man with No Name in Sergio Leone's Dollars trilogy of spaghetti Westerns during the 1960s ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>

    </div>

    <!-- second roww -->
      <div class="page-header">
        <h1>The trader  of the year</h1>
    </div>
    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>Christopher Walken</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-christopher-walken.jpg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>Sean Penn</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-sean-penn.jpg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Purple">
                <h2>
                    <span>Clint Eastwood</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Million Dollar Baby
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-clint-eastwood.jpg">
                    </div>
                    <div class="mc-description">
                        He rose to international fame with his role as the Man with No Name in Sergio Leone's Dollars trilogy of spaghetti Westerns during the 1960s ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>

    </div>

<!-- Third row -->
    <div class="page-header">
        <h1>The Invention  of the year</h1>
    </div>
    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>Christopher Walken</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-christopher-walken.jpg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>Sean Penn</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Mystic River
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-sean-penn.jpg">
                    </div>
                    <div class="mc-description">
                        He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Purple">
                <h2>
                    <span>Clint Eastwood</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Million Dollar Baby
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://material-cards.s3-eu-west-1.amazonaws.com/thumb-clint-eastwood.jpg">
                    </div>
                    <div class="mc-description">
                        He rose to international fame with his role as the Man with No Name in Sergio Leone's Dollars trilogy of spaghetti Westerns during the 1960s ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>

    </div>
</section>
      </div>
    </div>
  </div>
</div>
    <!-- Start: Top Navbar -->
    <!-- Modal  -->
<!-- large modal -->
<div class="modal fade my-bg-color-grey"  id="StartUpIndex">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                               Sector Start-Up Index
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">

                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

    <!-- End: Top Navbar -->

    <!-- Start: Dark footer with social media icons -->

<!-- Mode -->

    <script >


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
    <!-- End: Dark footer with social media icons -->

    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
