<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->
    <title>{{ $Title }} - {{ $Name }}</title>
    <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles-1.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles.css">
    <link rel="stylesheet" href="/assets1/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1-1.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="/assets1/css/Bootstrap-Theme-Switchers.css">
    <link rel="stylesheet" href="/assets1/css/Dark-footer-with-social-media-icons.css">
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
    <link rel="stylesheet" href="/assets1/css/awards.less">
    <link rel="stylesheet" href="/assets1/css/awardsNav.css">
    <link rel="stylesheet/less" type="text/css" href="/assets1/css/awards.less" />
    <link rel="stylesheet" href="/assets1/css/indicatorsAndStrategies.css">

</head>

<body onload="onload" style="background-color: lightgray;">
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <div class="container">

        <div class="row" >

            <div class="col-md-1"></div>
            <div class="col-md-11 card" >

                <div class="card-body" >
                <nav> <!-- The nav link semantically marks your main site navigation -->
                    <ul>
                        <li>
                        <a href="/user/investment/aboutinvestments">About Investments</a></li>
                        <li><a href="/user/stockbrokers"  style="color: purple; font-size: 15px;">Start Trading</a></li>
                        <li><a href="/user/smallcapstock"  style="color: darkblue; font-size: 15px;">Small Cap Stocks</a></li>

                    </ul>
                    
                </nav>
                <div class="investments-img" style="padding-top: 20%; padding-left: 40%;"></div>
                

                    <!-- <h1>Investments</h1>
                    <h4 class="text-white"><i>Discover promising investing opportunities, by laying out money now to get more money back in the future</i></h4><br> -->

                    <div class="containerr">
                        <div class="tabs">
                            <input type="radio" id="radio-1" name="tabs" checked />
                            <label class="tab" for="radio-1" style="font-size: 20px;">Company</label>

                            <input type="radio" id="radio-2" name="tabs" />
                            <label class="tab" for="radio-2" style="font-size: 20px;">Services</label>

                            <input type="radio" id="radio-3" name="tabs" />
                            <label class="tab" for="radio-3" style="font-size: 20px;">Event</label>

                            <input type="radio" id="radio-4" name="tabs" />
                            <label class="tab" for="radio-4" style="font-size: 20px;">Hedge Fund</label>

                            <input type="radio" id="radio-5" name="tabs" />
                            <label class="tab" for="radio-5" style="font-size: 20px;">Start-up Index</label>

                            <input type="radio" id="radio-6" name="tabs" />
                            <label class="tab" for="radio-6" style="font-size: 20px;">News Channel</label>
                            <span class="glider"></span>
                        </div>
                        <script>
                            window.onload = function onload() {
                                console.log('onload');
                                $("#company").show();
                                $("#services").hide();
                                $("#event").hide();
                                $("#hedgefund").hide();
                                $("#start-up").hide();
                                $("#newschannel").hide();
                            }

                            $(document).ready(function() {

                                $("#radio-1").click(function() {
                                    $("#company").show();
                                    $("#services").hide();
                                    $("#event").hide();
                                    $("#hedgefund").hide();
                                    $("#start-up").hide();
                                    $("#newschannel").hide();
                                });

                                $("#radio-2").click(function() {
                                    $("#company").hide();
                                    $("#services").show();
                                    $("#event").hide();
                                    $("#hedgefund").hide();
                                    $("#start-up").hide();
                                    $("#newschannel").hide();
                                });

                                $("#radio-3").click(function() {
                                    $("#company").hide();
                                    $("#services").hide();
                                    $("#event").show();
                                    $("#hedgefund").hide();
                                    $("#start-up").hide();
                                    $("#newschannel").hide();
                                });

                                $("#radio-4").click(function() {
                                    $("#company").hide();
                                    $("#services").hide();
                                    $("#event").hide();
                                    $("#hedgefund").show();
                                    $("#start-up").hide();
                                    $("#newschannel").hide();
                                });

                                $("#radio-5").click(function() {
                                    $("#company").hide();
                                    $("#services").hide();
                                    $("#event").hide();
                                    $("#hedgefund").hide();
                                    $("#start-up").show();
                                    $("#newschannel").hide();
                                });

                                $("#radio-6").click(function() {
                                    $("#company").hide();
                                    $("#services").hide();
                                    $("#event").hide();
                                    $("#hedgefund").hide();
                                    $("#start-up").hide();
                                    $("#newschannel").show();
                                });
                            });

                        </script>


                    </div>
                    <br><br>

                    <div class="row my-text-color-white" style="background-color:white; border-radius: 2%;">

                        <div class="col-md-12" id="company">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">Company</th>
                                </thead>
                                <tbody>
                                    @foreach ($ListOfCompanyInd as $CompanyInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#{{ $CompanyInd['Name'] }}"
                                                style="font-size: 15px;">
                                                {{ $CompanyInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey" id="{{ $CompanyInd['Name'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header" style="background-color: gray;">
                                                            <center>
                                                                <h2 class="my-text-color-white" style="color: white;">
                                                                    {{ $CompanyInd['Name'] }} Sector Companies
                                                                </h2>
                                                            </center>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body" style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesCompanies as $CompanyIndustriesCompany)

                                                                @for ($index = 0; $index < count($CompanyIndustriesCompany); $index++)

                                                                    @if ($CompanyInd['Name'] == $CompanyIndustriesCompany[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/company/{{ $CompanyIndustriesCompany[$index]['Symbol'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span style="font-size: 18px;"
                                                                                    class="my-text-color-white">{{ $CompanyIndustriesCompany[$index]['Company'] }},
                                                                                    {{ $CompanyIndustriesCompany[$index]['Symbol'] }}<br>
                                                                                    <ul class="pagination">
                                                                                        <li class="page-item">
                                                                                            <strong>Bid/Ask:</strong>
                                                                                            Null
                                                                                            / Null,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Change:</strong>
                                                                                            -Null,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Market Cap:</strong>
                                                                                            Null,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Revenue:</strong>
                                                                                            Null,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>EPS:</strong> -Null,
                                                                                        </li>
                                                                                    </ul>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12" id="services">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">Services</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfServiceInd as $ServiceInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#Service{{ $ServiceInd['Id'] }}"
                                                style="font-size: 15px;">
                                                {{ $ServiceInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="Service{{ $ServiceInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header" style="background-color: gray;">
                                                            <h2 class="modal-title text-center my-text-color-white" style="color:white;"> 
                                                                {{ $ServiceInd['Name'] }} Sector Services
                                                            </h2>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body " style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesServices as $CompanyIndustriesService)

                                                                @for ($index = 0; $index < count($CompanyIndustriesService); $index++)

                                                                    @if ($ServiceInd['Name'] == $CompanyIndustriesService[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/service/{{ $CompanyIndustriesService[$index]['Service'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span class="my-text-color-white" style="font-size:18px;">
                                                                                    {{ $CompanyIndustriesService[$index]['Service'] }}
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="background-color: gray;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12" id="event">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">Event</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfEventInd as $EventInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#Event{{ $EventInd['Id'] }}"
                                                style="font-size: 15px;">
                                                {{ $EventInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey" id="Event{{ $EventInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header" style="background-color: gray;">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $EventInd['Name'] }}
                                                                Event
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body " style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesEvents as $CompanyIndustriesEvent)

                                                                @for ($index = 0; $index < count($CompanyIndustriesEvent); $index++)

                                                                    @if ($EventInd['Name'] == $CompanyIndustriesEvent[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/event/{{ $CompanyIndustriesEvent[$index]['Event'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span class="my-text-color-white"  style="font-size:18px;">
                                                                                    {{ $CompanyIndustriesEvent[$index]['Event'] }}
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="background-color: gray;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12" id="hedgefund">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">Hedge Fund</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfHedgeFundInd as $HedgeFundInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#HedgeFund{{ $HedgeFundInd['Id'] }}"
                                                style="font-size: 15px;">
                                                {{ $HedgeFundInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="HedgeFund{{ $HedgeFundInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header" style="background-color: gray;">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $HedgeFundInd['Name'] }} Sector Hedge Fund
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body " style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesHedgeFunds as $CompanyIndustriesHedgeFund)

                                                                @for ($index = 0; $index < count($CompanyIndustriesHedgeFund); $index++)

                                                                    @if ($HedgeFundInd['Name'] == $CompanyIndustriesHedgeFund[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/hedgefund/{{ $CompanyIndustriesHedgeFund[$index]['HedgeFund'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span 
                                                                                    class="my-text-color-white" style="font-size:18px;">{{ $CompanyIndustriesHedgeFund[$index]['HedgeFund'] }}</span>
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="background-color: gray;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- End : Populate Industries -->

                        <div class="col-md-12" id="start-up">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">Start-Up Index</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfStartUpIndexInd as $StartUpIndexInd)
                                        <tr>
                                            <td data-toggle="modal"
                                                data-target="#StartUpIndex{{ $StartUpIndexInd['Id'] }}"
                                                style="font-size: 15px;">
                                                {{ $StartUpIndexInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="StartUpIndex{{ $StartUpIndexInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header"  style="background-color: gray;">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $StartUpIndexInd['Name'] }} Sector Start-Up Index
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body "  style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesStartUpIndex as $CompanyIndustryStartUpIndex)

                                                                @for ($index = 0; $index < count($CompanyIndustryStartUpIndex); $index++)

                                                                    @if ($StartUpIndexInd['Name'] == $CompanyIndustryStartUpIndex[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/startupindex/{{ $CompanyIndustryStartUpIndex[$index]['Service'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span style="font-size:18px;"
                                                                                    class="my-text-color-white">{{ $CompanyIndustryStartUpIndex[$index]['Service'] }}</span>
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer"  style="background-color: gray;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12" id="newschannel">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <th style="font-size: 18px;">News Channel</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfNewsChannelsInd as $NewsChannelsInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#News{{ $NewsChannelsInd['Id'] }}"
                                                style="font-size: 15px;">
                                                {{ $NewsChannelsInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="News{{ $NewsChannelsInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header"  style="background-color: gray;">
                                                            <h4 class="modal-title text-center">
                                                                {{ $NewsChannelsInd['Name'] }} Sector news Channel
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body "  style="background-color: gray;">
                                                            @foreach ($CompanyIndustriesNewsChannels as $CompanyIndustriesNewsChannel)

                                                                @for ($index = 0; $index < count($CompanyIndustriesNewsChannel); $index++)

                                                                    @if ($NewsChannelsInd['Name'] == $CompanyIndustriesNewsChannel[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/newschannel/{{ $CompanyIndustriesNewsChannel[$index]['NewsChannel'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey" style="font-size:18px;">
                                                                                {{ $CompanyIndustriesNewsChannel[$index]['NewsChannel'] }}
                                                                            </a>
                                                                        </div>
                                                                    @endif

                                                                @endfor

                                                            @endforeach
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer"  style="background-color: gray;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- End : Populate Industries -->

                    </div>

                </div>

            </div>
            <div class="col-md-2"></div>

        </div>

    </div>
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

    <script src="/assets1/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="/assets1/js/theme.js"></script>
    <script src="/assets1/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="/assets1/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>


</body>
</html>
