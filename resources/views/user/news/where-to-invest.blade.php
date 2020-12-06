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

<body style="background-color: rgb(50,46,46);margin-top: 2px;">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="card border-danger shadow" style="height: 900px;background-color: rgb(33,31,31);width: 1147px;margin-left: 125px;">
        <div class="card-body" style="background-color: #545d67;height: 680px;">
            <div id="wrapper" style="height: 812px;margin: 0px;padding: 0px;">
                <div class="container" style="width: 1025px;height: 853px;">
                    <div class="d-flex flex-column" id="content-wrapper">
                        <div id="content" style="margin-left: 0px;width: 100%;margin-right: 0px;height: 100%;">
                            <!-- Start: Data Table with Search Sort Filter and Zoom using -->
                            <div class="container" data-aos="fade-up" data-aos-delay="50" style="background-color: #545d67;width: 1020px;margin-left: 0px;max-width: 1170px;">
                                <!-- Start: TableSorter -->
                                <div class="card" id="TableSorterCard" style="width: 1025px;">
                                    <div class="row table-topper align-items-center" style="background-color: rgb(31,33,40);margin-left: -1px;height: 67px;margin-top: -1px;width: 1025px;">
                                        <div class="col-4 text-left" style="margin: 0px;padding: 5px 15px;background-color: rgb(31,33,40);margin-left: 4px;"><span style="font-size: 22px;color: rgb(255,33,85);"><strong>WHERE TO INVEST</strong></span></div>
                                        <div class="col-4 text-center" style="margin: 0px;padding: 5px 10px;background-color: rgb(31,33,40);">
                                            <h6 id="counter" style="color: rgb(250,251,255);">Showing: <strong id="rowCount">ALL</strong>&nbsp;</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" style="background-color: #545d67;width: 1025px;">
                                            <div>
                                                <table class="table table tablesorter" id="ipi-table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">NAME OF INVESTMENT</th>
                                                            <th class="sorter-false" style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">NOTES BY AUTHOR</th>
                                                            <th class="filter-false" style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">ANALYSIS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PROJECTED RETURNS</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">Notes from author</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">TECHNICAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PRICES, QUOTES</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">FUNDAMENTAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PREVIOUS INVESTSMENTS</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">INVESTOR SENTIMENT</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">ESG</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Table Filtering Options</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:1%">Priority</th>
                                                                    <th style="width:9%">Operator</th>
                                                                    <th style="width:30%">Description</th>
                                                                    <th style="width:60%">Examples</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><code>|</code>&nbsp;or&nbsp;&nbsp;<code>OR</code><br></td>
                                                                    <td>Logical "or" (Vertical bar). Filter the column for content that matches text from either side of the bar.<br></td>
                                                                    <td><code>&lt;20 | &gt;40</code>&nbsp;(matches a column cell with either "&lt;20" or "&gt;40")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td><code>&amp;&amp;</code>&nbsp;or <code>AND</code><br></td>
                                                                    <td>Logical "and". Filter the column for content that matches text from either side of the operator.<br></td>
                                                                    <td><code>&gt;20 &amp;&amp; &gt;40</code>&nbsp;(matches a column cell that contains both "&gt;20" and "&lt;40")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td><code>/\d/</code><br></td>
                                                                    <td>Add any regex to the query to use in the query ("mig" flags can be included&nbsp;<code>/\w/mig</code>)<br></td>
                                                                    <td><code>/b[aeiou]g/i</code>&nbsp;(finds "bag", "beg", "BIG", "Bug", etc);<code>&gt;/r$/</code>&nbsp;(matches text that ends with an "r")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td><code>&lt; &lt;= &gt;= &gt;</code><br></td>
                                                                    <td>Find alphabetical or numerical values less than or greater than or equal to the filtered query .<br></td>
                                                                    <td><code>&lt;=10</code>&nbsp;(find values greater than or equal to 10)<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td><code>!</code>&nbsp;or&nbsp;<code>!=</code><br></td>
                                                                    <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or
                                                                        double quote (<code>"</code>) to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
                                                                    <td><code>!e</code>&nbsp;(find text that doesn't contain an "e");<code>!"ELISA"</code>&nbsp;(find content that does not exactly match "ELISA")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td><code>"</code>&nbsp;or&nbsp;<code>=</code><br></td>
                                                                    <td>To exactly match the search query, add a quote, apostrophe or equal sign to the beginning and/or end of the query<br></td>
                                                                    <td><code>abc"</code>&nbsp;or&nbsp;<code>abc=</code>&nbsp;(exactly match "abc")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td><code>-</code>&nbsp;or <code>to</code><br></td>
                                                                    <td>Find a range of values. Make sure there is a space before and after the dash (or the word "to").<br></td>
                                                                    <td><code>10 - 30</code>&nbsp;or&nbsp;<code>10 to 30</code>&nbsp;(match values between 10 and 30)<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td><code>?</code><br></td>
                                                                    <td>Wildcard for a single, non-space character.<br></td>
                                                                    <td><code>S?c</code>&nbsp;(finds "Sec" and "Soc", but not "Seec")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td><code>*</code><br></td>
                                                                    <td>Wildcard for zero or more non-space characters.<br></td>
                                                                    <td><code>B*k</code>&nbsp;(matches "Black" and "Book")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td><code>~</code><br></td>
                                                                    <td>Perform a fuzzy search (matches sequential characters) by adding a tilde to the beginning of the query<br></td>
                                                                    <td><code>~bee</code>&nbsp;(matches "Bruce Lee" and "Brenda Dexter"), or&nbsp;<code>~piano</code>&nbsp;(matches "Philip Aaron Wong")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>text<br></td>
                                                                    <td>Any text entered in the filter will&nbsp;<strong>match</strong>&nbsp;text found within the column<br></td>
                                                                    <td><code>abc</code>&nbsp;(finds "abc", "abcd", "abcde", etc);<code>SEC</code>&nbsp;(finds "SEC" and "Analytical SEC")<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: TableSorter -->
                            </div>
                            <!-- End: Data Table with Search Sort Filter and Zoom using -->
                            <!-- Start: Data Table with Search Sort Filter and Zoom using -->
                            <div class="container bounce animated" style="background-color: #545d67;min-width: 0px;max-width: 1170px;width: 1025px;margin-left: 0px;">
                                <!-- Start: TableSorter -->
                                <div class="card" id="TableSorterCard" style="width: 1025px;">
                                    <div class="row">
                                        <div class="col-12" style="background-color: #545d67;">
                                            <div>
                                                <table class="table table tablesorter" id="ipi-table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">NAME OF INVESTMENT</th>
                                                            <th class="sorter-false" style="filter: saturate(200%);background-color: rgb(31,33,40);color: rgb(255,33,85);">NOTES BY AUTHOR</th>
                                                            <th class="filter-false" style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">ANALYSIS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PROJECTED RETURNS</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">TECHNICAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PRICES, QUOTES</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">FUNDAMENTAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PREVIOUS INVESTSMENTS</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">INVESTOR SENTIMENT</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">ESG</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-12" style="background-color: #545d67;width: 0px;min-width: none;max-width: none;">
                                            <div>
                                                <table class="table table tablesorter" id="ipi-table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">NAME OF INVESTMENT</th>
                                                            <th class="sorter-false" style="filter: saturate(200%);background-color: rgb(31,33,40);color: rgb(255,33,85);">NOTES BY AUTHOR</th>
                                                            <th class="filter-false" style="background-color: rgb(31,33,40);filter: saturate(200%);color: rgb(255,33,85);">ANALYSIS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PROJECTED RETURNS</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);width: 376px;color: rgb(251,252,252);">TECHNICAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PRICES, QUOTES</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">FUNDAMENTAL</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">PREVIOUS INVESTSMENTS</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">INVESTOR SENTIMENT</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);">-</td>
                                                            <td style="background-color: rgb(52,58,64);color: rgb(251,252,252);">ESG</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Table Filtering Options</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:1%">Priority</th>
                                                                    <th style="width:9%">Operator</th>
                                                                    <th style="width:30%">Description</th>
                                                                    <th style="width:60%">Examples</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><code>|</code>&nbsp;or&nbsp;&nbsp;<code>OR</code><br></td>
                                                                    <td>Logical "or" (Vertical bar). Filter the column for content that matches text from either side of the bar.<br></td>
                                                                    <td><code>&lt;20 | &gt;40</code>&nbsp;(matches a column cell with either "&lt;20" or "&gt;40")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td><code>&amp;&amp;</code>&nbsp;or <code>AND</code><br></td>
                                                                    <td>Logical "and". Filter the column for content that matches text from either side of the operator.<br></td>
                                                                    <td><code>&gt;20 &amp;&amp; &gt;40</code>&nbsp;(matches a column cell that contains both "&gt;20" and "&lt;40")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td><code>/\d/</code><br></td>
                                                                    <td>Add any regex to the query to use in the query ("mig" flags can be included&nbsp;<code>/\w/mig</code>)<br></td>
                                                                    <td><code>/b[aeiou]g/i</code>&nbsp;(finds "bag", "beg", "BIG", "Bug", etc);<code>&gt;/r$/</code>&nbsp;(matches text that ends with an "r")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td><code>&lt; &lt;= &gt;= &gt;</code><br></td>
                                                                    <td>Find alphabetical or numerical values less than or greater than or equal to the filtered query .<br></td>
                                                                    <td><code>&lt;=10</code>&nbsp;(find values greater than or equal to 10)<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td><code>!</code>&nbsp;or&nbsp;<code>!=</code><br></td>
                                                                    <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or
                                                                        double quote (<code>"</code>) to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
                                                                    <td><code>!e</code>&nbsp;(find text that doesn't contain an "e");<code>!"ELISA"</code>&nbsp;(find content that does not exactly match "ELISA")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td><code>"</code>&nbsp;or&nbsp;<code>=</code><br></td>
                                                                    <td>To exactly match the search query, add a quote, apostrophe or equal sign to the beginning and/or end of the query<br></td>
                                                                    <td><code>abc"</code>&nbsp;or&nbsp;<code>abc=</code>&nbsp;(exactly match "abc")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td><code>-</code>&nbsp;or <code>to</code><br></td>
                                                                    <td>Find a range of values. Make sure there is a space before and after the dash (or the word "to").<br></td>
                                                                    <td><code>10 - 30</code>&nbsp;or&nbsp;<code>10 to 30</code>&nbsp;(match values between 10 and 30)<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td><code>?</code><br></td>
                                                                    <td>Wildcard for a single, non-space character.<br></td>
                                                                    <td><code>S?c</code>&nbsp;(finds "Sec" and "Soc", but not "Seec")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td><code>*</code><br></td>
                                                                    <td>Wildcard for zero or more non-space characters.<br></td>
                                                                    <td><code>B*k</code>&nbsp;(matches "Black" and "Book")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td><code>~</code><br></td>
                                                                    <td>Perform a fuzzy search (matches sequential characters) by adding a tilde to the beginning of the query<br></td>
                                                                    <td><code>~bee</code>&nbsp;(matches "Bruce Lee" and "Brenda Dexter"), or&nbsp;<code>~piano</code>&nbsp;(matches "Philip Aaron Wong")<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>text<br></td>
                                                                    <td>Any text entered in the filter will&nbsp;<strong>match</strong>&nbsp;text found within the column<br></td>
                                                                    <td><code>abc</code>&nbsp;(finds "abc", "abcd", "abcde", etc);<code>SEC</code>&nbsp;(finds "SEC" and "Analytical SEC")<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: TableSorter -->
                            </div>
                            <!-- End: Data Table with Search Sort Filter and Zoom using -->
                            <div class="collapse navbar-collapse" id="navcol-2">
                                <ul class="nav nav-tabs ml-auto">
                                    <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-wpexplorer"></i>&nbsp;Explore</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-star-o"></i>&nbsp;Features</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-user-circle-o"></i>&nbsp;Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-sign-in"></i>&nbsp;Sign In</a></li>
                                </ul>
                            </div>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav nav-tabs ml-auto">
                                    <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-wpexplorer"></i>&nbsp;Explore</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-star-o"></i>&nbsp;Features</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-user-circle-o"></i>&nbsp;Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="#"><i class="fa fa-sign-in"></i>&nbsp;Sign In</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"></a></div>
        </div>
    </div>
    <!-- Start: Dark footer with social media icons -->
    <footer id="footerpad-1" style="margin-top: 334px;width: 1349px;background-color: #343a40;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                    <!-- Start: paragraph --><b><p class="copyright text-muted text-center">Copyright &copy; Plugin 2020 </p></b>
                    <!-- End: paragraph -->
                </div>
            </div>
        </div>
    </footer>


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

    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
