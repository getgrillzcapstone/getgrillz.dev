@extends('layout.master')

@section('content')
         
       
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row page-top">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="text-center">Grills and Grills and Grills</h1>
                    <p class="text-muted text-center">Propane, charcoal, big, medium, small. Choices for everyone.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <!-- menus and filters-->
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h4 class="panel-title">Grill Types</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group"></div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Propane
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Charcoal
                            </label>
                        </div>
                        <button class="btn btn-default btn-sm pull-right">Apply</button>
                    </form>
                </div>
            </div>
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h4 class="panel-title">Brands</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group"></div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Weber
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Charbroil
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Napoleon
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Nexgrill
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Big Green Egg
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Dyna-Glo
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Chargriller
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">KitchenAid
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">MasterBuilt
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Smoke Hollow
                            </label>
                        </div>
                        <button class="btn btn-default btn-sm pull-right">Apply</button>
                    </form>
                </div>
            </div>
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h4 class="panel-title">Size</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group"></div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Small
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Medium
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Large
                            </label>
                        </div>
                        <button class="btn btn-default btn-sm pull-right">Apply</button>
                    </form>
                </div>
            </div>
      
        </div>
        <div class="col-md-9">
            <div class="info-bar">
                <div class="row">
                    <div class="col-sm-12 col-md-8 products-number-sort">
                        <div class="row">
                            <div class="form-inline">
                                <div class="col-md-6 col-sm-6">
                                    <div class="products-sort-by">
                                        <select name="sort-by" class="form-control">
                                            <option>Sort by: Price Low to High</option>
                                            <option>Sort by: Price High to Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row products">
                <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/nexgrill4burner.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Nexgrill</p>
                            <h4>Large Four Burner</h4>
                            <h5 class="price">$350.75</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/napoleon3burner.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Napoleon</p>
                            <h4>Small Three Burner</h4>
                            <h5 class="price">$349.99</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/weber-bistro.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Weber</p>
                            <h4>Bistro</h4>
                            <h5 class="price">$149.99</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
            </div>
            <div class="row products">
                <!-- product-->
                     <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/weberspirit210.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Weber</p>
                            <h4>Spirit 210</h4>
                            <h5 class="price">$349.99</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/napoleon4burner.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Napoleon</p>
                            <h4>Medium Four Burner</h4>
                            <h5 class="price">$525.50</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/webersummitt420.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Weber</p>
                            <h4>Summitt 420</h4>
                            <h5 class="price">$1299.00</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
            </div>
            <div class="row products">
                     <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/webersummitt670.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Weber</p>
                            <h4>Summitt 670</h4>
                            <h5 class="price">$2350.75</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/nexgrill6burner.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Nexgrill</p>
                            <h4>Large Six Burner</h4>
                            <h5 class="price">$1999.99</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
                <!-- product-->
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image" >
                        <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal">
                            <img src="/propane_grill_images/webergenesis310.jpg" alt="" class="img-responsive" >
                            </a></div>
                        </div>
                        <div class="text">
                            <p class="manufacturer">Weber</p>
                            <h4>Genesis 310</h4>
                            <h5 class="price">$699.99</h5>
                        </div>
                    </div>
                </div>
                <!-- /product-->
            </div>
                <!-- /product-->
            </div>
            <div class="pages text-center">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- quick view modal box-->
    <div id="product-quick-view-modal" tabindex="-1" role="dialog" aria-hidden="false" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <div class="row quick-view product-main">
                        <div class="col-sm-6">
                            <div class="quick-view-main-image"><img src="/propane_grill_images/napoleon8burner.jpg" alt="" class="img-responsive"></div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="product__heading">Large Eight Burner</h2>
                            <p class="text-muted text-small">Grill up delicious food this summer with the Weber Genesis E-310 3-Burner Gas Grill. Featuring 3 stainless steel burners, this grill is designed to put out up to 38,000 BTUs of cooking power. Its painted steel shroud incorporates a built-in thermometer, and also features a stainless steel handle.</p>
                            <div class="box">
                                <form>
                                   <h5 class="price">$2449.99</h5>
                                    <p class="text-center">
                                        <button type="submit" class="btn btn-default">Add to Order</button>
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
</div>

    
    
@stop
