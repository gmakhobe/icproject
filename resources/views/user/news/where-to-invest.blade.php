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

  <select name="assess" class="assess">
    <option value="1">Default</option>
    <option value="1">IC Exmas and Certifications</option>
    <option value="2">Excercises and Exmaples</option>
    <option value="3">Tutorials</option>
  </select>
  
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
      <h4 style="padding-left: 1%;"> Financial Literacy: All Lessons<h4>

              <div class="book-cards">
                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://i.pinimg.com/originals/d5/2e/97/d52e97c2007c0ebd0a34aeebc043b5ec.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Trading Lessons</div>
                  <div class="book-by">by Plugin</div>
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
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://i0.wp.com/farm8.staticflickr.com/7115/7038139465_7f4c52e748_o.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Journalism and Analysts</div>
                  <div class="book-by">by Plugin</div>
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
                <img src="http://www.queensu.ca/partnershipsandinnovation/sites/webpublish.queensu.ca.indwww/files/images/Build-business.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Building a Company</div>
                  <div class="book-by">by Plugin</div>
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

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://prod-discovery.edx-cdn.org/media/course/image/9d7084e9-a451-4f1e-a254-77824a48ccc4-1ec60f0b7178.small.jpeg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">International Investing</div>
                  <div class="book-by">by Plugin</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c16" name="rating" value="5">
            <label class="full" for="star-c16"></label>
            <input type="checkbox" id="star-c17" name="rating" value="4">
            <label class="full" for="star-c17"></label>
            <input type="checkbox" id="star-18" name="rating" value="3">
            <label class="full" for="star-c18"></label>
            <input type="checkbox" id="star-c19" name="rating" value="2">
            <label class="full" for="star-c19"></label>
            <input type="checkbox" id="star-c20" name="rating" value="1">
            <label class="full" for="star-c20"></label>
            </fieldset>
            <span class="book-voters card-vote">187 voters</span>
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
                <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://www.nuwireinvestor.com/wp-content/uploads/2018/11/Forex-chart.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Strategies and Inidcator Creation</div>
                  <div class="book-by">by Plugin</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c21" name="rating" value="5">
            <label class="full" for="star-c21"></label>
            <input type="checkbox" id="star-c22" name="rating" value="4">
            <label class="full" for="star-c22"></label>
            <input type="checkbox" id="star-c23" name="rating" value="3">
            <label class="full" for="star-c23"></label>
            <input type="checkbox" id="star-c24" name="rating" value="2">
            <label class="full" for="star-c24"></label>
            <input type="checkbox" id="star-c25" name="rating" value="1">
            <label class="full" for="star-c25"></label>
            </fieldset>
            <span class="book-voters card-vote">2.817 voters</span>
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
                <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Angelina Stone</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>
            </div>


      </div>
    </div>

    <div id="prices">
      <h4 style="padding-left: 1%;"> Financial Literacy: Testimonies<h4>
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

    <div id="notes">
      <h4 style="padding-left: 1%;"> Financial Literacy: How To Use IC<h4>
      <div class="book-cards">

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/02/12/650737-investment-01.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Investment</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://investor-square.com/wp-content/uploads/2017/04/investment-1.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Raw-Mate</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="http://images.clipartpanda.com/light-bulb-idea-clip-art-w-light-bulb-isolated-over-white-background-idea-vector.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Ideas</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
          </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://static.vecteezy.com/system/resources/previews/000/366/953/original/edit-profile-vector-icon.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Profile</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://www.storeplan.net.au/wp-content/uploads/2017/04/Pallet-Racking-in-Sydney_edited_website.jpg" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Store-Room</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
        </div>
        </div>

        <div class="book-card">
        <div class="content-wrapper">
        <img src="https://c1.sfdcstatic.com/content/dam/blogs/ca/Blog%20Posts/more-than-a-blog-how-to-create-your-content-strategy-open-graph.png" alt="" class="book-card-img">
        <div class="card-content">
        <div class="book-name">Create</div>
          <div class="book-sum card-sum">This section of the system has lessons the easy way or they can learn them the hard way by losing their money. </div>
          </div>
          </div>
        </div>

        </div>
      </div>
    </div>

    <div id="strategiesandanalysis">
      <h4 style="padding-left: 1%;"> Financial Literacy: All Lessons<h4>

              <div class="book-cards">
                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://i.pinimg.com/originals/d5/2e/97/d52e97c2007c0ebd0a34aeebc043b5ec.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Trading Lessons</div>
                  <div class="book-by">by Plugin</div>
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
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://i0.wp.com/farm8.staticflickr.com/7115/7038139465_7f4c52e748_o.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Journalism and Analysts</div>
                  <div class="book-by">by Plugin</div>
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
                <img src="http://www.queensu.ca/partnershipsandinnovation/sites/webpublish.queensu.ca.indwww/files/images/Build-business.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Building a Company</div>
                  <div class="book-by">by Plugin</div>
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

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://prod-discovery.edx-cdn.org/media/course/image/9d7084e9-a451-4f1e-a254-77824a48ccc4-1ec60f0b7178.small.jpeg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">International Investing</div>
                  <div class="book-by">by Plugin</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c16" name="rating" value="5">
            <label class="full" for="star-c16"></label>
            <input type="checkbox" id="star-c17" name="rating" value="4">
            <label class="full" for="star-c17"></label>
            <input type="checkbox" id="star-18" name="rating" value="3">
            <label class="full" for="star-c18"></label>
            <input type="checkbox" id="star-c19" name="rating" value="2">
            <label class="full" for="star-c19"></label>
            <input type="checkbox" id="star-c20" name="rating" value="1">
            <label class="full" for="star-c20"></label>
            </fieldset>
            <span class="book-voters card-vote">187 voters</span>
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
                <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Samantha William</span> and<span> 2 other friends</span> like this</div>
              </div>
                </div>

                <div class="book-card">
                <div class="content-wrapper">
                <img src="https://www.nuwireinvestor.com/wp-content/uploads/2018/11/Forex-chart.jpg" alt="" class="book-card-img">
                <div class="card-content">
                <div class="book-name">Strategies and Inidcator Creation</div>
                  <div class="book-by">by Plugin</div>
                  <div class="rate">
            <fieldset class="rating book-rate">
            <input type="checkbox" id="star-c21" name="rating" value="5">
            <label class="full" for="star-c21"></label>
            <input type="checkbox" id="star-c22" name="rating" value="4">
            <label class="full" for="star-c22"></label>
            <input type="checkbox" id="star-c23" name="rating" value="3">
            <label class="full" for="star-c23"></label>
            <input type="checkbox" id="star-c24" name="rating" value="2">
            <label class="full" for="star-c24"></label>
            <input type="checkbox" id="star-c25" name="rating" value="1">
            <label class="full" for="star-c25"></label>
            </fieldset>
            <span class="book-voters card-vote">2.817 voters</span>
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
                <div class="like-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" alt="" class="like-img">
              </div>
                <div class="like-name"><span>Angelina Stone</span> and<span> 2 other friends</span> like this</div>
              </div>
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
