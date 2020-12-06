<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
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
</head>

<body style="background-color: rgb(50,46,46);">
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->
    <!--
    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>MOST TRADED</strong></button>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>PORTFOLIO</strong></button>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <button type="button" class="btn btn-danger"><strong>MOST POPULAR</strong></button>
                        </center>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
-->
    <!--
    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown">
                                <button
                                    class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow-sm"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <strong>MARKETS</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown">
                                <button
                                    class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow-lg"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <strong>CAREER</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="dropdown" style="margin: 0px;margin-top: 0px;">
                                <button
                                    class="my-invest-second-nav-btn btn btn-primary dropdown-toggle border-danger shadow"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <strong>COUNTRY</strong>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                    <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
-->

    <div class="container">

        <div class="row">

            <div class="col-md-1"></div>
            <div class="col-md-11 card my-bg-color-grey">

                <div class="card-body">

                    <h2>Industries</h2>
                    <p class="text-white">Select Industry</p>

                    <div class="row my-text-color-white">

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>Company</th>
                                </thead>
                                <tbody>
                                    @foreach ($ListOfCompanyInd as $CompanyInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#{{ $CompanyInd['Name'] }}">
                                                {{ $CompanyInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey" id="{{ $CompanyInd['Name'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <center>
                                                                <h4 class="my-text-color-white">
                                                                    {{ $CompanyInd['Name'] }} Sector Companies
                                                                </h4>
                                                            </center>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesCompanies as $CompanyIndustriesCompany)

                                                                @for ($index = 0; $index < count($CompanyIndustriesCompany); $index++)

                                                                    @if ($CompanyInd['Name'] == $CompanyIndustriesCompany[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/company/{{ $CompanyIndustriesCompany[$index]['Symbol'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span
                                                                                    class="my-text-color-white">{{ $CompanyIndustriesCompany[$index]['Company'] }},
                                                                                    {{ $CompanyIndustriesCompany[$index]['Symbol'] }}<br>
                                                                                    <ul class="pagination">
                                                                                        <li class="page-item">
                                                                                            <strong>Bid/Ask:</strong>
                                                                                            2.400
                                                                                            / 2.680,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Change:</strong>
                                                                                            -0.8%,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Market Cap:</strong>
                                                                                            177.55M,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>Revenue:</strong>
                                                                                            69.71M,
                                                                                        </li>
                                                                                        <li class="page-item">
                                                                                            <strong>EPS:</strong> -0.71,
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

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover my-text-color-white">
                                <thead>
                                    <th>Services</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfServiceInd as $ServiceInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#Service{{ $ServiceInd['Id'] }}">
                                                {{ $ServiceInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="Service{{ $ServiceInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $ServiceInd['Name'] }} Sector Services
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesServices as $CompanyIndustriesService)

                                                                @for ($index = 0; $index < count($CompanyIndustriesService); $index++)

                                                                    @if ($ServiceInd['Name'] == $CompanyIndustriesService[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/service/{{ $CompanyIndustriesService[$index]['Service'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span class="my-text-color-white">
                                                                                    {{ $CompanyIndustriesService[$index]['Service'] }}
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

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>Event</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfEventInd as $EventInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#Event{{ $EventInd['Id'] }}">
                                                {{ $EventInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey" id="Event{{ $EventInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $EventInd['Name'] }}
                                                                Event</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesEvents as $CompanyIndustriesEvent)

                                                                @for ($index = 0; $index < count($CompanyIndustriesEvent); $index++)

                                                                    @if ($EventInd['Name'] == $CompanyIndustriesEvent[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/event/{{ $CompanyIndustriesEvent[$index]['Event'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span class="my-text-color-white">
                                                                                    {{ $CompanyIndustriesEvent[$index]['Event'] }}
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

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>Hedge Fund</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfHedgeFundInd as $HedgeFundInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#HedgeFund{{ $HedgeFundInd['Id'] }}">
                                                {{ $HedgeFundInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="HedgeFund{{ $HedgeFundInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $HedgeFundInd['Name'] }} Sector Hedge Fund
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesHedgeFunds as $CompanyIndustriesHedgeFund)

                                                                @for ($index = 0; $index < count($CompanyIndustriesHedgeFund); $index++)

                                                                    @if ($HedgeFundInd['Name'] == $CompanyIndustriesHedgeFund[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/hedgefund/{{ $CompanyIndustriesHedgeFund[$index]['HedgeFund'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span
                                                                                    class="my-text-color-white">{{ $CompanyIndustriesHedgeFund[$index]['HedgeFund'] }}</span>
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
                        <!-- End : Populate Industries -->

                    </div>

                </div>

                <div class="card-body">

                    <div class="row my-text-color-black">

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>Start-Up Index</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfStartUpIndexInd as $StartUpIndexInd)
                                        <tr>
                                            <td data-toggle="modal"
                                                data-target="#StartUpIndex{{ $StartUpIndexInd['Id'] }}">
                                                {{ $StartUpIndexInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="StartUpIndex{{ $StartUpIndexInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center my-text-color-white">
                                                                {{ $StartUpIndexInd['Name'] }} Sector Start-Up Index
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesStartUpIndex as $CompanyIndustryStartUpIndex)

                                                                @for ($index = 0; $index < count($CompanyIndustryStartUpIndex); $index++)

                                                                    @if ($StartUpIndexInd['Name'] == $CompanyIndustryStartUpIndex[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/startupindex/{{ $CompanyIndustryStartUpIndex[$index]['Service'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                <span
                                                                                    class="my-text-color-white">{{ $CompanyIndustryStartUpIndex[$index]['Service'] }}</span>
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

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>News Channel</th>
                                </thead>
                                <tbody>

                                    @foreach ($ListOfNewsChannelsInd as $NewsChannelsInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#News{{ $NewsChannelsInd['Id'] }}">
                                                {{ $NewsChannelsInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey"
                                                id="News{{ $NewsChannelsInd['Id'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center">
                                                                {{ $NewsChannelsInd['Name'] }} Sector news Channel
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach ($CompanyIndustriesNewsChannels as $CompanyIndustriesNewsChannel)

                                                                @for ($index = 0; $index < count($CompanyIndustriesNewsChannel); $index++)

                                                                    @if ($NewsChannelsInd['Name'] == $CompanyIndustriesNewsChannel[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/newschannel/{{ $CompanyIndustriesNewsChannel[$index]['NewsChannel'] }}"
                                                                                class="list-group-item list-group-item-action my-bg-color-grey">
                                                                                {{ $CompanyIndustriesNewsChannel[$index]['NewsChannel'] }}
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
                        <!-- End : Populate Industries -->

                    </div>

                </div>

            </div>
            <div class="col-md-2"></div>

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

    <script src="/assets1/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="/assets1/js/theme.js"></script>
    <script src="/assets1/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="/assets1/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
