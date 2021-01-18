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

    <link rel="stylesheet" href="/css/style2.css">

</head>

<body onload="onload">

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/header-style-1')
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <!-- End: Top Navbar -->

    <div class="container m-2">
        <div class="row">
            <div class="col-md-12 p-5" >

                <div class="row">
                    <div class="col-md-6 card p-3">
                        <div class="card-body">
                            <img class="my-ecom-thumbnail-img" src="{{ $ProceesedRawMat[0]['ProductImage'] }}"
                                alt="Raw mate image" />
                        </div>
                    </div>
                    <div class="col-md-6 card p-3">
                        <div class="card-body">
                            <center>
                                <h2 class="">{{ $ProceesedRawMat[0]['ProductName'] }}</h2>
                                <h1 class=""><sup>{{ $ProceesedRawMat[0]['ProductCurrency'] }}</sup>
                                    <strong>
                                        <span id="lblProductPrice1">
                                            {{ $ProceesedRawMat[0]['ProductPrice'] }}
                                        </span></strong>
                                </h1>
                                <p class="">{{ $ProceesedRawMat[0]['ProductDescription'] }}</p>
                                <p class="">
                                    <a
                                        href="/user/rawmate/seller/{{ $ProceesedRawMat[0]['SellerName'] }}/{{ $ProceesedRawMat[0]['SellerId'] }}">{{ $ProceesedRawMat[0]['SellerName'] }}</a>
                                </p>
                                <label span class="my-text-color-white">Product Quantity</label><br>
                                <p>
                                    <button onclick="quantitySub()" type="button"
                                        class="btn btn-block my-ecom-btn-quantity"> -1 </button>
                                    <input onkeyup="quantityChange()" id="productId" type="number"
                                        placeholder="Product Quanity" class="form-control " value="1">
                                    <button onclick="quantityAdd()" type="button"
                                        class="btn btn-block my-ecom-btn-quantity"> 1 </button>
                                    <span class="">out of
                                        {{ $ProceesedRawMat[0]['ProductQuantity'] }}
                                    </span>
                                </p><br /><br />

                                <h3>
                                    <sup>{{ $ProceesedRawMat[0]['ProductCurrency'] }}</sup>
                                    <span id="lblProductPrice2">
                                        {{ $ProceesedRawMat[0]['ProductPrice'] }}
                                    </span>
                                </h3>

                                <script>
                                    //Add Price
                                    function quantityAdd() {
                                        let txtProductId = document.getElementById("productId").value;
                                        txtProductId = Number(txtProductId);
                                        if (!txtProductId) {
                                            document.getElementById("productId").value = txtProductId + 1;
                                            alert("Only numbers are required!");
                                            changePrice();
                                            return;
                                        }
                                        document.getElementById("productId").value = txtProductId + 1;
                                        changePrice();
                                    }

                                    //Subtract Price
                                    function quantitySub() {
                                        let txtProductId = document.getElementById("productId").value;
                                        txtProductId = Number(txtProductId);
                                        if (!txtProductId) {
                                            document.getElementById("productId").value = txtProductId + 1;
                                            alert("Only numbers are required!");
                                            changePrice();
                                            return;
                                        }
                                        document.getElementById("productId").value = txtProductId - 1;
                                        changePrice();
                                    }

                                    //Change Price
                                    function changePrice() {
                                        const lblProductPrice = document.getElementById("lblProductPrice1");
                                        let txtProductId = document.getElementById("productId").value;



                                        txtProductId = Number(txtProductId);

                                        document.getElementById("lblProductPrice2").innerHTML = (txtProductId * Number(
                                            lblProductPrice.textContent));

                                    }

                                </script>

                                <script>
                                    function quantityChange() {

                                        ProductsBrand                      const lblProductPrice = document.getElementById("lblProductPrice1");
                                        const txtProductId = document.getElementById("productId").value;

                                        document.getElementById("lblProductPrice2").innerHTML = ((txtProductId) *
                                            Number(lblProductPrice.textContent));

                                    }




                                    /*function btnAddToCat() {
                                        const ProductName;
                                        const ProductQuantity = document.getElementById("productId").value;
                                        productId;


                                    }*/

                                </script>

                                <button onclick="btnAddToCat()" type="button"
                                    class="btn btn-block btn-lg my-ecom-btn-buy p-3">Add To Cart</button>

                                <p class="p-3 my-text-color-white">Terms and Conditions of purchasing</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
    <!-- End: Dark footer with social media icons -->
    <script src="/assets1/js/bs-init.js"></script>
    <script src="/assets1/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="/assets1/js/theme.js"></script>
</body>

</html>
