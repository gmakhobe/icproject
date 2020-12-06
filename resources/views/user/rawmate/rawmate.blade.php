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

                <!-- Start: Nav -->
                <ul class="nav nav-justified nav-pills">
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link active" href="#processed"><span
                                class="my-text-color-white">Processed
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link" href="#unprocessed"><span class="my-text-color-white">
                                Unprocessed</span></a>
                    </li>
                </ul>
                <!-- End: Nav -->

                <!-- Start: Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="processed">

                        <div class="row my-bg-color-grey">

                            <div class="col-md-12 col-sm-12 card my-bg-color-grey p-3">


                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control"
                                                placeholder="Search by name, country and seller"
                                                id="newsChannelSearch" />
                                        </div>
                                        <div class="col-md-3">
                                            <button onclick="" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            @foreach ($ProceesedRawMat as $PRM)

                                <div class="col-md-3 card my-bg-color-grey p-3">
                                    <div class="card-body">
                                        <a href="/user/rawmate/product/{{ $PRM["ProductName"] }}/{{ $PRM["ProductId"] }}">
                                            <img class="my-rawmate-main-thumbnail"
                                                src="{{ $PRM["ProductImage"] }}" alt="{{ $PRM["ProductName"] }} image" />
                                            <p class="my-text-color-white"><strong>{{ $PRM["ProductName"] }}</strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $PRM["SellerName"] }}</p>
                                            <p class="my-text-color-white"><strong>({{ $PRM["ProductCurrency"] }}) {{ $PRM["ProductPrice"] }}</strong><br/>
                                                Per <i>{{ $PRM["ProductMeasurement"] }}</i>
                                            </p>
                                        </a>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="unprocessed">

                        <div class="row my-bg-color-grey">

                            <div class="col-md-12 col-sm-12 card my-bg-color-grey p-3">


                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control"
                                                placeholder="Search by name, country and seller"
                                                id="newsChannelSearch" />
                                        </div>
                                        <div class="col-md-3">
                                            <button onclick="" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            @foreach ($UnproceesedRawMat as $URM)

                                <div class="col-md-3 card my-bg-color-grey p-3">
                                    <div class="card-body">
                                        <a href="/user/rawmate/product/{{ $URM["ProductName"] }}/{{ $URM["ProductId"] }}">
                                            <img class="my-rawmate-main-thumbnail"
                                                src="{{ $URM["ProductImage"] }}" alt="{{ $URM["ProductName"] }} image" />
                                            <p class="my-text-color-white"><strong>{{ $URM["ProductName"] }}</strong>
                                            </p>
                                            <p class="my-text-color-white">{{ $URM["SellerName"] }}</p>
                                            <p class="my-text-color-white"><strong>({{ $URM["ProductCurrency"] }}) {{ $URM["ProductPrice"] }}</strong><br/>
                                                Per <i>{{ $URM["ProductMeasurement"] }}</i>
                                            </p>

                                        </a>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                </div>
                <!-- End: Tab Content -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->
    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
