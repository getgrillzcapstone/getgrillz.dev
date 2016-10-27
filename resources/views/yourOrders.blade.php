@extends('layout.master')

@section('content')
    <div class="container-fluid yourOrdersDiv">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 yourOrdersText">
                <h1 class="yourOrdersh1">Your Orders</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 yourOrdersTable">
                <table id="example" class="display centeredTableText" cellspacing="0" width="100%">
                    <thead>
                        <tr class="yourOrdersTableHeader ">
                            <th class="headerPadding centeredTableText">Order ID</th>
                            <th class="headerPadding centeredTableText">Item ID's</th>
                            <th class="headerPadding centeredTableText">Reservation Start Date</th>
                            <th class="headerPadding centeredTableText">Reservation End Date</th>
                            <th class="headerPadding centeredTableText">Total Price</th>
                            <th class="headerPadding centeredTableText">Edit</th>
                            <th class="headerPadding centeredTableText">Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2, 3, 4</td>
                            <td>1234-02-23</td>
                            <td>1234-02-23</td>
                            <td>$432.98</td>
                            <td></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>4, 1, 2</td>
                            <td>1234-02-23</td>
                            <td>1234-02-23</td>
                            <td>$432.98</td>
                            <td></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1, 7, 3</td>
                            <td>1234-02-23</td>
                            <td>1234-02-23</td>
                            <td>$432.98</td>
                            <td></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>6, 5, 2</td>
                            <td>1234-02-23</td>
                            <td>1234-02-23</td>
                            <td>$432.98</td>
                            <td></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
