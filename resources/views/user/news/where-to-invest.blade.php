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
    <link rel="stylesheet" href="/assets1/css/financialliteracy.css">


</head>

<body onload="onload">

     <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
     @include('/user/layout/side-nav')
     <!-- End: Vertical Left-SideBar by Jigar Mistry -->
     <!-- Start: Top Navbar -->

     <!-- End: Top Navbar -->

    <div class="book-store">
 <div class="header">
  <div class="browse">
  </div>
 </div>
 <div class="main-wrapper">
  <div class="popular-books">
   <div class="main-menu">
     
  <div style="padding-right: 50px;" class="genre">Where To Invest</div>
  
    <div class="book-types">
     <a href="#" id="namesid" class="book-type active">Names</a>
     <a href="#" id="pricesid" class="book-type"> Prices</a>
     <a href="#" id="notesid" class="book-type">Notes</a>
     <a href="#" id="strategiesandanalysisid" class="book-type">Strategies and Analysis</a>
    </div>
   </div>

   <script>
          window.onload = function onload() {
            console.log('onload');
              $("#names").show();
                $("#prices").hide();
                  $("#notes").hide();
                    $("#strategiesandanalysis").hide();
                }

          $(document).ready(function(){

            $("#namesid").click(function(){
                $("#names").show();
                $("#prices").hide();
                  $("#notes").hide();
                    $("#strategiesandanalysis").hide(); 
            });       

            $("#pricesid").click(function(){
                $("#names").hide();
                $("#prices").show();
                  $("#notes").hide();
                    $("#strategiesandanalysis").hide(); 
            }); 

            $("#notesid").click(function(){
                $("#names").hide();
                $("#prices").hide();
                  $("#notes").show();
                    $("#strategiesandanalysis").hide(); 
            }); 

            $("#strategiesandanalysisid").click(function(){
                $("#names").hide();
                $("#prices").hide();
                  $("#notes").hide();
                    $("#strategiesandanalysis").show(); 
            }); 
          });        
    </script>

