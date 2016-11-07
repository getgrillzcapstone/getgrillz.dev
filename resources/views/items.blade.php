@extends('layout.master')

@section('itemsCss')
    <link href="/css/items.css" rel="stylesheet" type="text/css" />
    <link href="css/square/grey.css" rel="stylesheet">
@stop

@section('itemsBackgroundImg')
    <style>
        body {
            background-image: url('/getgrillz_images/purty-wood.png');
            /*background-image: url('/getgrillz_images/wood-pattern.png');*/
            background-size: auto;
        }
    </style>
@stop

@section('content')



    <div class="container-fluid">
        @if (session()->has('order_id') && session()->get('order_items_count') > 0)
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
        @endif
        <div class="row grillSuppliesDiv">
            <h1>Grill Supplies</h1>
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive noTableBorder">
                <thead>
                    <tr>
                        <th><h4>Add To Cart</h4></th>
                        <th class="text-center"><h4>Item Name</h4></th>
                        <th class="text-center"><h4>Price Per Item</h4></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <form action="{{ action('OrderController@addToCart')}}" method="GET">
                    @foreach($grillInventory as $grillItem)
                    <tr>
                        <td><input type="checkbox" name="extraItem[]" value="{{$grillItem->id}}" class="grillSuppliesCheckbox"/></td>
                        <td><p>{{$grillItem->model}}</p></td>
                        <td><p>${{$grillItem->price}}</p></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        <button class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default addToOrderButton" type="submit">
                            <h4 class="imNotSureButtonText">Add To Order</h4>
                        </button>
                    </form>
        </div>
        <div class="row partySuppliesDiv">
            <h1>Party Supplies</h1>
            <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive noTableBorder">
                <thead>
                    <tr>
                        <th class="text-center"><h4>Add To Cart</h4></th>
                        <th class="text-center"><h4>Item Name</h4></th>
                        {{-- <th class=""><h4>Quanity</h4></th> --}}
                        <th class="text-center"><h4>Price Per Item</h4></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                         <form action="{{ action('OrderController@addToCart')}}" method="GET">
                            @foreach($partyInventory as $partyItem)
                            <tr>
                                <td><input type="checkbox" name="extraItem[]" value="{{$partyItem->id}}" class="grillSuppliesCheckbox"/></td>
                                <td><p>{{$partyItem->model}}</p></td>
                                {{-- <td class="quantityField"><input type="text" name="quantity" class="quantityCheckout" placeholder="hello"/></td> --}}
                                <td><p>${{$partyItem->price}}</p></td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                            <button type="submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-default addToOrderButton">
                                <h4 class="imNotSureButtonText">Add To Order</h4>
                            </button>
                        </form>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center">Grills, Grills and Grills</h1>
                <p class="text-muted text-center" style="font-family: thunder; color: #333333;">Hover Over Grills To View Item Details Or To Add Item To Order</p>
                <br>
                @if (session()->has('addToCartMessage'))
                    <span class="help-block alert alert-success"><h3 class="text-center">{{session()->get('addToCartMessage')}}</h3></span>
                @endif
                @if (session()->has('clearCartMessage'))
                    <span class="help-block alert alert-success"><h3 class="text-center">{{session()->get('clearCartMessage')}}</h3></span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{action('OrderController@getCart')}}">
                <button class="info btn btn-info btn-md" style="cursor:pointer; font-family: thunder; background-color: #ca6924; border-color: transparent;">
                    <h4>Go To Checkout</h4>
                </button>
                </a>
                <a href="{{action('OrderController@clearCart')}}">
                <button class="info btn btn-info btn-md" style="cursor:pointer; font-family: thunder; background-color: #ca6924; border-color: transparent;">
                    <h4>Clear Cart</h4>
                </button>
                </a>
                <a href="{{action('ItemController@clearSelections')}}">
                <button class="info btn btn-info btn-md" style="cursor:pointer; font-family: thunder; background-color: #ca6924; border-color: transparent;">
                    <h4>Clear Sorting Options</h4>
                </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dropDownSort">
                <div class="form-inline">
                    <div class="pull-right">
                        <select name="sortByPrice" class="form-control" form="itemsFilterForm" id="sortByPriceSelect" onchange="this.form.submit()">
                            <option value="asc" >Sort by: Price</option>
                            <option {{session("sortByPrice") == "asc" ? 'selected' : ''}} value="asc" >Sort by: Price Low to High</option>
                            <option {{session("sortByPrice") == "desc" ? 'selected' : ''}} value="desc" >Sort by: Price High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 categoriesDiv">
                <!-- menus and filters-->
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading customPanelHeading">
                        <h4 class="panel-title">Grill Types</h4>
                    </div>
    <form id="itemsFilterForm" action="{{ action('ItemController@saveSelections') }}" method='GET'>
         {{{ csrf_field() }}}
                    <div class="panel-body">

                            

                            <div class="form-group"></div>
                           
                            <div class="checkbox">

                                     <label>
                                    <input name="fuel[0]" {{session("fuel.0") == 1 ? 'checked' : ''}} id="propane" type="checkbox" value="1">Propane
                                    </label>
                            </div>
                            
                            
                            <div class="checkbox">
                                <label>
                                    <input name="fuel[1]" {{session("fuel.1") == 2 ? 'checked' : ''}} id="charcoal" type="checkbox" value="2">Charcoal
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-default btn-sm pull-right">Apply</button>

                    </div>
                </div>
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading customPanelHeading">
                        <h4 class="panel-title">Brands</h4>
                    </div>

                    <div class="panel-body">

                        {{-- <div class="form-group"> --}}

                            @foreach($manufacturers as $key => $manufacturer)
                        {{-- <form action=" {{ action('ItemController@setManufacturer') }}"> --}}
                            <div class="form-group"></div>
                            <div class="checkbox">

                                <label>
                                    <input name="man[{{$key}}]" {{session("man.$key") == $manufacturer->id ? 'checked' : ''}} type="checkbox" value="{{ $manufacturer->id }}">{{ $manufacturer->name }}
                                </label>

                            </div>
                            @endforeach
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </div>
                    </div>



                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading customPanelHeading">
                        <h4 class="panel-title">Size</h4>
                    </div>
                    <div class="panel-body">

                            <div class="form-group"></div>
                            <div class="checkbox">
                                <label>
                                    <input name="size[0]" {{session("size.0") == "Small" ? 'checked' : ''}} id="Small" type="checkbox" value="Small">Small
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="size[1]" {{session("size.1") == "Medium" ? 'checked' : ''}} id="Medium" type="checkbox" value="Medium">Medium
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="size[2]" {{session("size.2") == "Large" ? 'checked' : ''}} id="Large" type="checkbox" value="Large">Large
                                </label>
                            </div>
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </form>

                    </div>
                </div>
            </div>
            @foreach($items as $item)
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                    {{--  --}}
                    <div class="product itemsContainer">

                                <!-- Trigger the modal with a button -->


                            {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> --}}
                            <div class="itemImage hovereffect">
                              <img style="border: 2px solid black"class="img-responsive itemBorder" src="{{$item->image}}" alt="">
                            <div class="overlay">
                            <div class="text">

                        </div>
                            <a class="info btn btn-info btn-md" type="button" data-toggle="modal" data-target="#product-quick-view-modal-{{$item->id}}" style="cursor:pointer; font-family: thunder; border-color: transparent;">Item Details</a>


                            <a class="info btn btn-info btn-md" href="{{ action('OrderController@addToCart', ['id' => $item->id])}}" style="cursor:pointer; font-family: thunder; border-color: transparent;">Add To Order</a>
                            </div>
                            </div>
                            </div>


                        </div>



                    <!-- quick view modal box-->
                    <div id="product-quick-view-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="false" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                    <div class="row quick-view product-main">
                                        <div class="col-sm-6">
                                            <div class="quick-view-main-image"><img src="{{ $item->image }}" alt="" class="img-responsive"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <center><img src="{{ $item->manufacturer->image }}" alt="" class="img-responsive" style="width: 50%;"></center>
                                            <h3>{{ $item->manufacturer->name }}</h3>
                                            <h5>{{ $item->model }}</h5>
                                            <p class="text-muted text-small" style="text-align: justify; width: 90%">{{ $item->description }}</p>
                                            <div class="box">
                                                <form>
                                                   <h4 class="price">${{ $item->price }}</h4>
                                                    <p class="text-center">
                                                        {{-- <button type="submit" class="<b></b>tn btn-default"><a href="/checkout">Add to Order</a></button> --}}
                                                        <a href="{{ action('OrderController@addToCart', ['id' => $item->id])}}" class="info btn btn-info btn-md" style="cursor:pointer; background-color: #ca6924; font-family: thunder; border-color: transparent;">Add to Order</a>
                                                    </p>
                                                </form>
                                            </div>
                                            <!-- /.box-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-dialog-->
                    </div>
                    <!-- /.modal-->
                    <!-- /quick view modal box-->

                @endforeach
            </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                {!!$items->render()!!}
            </div>
        </div>
    </div>

   
@stop

@section('javascriptFileForCheckout')

    <script src="/js/checkout.js"></script>
@endsection
