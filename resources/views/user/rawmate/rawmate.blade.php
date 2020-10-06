<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->
    @include('/user/layout/header-style-1')
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
</head>

<body style="background-color: rgb(33,31,31);margin-top: 2px;height: 201px;">
    
    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->
    @include('/user/layout/top-nav')
    <!-- End: Top Navbar -->

    <div class="card border-danger shadow" style="height: 661px;background-color: rgb(33,31,31);width: 1079px;margin-left: 172px;">
        <div class="row table-topper align-items-center">
            <div class="col-xl-12 offset-xl-0">
                <div class="card" style="background-color: rgb(244,227,231);color: rgb(143,145,163);">
                    <div class="card-body" style="background-color: #211f1f;height: 159px;padding: 26px;margin-top: 0px;margin-bottom: -2px;padding-bottom: 140px;min-width: none;max-width: auto;">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="color: rgb(255,20,74);"><strong>TIMELINE</strong></a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="color: rgb(255,20,74);"><strong>TRENDING</strong></a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: rgb(255,20,74);"><strong>SHARE INVESTMENT</strong></a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="color: rgb(255,20,74);"><strong>ADVENTURE</strong></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <p>Content</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <p>Content for tab 2.</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-3">
                                    <p>Content for tab 3.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top: 16px;">
            <div class="card-body" style="margin-top: 0px;background-color: #211f1f;">
                <div class="col-12" style="background-color: rgb(33,31,31);padding-top: 24px;width: 934px;">
                    <div class="row">
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-white" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 183px;background-color: rgb(245,67,67);"><strong>REGIONAL</strong></button>
                                <div class="dropdown-menu"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#">North West</a><a class="dropdown-item" role="presentation" href="#">Gau</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-white" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 183px;background-color: rgb(245,67,67);"><strong>NAME OF PRODUCT</strong></button>
                                <div class="dropdown-menu"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-white" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 183px;background-color: rgb(245,67,67);"><strong>BUDGET</strong></button>
                                <div class="dropdown-menu"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-white" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 183px;background-color: rgb(245,67,67);"><strong>PROCESSOR</strong></button>
                                <div class="dropdown-menu"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal-1" aria-labeledby="tablehelpModal" aria-hidden="true">
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
                                        <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or double quote (<code>"</code>)
                                            to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
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
        <!-- Start: TableSorter -->
        <div class="card" id="TableSorterCard-1" style="margin-top: 25px;margin-bottom: 0px;height: 282px;">
            <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal-2" aria-labeledby="tablehelpModal" aria-hidden="true">
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
                                            <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or double quote (<code>"</code>)
                                                to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
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
            <div style="margin-top: -1px;">
                <table class="table table tablesorter" id="ipi-table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center" data-aos="zoom-in" style="background-color: rgb(52,58,64);filter: saturate(200%);letter-spacing: 5px;font-size: 24px;">procesSED</th>
                            <th class="text-center sorter-false" data-aos="zoom-out" style="filter: saturate(200%);background-color: rgb(52,58,64);letter-spacing: 5px;font-size: 24px;">unprocessed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-right">
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>MINES</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>MINES</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;color: rgb(254,251,255);"><span><strong>PLANTS</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>PLANTS</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>ANIMALS</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>ANIMALS</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>REAL ESTATE</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                            <td style="background-color: rgb(245,67,67);">
                                <div class="x-dropdown dropdown">
                                    <div class="text-center flash animated text-left x-drop-btn" data-toggle="dropdown" aria-expanded="false" style="background-color: transparent;"><span style="color: rgb(254,251,255);"><strong>REAL ESTATE</strong></span><i class="material-icons" style="color: transparent;">keyboard_arrow_down</i></div>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End: TableSorter -->
        <div class="card" style="width: 1075px;padding-top: 0px;margin-top: 0px;margin-left: 0px;height: 66px;">
            <div class="card-body text-right" style="width: 771px;height: 87px;margin-top: -24px;">
                <p class="card-text"></p><a class="card-link text-right" href="#" style="color: rgb(215,92,113);"><strong>REGIONAL&nbsp;</strong></a><a class="card-link" href="#" style="color: rgb(215,92,113);"><strong>ENVIRONMENTAL&nbsp;&nbsp;</strong></a><a class="card-link"
                    href="#" style="color: rgb(215,92,113);"><strong>NATIONAL POLICY&nbsp;&nbsp;</strong></a></div>
        </div>
    </div>
    <!-- Start: Dark footer with social media icons -->
    <footer id="footerpad-1" style="margin-top: 334px;width: 1349px;background-color: #343a40;max-width: auto;height: 0px;">
        <div class="container">
            <div class="row" style="height: 0px;">
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
    <!-- Start: Header Content -->
    @include('/user/layout/footer-style-1')
    <!-- End: Header Content -->
    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>