@extends('layouts.admin')
@section('title','Order Detail')
@section('breadcrumb')
  <li><a href="{{route('orders.index')}}">Orders</a></li>
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
          <small class="pull-right">Date: {{date('d/m/Y',strtotime($order->created_at))}}</small>
        </h2>
      </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="row">
        <div class="col-xs-12">
          <h2>
            <small class="pull-right">
              <a href="{{route($order->is_track =='0'?'addOrderTracking':'updateOrderTracking',$order->id)}}" class="btn btn-inline btn-info btn-sm" style="margin-top: 5px;margin-right:10px;">{{$order->is_track =='0'?'Add':'Update'}} Order Tracking</a>

              @if($order->status!='cancel')
                <button class="btn btn-inline btn-info bg-danger btn-sm" style="margin-top: 5px;margin-right:10px;" type="button" onclick="commonFunction(true,'{{route('orders.update',$order->id)}}','','put','Are you sure you want to cancel order?')">Cancel</button>
              @endif

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
        @if($order->phone_number !='') <b>Phone Number: </b> {{ $order->phone_number }}<br/> @endif
        <b>Invoice: {{date('Ymd').'-'.$order->id}}</b><br/>
        <b>Order Number: </b> {{ $order->order_number }}<br/>
        <b>Payment Method: </b> {{ $order->payment_method }}<br/>
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
            @foreach($order->orderDetails as $key=>$item)

              <tr>
                <td>{{ ++$key }}</td>
                <td><img width="60" height="30" src="{{ asset($item->image) }}" data-toggle="modal" data-target="#myModal"  alt="" onclick="imagePopUp(this);"></td>
                <td>{{ $item->title }}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->line_one_text}}</td>
                <td>{{$item->line_two_text}}</td>
                <td>{{$item->line_three_text}}</td>
                <td>{{$item->size}}</td>
                <td>{{$item->fonts}}</td>
                <td>{{$item->colors}}</td>
                <td>{{$item->install}}</td>
                <td>{{$item->backing_color}}</td>
                <td>{{$item->backing_shape}}</td>
                <td>{{$item->is_rush_order=='1'?'Yes':'No'}}</td>
                <td>${{$item->sub_total}}</td>
              </tr>

            @endforeach
          </tbody>
        </table>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        @if($order->is_track=='1')
          <p class="lead">Order Tracking</p>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Tracking Number:</th>
                <td>{{$order->order_tracking}}</td>
              </tr>
              {{-- <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr> --}}
              <tr>
                <th>Courier:</th>
                <td>{{$order->order_courier}}</td>
              </tr>
              <tr>
                <th>Shipping Date:</th>
                <td>{{$order->order_shipping_date}}</td>
              </tr>
            </table>
          </div>
        @endif
      </div><!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due {{date('d/m/Y',strtotime($order->created_at))}}</p>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>${{$order->sub_total}}</td>
            </tr>
            {{-- <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr> --}}
            <tr>
              <th>Discount:</th>
              <td>${{$order->discount_amount}}</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>${{$order->shipping_cost}}</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>${{$order->total}}</td>
            </tr>
          </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

@endsection

@section('script')
  <script>
    var modal = document.getElementById("myModal");
    function imagePopUp(e){
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      modal.style.display = "block";
      modalImg.src = e.src;
      captionText.innerHTML = e.alt;
    }

    setInterval(function(){
      $('body').css('padding-right','0px');
      $('.modal-backdrop').remove();
    },100);
  </script>
@endsection