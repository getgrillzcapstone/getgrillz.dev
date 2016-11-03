@extends('layout.master')

@section('itemsCss')
    <link href="/css/items.css" rel="stylesheet" type="text/css" />
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center">Grills, Grills and Grills</h1>
                <p class="text-muted text-center coloredText">Propane, charcoal, big, medium, small. Choices for everyone.</p>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dropDownSort">
                <div class="form-inline">
                    <div class="pull-right">
                        <select name="sort-by" class="form-control">
                            <option>Sort by: Price Low to High</option>
                            <option>Sort by: Price High to Low</option>
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
    <form action="{{ action('ItemController@index') }}" method='GET'>
         {{{ csrf_field() }}}
                    <div class="panel-body">

                            <div class="form-group"></div>
                            <div class="checkbox">
                                <label>
                                    <input name="fuel[]" id="propane" type="checkbox" value="1">Propane
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="fuel[]" id="charcoal" type="checkbox" value="2">Charcoal
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

                            @foreach($manufacturers as $manufacturer)
                        {{-- <form action=" {{ action('ItemController@setManufacturer') }}"> --}}
                            <div class="form-group"></div>

                            <div class="checkbox">

                                <label>
                                    <input name="man[]" type="checkbox" value="{{ $manufacturer->id }}">{{ $manufacturer->name }}
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
                                    <input name="size[]" id="Small" type="checkbox" value="Small">Small
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="size[]" id="Medium" type="checkbox" value="Medium">Medium
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="size[]" id="Large" type="checkbox" value="Large">Large
                                </label>
                            </div>
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
            @foreach($items as $item)
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                    {{-- <!-- product--> --}}
                    <div class="product itemsContainer">
                        {{-- <div class="itemImage"> --}}
                            {{-- <img src="{{$item->image}}" class="img-responsive"> --}}
                            {{-- <div class="overlay"> --}}
                                <!-- Trigger the modal with a button -->


                            {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> --}}
                            <div class="itemImage hovereffect">
                              <img class="img-responsive" src="{{$item->image}}" alt="">
                            <div class="overlay">
                            <div class="text">
                           {{--  <p class="manufacturer coloredText">Manufacture</p>
                            <h4 class="coloredText">{{ $item->model }}</h4>
                            <h5 class="price coloredText">{{ $item->price }}</h5> --}}
                        </div>
                            <a class="info btn btn-info btn-md" type="button" data-toggle="modal" data-target="#product-quick-view-modal-{{$item->id}}" style="cursor:pointer; font-family: thunder; border-color: transparent;">Item Details</a>


                            <a class="info btn btn-info btn-md" href="{{ action('OrderController@addToCart', ['id' => $item->id])}}" style="cursor:pointer; font-family: thunder; border-color: transparent;" data-id="{{$item->id}}">Add To Order</a>
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
                                            {{-- <h2 class="product__heading">{{$item->manufacturer->name . " " . $item->model}}</h2> --}}
                                            <br>
                                            <center><img src="{{ $item->manufacturer->image }}" alt="" class="img-responsive" style="width: 50%;"></center>
                                            <h3>{{ $item->manufacturer->name }}</h3>
                                            <h5>{{ $item->model }}</h5>
                                            <p class="text-muted text-small" style="text-align: justify; width: 90%">{{ $item->description }}</p>
                                            <div class="box">
                                                <form>
                                                   <h5 class="price">${{ $item->price }}</h5>
                                                    <p class="text-center">
                                                        {{-- <button type="submit" class="<b></b>tn btn-default"><a href="/checkout">Add to Order</a></button> --}}
                                                        <a href="{{ action('OrderController@addToCart', ['id' => $item->id])}}" class="info btn btn-info btn-md" style="cursor:pointer; background-color: #ca6924; font-family: thunder; border-color: transparent;" data-id="{{$item->id}}">Add to Order</a>
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
        </div>
        <div class="row">
            <br>
        </div>
    </div>
@stop
