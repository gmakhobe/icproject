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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: rgb(50,46,46);">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container my-text-color-white">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 card my-bg-color-grey">

                <style>
                    .btn-jumbotron {
                        width: 100%;
                    }

                </style>

                <div class="jumbotron m-3 my-bg-color-grey">
                    <h1>{{ $HFInformation['Name'] }}</h1>
                    <p>Hedge Fund, {{ $HFInformation['IndustryName'] }} Industry.</p>
                    <p>Investment Range: {{ $HFInformation['Range'] }}</p>
                </div>

                <!-- Nav pills -->
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#principlevision">Principle and Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pitch">Pitch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#reports">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#hedgefundinvestors">Hedge Fund Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#earnings">Calendar</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active my-text-color-white" id="profile">

                        <h3>Nature of Business</h3>
                        <p>
                            {{ $HFInformation['Description'] }}
                        </p>


                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="principlevision">

                        <h3>Principles and Vision</h3>
                        <h6>Principles</h6>
                        <p>{{ $HFInformation['Principles'] }}</p>
                        <h6>Vision</h6>
                        <p>{{ $HFInformation['Vision'] }}</p>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="pitch">

                        <h3>Pitch</h3>
                        <h5>Video Pitch</h5>
                        <video controls style="height:350px;">
                            <source src="{{ $HFPitch['Video'] }}" type="video/mp4" />
                        </video>

                        <h5>Document</h5>
                        <div class="list-group">
                            <a target="_black" href="{{ $HFPitch['Document'] }}"
                                class="list-group-item list-group-item-action  my-bg-color-grey">
                                <h4 class="my-text-color-white">Pitch Document</h4>
                                <p class="my-text-color-white">View Report</p>
                            </a>
                        </div>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="reports">

                        <h3>Reports</h3>
                        <div class="list-group">
                            @foreach ($HFReports as $HFR)
                                <a target="_black" href="{{ $HFR['Link'] }}"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $HFR['Name'] }}</h4>
                                    <p class="my-text-color-white">View Report</p>
                                </a>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="news">

                        <h3>News</h3>
                        <div class="list-group">
                            @foreach ($HFNews as $HFN)
                                <a data-toggle="modal" data-target="#mod{{ $HFN['NewsId'] }}" href="#"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $HFN['Heading'] }}</h4>
                                    <p class="my-text-color-white">{{ $HFN['Date'] }} / {{ $HFN['Author'] }}</p>
                                    <p class="my-text-color-white">{{ $HFN['Snippet'] }}</p>
                                </a>

                                <!-- The Modal -->
                                <div class="modal fade my-bg-color-grey" id="mod{{ $HFN['NewsId'] }}">
                                    <div class="modal-dialog modal-xl my-bg-color-grey">
                                        <div class="modal-content my-bg-color-grey">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center">{{ $HFN['Heading'] }}</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body ">
                                                <img alt="{{ $HFN['Heading'] }}" src="{{ $HFN['Image'] }}"
                                                    style="width:100%;height:450px" />
                                                <br>
                                                <p class="m-4">{{ $HFN['Date'] }} / {{ $HFN['Author'] }}</p>
                                                <p class="m-4">
                                                    {{ $HFN['News'] }}
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
                    <div class="tab-pane container fade my-text-color-white" id="hedgefundinvestors">

                        <h3>Hedge Fund Investors</h3>
                        <table class="table table-dark">
                            <thead>
                                <th>Investor's Name</th>
                                <th>Amount (R) Invested</th>
                            </thead>
                            <tbody>
                                @foreach ($HFInvestors as $HFI)
                                    <tr>
                                        <td>{{ $HFI['Name'] }}</td>
                                        <td>{{ $HFI['Amount'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane container fade my-text-color-white" id="calendar">

                        <h3>Calendar</h3>
                        <p>Company up coming events</p>
                        <table class="table table-dark">
                            <thead>
                                <th>Event Date</th>
                                <th>Event Information</th>
                            </thead>
                            <tbody>
                                @foreach ($HFCalendar as $HFC)
                                    <tr>
                                        <td>{{ $HFC['Date'] }}</td>
                                        <td>
                                            <h6>{{ $HFC['Title'] }}</h6>
                                            <p>{{ $HFC['Description'] }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

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
