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

    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

    <link rel="stylesheet" href="/css/style2.css">

</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-12 p-5" style="padding:25px">

                <h2 class="text-center">Products In  {{ $PageDescription }}</h2>

                <div class="row p-5">

                    @for ($index = 0; $index < count($ProductsTypeSector); $index++)

                        <div class="col-md-3 card p-5"
                        onclick="window.location.assign('/user/rawmate/product/{{ $ProductsTypeSector[$index]['ProductName'] }}/{{ $ProductsTypeSector[$index]['ProductId'] }}')">

                            <div class="card-body">

                                <img class="lozad my-ecom-img" data-src='{{ $ProductsTypeSector[$index]['ProductImage'] }}'
                                    alt='Product' />

                                <h3>
                                    {{ $ProductsTypeSector[$index]['ProductName'] }}
                                </h3>
                                <h4> <sup>{{ $ProductsTypeSector[$index]['ProductCurrency'] }}</sup>
                                    {{ $ProductsTypeSector[$index]['ProductPrice'] }}
                                </h4>
                                <p>{{ $ProductsTypeSector[$index]['ProductDescription'] }}
                                </p>

                            </div>

                        </div>

                    @endfor

                </div>

            </div>
        </div>
    </div>

    <script>

        const observer = lozad();
        observer.observe();

    </script>

    <script>
        $(function() {

            'use strict';

            (function() {
                //부트스트랩 햄버거 클릭시 사이드바 on off

                var aside = $('.side-nav'),

                    showAsideBtn = $('.show-side-btn'),

                    contents = $('#contents');

                showAsideBtn.on("click", function() {

                    $("#" + $(this).data('show')).toggleClass('show-side-nav');

                    contents.toggleClass('margin');

                });

                if ($(window).width() <= 767) {

                    aside.addClass('show-side-nav');

                }
                $(window).on('resize', function() {

                    if ($(window).width() > 767) {

                        aside.removeClass('show-side-nav');

                    }

                });

                // dropdown menu in the side nav
                var slideNavDropdown = $('.side-nav-dropdown');

                $('.side-nav .categories li').on('click', function() {

                    $(this).toggleClass('lol').siblings().removeClass('lol');

                    if ($(this).hasClass('lol')) {

                        $(this).find('.side-nav-dropdown').slideToggle('fast');

                        $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

                    } else {

                        $(this).find('.side-nav-dropdown').slideUp('fast');

                    }

                });

                $('.side-nav .close-aside').on('click', function() {

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
