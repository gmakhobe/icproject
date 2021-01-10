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
    <link rel="stylesheet" href="/assets1/css/awardsNav.css">
    <link rel="stylesheet" href="/assets1/css/Rawmat-cards.css">
    <link rel="stylesheet" href="/assets1/css/Rawmat-timeline.css">

    <link rel="stylesheet" href="/assets1/css/rawmat-card(Timeline).css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <link rel="stylesheet" href="/assets1/css/Rawmat-timeline.css"> -->

</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/header-style-1')

    @include('/user/layout/side-nav')


    <!-- End: Vertical Left-SideBar by Jigar Mistry -->

<div class='column'>
<div class='green-column'>
<section class="container">
<div class="containerr">
   <div class="tabs">
      <input type="radio" id="radio-1" name="tabs"  />
      <label class="tab" for="radio-1">Timeline</label>
      <input type="radio" id="radio-2" name="tabs" checked />
      <label class="tab" for="radio-2">Trending</label>
      <input type="radio" id="radio-3" name="tabs" />
      <label class="tab" for="radio-3" >Share Investment</label>
      <span class="glider"></span>
   </div>
</div>
<script>
          window.onload = function onload() {
            console.log('onload');
            $("#Timeline").hide();
                $("#Trending").show();
                $("#ShareInvestment").hide();
                $("#exampleFormControlSelect1").hide();

          }
          $(document).ready(function(){

            $("#radio-1").click(function(){
               $("#Timeline").show();
                $("#Trending").hide();
                $("#ShareInvestment").hide();
                });

                $("#radio-2").click(function(){
               $("#Timeline").hide();
                $("#Trending").show();
                $("#ShareInvestment").hide();
                });

                $("#radio-3").click(function(){
               $("#Timeline").hide();
                $("#Trending").hide();
                $("#ShareInvestment").show();
                });

                $("#activate").click(function(){
                    $("#exampleFormControlSelect1").show();
                });
          })
</script>
    <!-- Start: Top Navbar -->
    <main style="padding-top:10%">
	<section id="Trending" >
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-success" >
							<i class="fas fa-globe-europe"></i>
                            <span class="heading">REGIONAL</span>

                            <span class="value"><span>R</span></span>
                            <button type="button" id="activate" class="btn btn-light">Activate</button>
                            <div   id="exampleFormControlSelect1" class="form-group">
                                <label for="exampleFormControlSelect1">Choose one </label>
                                <select class="form-control">
                                    <option>America</option>
                                    <option>South America  </option>
                                    <option>South Africa  </option>
                                    <option>West Africa</option>
                                    <option>East Africa</option>
                                    <option>Europe</option>
                                    <option>West Asia</option>
                                    <option>East Asia</option>
                                    <option>Australia</option>
                                </select>
                            </div>


						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-primary">
							<i class="fab fa-product-hunt"></i>
							<span class="heading">NAME OF PRODUCT</span>
							<span class="value"><span>N</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-danger">
							<i class="fas fa-hand-holding-usd"></i>
							<span class="heading">BUDGET</span>
							<span class="value"><span>B</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box">
							<i class="fas fa-microchip"></i>
							<span class="heading">PROCESSOR</span>
							<span class="value"><span>P</span></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Processed<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
                                <div class="rad-info-box rad-txt-success">
                                MINES
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                PLANTS
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                ANIMALS
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                REAL ESTATE
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">UNPROCESSED<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
                            <div class="rad-info-box rad-txt-success">
                                MINES
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                PLANTS
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                ANIMALS
                                </div>
                                <div class="rad-info-box rad-txt-success">
                                REAL ESTATE
                                </div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
    </section>

<!-- TIME LINE SECTIONPO -->
    <section id="Timeline" style="display: none;">
            <div class="container gigs">
            <h3>FEATURED GIGS <sub>®</sub></h3>
            <p>Noteworthy Services</p>
            <div class="row">

            <!-- START  -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/f9pcpYr/featured7.jpg" alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#popup2" class="btn red">Share Investment</a>

                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/wh9mhPb/featured7.jpg" alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>

                    </div>
                    </div>
                </div>

                <!-- start -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/wh9mhPb/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>

                    </div>
                    </div>
                </div>
                <!-- end -->

                <!-- start -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/NVST9V2/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                                <!-- https://i.ibb.co/NVST9V2/featured2.jpg -->
                    </div>
                    </div>
                </div>
                <!-- start -->


                <!-- start -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/wS5zkmc/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                                <!-- https://i.ibb.co/NVST9V2/featured2.jpg -->
                    </div>
                    </div>
                </div>


                <!-- start  -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/SXrxVXT/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                                <!-- https://i.ibb.co/NVST9V2/featured2.jpg -->
                    </div>
                    </div>
                </div>
                <!-- end -->

                    <!-- START wh9mhPb -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/SXrxVXT/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                                <!-- https://i.ibb.co/NVST9V2/featured2.jpg -->
                    </div>
                    </div>
                </div>
                <!-- END  -->


                <!-- START  -->
                <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.ibb.co/TW364XT/featured7.jpg alt="Card image cap">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><span>(500) </span></li>
                    </ul>

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                                <!-- https://i.ibb.co/NVST9V2/featured2.jpg -->
                    </div>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </section>


    <section id="ShareInvestment"  style="display: none;">
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">



            <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" style="background-color:purple;color:white">
  <h1>Interested Entities</h1>
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in  <span class="badge badge-dark badge-pill">R20114</span> </button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus  <span class="badge badge-dark badge-pill">R6714</span></button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac  <span class="badge badge-dark badge-pill">R2099</span></button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros  <span class="badge badge-dark badge-pill">R5014</span></button>
</div>




            </div>
        </div>
    </section>

</main>
    <!-- End: Top Navbar -->
<!-- Modal -->

                </div>

                <div id="popup1" class="overlay" style="padding-bottom:10%">
                    <div class="popup">
                        <h2>Share Investment</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">BUDGET RANGES </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>25000-50000 </option>
                        <option>60000-100000</option>
                        <option>110000-160000</option>
                        <option>170000-200000</option>
                        <option>200000+</option>
                        </select>

                        <a class="btn red"> Confirm  Investment  Amount</a>
                    </div
                    </div>
                </div>
<!-- REGIONS -->
<div id="popup2" class="overlay" style="padding-bottom:10%">
                    <div class="popup">
                        <h2>REGIONS</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose one </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>America</option>
                        <option>South America  </option>
                        <option>South Africa  </option>
                        <option>West Africa</option>
                        <option>East Africa</option>
                        <option>Europe</option>
                        <option>West Asia</option>
                        <option>East Asia</option>
                        <option>Australia</option>
                        </select>

                        <a class="btn red"> Confirm  Investment  Amount</a>
                        </div>
                    </div>
                </div>


<!-- Mode -->

    <script >


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
