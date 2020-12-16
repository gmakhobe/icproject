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
    <link rel="stylesheet" href="/assets1/css/rawmat-card(Timeline).css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
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
          })
</script>
    <!-- Start: Top Navbar -->
    <main style="padding-top:10%">
	<section id="Trending" >
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-success">
							<i class="fas fa-globe-europe"></i>
							<span class="heading">REGIONAL</span>
							<span class="value"><span>R</span></span>
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
		<div class="rad-body-wrapper rad-nav-min" align="center">
			<div class="container-fluid">
            <div class="container">
                    <div class="card">
                        <h2> Post </h2>
                        <div class="card-color">
                        <div class="info">
                            <button class="create-by btn btn-secondary" style="color:maroon; font-weight:strong;">Sullivan sullivan (sullivan@gmail.com)</button>
                            <p class="create-by"> <strong style="color:red">Location:</strong> HATFIELD,PRETORIA</p>
                            <p class="date"> <strong style="color:red">Bio:</strong>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. "</p>
                        </div>
                        </div>
                        <div class="side-info">
                        <p class="date">Data: 31/02/2020</p>
                        <p class="date">Price: R2000</p>
                        <dl style="width: 600px; text-align: justify;">
                            <dt>Bio:</dt>
                            <dd>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. I am obsessed with all things tech-related and I spend my free time building computers and developing my own software. I enjoy watching sci-fi movies, walking my Great Dane on Newport Beach and eating seafood tacos at local California Mexican restaurants."</dd>
                            <dt>Obteve a venda:</dt>
                            <dd>Sim</dd>
                            <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                        </dl>


                        <div class="links">


                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="container">
                    <div class="card" style="padding-bottom:5%">
                        <h2> Post </h2>
                        <div class="card-color">
                        <div class="info">
                            <button class="create-by btn btn-secondary" style="color:maroon; font-weight:strong;">Shaun gustavo (Gustavo@gmail.com)</button>
                            <p class="create-by"> <strong style="color:red">Location:</strong> MELROSE,JOHANNESBURG</p>
                            <p class="date"> <strong style="color:red">Bio:</strong>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. "</p>
                        </div>
                        </div>
                        <div class="side-info">

                                <div class="col-6">
                                <p class="date col col-lg-2"">Date: 01/12/2020</p>
                                <p class="date col col-lg-2"">Price: R2700</p>
                                </div>


                        <dl style="width: 600px; text-align: justify;">
                            <dt>Bio:</dt>
                            <dd>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. I am obsessed with all things tech-related and I spend my free time building computers and developing my own software. I enjoy watching sci-fi movies, walking my Great Dane on Newport Beach and eating seafood tacos at local California Mexican restaurants."</dd>
                            <dt>Obteve a venda:</dt>
                            <dd>Sim</dd>
                            <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                        </dl>


                        <div class="links">


                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="container">
                    <div class="card" style="padding-bottom:5%">
                        <h2> Post </h2>
                        <div class="card-color">
                        <div class="info">
                            <button class="create-by btn btn-secondary" style="color:maroon; font-weight:strong;">Dean Don (Dean@gmail.com)</button>
                            <p class="create-by"> <strong style="color:red">Location:</strong> RANDBURG,JOHANNESBURG</p>
                            <p class="date"> <strong style="color:red">Bio:</strong>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. "</p>
                        </div>
                        </div>
                        <div class="side-info">

                                <div class="col-6">
                                <p class="date col col-lg-2"">Date: 01/10/2020</p>
                                <p class="date col col-lg-2"">Price: R3700</p>
                                </div>


                        <dl style="width: 600px; text-align: justify;">
                            <dt>Bio:</dt>
                            <dd>I took an entry-level position at Oswald Tech directly after graduation and was promoted to my current position in May of 2018. I am obsessed with all things tech-related and I spend my free time building computers and developing my own software. I enjoy watching sci-fi movies, walking my Great Dane on Newport Beach and eating seafood tacos at local California Mexican restaurants."</dd>
                            <dt>Obteve a venda:</dt>
                            <dd>Sim</dd>
                            <a href="#" class="btn green">Buy</a>
                                <a href="#" class="btn blue">Analyse</a>
                                <a href="#" class="btn red">Negotiate</a>
                                <a href="#" class="btn red">Share Investment</a>
                        </dl>


                        <div class="links">


                        </div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </section>


    <section id="ShareInvestment"  style="display: none;">
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">

            <h1>Popup/Modal Windows without JavaScript</h1>
                <div id="wrapper">
                <p><a class="button" href="#popup1">Click Me</a></p>
                    <p><a class="button" href="#popup2">Click Me Too</a></p>
                </div>

                <div id="popup1" class="overlay" style="padding-bottom:10%">
                    <div class="popup">
                        <h2>Info box</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                            <p>This is done totally without JavaScript. Just HTML and CSS.</p>
                        </div>
                    </div>
                </div>

                <div id="popup2" class="overlay light" >
                    <a class="cancel" href="#"></a>
                    <div class="popup">
                        <h2>What the what?</h2>
                        <div class="content">
                    <p>Click outside the popup to close.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

</main>
    <!-- End: Top Navbar -->
<!-- Modal -->



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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
