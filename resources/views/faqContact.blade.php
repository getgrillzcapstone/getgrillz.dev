@extends('layout.master')

@section('content')
    <div class="container faqContainer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1 class="faqHeader">Our Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion1"><span>+</span> How To Contact Us</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row">
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
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion2"><span id="plus2">+</span> What Are We?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row">
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
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion3"><span id="plus3">+</span> How Do I "GetGrillz"?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row">
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
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqQuestion">
                <h3 id="faqQuestion4"><span id="plus4">+</span> Can I Sell Or Rent My Grill?</h3>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 faqAnswer" id="faqAnswer4">
                <p>Sure! Just not on our site...yet
                </p>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
        <br>
    </div>
@stop

@section('javascriptFilesForFaqContact')
    <script src="/js/faqContact.js"></script>
@endsection
