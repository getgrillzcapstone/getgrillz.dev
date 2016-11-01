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
        <div class="row rentContainer">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 rentHeader">
                <h1 class="rentA">Rent A</h1>
                <h1 class="grill">Grill</h1>
                <div class="btn btn-default getStartedButton" id="getStartedButton">
                    <h4>Get Started</h4>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right rentDescription">
                <img src="/getgrillz_images/backyard-party.jpg" class=" rentDescriptionPicture img-thumbnail" alt="backyard-partyx">
                <div class="rentCaption">
                    <p>Our renting process is easy, intuitive, and at our low hourly-rates, it's afforadable!
                        Just pick the dates you would like to rent or click Just Browsing to see what we've got
                        in stock!
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="datePickRow">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pickADate">
                <div class="btn btn-default pickADateButton" id="pickADateButton">
                    <h4>Looking For A Specific Day</h4>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 justBrowsing">
                <div class="btn btn-default justBrowsingButton" id="justBrowsingButton">
                    <h4>Just Browsing</h4>
                </div>
            </div>
        </div>
        <div class="row calenderDiv" id="calenderDiv">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender selectingADay">
                <div class="btn btn-default dateButton" id="selectingADayButton">
                    <h4 class="sizeButtonText smallSizeButtonText">Select A Day</h4>
                </div>
                <div class="dateInputDiv selectingADayDiv">
                    <input type="text" name="selectingADay" value="" class="dateInput" id="selectingADay"/>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender selectingMultiple">
                <div class="btn btn-default dateButton" id="selectingMultipleButton">
                    <h4 class="sizeButtonText smallSizeButtonText">...Or Mulitple Days?</h4>
                </div>
                <div class="dateInputDiv selectingMultipleDiv">
                    <input type="text" name="selectingMultiple" value="" class="dateInput" id="selectingMultiple"/>
                </div>
            </div>
        </div>
        <div class="row" id="whatTypeOfGrillRow">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatTypeOfGrill">
                <h1>What Type Of Grill Are You Looking For?</h1>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 charcoalDiv">
                <div class="btn btn-default charcoalButton" id="charcoalButton" value="2">
                    <h4 class="charcoalText">Charcoal</h4>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 propaneDiv">
                <div class="btn btn-default propaneButton" id="propaneButton" value="1">
                    <h4 class="propaneText">Propane</h4>
                </div>
            </div>
        </div>
        <div class="row sizeButtonDiv" id="whatSizeGrillRow">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatSizeGrill">
                <h1>What Size Grill Are You Looking For?</h1>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a>
                    <div class="btn btn-default sizeButton smallSizeButton" id="smallSizeButton" value="Small">
                        <h4 class="sizeButtonText smallSizeButtonText">Small</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a>
                    <div class="btn btn-default sizeButton mediumSizeButton" id="mediumSizeButton" value="Medium">
                        <h4 class="sizeButtonText mediumSizeButtonText">Medium</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a>
                    <div class="btn btn-default sizeButton largeSizeButton" id="largeSizeButton" value="Large">
                        <h4 class="sizeButtonText largeSizeButtonText">Large</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a>
                    <div class="btn btn-default imNotSureButton" id="imNotSureButton" value="%">
                        <h4 class="imNotSureButtonText">I'm Not Sure</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                <script src="/js/orders.js"></script>


@stop

@section('javascriptFilesForCreateOrderRent')
    <script src="/js/createOrder.js"></script>
    <script src="/js/createOrderRent.js"></script>
@endsection
