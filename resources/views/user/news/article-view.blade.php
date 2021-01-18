<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

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
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">
</head>

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">

                <div class="row">
                <br>
                    <div class="col-md-12 card my-bg-color-grey">
                        <div class="card-body my-bg-color-grey">

                            <img class="my-news-card-img-news-view p-3" src="https://www.nav.com/wp-content/uploads/2018/04/fast-business-loans-750x343.jpg"
                                alt="Card image"
                                style="width:100%; border-radius: 5%sssssssssssssssss">
                            <center>
                                <h2 class="card-title my-text-color-white  p-3 text-align-center" style="color:purple;">
                                Are EIDL or Paycheck Protection Program Loans Taxable Income?</h2>
                            </center>
                            <i>
                                <h3 class="my-text-color-white p-3">{{ $ChannelNewsContent[0]['Author'] }} /
                                    {{ $ChannelNewsContent[0]['Date'] }} / {{ $ChannelNewsContent[0]['Views'] }} Views</h3>
                            </i>

                            <h4 class="my-text-color-white p-3">Topic:
                                <strong>{{ $ChannelNewsContent[0]['Subject'] }}</strong></h4>

                            <p class="card-text my-text-color-white  p-3" style="font-size:15px;">
                                If you’re like most small business owners wading your way through the EIDL and PPP loans and the regulations and requirements that go with them, welcome to the club. As we see more entrepreneurs receiving funds from these two SBA programs, we’re also seeing more questions about what comes next.

                                One big question? Whether or not the funds from these two loan programs will be taxed on a business’ annual income tax return. Whether you’ve got just one business or are applying for PPP with multiple businesses, you need to know what to expect down the road.

                                For many sole proprietors and other entrepreneurs, filing taxes for 2020 seems a far-off worry they don’t want to think about right now, but the truth is: knowing what to expect can help you plan ahead once we get back to the new normal.

                                Please note, the material contained in this article is for informational purposes only, is general in nature, and should not be relied upon or construed as a legal opinion or legal advice. Please keep in mind this information is changing rapidly and is based on our current understanding of the programs. It can and likely will change. Although we will be monitoring and updating this as new information becomes available, please do not rely solely on this for your financial decisions. We encourage you to consult with your lawyers, CPAs and Financial Advisors. To review your real-time funding options with one of Nav’s lending experts, please contact us.
                            </p>
                        </div>
                        <br />
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 my-bg-color-grey p-3">

                        <h3>Comments</h3>

                        <div id="comment-container">

                            @if (count($ChannelNewsComments))

                                @foreach ($ChannelNewsComments as $CNC)

                                    <div class="media border p-3">
                                        <img src="{{ $CNC['Image'] }}" alt="{{ $CNC['Name'] }} Image"
                                            class="mr-3 mt-3 rounded-circle" style="width:60px;">

                                        <div class="media-body">
                                            <h4 class="my-text-color-white">{{ $CNC['Name'] }}</h4>
                                            <p class="my-text-color-white"><i>Posted on {{ $CNC['Date'] }}</i>
                                            <p class="my-text-color-white">{{ $CNC['Comment'] }}</p>
                                        </div>
                                    </div>

                                @endforeach

                            @else

                                <center>
                                    <p class="my-text-color-white">No comments</p>
                                </center>

                            @endif
                        </div>

                        <div class="form-group">
                            <label for="comment">Type Comment:</label>
                            <input type="text" id="newsId" value="{{ $NewsId }}" hidden />
                            <textarea class="form-control" id="newsComment" rows="3" id="comment"></textarea>
                        </div>

                        <button class="btn btn-light" onclick="UserPostComment()"> Submit Comment</button>

                    </div>

                </div>

                <script>
                    function UserPostComment() {
                        const comment = document.getElementById("newsComment").value;
                        const newsId = document.getElementById("newsId").value;

                        if (!comment.length || !comment || !newsId) {
                            swal("News Comment", `Comment field is empty, try again!`);
                            return;
                        }

                        //Custom Fetch Request
                        //Fetch Api to send a request
                        fetch(`/user/news/comment/${comment}/${newsId}/2`, {
                                method: "get",
                                headers: {
                                    'X-CSRF-TOKEN': "abcdefghij"
                                }
                            })
                            .then(res => {
                                if (res.status == 200)
                                    return res.text();
                                else
                                    swal("News Comments", "Could not send comment request!");
                            })
                            .then(text => {

                                const commentContainer = document.getElementById("comment-container");
                                const NameRef = document.getElementById("Name-Ref");

                                commentContainer.innerHTML += `
                                <div class="media border p-3">
                                        <img src="/images/user-icon.svg" alt="Your Image"
                                            class="mr-3 mt-3 rounded-circle" style="width:60px;">

                                        <div class="media-body">
                                            <h4 class="my-text-color-white">${NameRef.innerText}</h4>
                                            <p class="my-text-color-white"><i>Posted on Now</i>
                                            <p class="my-text-color-white">${comment}</p>
                                        </div>
                                    </div>
                                `;

                                swal("News Comments", "Comment Posted successful!");

                            })
                            .catch(res => {
                                //Print any error related to sending request
                                //reject(`icFETCH Catch -> ${res}`);
                                console.log("Catch");
                                console.log(res);
                            });

                        //swal("News Comment", `Comment: ${comment}, Id: ${newsId}`);

                    }

                </script>

                <div class="row">
                    <div class="col-md-4 my-bg-color-grey p-3">
                        <h4 class="my-text-center">Where To Investment</h4>
                        <p class="my-text-color-white">Link One</p>
                        <p class="my-text-color-white">Link Two</p>
                        <p class="my-text-color-white">Link Three</p>
                        <p class="my-text-color-white">Link Four</p>
                    </div>
                    <div class="col-md-4 my-bg-color-grey p-3">
                        <h4 class="my-text-center">Blogs and Webiners</h4>
                        <p class="my-text-color-white">Link One</p>
                        <p class="my-text-color-white">Link Two</p>
                        <p class="my-text-color-white">Link Three</p>
                        <p class="my-text-color-white">Link Four</p>
                    </div>
                    <div class="col-md-4 my-bg-color-grey p-3">
                        <h4 class="my-text-center">Articles</h4>
                        <p class="my-text-color-white">Link One</p>
                        <p class="my-text-color-white">Link Two</p>
                        <p class="my-text-color-white">Link Three</p>
                        <p class="my-text-color-white">Link Four</p>
                    </div>
                </div>

            </div>
            <div class="col-md-"></div>
        </div>
    </div>

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

    <script src="assets/js/Juvi---Easy-Smooth-Scroll---Insertn-Go.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/vertical-navbar-with-menu-and-social-menu.js"></script>
    <script src="assets/js/Vertical-Navigation-with-double-sub-menu--scroll-enable-by-Jigar-Mistry.js"></script>
</body>

</html>