<div class="book-store">
 <div class="main-wrapper">

    <div id="names">
      <h4 style="padding-left: 1%;"> Where to Invest: Names<h4>

              <div class="book-cards">
                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://data.bloomberglp.com/company/sites/2/2016/03/BDXY.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">FX Options</div>
                  <div class="book-by"></div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c1" name="rating" value="5">
            <label class="full" for="star-c1"></label>
            <input type="checkbox" id="star-c2" name="rating" value="4">
            <label class="full" for="star-c2"></label>
            <input type="checkbox" id="star-c3" name="rating" value="3">
            <label class="full" for="star-c3"></label>
            <input type="checkbox" id="star-c4" name="rating" value="2">
            <label class="full" for="star-c4"></label>
            <input type="checkbox" id="star-c5" name="rating" value="1">
            <label class="full" for="star-c5"></label>
            </fieldset>
            <span class="book-voters card-vote">1.987 voters</span>
            </div>
                  <div class="book-sum card-sum">Buy a share of ownership in a public corporation. As a shareholder, you may receive quarterly dividends. </div>
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
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://businesstech.co.za/news/wp-content/uploads/2014/04/JSE-new-look.png" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Trader 101</div>
                  <div class="book-by">by JSE</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c6" name="rating" value="5">
            <label class="full" for="star-c6"></label>
            <input type="checkbox" id="star-c7" name="rating" value="4">
            <label class="full" for="star-c7"></label>
            <input type="checkbox" id="star-c8" name="rating" value="3">
            <label class="full" for="star-c8"></label>
            <input type="checkbox" id="star-c9" name="rating" value="2">
            <label class="full" for="star-c9"></label>
            <input type="checkbox" id="star-c10" name="rating" value="1">
            <label class="full" for="star-c10"></label>
            </fieldset>
            <span class="book-voters card-vote">1.087 voters</span>
            </div>
                  <div class="book-sum card-sum">Shares may also appreciate in value, enabling shareholders to realize a profit when those shares are sold.  </div>
                  </div>
                </div>
                <div class="likes">
                <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Kimberly Jones</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://static.politico.com/capny/files/a-pompeo-bloomberg.png" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Investment Trust839</div>
                  <div class="book-by">by Bloomberg</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c11" name="rating" value="5">
            <label class="full" for="star-c11"></label>
            <input type="checkbox" id="star-c12" name="rating" value="4">
            <label class="full" for="star-c12"></label>
            <input type="checkbox" id="star-c13" name="rating" value="3">
            <label class="full" for="star-c13"></label>
            <input type="checkbox" id="star-c14" name="rating" value="2">
            <label class="full" for="star-c14"></label>
            <input type="checkbox" id="star-c15" name="rating" value="1">
            <label class="full" for="star-c15"></label>
            </fieldset>
            <span class="book-voters card-vote">997 voters</span>
            </div>
                  <div class="book-sum card-sum">Invest internationally with this transferable security that is traded on a U.S. stock exchange but represents a security issued by a publicly listed foreign company. </div>
                  </div>
                </div>
                <div class="likes">
                <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
                <div class="like-profile">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Adam</span> and<span> Kimberly</span> like this</div>
              </div>
                </div>

      </div>
    </div>

    <div id="prices">
      <h4 style="padding-left: 1%;"> Where to Invest: Prices<h4>
      <div class="book-cards">
                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://g.foolcdn.com/editorial/images/496209/getty-stock-losses.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Price Numbers</div>
                  <div class="book-by">Entry Price: 110.52</div>
                  <div class="book-by">Entry Date: 12 December 2020</div>
                  <div class="book-by">Total Shares: 985 541</div>
                  <div class="book-by">Commisson: 13.57%2</div>
                  <div class="book-by">Exit Target : 120.00</div>

                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c1" name="rating" value="5">
            <label class="full" for="star-c1"></label>
            <input type="checkbox" id="star-c2" name="rating" value="4">
            <label class="full" for="star-c2"></label>
            <input type="checkbox" id="star-c3" name="rating" value="3">
            <label class="full" for="star-c3"></label>
            <input type="checkbox" id="star-c4" name="rating" value="2">
            <label class="full" for="star-c4"></label>
            <input type="checkbox" id="star-c5" name="rating" value="1">
            <label class="full" for="star-c5"></label>
            </fieldset>
            <span class="book-voters card-vote">1.987 voters</span>
            </div>
                  <div class="book-sum card-sum">Over 140 criteria to focus on the stock characteristics that meet your specific goals. </div>
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
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://stockmarketvideo.com/wp-content/uploads/2016/03/bullish-market.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Price Qoutes</div>
                  <div class="book-by">Initial Price: 780.52</div>
                  <div class="book-by">Commission: 12%</div>
                  <div class="book-by">Tax Fees: R15 541.00</div>
                  <div class="book-by">Transporation: Tier 2</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c6" name="rating" value="5">
            <label class="full" for="star-c6"></label>
            <input type="checkbox" id="star-c7" name="rating" value="4">
            <label class="full" for="star-c7"></label>
            <input type="checkbox" id="star-c8" name="rating" value="3">
            <label class="full" for="star-c8"></label>
            <input type="checkbox" id="star-c9" name="rating" value="2">
            <label class="full" for="star-c9"></label>
            <input type="checkbox" id="star-c10" name="rating" value="1">
            <label class="full" for="star-c10"></label>
            </fieldset>
            <span class="book-voters card-vote">1.087 voters</span>
            </div>
                  <div class="book-sum card-sum">Traders have to learn these lessons  the easy way or they can learn them the hard way by losing their money.  </div>
                  </div>
                </div>
                <div class="likes">
                <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Kimberly Jones</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://www.investors.com/wp-content/uploads/2018/03/RETIRE-stockchart-032918-shutter.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Price Qoutes</div>
                  <div class="book-by">Entry Price: 80.12</div>
                  <div class="book-by">Exit Price: 104.85</div>
                  <div class="book-by">Commission: 7%</div>
                  <div class="book-by">Percentages: 16%</div>

                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c11" name="rating" value="5">
            <label class="full" for="star-c11"></label>
            <input type="checkbox" id="star-c12" name="rating" value="4">
            <label class="full" for="star-c12"></label>
            <input type="checkbox" id="star-c13" name="rating" value="3">
            <label class="full" for="star-c13"></label>
            <input type="checkbox" id="star-c14" name="rating" value="2">
            <label class="full" for="star-c14"></label>
            <input type="checkbox" id="star-c15" name="rating" value="1">
            <label class="full" for="star-c15"></label>
            </fieldset>
            <span class="book-voters card-vote">997 voters</span>
            </div>
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
                <div class="like-name"><span>Adam</span> and<span> Kimberly</span> like this</div>
              </div>
                </div>

      </div>
    </div>

    <div id="notes">
      <h4 style="padding-left: 1%;"> Where to Invest: Notes<h4>
      <div class="book-cards">

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://www.indiafilings.com/learn/wp-content/uploads/2014/12/How-to-sell-on-Flipkart.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Notes on Trade</div>
          <div class="book-sum card-sum">Buy a piece of ownership in a pooled investment, limited partnership, or master limited partnership interest. A large number of unit trust funds operate in the commodities, natural resources, real estate, and financial services industries.</div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://static3.seekingalpha.com/images/marketing_images/stock_market/sell_stock_3.jpeg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Notes on Sell</div>
          <div class="book-sum card-sum">Invest in these securities and experience the characteristics of both stocks and bonds. Dividends paid to preferred shareholders usually have a higher priority within the issuing company's capital structure than those of common stockholders. </div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://businessfirstfamily.com/wp-content/uploads/2016/04/investment-advice-returns.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Notes on Investment</div>
          <div class="book-sum card-sum">Invest in a variety of securities, much as you would with conventional open-end mutual funds. However, unlike open-end mutual funds, CEFs trade and are priced intraday—like stocks on an exchange—at prices determined by buyers and sellers. </div>
          </div>
        </div>
        </div>


        </div>
      </div>
    </div>

    <div id="strategiesandanalysis">
      <h4 style="padding-left: 1%;"> Where to Invest: Strategies and Analysis<h4>

              <div class="book-cards">
                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://s.thestreet.com/files/tsc/v2008/photos/contrib/uploads/technicalanalysis6.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Strategies and Analysis</div>
                  <div class="book-by">Technical Charts</div>
                  <div class="book-by">Fundementals</div>
                  <div class="book-by">Other Analysis</div>

                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c1" name="rating" value="5">
            <label class="full" for="star-c1"></label>
            <input type="checkbox" id="star-c2" name="rating" value="4">
            <label class="full" for="star-c2"></label>
            <input type="checkbox" id="star-c3" name="rating" value="3">
            <label class="full" for="star-c3"></label>
            <input type="checkbox" id="star-c4" name="rating" value="2">
            <label class="full" for="star-c4"></label>
            <input type="checkbox" id="star-c5" name="rating" value="1">
            <label class="full" for="star-c5"></label>
            </fieldset>
            <span class="book-voters card-vote">1.987 voters</span>
            </div>
                  <div class="book-sum card-sum">Control is established and enforced through a series of contractual arrangements, rather than through equity ownership. </div>
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
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://cangeo-media-library.s3.amazonaws.com/s3fs-public/images/web_articles/article_images/4492/global_trade_map.png" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Strategies and Analysis</div>
                  <div class="book-by">Interactive Map</div>
                  <div class="book-by">ESG</div>
                  <div class="book-by">Investor Sentiment</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c6" name="rating" value="5">
            <label class="full" for="star-c6"></label>
            <input type="checkbox" id="star-c7" name="rating" value="4">
            <label class="full" for="star-c7"></label>
            <input type="checkbox" id="star-c8" name="rating" value="3">
            <label class="full" for="star-c8"></label>
            <input type="checkbox" id="star-c9" name="rating" value="2">
            <label class="full" for="star-c9"></label>
            <input type="checkbox" id="star-c10" name="rating" value="1">
            <label class="full" for="star-c10"></label>
            </fieldset>
            <span class="book-voters card-vote">1.087 voters</span>
            </div>
                  <div class="book-sum card-sum">Traders have to learn these lessons  the easy way or they can learn them the hard way by losing their money.  </div>
                  </div>
                </div>
                <div class="likes">
                <div class="like-profile">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Kimberly Jones</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://miro.medium.com/max/3000/0*YSfv5-QsaclH6tnq.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Strategies and Analysis</div>
                  <div class="book-by">Fundemental Analysis</div>
                  <div class="book-by">Interactive Map</div>
                  <div class="book-by">Technical Analysis</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c11" name="rating" value="5">
            <label class="full" for="star-c11"></label>
            <input type="checkbox" id="star-c12" name="rating" value="4">
            <label class="full" for="star-c12"></label>
            <input type="checkbox" id="star-c13" name="rating" value="3">
            <label class="full" for="star-c13"></label>
            <input type="checkbox" id="star-c14" name="rating" value="2">
            <label class="full" for="star-c14"></label>
            <input type="checkbox" id="star-c15" name="rating" value="1">
            <label class="full" for="star-c15"></label>
            </fieldset>
            <span class="book-voters card-vote">997 voters</span>
            </div>
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
                <div class="like-name"><span>Adam</span> and<span> Kimberly</span> like this</div>
              </div>
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
