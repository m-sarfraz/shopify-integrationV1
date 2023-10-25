@extends('layouts.admin')
@section('title','Orders')
@section('breadcrumb')
    <li><a href="{{route('orders.index')}}">Orders</a></li>
    <li class="active">List</li>
@endsection
@section('content')
<style>
    .bg-paid{
        background-color:#28a745 !important;
    }
    .bg-cancel{
        background-color: #DC3545 !important;
        
    }
    .bg-refund{
        background-color: #ffc107 !important;
        
    }
    .bg-unpaid{
        background-color: #6C757D !important;

    }
</style>

<div class="padd-top">
        <h3 class="text-center">All Orders</h3>
    </div>
    <div class="box-body">
        <div class="col-xs-12 table-responsive">
            <table id="ordersTable" class="table table-bordered table-striped"  data-ordering="true">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Order Number</th>
                        <th>Phone Number</th>
                        <th>No. of products</th>
                        <th>Status</th>
                        <th>Shipping cost</th>
                        <th>Total amount</th>
                        <th>Payment Method</th>
                        <th>Order Track</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($orders->count()>0)
                        @foreach($orders as $order)
                            <tr>
                                <td><span class="d-none">{{strtotime($order->created_at)}}</span> {{date('d-m-Y h:i a',strtotime($order->created_at))}}</td>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->total_products }}</td>
                                <td><span class="badge bg-{{$order->status}}">{{ $order->status }}</span></td>
                                <td>{{ $order->shipping_cost }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td><a href="{{route($order->is_track =='0'?'addOrderTracking':'updateOrderTracking',$order->id)}}" class="btn btn-inline btn-info btn-sm">{{$order->is_track =='0'?'Add':'Update'}} Order Tracking</a></td>
                                <td>
                                    <a href="{{ route('orders.show',$order->id) }}">
                                        <button class="btn btn-inline btn-info btn-sm">View Detail</button>
                                    </a>
                                    <button class="btn btn-inline btn-danger btn-sm" onclick="delete_resource('{{ route('orders.destroy',$order->id) }}','{{ route('orders.index') }}')">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    
                </tbody>
            </table>
        </div>
    </div><!-- /.box-body -->

@endsection

@section('script')

    <script type="text/javascript">
        $(function() {
            $("#ordersTable").DataTable({ "order": [[ 0, "desc" ]] });
        });
    </script>

@endsection
