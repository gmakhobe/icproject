<!DOCTYPE html>
<html>

<head>


    <!-- Start: Header Content -->

    <!-- End: Header Content -->
    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Profile-Card-1.css">
    <link rel="stylesheet" href="/assets1/css/styles.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="/assets1/css/ideas.css">

    <link rel="stylesheet" href="/assets1/css/newSideNav.css">

    <link rel="stylesheet" href="/assets1/css/indicatorsAndStrategies.css">
    <link rel="stylesheet" href="/assets1/css/storeroom.css">

    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>


</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <nav>
        <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a href="#block1">Upload</a></li>
            <li><a href="#">Share</a></li>
            <li><a href="s#">Profile</a></li>
            <li><a href="#block3" style="color: rgb(245,67,67); font-size: 15px;">Trending</a></li>
        </ul>
    </nav>

    <div class="book-store">
        <div class="main-wrapper">
        </div>
        <div class="popular-books">
            <div class="main-menu">
                <div class="genre">Store Room</div>
                <div class="book-types">
                    <a href="#" id="posts" class="book-type active">Posts</a>
                    <a href="#" id="products" class="book-type"> Products</a>
                    <a href="#" id="gallery" class="book-type"> Gallery</a>

                    <script>
                        window.onload = function onload() {
                            console.log('onload');
                            $("#postsDiv").show();
                            $("#productsDiv").hide();
                            $("#galleryDiv").hide();
                        }

                        $(document).ready(function() {

                            $("#posts").click(function() {
                                $("#postsDiv").show();
                                $("#productsDiv").hide();
                                $("#galleryDiv").hide();
                            });

                            $("#products").click(function() {
                                $("#productsDiv").show();
                                $("#postsDiv").hide();
                                $("#galleryDiv").hide();
                            });

                            $("#gallery").click(function() {
                                $("#galleryDiv").show();
                                $("#productsDiv").hide();
                                $("#postsDiv").hide();
                            });
                        });

                    </script>

                </div>
            </div>

            <div id="postsDiv">
                <h4> Store-Room: Posts<h4>

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#my-home">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#my-menu1">TV Channel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#my-menu2">Podcast</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane container active" id="my-home">

                                <div class="row">

                                    @for ($index = 0; $index < count($NewPost); $index++)
                                        <div class="col-sm-3">
                                            <img data-src="{{ $NewPost[$index]->MainBunner }}" class="lozad">
                                            <h3>{{ $NewPost[$index]->Heading }}</h3>
                                            <p>{{ $NewPost[$index]->Subject }} &sdot;
                                                {{ substr($NewPost[$index]->News, 0, 80) }}</p>
                                            <p>{{ $NewPost[$index]->PublishedDate }}</p>

                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-primary">Edit Post</button>
                                                <button
                                                    onclick="window.location.assign('/user/news/read/{{ $NewPost[$index]->Heading }}/{{ $NewPost[$index]->NewsId }}')"
                                                    type="button" class="btn btn-default">View Post</button>
                                            </div>
                                        </div>
                                    @endfor

                                </div>

                            </div>
                            <div class="tab-pane container fade" id="my-menu1">

                                <div class="row">
                                    <div class="col-sm-12">

                                        @for ($index = 0; $index < count($VideoPost); $index++)
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <video style="width:100%;height: 250px;"
                                                        class="my-news-card-video-news-view" controls
                                                        poster="{{ $VideoPost[$index]->VideoBanner }}">
                                                        <source src="{{ $VideoPost[$index]->VideoLink }}"
                                                            type="video/mp4" />
                                                    </video>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>{{ $VideoPost[$index]->VideoTitle }}</h3>
                                                    <p>{{ $VideoPost[$index]->Subject }} &sdot;
                                                        {{ substr($VideoPost[$index]->VideoDescription, 0, 80) }}</p>
                                                    <p>{{ $VideoPost[$index]->PublishedDate }}</p>

                                                    <div class="btn-group-vertical">
                                                        <button type="button" class="btn btn-primary">Edit Post</button>
                                                        <button
                                                            onclick="window.location.assign('/user/news/video/{{ $VideoPost[$index]->VideoTitle }}/{{ $VideoPost[$index]->NVId }}')"
                                                            type="button" class="btn btn-default">View Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane container fade" id="my-menu2">...</div>
                        </div>

            </div>

            <div id="productsDiv">
                <h4> Store-Room: Products<h4>
                        <div class="">

                            <div class="row">

                                @for ($index = 0; $index < count($Products); $index++)

                                    <div class="card col-sm-3">
                                        <div class="card-body">

                                            <img style="width:100%; height:310px;" class="lozad"
                                                data-src="{{ $Products[$index]->ProductImage }}" alt=""
                                                class="product-img">

                                            <h5>{{ $Products[$index]->ProductName }}</h5>
                                            <h3>({{ $Products[$index]->ProductCurrency }})
                                                {{ $Products[$index]->ProductPrice }}
                                            </h3>
                                            <p><strong>Description: </strong>
                                                {{ $Products[$index]->ProductDescription }}
                                            </p>
                                            <p><strong>Quantity: </strong> {{ $Products[$index]->ProductQuantity }}</p>

                                        </div>
                                    </div>

                                @endfor

                            </div>

                        </div>
            </div>

            <div id="galleryDiv">
                <h4> Store-Room: Gallery<h4>
                        <select name="assess" class="assess">
                            <option value="1">Default</option>
                            <option value="1">Posted Pics</option>
                            <option value="2">Uploads</option>
                            <option value="3">Downloads</option>
                        </select>

                        <div class="book-cards">

                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://www.wikihow.com/images/d/da/FinanceChartNumbersFontColour.png"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>Mark Red</span> and<span> 3 other friends</span> like
                                        this</div>
                                </div>
                            </div>

                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://thumbs.dreamstime.com/z/finance-charts-d-illustration-financial-diagram-pie-chart-sheets-report-32147993.jpg"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>Lerato Jabulile</span> and<span> 16 other
                                            friends</span> like this</div>
                                </div>
                            </div>


                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://i2.wp.com/beyonddebt.net/wp-content/uploads/2016/04/Yahoo-Finance-Chart.png"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>Hayley Boyce</span> and<span> 5 other friends</span>
                                        like this</div>
                                </div>
                            </div>

                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://thumbs.dreamstime.com/z/financial-planning-chart-14659589.jpg"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>James Jill</span> and<span> 2 other friends</span> like
                                        this</div>
                                </div>
                            </div>

                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://thumbs.dreamstime.com/z/report-financial-investment-chart-graph-return-business-vector-illustration-51854911.jpg"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>Thabo Sehume</span> and<span> 3 other friends</span>
                                        like this</div>
                                </div>
                            </div>

                            <div class="book-card">
                                <div class="content-wrapper">
                                    <img src="https://www.activtrades.com/wp-content/uploads/2017/09/starter-kit-foreground-2.png"
                                        alt="" class="gallery-img">

                                </div>
                                <div class="likes">
                                    <div class="like-profile">
                                        <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-profile">
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"
                                            alt="" class="like-img">
                                    </div>
                                    <div class="like-name"><span>Shivah Maharaj</span> and<span> 7 other friends</span>
                                        like this</div>
                                </div>
                            </div>



                        </div>

            </div>
        </div>

        <script>
            const observer = lozad();
            observer.observe();

        </script>

        <script>
            $(function() {

                'use strict';

                (function() {
                    //부트스트랩 햄버거 클릭시 사이드바 on off

                    var aside = $('.side-nav'),

                        showAsideBtn = $('.show-side-btn'),

                        contents = $('#contents');

                    showAsideBtn.on("click", function() {

                        $("#" + $(this).data('show')).toggleClass('show-side-nav');

                        contents.toggleClass('margin');

                    });

                    if ($(window).width() <= 767) {

                        aside.addClass('show-side-nav');

                    }
                    $(window).on('resize', function() {

                        if ($(window).width() > 767) {

                            aside.removeClass('show-side-nav');

                        }

                    });

                    // dropdown menu in the side nav
                    var slideNavDropdown = $('.side-nav-dropdown');

                    $('.side-nav .categories li').on('click', function() {

                        $(this).toggleClass('lol').siblings().removeClass('lol');

                        if ($(this).hasClass('lol')) {

                            $(this).find('.side-nav-dropdown').slideToggle('fast');

                            $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

                        } else {

                            $(this).find('.side-nav-dropdown').slideUp('fast');

                        }

                    });

                    $('.side-nav .close-aside').on('click', function() {

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
</body>

</html>
