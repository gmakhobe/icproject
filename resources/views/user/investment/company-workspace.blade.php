<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/Calendar-BS4-1.css">
    <link rel="stylesheet" href="/assets1/css/Calendar-BS4.css">
    <link rel="stylesheet" href="/assets1/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="/assets1/css/Card-Carousel.css">
    <link rel="stylesheet" href="/assets1/css/card-image-zoom-on-hover.css">
    <link rel="stylesheet" href="/assets1/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="/assets1/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="/assets1/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="/assets1/css/Gallery-With-Fanctbox-T1.css">
    <link rel="stylesheet" href="/assets1/css/Image-slider-carousel-With-arrow-buttons-1.css">
    <link rel="stylesheet" href="/assets1/css/Image-slider-carousel-With-arrow-buttons.css">
    <link rel="stylesheet" href="/assets1/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="/assets1/css/Media-Slider-Bootstrap-3-1.css">
    <link rel="stylesheet" href="/assets1/css/Media-Slider-Bootstrap-3.css">
    <link rel="stylesheet" href="/assets1/css/styles.css">
    <link rel="stylesheet" href="/assets1/css/tablaresponsive-1.css">
    <link rel="stylesheet" href="/assets1/css/tablaresponsive.css">
    <link rel="stylesheet" href="/assets1/css/untitled.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="/assets1/css/x-editable.css">
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">
    <link rel="stylesheet" href="/assets1/css/awards.less">
    <link rel="stylesheet" href="/assets1/css/awardsNav.css">
    <link rel="stylesheet/less" type="text/css" href="/assets1/css/awards.less" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 card my-bg-color-grey">

                <style>
                    .btn-jumbotron {
                        width: 100%;
                    }

                </style>

                <div class="code--css" style="height: 150px;">
                 <div style="padding: 2%">
                    <h1>{{ $CompanyInfo['Name'] }}, {{ $CompanyInfo['Symbol'] }}</h1>
                    <p>Publicly Traded Company.</p>
                </div>
                </div>

                <!-- Nav pills -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#profile" style="color:purple; font-size: 20px;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#statistics" style="color:purple; font-size: 20px;">Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#news" style="color:purple; font-size: 20px;">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#reports" style="color:purple; font-size: 20px;">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#visuals" style="color:purple; font-size: 20px;">Visuals</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active my-text-color-white" id="profile">

                        <h2>Nature of Business</h2>
                        <p>
                            {{ $CompanyInfo['NatureOfBusiness'] }}
                        </p>

                        <h2>Management</h2>
                        <table class="table table-dark">
                            <thead>
                                <th>Title</th>
                                <th>Name</th>
                            </thead>
                            <tbody>
                                @foreach ($CompanyManagement as $cm)
                                    <tr>
                                        <td>{{ $cm['Role'] }}</td>
                                        <td>{{ $cm['Name'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row my-text-center">
                            <div class="col-md-6">
                                <h2>Company Address</h2>

                                <p>{{ $CompanyInfo['Address'] }}</p>
                                <p>{{ $CompanyInfo['Country'] }}</p>
                                <p>{{ $CompanyInfo['Telephone'] }}</p>
                                <p>{{ $CompanyInfo['Website'] }}</p>

                            </div>
                            <div class="col-md-6">

                                <h2>Company Information</h2>
                                <p>Type: Company</p>
                                <p>Industry: {{ $CompanyInfo['IndustryName'] }}</p>
                                <p>Full time employees: {{ $CompanyInfo['Workers'] }}</p>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="statistics">

                        <h2>Statistics</h2>
                        <table class="table table-dark ">
                            <thead>
                                <td>Bid/Ask</td>
                                <td>Change</td>
                                <td>Market Cap</td>
                                <td>Revenue</td>
                                <td>EPS</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>0.00/0.00</th>
                                    <th>-20%</th>
                                    <th>-430.68K</th>
                                    <th> 69.71M</th>
                                    <th> - 2.04</th>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="news">

                        <h2>News</h2>
                        <div class="list-group">
                            @foreach ($CompanyNews as $cm)
                                <a data-toggle="modal" data-target="#mod{{ $cm['NewsId'] }}" href="#"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $cm['Heading'] }}</h4>
                                    <p class="my-text-color-white">{{ $cm['Date'] }} / {{ $cm['Author'] }}</p>
                                    <p class="my-text-color-white">{{ $cm['Snippet'] }}</p>
                                </a>

                                <!-- The Modal -->
                                <div class="modal fade my-bg-color-grey" id="mod{{ $cm['NewsId'] }}">
                                    <div class="modal-dialog modal-xl my-bg-color-grey">
                                        <div class="modal-content my-bg-color-grey">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center">{{ $cm['Heading'] }}</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body ">
                                                <img alt="{{ $cm['Heading'] }}" src="{{ $cm['Image'] }}"
                                                    style="width:100%;height:450px" />
                                                <br>
                                                <p class="m-4">{{ $cm['Date'] }} / {{ $cm['Author'] }}</p>
                                                <p class="m-4">
                                                    {{ $cm['News'] }}
                                                </p>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="reports">

                        <h2>Reports</h2>
                        <div class="list-group">
                            @foreach ($CompanyReports as $cr)
                                <a target="_black" href="{{ $cr['Link'] }}"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $cr['Name'] }}</h4>
                                    <p class="my-text-color-white">View Report</p>
                                </a>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="visuals">

                        <h2>Visuals</h2>
                        <div class="row">
                            @foreach ($CompanyVisuals as $cv)
                                <div class="col-md-4">
                                    <img src="{{ $cv['Visual'] }}" alt="Image" style="width:100%;hight:auto;" />
                                </div>
                            @endforeach
                            </div>

                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->
    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/x-editable.js"></script>
    <script src="/assets1/js/BS-34-Modal-Popup-Window-With-Image.js"></script>
    <script src="/assets1/js/Card-Carousel.js"></script>
    <script src="/assets1/js/Gallery-With-Fanctbox-T1.js"></script>
    <script src="/assets1/js/Image-slider-carousel-With-arrow-buttons.js"></script>
    <script src="/assets1/js/Media-Slider-Bootstrap-3.js"></script>
    <script src="/assets1/js/Scroll-To.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
