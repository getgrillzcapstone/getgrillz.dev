@extends('layout.master')

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
                    <div class="panel-body">
                        <form {{-- action="{{ action('ItemController@setItemCategory') }} "--}}>
                            <div class="form-group"></div>
                            <div class="checkbox">
                                <label>
                                    <input id="propane" type="checkbox">Propane
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="charcoal" type="checkbox">Charcoal
                                </label>
                            </div>
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading customPanelHeading">
                        <h4 class="panel-title">Brands</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{-- {{ action('ItemController@setManufacturer') }} --}}">
                            {{-- <div class="form-group"></div> --}}
                            {{ Form::checkbox('Weber', false) }};
                            {{ Form::checkbox('Charbroil', false) }};
                            {{ Form::checkbox('Napoleon', false) }};
                            {{ Form::checkbox('Nexgrill', false) }};
                            {{ Form::checkbox('Big Green Egg', false) }};


                           {{--  <div class="checkbox">
                                <label>
                                    <input id="weber" type="checkbox">Weber
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="charbroil" type="checkbox">Charbroil
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="napoleon" type="checkbox">Napoleon
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="nexgrill" type="checkbox">Nexgrill
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="greenegg" type="checkbox">Big Green Egg
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="dynaglo" type="checkbox">Dyna-Glo
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="chargriller" type="checkbox">Chargriller
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="kitchenaid" type="checkbox">KitchenAid
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="masterbuilt" type="checkbox">MasterBuilt
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="smokehollow" type="checkbox">Smoke Hollow
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="rivergrille" type="checkbox">Rivergrille
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="kingsford" type="checkbox">Kingsford
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="stok" type="checkbox">Stok
                                </label>
                            </div> --}}
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading customPanelHeading">
                        <h4 class="panel-title">Size</h4>
                    </div>
                    <div class="panel-body">
                        <form {{-- action="{{ action('ItemController@setSize') }}" --}}>
                            <div class="form-group"></div>
                            <div class="checkbox">
                                <label>
                                    <input id="small" type="checkbox">Small
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="medium" type="checkbox">Medium
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="large" type="checkbox">Large
                                </label>
                            </div>
                            <button class="btn btn-default btn-sm pull-right">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                @foreach($items as $item)
                    {{-- <!-- product--> --}}
                    <div class="product itemsContainer">
                        <div class="itemImage">
                            <img src="{{$item->image}}" class="img-responsive">
                            {{-- <div class="overlay"> --}}
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#product-quick-view-modal-{{$item->id}}">Preview Item</button>
                            {{-- </div> --}}
                        </div>
                        <div class="text">
                            <p class="manufacturer coloredText">{{-- {{ $manufacturer->name }} --}}</p>
                            <h4 class="coloredText">{{ $item->model }}</h4>
                            <h5 class="price coloredText">{{ $item->price }}</h5>
                        </div>
                    </div>


                    {{-- <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                            <p>Some text in the modal.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div> --}}
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
                                            <p class="text-muted text-small">{{ $item->description }}</p>
                                            <div class="box">
                                                <form>
                                                   <h5 class="price">{{ $item->price }}</h5>
                                                    <p class="text-center">
                                                        {{-- <button type="submit" class="<b></b>tn btn-default"><a href="/checkout">Add to Order</a></button> --}}
                                                        <a href="/checkout" class="btn btn-default" style="cursor:pointer;" data-id="{{$item->id}}">Add to Order</a>
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
