@extends('layout.master')

@section('footerStyling')
    <style>
        .footer {
            background-color: #CA6924;
        }
    </style>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 heroImgContainer">
                <h1 class="heroHeader">
                    Don't Have Space For A Grill?
                </h1>
                <h3 class="heroSupport">
                    Problem solved with GetGrillz, a delivery service for grill rentals <br>in the San Antonio Area!
                </h3>
                <a href="/create-order-rent">
                    <button class="btn btn-default heroBtn rentHeroButton">
                        Rent
                    </button>
                </a>
                <a href="/create-order-buy">
                    <button class="btn btn-default heroBtn buyHeroButton">
                        Buy
                    </button>
                </a>
            </div>
        </div>

        <div class="row faqRow">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1 class="faqHeader">Our Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion1"><span>+</span> How To Contact Us</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqAnswer" id="faqAnswer1">
                <p>GetGrilz likes to take care of our customers like we take care of our products.
                    However, our products don't ask questions, but you do, so our question for you:
                    how can we help?
                    <br>
                    Contact Us By:
                    <br>
                    - Email: getGrillz@help.com
                    <br>
                    - Phone: (210)-726-4277
                </p>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion2"><span id="plus2">+</span> What Are We?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqAnswer" id="faqAnswer2">
                <p>...What are you? All joking aside, GetGrillz is a warehouse holding more
                    grills than we know what to do with. Which is why we've allowed our
                    wonderful customers to rent and buy our grills and supplies
                </p>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion3"><span id="plus3">+</span> How Do I "GetGrillz"?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqAnswer" id="faqAnswer3">
                <p>Start by selecting whether you're intrested in renting or buying a grill from our home
                    page, then simply follow our easy and intuitive selection process that will
                    ultimately lead you to selecting from our available inventory
                </p>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion4"><span id="plus4">+</span> What's the Rent/Buy Process Like?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row faqRow">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqAnswer" id="faqAnswer4">
                <p>Choose from our wide selection of high quality grills to either buy or rent for a
                    day, a weekend or how ever long you need! GetGrillz offers ultra affordable rates,
                    so anyone can rent or buy a grill and have a great time!
                </p>
            </div>
        </div>
        <br>
    </div>
    </div>
@stop

@section('javascriptFilesForFaqContact')
    <script src="/js/faqContact.js"></script>
@endsection
