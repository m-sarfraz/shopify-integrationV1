@extends('layouts.admin')
@section('title', 'Orders')
@section('breadcrumb')
    <li><a href="">Orders</a></li>
    <li class="active">List</li>
@endsection
@section('content')
    <style>
        .bg-paid {
            background-color: #28a745 !important;
        }

        .bg-cancel {
            background-color: #DC3545 !important;

        }

        .bg-refund {
            background-color: #ffc107 !important;

        }

        .bg-unpaid {
            background-color: #6C757D !important;

        }
    </style>

    <div class="padd-top">
        <h3 class="text-center">All Orders</h3>
    </div>
    <div class="box-body">
        <div class="col-xs-12 table-responsive">
            <table id="ordersTable" class="table table-bordered table-striped" data-ordering="true">
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

                    <tr>
                        <td><span class="d-none"> created_at</span> </td>
                        <td> number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div><!-- /.box-body -->

@endsection

@section('script')

    <script type="text/javascript">
        $(function() {
            $("#ordersTable").DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script>

@endsection
