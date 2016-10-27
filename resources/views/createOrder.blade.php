@extends('layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 heroDiv">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 rentHeader">
                    <h1 class="rentA">Rent A</h1>
                    <h1 class="grill">Grill</h1>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right rentDescription">
                    <img src="/getgrillz_images/backyard-party.jpg" class=" rentDescriptionPicture img-thumbnail" alt="backyard-partyx">
                    <div class="rentCaption">
                        <p>Our renting process is easy, intuitive, and at our low hourly-rates, it's afforadable!
                            Just pick the dates you would like to rent or click Just Browsing to see what we've got
                            in stock!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
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
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender">
                <h2>From Date:</h2>
                <div class="calander noselect">
                  <div class="cal_head paper-shadow-top-z-2">

                    <button class ="button_left"><<</button>

                    <span id="month_label">Month</span>

                    <button class ="button_right">>></button>

                  </div>


                  <div class = "cal_body paper-shadow-bottom-z-1">

                    <table>
                      <tbody id = "cal">
                      </tbody>
                    </table>
                  </div>

                  <div class = "cal_output paper-shadow-top-z-1">
                    <span id="outputText"></span>
                  </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 calender">
                <h2>To Date:</h2>
                <div class="calander noselect">
                  <div class="cal_head paper-shadow-top-z-2">

                    <button class ="button_left"><<</button>

                    <span id="month_label">Month</span>

                    <button class ="button_right">>></button>

                  </div>


                  <div class = "cal_body paper-shadow-bottom-z-1">

                    <table>
                      <tbody id = "cal">
                      </tbody>
                    </table>
                  </div>

                  <div class = "cal_output paper-shadow-top-z-1">
                    <span id="outputText"></span>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatTypeOfGrill">
                <h1>What Type Of Grill Are You Looking For?</h1>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 charcoalDiv">
                <div class="btn btn-default charcoalButton" id="charcoalButton">
                    <h4 class="charcoalText">Charcoal</h4>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 propaneDiv">
                <div class="btn btn-default propaneButton" id="propaneButton">
                    <h4 class="propaneText">Propane</h4>
                </div>
            </div>
        </div>
        <div class="row sizeButtonDiv">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 whatSizeGrill">
                <h1>What Size Grill Are You Looking For?</h1>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="/items">
                    <div class="btn btn-default sizeButton smallSizeButton" id="smallSizeButton">
                        <h4 class="sizeButtonText smallSizeButtonText">Small</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="/items">
                    <div class="btn btn-default sizeButton mediumSizeButton" id="mediumSizeButton">
                        <h4 class="sizeButtonText mediumSizeButtonText">Medium</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="/items">
                    <div class="btn btn-default sizeButton largeSizeButton" id="largeSizeButton">
                        <h4 class="sizeButtonText largeSizeButtonText">Large</h4>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/items">
                    <div class="btn btn-default imNotSureButton" id="imNotSureButton">
                        <h4 class="imNotSureButtonText">I'm Not Sure</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

@stop
