@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 takeMeBackDiv">
                <a href="/checkout" class="takeMeBackAnchor">
                <div class="btn btn-default takeMeBackButton">
                    <h4 class="takeMeBackButtonText">Take Me Back To My Order</h4>
                </div>
                </a>
            </div>
        </div>
        @if(!Auth::check())
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 loginOrRegisterDiv">
                <h1 class="loginOrRegister">Login Or Register</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 enterEmailDiv">
                <form class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <div class="form-group">
                      <label for="emailConfirmOrder">Email address</label>
                      <input type="email" class="form-control" id="emailConfirmOrder" placeholder="Enter email">
                    </div>
                    <div class="form-group password" id="passwordConfirmOrder">
                      <label for="passwordConfirmOrder">Password</label>
                      <input type="password" class="form-control" id="passwordConfirmOrder" placeholder="Enter Password">
                    </div>
                    <div class="form-group confirmPassword" id="confirmPasswordConfirmOrder">
                      <label for="confirmPasswordConfirmOrder">Confirm Password</label>
                      <input type="confirmPassword" class="form-control" id="confirmPasswordConfirmOrder" placeholder="Enter Password">
                    </div>
                    <div class="btn btn-default continueButton" id="continueButtonConfirmOrder">
                        <h4>Continue</h4>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <div class="row" id="deliveryRow">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addressDiv">
                <h1 class="whereDeliver">Where Should We Deliver Your Order?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 selectAddressDiv">
                <h4 class="selectDeliver">Select A Location Via Drop Pin</h4>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 enterAddressDiv">
                <h4 class="enterDeliver">Or Enter An Address</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mapDiv">
                <!-- div to hold map -->
                <div class="map" id="map"></div>
                <!-- Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTKNZdOuGDVz0NNe2drCK7P45W2OkF5tw"></script>
                <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                <!-- Script to show address on map -->
                <script type="text/javascript">
                    (function() {
                        "use strict";

                        // Set our map options
                        var mapOptions = {
                        // Set the zoom level
                        zoom: 10,

                        // This sets the center of the map at our location
                        center: {
                            lat:  29.426791,
                            lng: -98.489602
                        }

                        };

                        // Render the map
                        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                        // Create lat and long for our marker position
                        var codeup = { lat: 29.426791, lng: -98.489602 };
                        var geocoder = new google.maps.Geocoder();

                        // Add the marker to our existing map
                        var marker = new google.maps.Marker({
                        position: codeup,
                        map: map,
                        draggable: true,
                        animation: google.maps.Animation.DROP
                        });
                        geocoder.geocode({'latLng': codeup }, function(results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                if (results[0]) {
                                    var str = results[1].formatted_address
                                    var prettyAddress = str.split(",");
                                    var zipCodeState = prettyAddress[2];
                                    var zipCode = zipCodeState.split(" ");
                                    $('#streetAddress').val(prettyAddress[0]);
                                    $('#city').val(prettyAddress[1]);
                                    $('#zip').val(zipCode[2]);
                                    $('#state').val(zipCode[1]);
                                }
                            }
                        });

                        google.maps.event.addListener(marker, 'dragend', function() {
                            geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                                if (status == google.maps.GeocoderStatus.OK) {
                                    if (results[0]) {
                                        var str = results[0].formatted_address
                                        var prettyAddress = str.split(",");
                                        var zipCodeState = prettyAddress[2];
                                        var zipCode = zipCodeState.split(" ");
                                        $('#streetAddress').val(prettyAddress[0]);
                                        $('#city').val(prettyAddress[1]);
                                        $('#zip').val(zipCode[2]);
                                        $('#state').val(zipCode[1]);
                                    }
                                } else {
                                    alert("We were unable to find this location!");
                                }
                            });
                        });
                        $( document ).ready(function() {
                            $("#showOnMapButton").click(function(){
                                function searchAddress() {
                                    var addressInput = document.getElementById('streetAddress').value;
                                    addressInput += document.getElementById('city').value;
                                    addressInput += " " + document.getElementById('zip').value;
                                    addressInput += " " + document.getElementById('state').value;
                                    console.log(addressInput);

                                    var geocoder = new google.maps.Geocoder();

                                    geocoder.geocode({address: addressInput}, function(results, status) {

                                      if (status == google.maps.GeocoderStatus.OK) {

                                        var myResult = results[0].geometry.location; // reference LatLng value

                                        createMarker(myResult); // call the function that adds the marker

                                        map.setCenter(myResult);

                                        map.setZoom(17);

                                      }
                                    });
                                }

                                    function createMarker(latlng) {
                                     // If the user makes another search you must clear the marker variable
                                     if(marker != undefined && marker != ''){
                                      marker.setMap(null);
                                      marker = '';
                                     }

                                     marker = new google.maps.Marker({
                                        map: map,
                                        position: latlng
                                     });
                                    }
                                searchAddress();
                            });
                        });
                    })();
                </script>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 addressFieldsDiv">
                <div class="form-group">
                  <label for="streetAddress">Street Address</label>
                  <input type="text" class="form-control" id="streetAddress" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter City">
                </div>
                <div class="form-group">
                  <label for="zip">ZIP</label>
                  <input type="text" class="form-control zipInput" id="zip" placeholder="Enter ZIP Code">
                </div>
                <div class="form-group">
                  <label for="state">State</label>
                  <input type="text" class="form-control stateInput" id="state" placeholder="TX">
                </div>
                <div class="btn btn-default showOnMapButton" id="showOnMapButton">
                    <h4>Show On Map</h4>
                </div>
                <div class="chevron-down">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" id="chevron-downConfirmOrder"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 yourOrderDiv" id="yourOrderDiv">
                <h1>Do We Have Everything Correct?</h1>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr class="tableHeader">
                            <th class="headerPadding"></th>
                            <th class="headerPadding">Your Selected Items</th>
                            <th class="quantityField headerPadding">Quanity</th>
                            <th class="headerPadding">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="yourOrderCheckboxes"><input type="checkbox" name="name1" class=""/></td>
                            <td>Filler</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>$Filler</td>
                        </tr>
                        <tr>
                            <td class="yourOrderCheckboxes"><input type="checkbox" name="name1" class=""/></td>
                            <td>Filler</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>$Filler</td>
                        </tr>
                        <tr>
                            <td class="yourOrderCheckboxes"><input type="checkbox" name="name1" class=""/></td>
                            <td>Filler</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>$Filler</td>
                        </tr>
                        <tr>
                            <td class="yourOrderCheckboxes"><input type="checkbox" name="name1" class=""/></td>
                            <td>Filler</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>$Filler</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="orderTotal">Total: $432.98</h2>
                <div class="yourOrderButtonContainer">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="btn btn-default updateCartButton" id="updateCartButton">
                            <h4 class="updateCartButtonText">Update Cart</h4>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="btn btn-default checkoutButton" id="checkoutConfirmButton" data-toggle="modal" data-target="#myModal">
                            <h4 class="checkoutButtonText">This Looks Good!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Now Accpeting Galactic Credits!</h4>
                <h6 class="modal-title">But We'll Accept Your Earthling Money Too...</h6>
              </div>
              <div class="modal-body modal-body-colored">
                  <div class="demo">
            		<form class="payment-card">
            			<div class="bank-card">
                				<div class="bank-card__side bank-card__front">
                					<i class="bank-card__icon bank-card__icon_mastercard"></i>
                					<i class="bank-card__icon bank-card__icon_visa"></i>
                					<div class="bank-card__inner">
                						<label class="bank-card__label bank-card__label_fullwidth">
                							<span class="bank-card__hint">Name On Card</span>
                							<input type="text" class="bank-card__field" placeholder="Name On Card" pattern="[A-Za-z, ]{2,}" name="holder-card" required>
                						</label>
                					</div>
                					<div class="bank-card__inner">
                						<label class="bank-card__label bank-card__label_fullwidth">
                							<span class="bank-card__hint">Number On Card</span>
                							<input type="text" class="bank-card__field" placeholder="Number On Card" pattern="[0-9]{16}" name="number-card" required>
                						</label>
                					</div>
                					<div class="bank-card__inner">
                						<span class="bank-card__caption">valid thru</span>
                					</div>
                					<div class="bank-card__inner">
                						<label class="bank-card__label">
                							<span class="bank-card__hint">Month</span>
                							<input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="mm-card" required>
                						</label>
                						<span class="bank-card__separator">/</span>
                						<label class="bank-card__label">
                							<span class="bank-card__hint">Year</span>
                							<input type="text" class="bank-card__field" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="year-card" required>
                						</label>
                					</div>
                				</div>
                				<div class="bank-card__side bank-card__back">
                					<div class="bank-card__inner">
                						<label class="bank-card__label">
                							<span class="bank-card__hint">CVC</span>
                							<input type="text" class="bank-card__field" placeholder="CVC" maxlength="3" pattern="[0-9]{3}" name="cvc-card" required>
                						</label>
                					</div>
                				</div>
                			</div>
                			<button class="demo__button" data-dismiss="modal" id="confirmPayment">Confirm</button>
                		</form>
                	</div>
              </div>
            </div>

          </div>
        </div>
    </div>
@stop

@section('javascriptFileForConfirmOrder')
    <script src="/js/confirmOrder.js"></script>
@endsection
