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
    <link rel="stylesheet" href="/assets1/css/awardsNav.css">
    <link rel="stylesheet" href="/assets1/css/Rawmat-cards.css">
    <link rel="stylesheet" href="/assets1/css/rawmat-card(Timeline).css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

    <link rel="stylesheet" href="/css/style2.css">

</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->

    <div class='column'>
        <div class='green-column'>
            <section class="container">
                <div class="containerr">
                    <div class="tabs">
                        <input type="radio" id="radio-1" name="tabs" />
                        <label class="tab" for="radio-1">Timeline</label>
                        <input type="radio" id="radio-2" name="tabs" checked />
                        <label class="tab" for="radio-2">Overview</label>
                        <input type="radio" id="radio-3" name="tabs" />
                        <label class="tab" for="radio-3">Brands</label>
                        <span class="glider"></span>
                    </div>
                    
                </div>
                <script>
                    window.onload = function onload() {
                        console.log('onload');
                        $("#Timeline").hide();
                        $("#Trending").show();
                        $("#ShareInvestment").hide();
                        $("#exampleFormControlSelect1").hide();

                    }
                    $(document).ready(function() {

                        $("#radio-1").click(function() {
                            $("#Timeline").show();
                            $("#Trending").hide();
                            $("#ShareInvestment").hide();
                        });

                        $("#radio-2").click(function() {
                            $("#Timeline").hide();
                            $("#Trending").show();
                            $("#ShareInvestment").hide();
                        });

                        $("#radio-3").click(function() {
                            $("#Timeline").hide();
                            $("#Trending").hide();
                            $("#ShareInvestment").show();
                        });

                        $("#activate").click(function() {
                            $("#exampleFormControlSelect1").show();
                        });
                    })

                </script>
                <!-- Start: Top Navbar -->
                <main style="padding-top:10%">
                    <section id="Trending">
                        <div class="rad-body-wrapper rad-nav-min">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Processed<ul class="rad-panel-action">
                                                        <li><i class="fa fa-chevron-down"></i></li>
                                                        <li><i class="fa fa-rotate-right"></i></li>
                                                        <li><i class="fa fa-cog"></i>
                                                        <li><i class="fa fa-close"></i>
                                                        </li>
                                                    </ul>
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="rad-info-box rad-txt-success"
                                                    onclick="window.location.assign('/user/rawmate/type/2/sector/Mines');">
                                                    MINES
                                                </div>
                                                <div class="rad-info-box rad-txt-success"
                                                    onclick="window.location.assign('/user/rawmate/type/2/sector/Plants');">
                                                    PLANTS
                                                </div>
                                                <div class="rad-info-box rad-txt-success"
                                                    onclick="window.location.assign('/user/rawmate/type/2/sector/Animals');">
                                                    ANIMALS
                                                </div>
                                                <div class="rad-info-box rad-txt-success"
                                                    onclick="window.location.assign('/user/rawmate/type/2/sector/RealEstate');">
                                                    REAL ESTATE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">UNPROCESSED<ul class="rad-panel-action">
                                                        <li><i class="fa fa-chevron-down"></i></li>
                                                        <li><i class="fa fa-rotate-right"></i></li>
                                                        <li><i class="fa fa-cog"></i>
                                                        <li><i class="fa fa-close"></i>
                                                        </li>
                                                    </ul>
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-body">
                                                    <div class="rad-info-box rad-txt-success"
                                                        onclick="window.location.assign('/user/rawmate/type/1/sector/Mine');">
                                                        MINES
                                                    </div>
                                                    <div class="rad-info-box rad-txt-success"
                                                        onclick="window.location.assign('/user/rawmate/type/1/sector/Plants');">
                                                        PLANTS
                                                    </div>
                                                    <div class="rad-info-box rad-txt-success"
                                                        onclick="window.location.assign('/user/rawmate/type/1/sector/Animals');">
                                                        ANIMALS
                                                    </div>
                                                    <div class="rad-info-box rad-txt-success"
                                                        onclick="window.location.assign('/user/rawmate/type/1/sector/RealEstate');">
                                                        REAL ESTATE
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!-- TIME LINE SECTIONPO -->
                    <section id="Timeline" style="display: none;">
                        <div class="rad-body-wrapper rad-nav-min" align="center">

                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sel1">Products Category:</label>
                                        <select onchange="changeEcomCategoryView()" class="form-control"
                                            id="selChangeCategory">
                                            @php

                                            $rootFolder = './products';
                                            $folderScan = scandir($rootFolder);

                                            @endphp

                                            @for ($index = 2; $index < count($folderScan); $index++)

                                                @if (is_dir($rootFolder . '/' .
                                                $folderScan[$index])) <option
                                                value='{{ $folderScan[$index] }}'>
                                                {{ $folderScan[$index] }}
                                                </option> @endif

                                            @endfor

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">

                                    <div id="CategoryMenu1">

                                        <ul class="nav nav-pills my-ecom-nav">
                                            @php

                                            $navCounter = 0;

                                            @endphp

                                            @for ($index = 0; $index < count($ProductSort); $index++)
                                                @if ($ProductSort[$index]['Category'] ===
                                                'Agriculture') @if ($navCounter == 0)

                                                    <li class="nav-item active">
                                                    <a class="nav-link active" data-toggle="pill"
                                                    href="#catgegoryAgriculture{{ $index }}">
                                                    {{ $ProductSort[$index]['SubCategory'] }}
                                                    </a>
                                                    </li>

                                                    @php

                                                    $navCounter = $navCounter + 1;

                                                    @endphp

                                                @else

                                                    <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill"
                                                    href="#catgegoryAgriculture{{ $index }}">
                                                    {{ $ProductSort[$index]['SubCategory'] }}
                                                    </a>
                                                    </li> @endif
                                                @endif
                                            @endfor

                                        </ul>


                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            @php

                                            $navCounter = 0;

                                            @endphp

                                            @for ($index = 0; $index < count($ProductSort); $index++)

                                                @if ($ProductSort[$index]['Category'] ===
                                                'Agriculture') @if ($navCounter == 0)

                                                    <div class="tab-pane active"
                                                    id="catgegoryAgriculture{{ $index }}">

                                                    <div class="row">

                                                    @for ($index2 = 0; $index2 < count($GetProducts); $index2++)

                                                        @if ($GetProducts[$index2]['SubCategory'] == $ProductSort[$index]['SubCategory'])

                                                            <div class='col-sm-3'
                                                            onclick="window.location.assign('/user/rawmate/product/{{ $GetProducts[$index2]['ProductName'] }}/{{ $GetProducts[$index2]['ProductId'] }}')">

                                                            <img class="lozad my-ecom-img"
                                                            data-src='{{ $GetProducts[$index2]['ProductImage'] }}'
                                                            alt='Product' />

                                                            <h3>
                                                            {{ $GetProducts[$index2]['ProductName'] }}
                                                            </h3>
                                                            <h4>
                                                            <sup>{{ $GetProducts[$index2]['ProductCurrency'] }}</sup>
                                                            {{ $GetProducts[$index2]['ProductPrice'] }}
                                                            </h4>
                                                            <p>
                                                            {{ $GetProducts[$index2]['ProductDescription'] }}
                                                            </p>

                                                            </div> @endif

                                                        @endfor

                                        </div>

                                    </div>

                                    @php

                                    $navCounter = $navCounter + 1;

                                    @endphp

                                @else

                                    <div class="tab-pane fade" id="catgegoryAgriculture{{ $index }}">

                                        <div class="row">

                                            @for ($index2 = 0; $index2 < count($GetProducts); $index2++)

                                                @if ($GetProducts[$index2]['SubCategory'] ==
                                                $ProductSort[$index]['SubCategory']) <div
                                                class='col-sm-3'
                                                onclick="window.location.assign('/user/rawmate/product/{{ $GetProducts[$index2]['ProductName'] }}/{{ $GetProducts[$index2]['ProductId'] }}')">



                                                <img class="lozad my-ecom-img"
                                                data-src='{{ $GetProducts[$index2]['ProductImage'] }}'
                                                style='width:100%;height: auto;'
                                                alt='Product' />

                                                <h3>
                                                {{ $GetProducts[$index2]['ProductName'] }}
                                                </h3>
                                                <h4>
                                                <sup>{{ $GetProducts[$index2]['ProductCurrency'] }}</sup>
                                                {{ $GetProducts[$index2]['ProductPrice'] }}
                                                </h4>
                                                <p>{{ $GetProducts[$index2]['ProductDescription'] }}
                                                </p>
                                                </div> @endif

                                            @endfor

                                        </div>

                                    </div>

                                    @endif
                                    @endif

                                    @endfor
                                </div>

                            </div>

                            <div id="CategoryMenu2">



                                <ul class="nav nav-pills my-ecom-nav">
                                    @php

                                    $navCounter = 0;

                                    @endphp

                                    @for ($index = 0; $index < count($ProductSort); $index++)
                                        @if ($ProductSort[$index]['Category'] === 'Hardware') @if ($navCounter == 0)

                                            <li class="nav-item active">
                                            <a class="nav-link active" data-toggle="pill"
                                            href="#catgegoryHardware{{ $index }}">
                                            {{ $ProductSort[$index]['SubCategory'] }}
                                            </a>
                                            </li>

                                            @php

                                            $navCounter = $navCounter + 1;

                                            @endphp

                                        @else

                                            <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill"
                                            href="#catgegoryHardware{{ $index }}">
                                            {{ $ProductSort[$index]['SubCategory'] }}
                                            </a>
                                            </li> @endif
                                        @endif
                                    @endfor

                                </ul>


                                <!-- Tab panes -->
                                <div class="tab-content">

                                    @php

                                    $navCounter = 0;

                                    @endphp

                                    @for ($index = 0; $index < count($ProductSort); $index++)

                                        @if ($ProductSort[$index]['Category'] === 'Hardware') @if ($navCounter == 0)

                                            <div class="tab-pane active"
                                            id="catgegoryHardware{{ $index }}">

                                            <div class="row">

                                            @for ($index2 = 0; $index2 < count($GetProducts); $index2++)

                                                @if ($GetProducts[$index2]['SubCategory'] == $ProductSort[$index]['SubCategory'])

                                                    <div class='col-sm-3'
                                                    onclick="window.location.assign('/user/rawmate/product/{{ $GetProducts[$index2]['ProductName'] }}/{{ $GetProducts[$index2]['ProductId'] }}')">

                                                    <img class="lozad my-ecom-img"
                                                    data-src='{{ $GetProducts[$index2]['ProductImage'] }}'
                                                    style='width:100%;height: auto;'
                                                    alt='Product' />

                                                    <h3>
                                                    {{ $GetProducts[$index2]['ProductName'] }}
                                                    </h3>
                                                    <h4>
                                                    <sup>{{ $GetProducts[$index2]['ProductCurrency'] }}</sup>
                                                    {{ $GetProducts[$index2]['ProductPrice'] }}
                                                    </h4>
                                                    <p>{{ $GetProducts[$index2]['ProductDescription'] }}
                                                    </p>

                                                    </div> @endif

                                                @endfor

                                </div>

                            </div>

                            @php

                            $navCounter = $navCounter + 1;

                            @endphp

                        @else

                            <div class="tab-pane fade" id="catgegoryHardware{{ $index }}">

                                <div class="row">

                                    @for ($index2 = 0; $index2 < count($GetProducts); $index2++)

                                        @if ($GetProducts[$index2]['SubCategory'] ==
                                        $ProductSort[$index]['SubCategory']) <div
                                        class='col-sm-3'
                                        onclick="window.location.assign('/user/rawmate/product/{{ $GetProducts[$index2]['ProductName'] }}/{{ $GetProducts[$index2]['ProductId'] }}')">

                                        <img class="lozad my-ecom-img"
                                        data-src='{{ $GetProducts[$index2]['ProductImage'] }}'
                                        style='width:100%;height: auto;'
                                        alt='Product' />

                                        <h3>
                                        {{ $GetProducts[$index2]['ProductName'] }}
                                        </h3>
                                        <h4>
                                        <sup>{{ $GetProducts[$index2]['ProductCurrency'] }}</sup>
                                        {{ $GetProducts[$index2]['ProductPrice'] }}
                                        </h4>
                                        <p>{{ $GetProducts[$index2]['ProductDescription'] }}
                                        </p>
                                        </div> @endif

                                    @endfor

                                </div>

                            </div>

                            @endif
                            @endif

                            @endfor
                        </div>



        </div>

        <script>
            function changeEcomCategoryView() {
                const boxCategoryMenu1 = document.getElementById("CategoryMenu1");
                const boxCategoryMenu2 = document.getElementById("CategoryMenu2");
                const ChangeCategory = document.getElementById("selChangeCategory").value;

                if (ChangeCategory == "Agriculture") {
                    boxCategoryMenu1.style.display = "inline";
                    boxCategoryMenu2.style.display = "none";
                    //alert("Param:" + ChangeCategory);
                }

                if (ChangeCategory == "Hardware") {
                    boxCategoryMenu1.style.display = "none";
                    boxCategoryMenu2.style.display = "inline";
                    //alert("Param:" + ChangeCategory);
                }

            }

            changeEcomCategoryView();
            //alert("hello");

        </script>

    </div>
    </div>

    </div>
    </section>

    <script>
        const observer = lozad();
        observer.observe();

    </script>


    <section id="ShareInvestment" style="display: none;">
        <div class="rad-body-wrapper rad-nav-min">
            <div class="container-fluid">



                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active"
                        style="background-color:purple;color:white">
                        <h1>Raw Material Brands</h1>
                    </button>

                    @for ($i_product_sort = 0; $i_product_sort < count($ProductSort); $i_product_sort++)

                        <button
                            onclick='window.location.assign("/user/rawmate/brand/{{ $ProductSort[$i_product_sort]['SubCategory'] }} ")'
                            type="button" class="list-group-item list-group-item-action">
                            {{ $ProductSort[$i_product_sort]['SubCategory'] }}
                            <!--<span class="badge badge-dark badge-pill">R20114</span>-->
                        </button>

                    @endfor
                    <!--<button type="button" class="list-group-item list-group-item-action">Dapibus ac
                                        facilisis in <span class="badge badge-dark badge-pill">R20114</span> </button>

                                    <button type="button" class="list-group-item list-group-item-action">Morbi leo risus
                                        <span class="badge badge-dark badge-pill">R6714</span></button>
                                    <button type="button" class="list-group-item list-group-item-action">Porta ac
                                        consectetur ac <span class="badge badge-dark badge-pill">R2099</span></button>
                                    <button type="button" class="list-group-item list-group-item-action"
                                        disabled>Vestibulum at eros <span
                                            class="badge badge-dark badge-pill">R5014</span></button>-->
                </div>




            </div>
        </div>
    </section>

    </main>
    <!-- End: Top Navbar -->
    <!-- Modal -->

    </div>

    <div id="popup1" class="overlay" style="padding-bottom:10%">
        <div class="popup">
            <h2>Share Investment</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">BUDGET RANGES </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>25000-50000 </option>
                        <option>60000-100000</option>
                        <option>110000-160000</option>
                        <option>170000-200000</option>
                        <option>200000+</option>
                    </select>

                    <a class="btn red"> Confirm Investment Amount</a>
                </div>
            </div>
        </div>
        <!-- REGIONS -->
        <div id="popup2" class="overlay" style="padding-bottom:10%">
            <div class="popup">
                <h2>REGIONS</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose one </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>America</option>
                            <option>South America </option>
                            <option>South Africa </option>
                            <option>West Africa</option>
                            <option>East Africa</option>
                            <option>Europe</option>
                            <option>West Asia</option>
                            <option>East Asia</option>
                            <option>Australia</option>
                        </select>

                        <a class="btn red"> Confirm Investment Amount</a>
                    </div>
                </div>
            </div>


            <!-- Mode -->

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

                                $(this).siblings().find('.side-nav-dropdown').slideUp(
                                    'fast');

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
