<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles-1.css">
    <link rel="stylesheet" href="/assets1/css/16-scrollbar-styles.css">
    <link rel="stylesheet" href="/assets1/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1-1.css">
    <link rel="stylesheet" href="/assets1/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="/assets1/css/Bootstrap-Theme-Switchers.css">
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

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

    <div class="">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <!-- Start: Jumbotron -->
                <div class="container jumbotron my-bg-color-grey">
                    <h3>Plugin Create</h3>
                    <p class="my-text-color-white">Create a company, service, event, news chaannel...</p>
                </div>
                <!-- End: Jumbotron -->

                <!-- End: Nav -->

                <div class="row">

                    <div class="col-md-12 card my-bg-color-grey">
                        <div class="card-body">
                            <!-- Start: Navigation -->
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading p-2" data-toggle="collapse" data-target="#collapse1"
                                        data-parent="#accordion">
                                        <h4 class="panel-title my-text-color-white">
                                            Create Investment Activities!
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <!-- Start: Navigation -->
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill"
                                                        href="#create-service">
                                                        Service
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        Event
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        Hedge Fund
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        Start-Up Index
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- End: Navigation -->

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active my-text-color-white" id="create-service">
                                                    <center>
                                                        <h4 class="my-text-color-white">
                                                            Create A Service
                                                        </h4>
                                                        <p class="my-text-color-white">
                                                            Need investors? Create a service!
                                                        </p>
                                                    </center>
                                                    <br />

                                                    <div class="service-slide">

                                                        <label>Service Name</label><br />
                                                        <input type="text" id="service-def-name"
                                                            class="control-form" /><br />

                                                        <label>Service Industry</label><br />
                                                        <select class="form-control" id="service-def-industry">
                                                            <option>Type 1</option>
                                                            <option>Type 2</option>
                                                        </select><br />

                                                        <label>Nature of Service</label><br />
                                                        <textarea class="form-control" rows="5"
                                                            id="comment"></textarea><br />
                                                        <center>
                                                            <button type="button" class="btn btn-primary">
                                                                Next
                                                            </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <label>Address</label><br />
                                                        <input type="text" id="service-def-address"
                                                            class="control-form" /><br />

                                                        <label>Country</label><br />
                                                        <input type="text" id="service-def-country"
                                                            class="control-form" /><br />

                                                        <label>Website</label><br />
                                                        <input type="text" id="service-def-website"
                                                            class="control-form" /><br />

                                                        <label>Telephone</label><br />
                                                        <input type="text" id="service-def-telephone"
                                                            class="control-form" /><br />

                                                        <center>
                                                            <button type="button" class="btn btn-danger">
                                                                Previous
                                                            </button>
                                                            <button type="button" class="btn btn-primary">
                                                                Next
                                                            </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <label>Pitch Video</label><br />
                                                        <input type="file" class="form-control" />
                                                        <label>Pitch Documentation</label><br />
                                                        <input type="file" class="form-control" />
                                                        <label>Report Documenation</label><br />
                                                        <input type="file" class="form-control" />

                                                        <center>
                                                            <button type="button" class="btn btn-danger">
                                                                Previous
                                                            </button>
                                                            <button type="button" class="btn btn-primary">
                                                                Next
                                                            </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Strategy and Indicator
                                                        </h4>
                                                        <label>Strategy</label><br />
                                                        <input type="text" id="service-def-strategy"
                                                            class="control-form" /><br />
                                                        <label>Indicator</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="control-form" /><br />




                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                                <button type="button" class="btn btn-danger">
                                                                    Previous
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Next
                                                                </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Upcomming Calendar Events
                                                        </h4>
                                                        <label>Strategy</label><br />
                                                        <input type="date" id="service-def-strategy"
                                                            class="control-form" /><br />
                                                        <label>Nature of event</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="control-form" /><br />




                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                                <button type="button" class="btn btn-danger">
                                                                    Previous
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Next
                                                                </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Service Visuals
                                                        </h4>
                                                        <label>Caption</label><br />
                                                        <input type="date" id="service-def-strategy"
                                                            class="control-form" /><br />
                                                        <label>Upload Image</label><br />
                                                        <input type="file" class="form-control" /><br />




                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                                <button type="button" class="btn btn-danger">
                                                                    Previous
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Next
                                                                </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">Add Service Earnings
                                                        </h4>
                                                        <label>Date</label><br />
                                                        <input type="date" id="service-def-strategy"
                                                            class="control-form" /><br />
                                                        <label>Amount</label><br />
                                                        <input type="text" id="service-def-indicator"
                                                            class="control-form" /><br />




                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                                <button type="button" class="btn btn-danger">
                                                                    Previous
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Next
                                                                </button>
                                                        </center>
                                                    </div>

                                                    <div class="service-slide">

                                                        <h4 class=" my-text-color-white">
                                                            Add Insured Assets
                                                        </h4>
                                                        <label>Asset Name</label><br />
                                                        <input type="text" id="service-def-strategy"
                                                            class="control-form" /><br />
                                                        <label>Quantity</label><br />
                                                        <input type="number" id="service-def-indicator"
                                                            class="control-form" /><br />

                                                        <center>

                                                            <button type="button" class="btn btn-success">
                                                                Save
                                                            </button>
                                                            <div class="opt-stategy-and-indicator">
                                                                <button type="button" class="btn btn-danger">
                                                                    Previous
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Next
                                                                </button>
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading p-2" data-toggle="collapse" data-target="#collapse2"
                                        data-parent="#accordion">
                                        <h4 class="panel-title my-text-color-white">
                                            Create news Activities!
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <!-- Start: Navigation -->
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill" href="#">
                                                        news Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        TV Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        Podcast Channel
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#">
                                                        Blog
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- End: Navigation -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Navigation -->
                        </div>
                    </div>

                    <div class="col-md-12 card">

                    </div>
                </div>


            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->

    <script src="assets/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
