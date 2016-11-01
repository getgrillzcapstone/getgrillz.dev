@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 heroImgContainer">
                <img src="/getgrillz_images/hero_image2.jpeg" class="heroImg">
                <h1 class="overlay1">
                    Don't Have Space For A Grill?
                </h1>
                <h3 class="overlay2">
                    Problem solved with GetGrillz, a delivery service for grill rentals!
                </h3>
            </div>
        </div>
        <div class="row bannerContainer">
            <h1 class="bannerHeader">What We Offer...</h1>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/charcoal_grill_images/rivergrille_charcoal.jpg" class="bannerImg1">
                <h3>Grills</h3>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/getgrillz_images/bbqtools.jpg" class="bannerImg2">
                <h3>Grill Accessories</h3>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/partysupplies_images/folding_table1.jpg" class="bannerImg3">
                <h3>Party Supplies</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 landingPageRentDiv">
                <h2 class="landingPageRentHeader">Rent</h2>
                <hr>
                <p class="landingPageRentText">Choose from our wide selection of high quality grills to rent for a
                    day, a weekend or how ever long you need! GetGrillz offers ultra affordable daily rates,
                    so anyone can rent a grill and have a great time!
                </p>
                <button class="col-xs-11 col-sm-11 col-md-11 col-lg-11 btn btn-default text-center landingPageRentButton">
                    <a href="/create-order-rent"><h3>Rent</h3></a>
                </button>
                <img src="/getgrillz_images/dinnerparty.jpeg" class="landingPageRentImg">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 landingPageBuyDiv">
                <h2 class="landingPageBuyHeader">Buy</h2>
                <hr>
                <p class="landingPageBuyText">We don't just rent... You can buy! <br>
                GetGrillz offers customers the opportunity to purchase from our broad selection of grills at below retail price.
                Browse through our inventory, add the grill you like to your order, tell us where to deliver it,
                and before you know it you will be the proud owner of a new grill!
                </p>
                <button class="col-xs-11 col-sm-11 col-md-11 col-lg-11 btn btn-default text-center landingPageBuyButton">
                    <a href="/create-order-buy"><h3>Buy</h3></a>
                </button>
                <img src="/getgrillz_images/hero_image1.jpeg" class="landingPageBuyImg">
            </div>
        </div>
    </div>
@stop
