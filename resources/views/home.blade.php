@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 heroImgContainer">
                <img src="/getgrillz_images/hero_image2.jpeg" class="heroImg">
                {{-- <video autoplay muted loop style="width:100%; height: auto;">
                  <source src="/getgrillz_images/smolderingcharcoal.mp4" type="video/mp4">
                </video> --}}
                <h1 class="overlay1">
                    If you live in a city, you may not have space for a grill or a safe place to lock one up.
                </h1>
                <h1 class="overlay2">
                    Problem solved with GetGrillz
                </h1>
                <h1 class="overlay3">
                    A delivery service for grill rentals!
                </h1>
            </div>
        </div>
        <div class="row bannerContainer">
            <h1 class="bannerHeader">What We Offer...</h1>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/charcoal_grill_images/rivergrille_charcoalgrill_11.jpg" class="bannerImg1">
                <h3>Grills</h3>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/getgrillz_images/bbqtools.jpg" class="bannerImg2">
                <h3>Grills Accessories</h3>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="/partysupplies_images/folding_table1.jpg" class="bannerImg3">
                <h3>Party Supplies</h3>
            </div>
        </div>
        <div class="row rentorBuyDivs">
            <figure class="snip0014">
                <img src="/getgrillz_images/dinnerparty.jpeg" class="rentOrBuyImg1">
                <div>
                    <h2><span>Rent</span></h2>
                    <hr>
                    <p>Pick from our broad selection of high quality grills to rent for a
                        day, weekend, or how ever long you need! At our low hourly rate, anyone
                        can rent our grills and have a great time!
                    </p>
                    <div class="rentButton">
                        <a href="/create-order"><h3 class="rent">Rent</h3></a>
                    </div>
                </div>
            </figure>
            <figure class="snip0014">
                <img src="/getgrillz_images/hero_image1.jpeg" class="rentOrBuyImg2">
                <div>
                    <h2><span>Buy</span></h2>
                    <hr>
                    <p>We offer our customers the chance to purchase from our broad high-quality
                        selection of grills for a less-than-retail price. Just browse through our
                        inventory, add the grill you like to your order, tell us where to deliver it,
                        and before you know it, you'll have your very own high-quality grill!
                    </p>
                    <div class="buyButton">
                        <a href="/create-order"><h3 class="rent">Buy</h3></a>
                    </div>
                </div>
            </figure>
        </div>
    </div>
@stop
