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
</head>

<body style="background-color: rgb(33,31,31);margin-top: 2px;height: 201px;">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-6 card my-bg-color-grey p-3">
                        <div class="card-body">
                            <img class="my-rawmate-main-thumbnail" src="https://via.placeholder.com/500x500"
                                alt="Raw mate image" />
                        </div>
                    </div>
                    <div class="col-md-6 card my-bg-color-grey p-3">
                        <div class="card-body">
                            <center>
                                <h2 class="my-text-color-white">{{ $ProceesedRawMat[0]["ProductName"] }}</h2>
                                <h1 class="my-text-color-white"><strong>({{ $ProceesedRawMat[0]["ProductCurrency"] }}) {{ $ProceesedRawMat[0]["ProductPrice"] }}</h1>
                                <p class="my-text-color-white">{{ $ProceesedRawMat[0]["ProductDescription"] }}</p>
                                <p class="my-text-color-white">
                                    <a href="/user/rawmate/seller/{{ $ProceesedRawMat[0]["SellerName"] }}/{{ $ProceesedRawMat[0]["SellerId"] }}">{{ $ProceesedRawMat[0]["SellerName"] }}</a>
                                </p>
                                <label span class="my-text-color-white">Product Quantity</label><br>
                                <p><input type="number" placeholder="Product Quanity" value="1"> <span class="my-text-color-white">out of {{ $ProceesedRawMat[0]["ProductQuantity"] }}</span></p><br /><br />
                                <button type="button" class="btn btn-warning btn-block  p-3">Buy</button>

                                <p class="p-3 my-text-color-white">Terms and Conditions of purchasing</p>

                        </div>
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
    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
