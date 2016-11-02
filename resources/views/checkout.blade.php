@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row areYouForgettingSomethingDiv" id="whatTypeOfGrillRow">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 areYouForgettingSomethingHeader">
                <h1>Are You Forgetting Something?</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center areYouForgettingSomething">
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                </span>
                <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default charcoalButton" id="grillSuppliesButton" value="2">
                    <h4>Grill Supplies</h4>
                </button>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                </span>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                </span>
                <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default propaneButton" id="partySuppliesButton" value="1">
                    <h4>Party Supplies</h4>
                </button>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
                </span>
            </div>
        </div>
        {{-- @foreach($items as $item) --}}
        <div class="row grillSuppliesDiv">
            <h1>Grill Supplies</h1>
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive noTableBorder">
                <thead>
                    <tr>
                        <th class="text-center"><h4>Add To Cart</h4></th>
                        <th class="text-center"><h4>Item Name</h4></th>
                        <th class="text-center"><h4>Quanity</h4></th>
                        <th class="text-center"><h4>Price Per Item</h4></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Fish Basket</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Planks</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Ribrack</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Rotisserie</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Skewers</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Vegetable Basket</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Tool Set</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addToOrderButtonDiv">
                <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></span>
                <button class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn btn-default addToOrderButton" id="">
                    <h4 class="imNotSureButtonText">Add To Cart</h4>
                </button>
                <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></span>
            </div>
        </div>
        {{-- @endforeach --}}

        <div class="row partySuppliesDiv">
            <h1>Party Supplies</h1>
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive noTableBorder">
                <thead>
                    <tr>
                        <th class="text-center"><h4>Add To Cart</h4></th>
                        <th class="text-center"><h4>Item Name</h4></th>
                        <th class="text-center"><h4>Quanity</h4></th>
                        <th class="text-center"><h4>Price Per Item</h4></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Folding Chair</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Folding Table</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Party Utensils</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                        <td>Filler</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addToOrderButtonDiv">
                <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></span>
                <button class="col-xs-6 col-sm-6 col-md-6 col-lg-6 btn btn-default addToOrderButton" id="">
                    <h4 class="imNotSureButtonText">Add To Cart</h4>
                </button>
                <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></span>
            </div>
        </div>

        <div class="row yourOrderDiv">
            <h1>Here's Your Order So Far...</h1>
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive noTableBorder">
                <thead>
                    <tr>
                        <th class="text-center"><h4>Remove From Cart</h4></th>
                        <th class="text-center"><h4>Item Name</h4></th>
                        <th class="text-center"><h4>Quanity</h4></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Folding Chair</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Folding Table</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Party Utensils</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                        <td>Grass Turf</td>
                        <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout"/></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addToOrderButtonDiv">
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></span>
                <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default pickADateButton" id="updateCartButton">
                        <h4 class="pickADateText">Update Cart</h4>
                </button>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></span>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></span>
                <a href="/confirm-order">
                <button class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn btn-default justBrowsingButton" id="checkoutConfirmButton">
                    <h4 class="pickADateText">Continue</h4>
                </button>
                </a>
                <span class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></span>
            </div>
        </div>

    </div>


@stop

@section('javascriptFileForCheckout')
    <script src="/js/checkout.js"></script>
@endsection
