@extends('layouts.admin')
@section('title','Order Detail')
@section('breadcrumb')
  <li><a href="">Orders</a></li>
  <li class="active">View Order</li>
@endsection
@section('content')
  <style>
    .bg-warning{
      background-color: #ffc107 !important;
      border:none !important;  
      outline: none !important;
    }
    .bg-danger{
      background-color:#DC3545 !important;
      border:none !important;
      outline: none !important;
    }
  </style>
      
  <section class="invoice">

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" style="z-index: 10000">
      <div class="modal-dialog modal-lg" style="width: 80%;margin: auto;margin-top:-3% !important;">

        <!-- Modal content-->
        <div class="modal-content" style="min-width: 80%;">
          <div class="modal-header">
            <h4 class="modal-title">Image Preview</h4>
            <button type="button" class="close" data-dismiss="modal" style="margin-top: -50px;">&times;</button>
          </div>
          <div class="modal-body">
            <img id="img01" style="width: 100%;height: auto;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-inline btn-info bg-danger btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> TheArtPalaceDesign
          <small class="pull-right">Date: </small>
        </h2>
      </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="row">
        <div class="col-xs-12">
          <h2>
            <small class="pull-right">
              <a href=" " class="btn btn-inline btn-info btn-sm" style="margin-top: 5px;margin-right:10px;">   Order Tracking</a>

    
            </small>
          </h2>
        </div><!-- /.col -->
      </div>
      {{-- <div class="col-sm-4 invoice-col"> --}}
        {{-- <address>
          <strong>Oneon Craft</strong><br>
          5272 Lyngate Ct Burke, VA 22015-1688<br>
          Phone: +1(843) 474-1356<br/>
          Email: info@oneoncrafts.com
        </address> --}}
      {{-- </div><!-- /.col --> --}}
      {{-- <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><br>
          <br>
          Phone: <br/>
          Email: 
        </address>
      </div> --}}
      <!-- /.col -->
      <div class="col-sm-12 invoice-col">
     
        <b>Invoice:  </b><br/>
        <b>Order Number: </b>  <br/>
        <b>Payment Method: </b>  <br/>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> #</th>
              <th>Image</th>
              <th>Title</th>
              <th>Qty</th>
              <th>Line One Text</th>
              <th>Line Two Text</th>
              <th>Line Three Text</th>
              <th>Size</th>
              <th>Fonts</th>
              <th>Colors</th>
              <th>Install</th>
              <th>Backing Color</th>
              <th>Backing Shape</th>
              <th>Rush Order</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
            <td> key </td>
           
          </tbody>
        </table>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
     
      </div><!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due </p>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td> </td>
            </tr>
            {{-- <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr> --}}
            <tr>
              <th>Discount:</th>
              <td> </td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td> </td>
            </tr>
            <tr>
              <th>Total:</th>
              <td> </td>
            </tr>
          </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

@endsection

@section('script')
  <script>
   
  </script>
@endsection