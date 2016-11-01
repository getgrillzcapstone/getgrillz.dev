@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 forgettingSomething">
                <h1>Are You Forgetting Something?</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 grillSupplies">
                <button class="btn btn-default grillSuppliesButton" id="grillSuppliesButton">
                    <h4 class="grillSuppliesText">Grill Supplies</h4>
                </button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 partySupplies">
                <button class="btn btn-default partySuppliesButton" id="partySuppliesButton">
                    <h4 class="partySuppliesText">Party Supplies</h4>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 grillSuppliesChecklist" id="grillSuppliesChecklist">
                <h2>Grill Supplies</h2>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr class="tableHeader">
                            <th class="headerPadding"></th>
                            <th class="headerPadding">Item Name</th>
                            <th class="quantityField headerPadding">Quanity</th>
                            <th class="headerPadding">Price Per Item</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Propane</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Charcoal</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Baskets</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Racks</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Planks</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Lighter Fluid</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Rotisserie</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Skewers</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="grillSuppliesCheckboxes"><input type="checkbox" name="name1" class="grillSuppliesCheckbox"/></td>
                            <td>Foil</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addToOrderButtonDiv">
                    <div class="btn btn-default addToOrderButton" id="addToOrderButton">
                        <h4 class="addToOrderButtonText">Add To Order</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 partySuppliesChecklist" id="partySuppliesChecklist">
                <h2>Party Supplies</h2>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr class="tableHeader">
                            <th class="headerPadding"></th>
                            <th class="headerPadding">Item Name</th>
                            <th class="quantityField headerPadding">Quanity</th>
                            <th class="headerPadding">Price Per Item</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Chairs</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Tables</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Utensils</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Turfs</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Planks</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Lighter Fluid</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Rotisserie</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Skewers</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                        <tr>
                            <td class="partySuppliesCheckboxes"><input type="checkbox" name="name1" class="partySuppliesCheckbox"/></td>
                            <td>Foil</td>
                            <td class="quantityField"><input type="text" name="quantity"/></td>
                            <td>Filler</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 addToOrderButtonDiv">
                    <div class="btn btn-default addToOrderButton" id="addToOrderButton">
                        <h4 class="addToOrderButtonText">Add To Order</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 yourOrderDiv">
                <h1>Your Order:</h1>
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
                        <a href="/confirm-order">
                            <div class="btn btn-default checkoutButton" id="">
                                <h4 class="checkoutButtonText">Checkout</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('javascriptFileForCheckout')
    <script src="/js/checkout.js"></script>
@endsection
