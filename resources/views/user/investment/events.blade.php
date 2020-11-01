<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: rgb(50,46,46);">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 card my-bg-color-grey my-text-color-white">

                <style>
                    .btn-jumbotron {
                        width: 100%;
                    }

                </style>

                <div class="jumbotron m-3 my-bg-color-grey">
                    <h1>{{ $EventInformation['Name'] }}</h1>
                    <p>{{ $EventInformation['IndustryName'] }} Event.</p>
                    <p>Scheduled Date: {{ $EventInformation['Date'] }}.</p>
                </div>

                <!-- Nav pills -->
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#history">Event History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pitch">Pitch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#investors">Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#reports">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#earnings">Event Earnigs</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active my-text-color-white" id="profile">

                        <h3>Nature of Business</h3>
                        <p>
                            {{ $EventInformation['Description'] }}
                        </p>

                        <h3>Management</h3>
                        <table class="table table-dark">
                            <thead>
                                <th>Title</th>
                                <th>Name</th>
                            </thead>
                            <tbody>
                                @foreach ($EventManagement as $em)
                                    <tr>
                                        <td>{{ $em['Role'] }}</td>
                                        <td>{{ $em['Name'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row my-text-center">
                            <div class="col-md-6">
                                <h3>Company Address</h3>

                                <p>{{ $EventInformation['Address'] }}</p>
                                <p>{{ $EventInformation['Country'] }}</p>
                                <p>{{ $EventInformation['Telephone'] }}</p>
                                <p>{{ $EventInformation['Website'] }}</p>

                            </div>

                            <div class="col-md-6">
                                <h3>Event Information</h3>
                                <p>Type: Event</p>
                                <p>Industry: {{ $EventInformation['IndustryName'] }}</p>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="history">

                        <h3>Event History</h3>
                        <p>
                            {{ $EventInformation['History'] }}
                        </p>

                    </div>
                    <div class="tab-pane container fade" id="pitch">

                        <h3>Pitch</h3>
                        <h5>Video Pitch</h5>
                        <video controls style="height:350px;">
                            <source src="{{ $EventPitch['Video'] }}" type="video/mp4" />
                        </video>

                        <h5>Document</h5>
                        <div class="list-group">
                            <a target="_black" href="{{ $EventPitch['Document'] }}"
                                class="list-group-item list-group-item-action  my-bg-color-grey">
                                <h4 class="my-text-color-white">Pitch Document</h4>
                                <p class="my-text-color-white">View Report</p>
                            </a>
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="investors">

                        <h3>Investors</h3>
                        <table class="table table-dark">
                            <thead>
                                <th>Investor's Name</th>
                                <th>Amount Invested</th>
                            </thead>
                            <tbody>
                                @foreach ($EventManagement as $em)
                                    <tr>
                                        <td>{{ $em['Role'] }}</td>
                                        <td>{{ $em['Name'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane container fade" id="reports">

                        <h3>Reports</h3>
                        <div class="list-group">
                            @foreach ($EventReports as $er)
                                <a target="_black" href="{{ $er['Link'] }}"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $er['Name'] }}</h4>
                                    <p class="my-text-color-white">View Report</p>
                                </a>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="news">

                        <h3>News</h3>
                        <div class="list-group">
                            @foreach ($EventNews as $en)
                                <a data-toggle="modal" data-target="#mod{{ $en['NewsId'] }}" href="#"
                                    class="list-group-item list-group-item-action  my-bg-color-grey">
                                    <h4 class="my-text-color-white">{{ $en['Heading'] }}</h4>
                                    <p class="my-text-color-white">{{ $en['Date'] }} / {{ $en['Author'] }}</p>
                                    <p class="my-text-color-white">{{ $en['Snippet'] }}</p>
                                </a>

                                <!-- The Modal -->
                                <div class="modal fade my-bg-color-grey" id="mod{{ $en['NewsId'] }}">
                                    <div class="modal-dialog modal-xl my-bg-color-grey">
                                        <div class="modal-content my-bg-color-grey">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center my-text-color-black">{{ $en['Heading'] }}</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body ">
                                                <img alt="{{ $en['Heading'] }}" src="{{ $en['Image'] }}"
                                                    style="width:100%;height:450px" />
                                                <br>
                                                <p class="m-4">{{ $en['Date'] }} / {{ $en['Author'] }}</p>
                                                <p class="m-4">
                                                    {{ $en['News'] }}
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
                    <div class="tab-pane container fade" id="earnings">
                        <h3>Event Earnings</h3>
                        <table class="table table-dark">
                            <thead>
                                <th>Date and Time</th>
                                <th>Amount (R)</th>
                            </thead>
                            <tbody>
                                @foreach ($EventEarnings as $ee)
                                    <tr>
                                        <td>{{ $ee['Date'] }}</td>
                                        <td>{{ $ee['Amount'] }}</td>
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
