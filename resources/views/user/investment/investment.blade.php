<!DOCTYPE html>
<html style="width: 1349px;">

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

<body style="background-color: rgb(50,46,46);width: 1170px;">
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav') 
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav') 
    <!-- End: Top Navbar -->
    
    <div class="card" style="margin-left: 150px;width: 1035px;background-color: rgb(52,58,64);">
        <div class="card-body text-dark"
            style="margin-top: 0px;margin-left: 20px;width: 1035px;background-color: #343a40;"><button
                class="btn btn-danger outline" type="button" style="margin-left: 150px;"><strong>MOST
                    TRADED</strong><br></button><button class="btn btn-danger outline" type="button"
                style="margin-left: 30px;">NAME</button><button class="btn btn-danger outline" type="button"
                style="margin-left: 30px;">INVESTMENT TRACKER</button><button class="btn btn-danger outline"
                type="button" style="margin-left: 30px;">MOST POPULAR</button></div>
    </div>
    <div class="card"
        style="width: 941px;margin-left: 200px;margin-bottom: 16px;margin-top: 12px;background-color: rgb(52,58,64);">
        <div class="card-body d-xl-flex align-items-xl-start" style="margin-left: 24px;width: 807px;">
            <div class="col" style="width: 540px;margin-left: 148px;">
                <div class="text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false"
                    style="width: 200px;margin-top: 0px;margin-left: -154px;background-color: rgb(52,58,64);">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-danger shadow-sm"
                            data-toggle="dropdown" aria-expanded="false" type="button"
                            style="color: rgb(238,15,15);background-color: rgb(52,58,64);"><strong>MARKETS</strong></button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second
                                Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
                <div class="text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false"
                    style="width: 200px;margin-left: 403px;margin-top: -35px;margin-bottom: 16px;background-color: rgb(52,58,64);">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-danger shadow-lg"
                            data-toggle="dropdown" aria-expanded="false" type="button"
                            style="color: rgb(238,15,15);background-color: rgb(52,58,64);"><strong>CAREER</strong></button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second
                                Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
                <div class="text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false"
                    style="width: 200px;margin-bottom: 0px;margin-right: 0px;margin-top: -45px;margin-left: 141px;background-color: rgb(52,58,64);">
                    <div class="dropdown" style="margin: 0px;margin-top: 0px;"><button
                            class="btn btn-primary dropdown-toggle border-danger shadow" data-toggle="dropdown"
                            aria-expanded="false" type="button"
                            style="color: rgb(238,15,15);background-color: rgb(52,58,64);"><strong>COUNTRY</strong></button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second
                                Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card"
        style="width: 1035px;margin-left: 145px;height: 1310px;background-color: rgb(52,58,64);margin-bottom: 9px;padding-bottom: 45px;padding-right: 0px;">
        <div class="card-body text-monospace text-nowrap text-truncate text-break text-dark bg-dark border rounded border-danger shadow-sm"
            style="background-color: rgba(227,181,181,0.64);height: 1072px;padding: 0px;margin-top: 12px;padding-left: 2px;margin-right: 260px;margin-left: 115px;width: 821px;padding-top: 25px;">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                        <label><strong>Show&nbsp;</strong><select
                                class="form-control form-control-sm custom-select custom-select-sm"
                                style="background-color: rgba(255,255,255,0);color: rgb(215,20,20);margin-left: 0px;padding-left: 8px;padding-right: -40px;">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label></div>
                </div>
                <div class="col">
                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label
                            class="text-danger border-danger"><input type="search" class="form-control form-control-sm"
                                aria-controls="dataTable" placeholder="Search"
                                style="background-color: rgba(255,255,255,0);color: rgb(215,20,20);padding-left: 8px;margin-left: -11px;"
                                autofocus="" autocomplete="on"></label></div>
                </div>
            </div>
            <div class="table-responsive bg-dark table mt-2" id="dataTable" role="grid"
                aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-center"
                                style="width: 190px;font-size: 25px;color: rgb(227,5,5);min-height: 0px;height: 0px;">
                                <br><strong>COMPANY</strong><br><br></th>
                            <th class="text-center"
                                style="width: 552px;height: 0px;padding-right: 0px;padding-left: 15px;font-size: 25px;color: rgb(227,5,5);margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 4px;">
                                <br><strong>SERVICE</strong><br><br></th>
                            <th class="text-right"
                                style="margin-left: 0px;margin-right: 0px;font-size: 25px;color: rgb(227,5,5);height: 0px;">
                                <strong>EVENTS</strong><br><br></th>
                        </tr>
                    </thead>
                    <tbody class="bg-dark">
                        <tr>
                            <td class="text-capitalize border rounded-circle" style="background-color: #5a5c69;">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown"
                                        aria-expanded="false" style="background-color: transparent;"><span
                                            style="color: rgb(227,5,5);"><br><strong>Energy</strong><br><br></span>
                                    </div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                            href="#">xxxxx1</a><a class="dropdown-item" role="presentation"
                                            href="#">xxxx2</a><a class="dropdown-item" role="presentation"
                                            href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Business</strong><br><br>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Basic
                                    Materials</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);">
                                <br><strong>Communication</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);height: 79px;">
                                <br><strong>Private</strong><br><br></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);">
                                <br><strong>Industrials</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Tourism</strong><br><br>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Consumer
                                    Discretionary</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Transport</strong><br><br>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Consumer
                                    Staples</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);">
                                <br><strong>Distribution</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Corporate</strong><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Health
                                    Care</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Finance</strong><br><br>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Financial</strong><br><br>
                            </td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Recreation</strong><br><br>
                            </td>
                            <td style="color: rgb(227,5,5);padding-left: 110px;"><br><strong>Charity</strong><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Information
                                    Technology</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Education</strong><br><br>
                            </td>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);">
                                <br><strong>Communication</strong><br><br></td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Health</strong><br><br>
                            </td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Live</strong><br><br></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Utilities</strong><br><br>
                            </td>
                            <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Construction &amp;
                                    Engineering</strong><br><br></td>
                            <td><br></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"
                        style="color: rgb(145,30,33);">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled" style="background-color: #5a5c69;"><a class="page-link"
                                    href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active" style="color: rgb(217,8,8);"><a class="page-link"
                                    href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item bg-dark"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-dark" style="margin-top: 28px;width: 1035px;margin-left: 145px;margin-bottom: -5px;">
        <div class="card bg-dark" style="margin-top: 56px;">
            <div class="card-body text-monospace text-nowrap text-truncate text-break bg-dark border rounded-0 border-danger shadow d-block"
                style="margin-bottom: 28px;margin-left: 115px;width: 821px;padding-bottom: 24px;">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label
                                style="color: rgb(227,5,5);">Show&nbsp;<select
                                    class="form-control form-control-sm custom-select custom-select-sm"
                                    style="background-color: rgb(90,92,105);color: rgb(227,5,5);">
                                    <option value="10" selected="">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search"
                                    class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"
                                    style="background-color: rgb(90,92,105);"></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th class="bg-dark" style="width: 190px;font-size: 20px;color: rgb(227,5,5);">
                                    <br><strong>START-UP INDEX</strong><br><br></th>
                                <th class="text-center bg-dark"
                                    style="width: 552px;height: 47px;padding-right: 0px;padding-left: 15px;font-size: 21px;background-color: rgb(227,5,5);color: rgb(227,5,5);">
                                    <br><strong>HEDGE FUND</strong><br><br></th>
                                <th class="bg-dark"
                                    style="font-size: 20px;background-color: rgb(227,5,5);color: rgb(227,5,5);">
                                    <br><strong>NEWS CHANNELS</strong><br><br></th>
                            </tr>
                        </thead>
                        <tbody class="bg-dark">
                            <tr>
                                <td class="text-center" style="color: rgb(227,5,5);"><br>Crowd
                                    <strong>Funding</strong><br><br></td>
                                <td><br><br><br></td>
                                <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Local</strong><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Angel
                                        Investor</strong><br><br></td>
                                <td class="text-center" style="color: rgb(227,5,5);">
                                    <br><br><br><strong>Local</strong><br><br><br></td>
                                <td class="text-center" style="color: rgb(227,5,5);">
                                    <br><br><strong>International</strong><br><br><br></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Venture
                                        Capitalist</strong></td>
                                <td class="text-center" style="color: rgb(227,5,5);">
                                    <br><br><strong>International</strong><br><br></td>
                                <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Global</strong><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="color: rgb(227,5,5);"><br><strong>Sale</strong><br><br>
                                </td>
                                <td class="text-center" style="color: rgb(227,5,5);">
                                    <br><br><strong>Global</strong><br><br></td>
                                <td class="text-center" style="color: rgb(227,5,5);">
                                    <br><strong>Analisis</strong><br><br></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"
                            style="color: rgb(227,5,5);"><strong>Showing 1 to 10 of 27</strong></p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item active" style="color: rgb(207,11,11);"><a class="page-link"
                                        href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item" style="color: rgb(28,26,26);"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                            aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start: Dark footer with social media icons -->
    <footer id="footerpad" style="margin-top: 17px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                    <!-- Start: paragraph --><b>
                        <p class="copyright text-muted text-center">Copyright &copy; Plugin 2020 </p>
                    </b>
                    <!-- End: paragraph -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Dark footer with social media icons -->

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