@extends('layout.master')

@section('footerStyling')
    <style>
        .footer {
            background-color: #CA6924;
        }
    </style>
@stop

@section('content')
<div class="container yourOrdersDiv">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 yourOrdersText">
          <h1 class="yourOrdersh1">Your Orders</h1>
      </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <table class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
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
              <td class="centeredTableText">4</td>
              <td class="centeredTableText">6, 5, 2</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
          <tr>
              <td class="centeredTableText">2</td>
              <td class="centeredTableText">4, 1, 2</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
          <tr>
              <td class="centeredTableText">4</td>
              <td class="centeredTableText">6, 5, 2</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
          <tr>
              <td class="centeredTableText">3</td>
              <td class="centeredTableText">1, 7, 3</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
          <tr>
              <td class="centeredTableText">4</td>
              <td class="centeredTableText">6, 5, 2</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
          <tr>
              <td class="centeredTableText">4</td>
              <td class="centeredTableText">6, 5, 2</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">1234-02-23</td>
              <td class="centeredTableText">$432.98</td>
              <td class="centeredTableText"></span><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
              <td class="centeredTableText"><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
