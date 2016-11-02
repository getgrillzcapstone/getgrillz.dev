@extends('layout.master')

@section('content')



        {{-- Sample Test Form --}}
            <form action="{{ action('ItemController@index') }}" method="GET" id="itemsform">
                <input type="hidden" id="qta_field_fuel" name="fuel" value="">
                <input type="hidden" id="qta_field_size" name="size" value="">
                {{-- <button type="submit" class="btn btn-primary">Select</button> --}}
            </form>
        {{-- End Sample Test Form --}}


        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createOrderHeroContainer">
                    <h1 class="rentAGrill">Rent A Grill</h1>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 createOrderHeroImgContainer">
                    <img src="/getgrillz_images/smokeGrill.jpg" class="rentDescriptionPicture img-responsive" alt="backyard-partyx">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 createOrderHeroCaptionContainer">
                    <div class="rentCaption">
                        <p class="createOrderHeroCaption">Our renting process is easy, intuitive, and at our low hourly-rates, it's afforadable!
                            Just pick the dates you would like to rent or click Just Browsing to see what we've got
                            in stock!
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left createOrderHeroGetStartedContainer">
                    <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default getStartedButton" id="getStartedButton">
                        <h4>Get Started</h4>
                    </button>
                </div>
            </div>

            <div class="row pickADateContainer" id="datePickRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center pickADate">
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default pickADateButton" id="pickADateButton">
                        <h4 class="pickADateText">Looking For A Specific Day</h4>
                    </button>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default justBrowsingButton" id="justBrowsingButton" data-toggle="tooltip" title="Afraid of commitment, are you?">
                        <h4 class="pickADateText">Just Browsing</h4>
                    </button>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                </div>
            </div>

            <div class="row calenderDiv" id="calenderDiv">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender selectingADay">
                    <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default dateButton" id="selectingADayButton">
                        <h4 class="smallSizeButtonText">Select A Day</h4>
                    </button>
                    <div class="dateInputDiv selectingADayDiv">
                        <input type="text" name="selectingADay" value="" class="dateInput" id="selectingADay"/>
                    </div>
                    <div class="text-align chevronCalender1">
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" id="chevronCalender1"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender selectingMultiple">
                    <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default dateButton" id="selectingMultipleButton">
                        <h4 class="smallSizeButtonText">...Or Mulitple Days?</h4>
                    </button>
                    <div class="dateInputDiv selectingMultipleDiv">
                        <input type="text" name="selectingMultiple" value="" class="dateInput" id="selectingMultiple"/>
                    </div>
                    <div class="text-align chevronCalender2">
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" id="chevronCalender2"></span>
                    </div>
                </div>
            </div>

            <div class="row whatTypeOfGrillDiv" id="whatTypeOfGrillRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatTypeOfGrillHeader">
                    <h1>What Type Of Grill Are You Looking For?</h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center whatTypeOfGrill">
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default charcoalButton" id="charcoalButton" value="2">
                        <h4>Charcoal</h4>
                    </button>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                    <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default propaneButton" id="propaneButton" value="1">
                        <h4>Propane</h4>
                    </button>
                    <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                    </span>
                </div>
            </div>

            <div class="row sizeButtonDiv" id="whatSizeGrillRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatSizeGrill">
                    <h1>What Size Grill Are You Looking For?</h1>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a>
                        <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default sizeButton smallSizeButton" id="smallSizeButton" value="Small">
                            <h4 class="sizeButtonText smallSizeButtonText">Small</h4>
                        </button>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a>
                        <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default sizeButton mediumSizeButton" id="mediumSizeButton" value="Medium">
                            <h4 class="sizeButtonText mediumSizeButtonText">Medium</h4>
                        </button>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a>
                        <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default sizeButton largeSizeButton" id="largeSizeButton" value="Large">
                            <h4 class="sizeButtonText largeSizeButtonText">Large</h4>
                        </button>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a>
                        <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default imNotSureButton" id="imNotSureButton" value="%">
                            <h4 class="imNotSureButtonText">I'm Not Sure</h4>
                        </button>
                    </a>
                </div>
            </div>

        </div>

     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                <script src="/js/orders.js"></script>


@stop

@section('javascriptFilesForCreateOrderRent')
    <script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
    <script src="/js/createOrder.js"></script>
    <script src="/js/createOrderRent.js"></script>
@endsection
