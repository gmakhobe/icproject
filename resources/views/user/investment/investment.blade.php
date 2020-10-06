<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
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
</head>

<body style="background-color: rgb(50,46,46);">
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

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

    <div class="container">

        <div class="row">

            <div class="col-md-1"></div>
            <div class="col-md-11 card my-bg-color-grey">

                <div class="card-body">

                    <h2>Industries</h2>
                    <p class="text-white">Select Industry</p>

                    <div class="row my-text-color-black">

                        <div class="col-md-3">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <th>Company</th>
                                </thead>
                                <tbody>
                                    @foreach ($ListOfCompanyInd as $CompanyInd)
                                        <tr>
                                            <td data-toggle="modal" data-target="#{{ $CompanyInd['Name'] }}">{{ $CompanyInd['Name'] }}
                                            </td>

                                            <!-- The Modal -->
                                            <div class="modal fade my-bg-color-grey" id="{{ $CompanyInd['Name'] }}">
                                                <div class="modal-dialog modal-xl my-bg-color-grey">
                                                    <div class="modal-content my-bg-color-grey">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center">{{ $CompanyInd['Name'] }} Sector Companies</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body ">
                                                            @foreach( $CompanyIndustriesCompanies as $CompanyIndustriesCompany)
                                                            
                                                                @for($index = 0; $index < count($CompanyIndustriesCompany); $index++)
                                                                    
                                                                    @if ($CompanyInd['Name'] == $CompanyIndustriesCompany[$index]['Industry'])
                                                                        <div class="list-group ">
                                                                            <a href="/user/investment/company/{{ $CompanyIndustriesCompany[$index]['Company'] }}" class="list-group-item list-group-item-action my-bg-color-grey">{{ $CompanyIndustriesCompany[$index]['Company'] }}</a>
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
                                    <th>Services</th>
                                </thead>
                                <tbody>
                                    @foreach ($ListOfServiceInd as $ServiceInd)
                                        <tr>
                                            <td>{{ $ServiceInd['Name'] }}</td>

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
                                            <td>{{ $EventInd['Name'] }}</td>

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
                                            <td>{{ $HedgeFundInd['Name'] }}</td>

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
                                            <td>{{ $StartUpIndexInd['Name'] }}</td>

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
                                            <td>{{ $NewsChannelsInd['Name'] }}</td>

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
