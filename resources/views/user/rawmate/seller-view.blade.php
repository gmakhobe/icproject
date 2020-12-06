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

    <div class="m-2">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">

                <div class="jumbotron my-bg-color-grey">
                    <h1 class="my-text-color-white">Company Name</h1>
                    <p class="my-text-color-white">Description</p>
                    <p class="my-text-color-white">Start Date</p>
                  </div>

                <div class="row">
                    <div class="col-md-3 card my-bg-color-grey p-3">
                        <div class="card-body">
                            <a href="/user/rawmate/product/name/id">
                                <img class="my-rawmate-main-thumbnail" src="https://via.placeholder.com/250x350"
                                    alt="Raw mate image" />
                                <p class="my-text-color-white"><strong>Product Name</strong>
                                </p>
                                <p class="my-text-color-white">Seller Name</p>
                                <p class="my-text-color-white"><strong>Amount</strong></p>
                            </a>
                        </div>
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
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
