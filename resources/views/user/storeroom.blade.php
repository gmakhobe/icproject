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


</head>

<body onload="onload">
@include('/user/layout/header-style-1')
     <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
     @include('/user/layout/side-nav')
     <!-- End: Vertical Left-SideBar by Jigar Mistry -->
     <!-- Start: Top Navbar -->

     <!-- End: Top Navbar -->

     <nav> <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a href="#block1">Upload</a></li>
            <li><a href="#">Share</a></li>
            <li><a href="s#">Profile</a></li>
            <li><a href="#block3"  style="color: rgb(245,67,67); font-size: 15px;">Trending</a></li>
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

          $(document).ready(function(){

            $("#posts").click(function(){
              $("#postsDiv").show();
                  $("#productsDiv").hide();
                      $("#galleryDiv").hide();
            });

            $("#products").click(function(){
              $("#productsDiv").show();
                  $("#postsDiv").hide();
                      $("#galleryDiv").hide();
            });

            $("#gallery").click(function(){
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
   <div class="book-cards">
    <div class="book-card">
     <div class="content-wrapper">
     <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="book-card-img">
     <div class="card-content">
     <div class="book-name">Samantha Williams</div>
      <div class="book-by">17 February 2020 08:34am</div>
       <div class="book-sum card-sum">Traders have to learn these lessons  the easy way or they can learn them the hard way by losing their money. </div>
      </div>
    </div>
     <div class="likes">
     <div class="like-profile">
    <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
   </div>
     <div class="like-name"><span>Jane Hayley</span> and<span> 5 other friends</span> like this</div>
   </div>
    </div>

    <div class="book-card">
     <div class="content-wrapper">
     <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="book-card-img">
     <div class="card-content">
     <div class="book-name">Jane Hayley</div>
      <div class="book-by">19 February 2020 11:08am</div>
       <div class="book-sum card-sum">Day trading books can teach you about strategy, risk management, psychology, and a great deal about technical analysis.  </div>
      </div>
    </div>
     <div class="likes">
     <div class="like-profile">
    <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
   </div>
     <div class="like-name"><span>Shivah Maharaj</span> and<span> 6 other friends</span> like this</div>
   </div>
    </div>


    <div class="book-card">
     <div class="content-wrapper">
     <img src="https://goodasiangirl.files.wordpress.com/2011/05/prettybeautifulasianmodelwomeninschooluniform2528182529.jpg" alt="" class="book-card-img">
     <div class="card-content">
     <div class="book-name">Britney Tsu</div>
      <div class="book-by">28 February 2020 06:40am</div>
       <div class="book-sum card-sum">Complacency is the antithesis of success. And no one becomes rich by doing 'just enough.' </div>
      </div>
    </div>
     <div class="likes">
     <div class="like-profile">
    <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
   </div>
     <div class="like-name"><span>Samantha Williams</span> and<span> 3 other friends</span> like this</div>
   </div>
    </div>


    <div class="book-card">
     <div class="content-wrapper">
     <img src="https://www.singleblackmale.org/wp-content/uploads/2013/08/black-man1.jpg" alt="" class="book-card-img">
     <div class="card-content">
     <div class="book-name">Thabo Sehume</div>
      <div class="book-by">15 March 2020 15:34pm</div>
       <div class="book-sum card-sum">Jack Schwager has put together two very popular books on trading: "Market Wizards" and "The New Market Wizards."</div>
      </div>
    </div>
     <div class="likes">
     <div class="like-profile">
    <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
   </div>
     <div class="like-name"><span>Michaela Jackson</span> and<span> 11 other friends</span> like this</div>
   </div>
    </div>


    <div class="book-card">
     <div class="content-wrapper">
     <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="book-card-img">
     <div class="card-content">
     <div class="book-name">Shivah Maharaj</div>
      <div class="book-by">20 March 2020 19:34pm</div>
       <div class="book-sum card-sum">In financial markets, it's no different.If you want to become a successful trader - or take your day trading from a beginner to the professional level</div>
      </div>
    </div>
     <div class="likes">
     <div class="like-profile">
    <img src="https://www.singleblackmale.org/wp-content/uploads/2013/08/black-man1.jpg" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
   </div>
     <div class="like-profile">
    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
   </div>
     <div class="like-name"><span>Thabo Sehume</span> and<span> 3 other friends</span> like this</div>
   </div>
    </div>

  </div>
</div>

<div id="productsDiv">
  <h4> Store-Room: Products<h4>
  <div class="book-cards">
      <div class="book-card">
      <div class="content-wrapper">
      <img src="https://www.activtrades.com/wp-content/uploads/2017/09/starter-kit-foreground-2.png" alt="" class="product-img">
      <div class="card-content">
      <div class="book-name" style="font-size: 25px;">Trading Kit</div>
        <div class="book-by" style="color:red; font-size: 20px;">R 1 540.00</div>
        <div class="book-sum card-sum" style="color:orange; font-size: 20px;">Installed</div>
        <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star" style="font-size:15px;"></span>
                  <span class="fa fa-star" style="font-size:15px;"></span>
        </div>

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Shivah Maharaj</span> and<span> 7 other friends</span> like this</div>
    </div>
      </div>

          <div class="book-card">
      <div class="content-wrapper">
      <img src="https://edjelley.files.wordpress.com/2014/06/parker-im-fountain-pen-review-6.jpg" alt="" class="product-img">
      <div class="card-content">
      <div class="book-name" style="font-size: 25px;">H780 Pen</div>
        <div class="book-by" style="color:red; font-size: 20px;">R 420.00</div>
        <div class="book-sum card-sum" style="color:green; font-size: 20px;">Bought</div>
        <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star" style="font-size:15px;"></span>
                  <span class="fa fa-star" style="font-size:15px;"></span>
                  <span class="fa fa-star" style="font-size:15px;"></span>
        </div>

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Jane Hayley</span> and<span> 2 other friends</span> like this</div>
    </div>
      </div>


      <div class="book-card">
      <div class="content-wrapper">
      <img src="https://156250-449749-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2015/07/range-trading-books.jpg" alt="" class="product-img">
      <div class="card-content">
      <div class="book-name" style="font-size: 25px;">Range Trading</div>
        <div class="book-by" style="color:red; font-size: 20px;">R 650.00</div>
        <div class="book-sum card-sum" style="color:purple; font-size: 20px;">Pending</div>
        <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star checked" style="font-size:15px;"></span>
                  <span class="fa fa-star " style="font-size:15px;"></span>
        </div>

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://goodasiangirl.files.wordpress.com/2011/05/prettybeautifulasianmodelwomeninschooluniform2528182529.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Britney Tsu</span> and<span> 4 other friends</span> like this</div>
    </div>
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
      <img src="https://www.wikihow.com/images/d/da/FinanceChartNumbersFontColour.png" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Mark Red</span> and<span> 3 other friends</span> like this</div>
    </div>
    </div>

    <div class="book-card">
      <div class="content-wrapper">
      <img src="https://thumbs.dreamstime.com/z/finance-charts-d-illustration-financial-diagram-pie-chart-sheets-report-32147993.jpg" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Lerato Jabulile</span> and<span> 16 other friends</span> like this</div>
    </div>
    </div>


    <div class="book-card">
      <div class="content-wrapper">
      <img src="https://i2.wp.com/beyonddebt.net/wp-content/uploads/2016/04/Yahoo-Finance-Chart.png" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Hayley Boyce</span> and<span> 5 other friends</span> like this</div>
    </div>
    </div>

    <div class="book-card">
      <div class="content-wrapper">
      <img src="https://thumbs.dreamstime.com/z/financial-planning-chart-14659589.jpg" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>James Jill</span> and<span> 2 other friends</span> like this</div>
    </div>
    </div>

    <div class="book-card">
      <div class="content-wrapper">
      <img src="https://thumbs.dreamstime.com/z/report-financial-investment-chart-graph-return-business-vector-illustration-51854911.jpg" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Thabo Sehume</span> and<span> 3 other friends</span> like this</div>
    </div>
    </div>

    <div class="book-card">
      <div class="content-wrapper">
      <img src="https://www.activtrades.com/wp-content/uploads/2017/09/starter-kit-foreground-2.png" alt="" class="gallery-img">

      </div>
      <div class="likes">
      <div class="like-profile">
      <img src="https://english.cdn.zeenews.com/sites/default/files/2017/11/17/639329-indian-men.jpg" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
    </div>
      <div class="like-profile">
      <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
    </div>
      <div class="like-name"><span>Shivah Maharaj</span> and<span> 7 other friends</span> like this</div>
    </div>
    </div>



</div>

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
</body>
</html>
