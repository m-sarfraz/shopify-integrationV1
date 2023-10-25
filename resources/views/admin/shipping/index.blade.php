@extends('layouts.admin')
@section('title', 'Orders')
@section('breadcrumb')
    <li><a href="">Shipping</a></li>
    <li class="active">Rates</li>
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


        .btn-toggle {
            margin: 0 4rem;
            padding: 0;
            position: relative;
            border: none;
            height: 1.5rem;
            width: 3rem;
            border-radius: 1.5rem;
            color: #000000;
            background: #bdc1c8;
        }

        .btn-toggle:focus,
        .btn-toggle.focus,
        .btn-toggle:focus.active,
        .btn-toggle.focus.active {
            outline: none;
        }

        /* Change the color of the handle and text when active */
        .btn-toggle.active {
            background-color: #0ede6f;
            /* Change to the desired active color */
        }

        .btn-toggle.active>.handle {
            background: #ffffff;
            /* Change to the desired handle color when active */
        }

        .btn-toggle.active:before,
        .btn-toggle.active:after {
            color: #2b4930;
            /* Change to the desired text color when active */
        }

        .btn-toggle:before,
        .btn-toggle:after {
            line-height: 1.5rem;
            width: 4rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
            bottom: 0;
            transition: opacity 0.25s;
        }

        .btn-toggle:before {
            content: 'Off';
            left: -4rem;
        }

        .btn-toggle:after {
            content: 'On';
            right: -4rem;
            opacity: 0.5;
        }

        .btn-toggle>.handle {
            position: absolute;
            top: 0.1875rem;
            left: 0.1875rem;
            width: 1.125rem;
            height: 1.125rem;
            border-radius: 1.125rem;
            background: #fff;
            transition: left 0.25s;
        }

        .btn-toggle.active {
            transition: background-color 0.25s;
        }

        .btn-toggle.active>.handle {
            left: 1.6875rem;
            transition: left 0.25s;
        }

        .btn-toggle.active:before {
            opacity: 0.5;
        }

        .btn-toggle.active:after {
            opacity: 1;
        }
    </style>

    <div class="padd-top">
        <h3 class="text-center">Manage Shipping Rates</h3>
    </div>
    <div class="card mt-5">
        <div class="card-body d-flex align-items-center">
            <div class="col-md-6">
                <h5 class="card-title text-center"> Custom Shipping Rates</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-grow-1">
                <hr class="d-none d-md-block mx-3" style="border: 1px solid #ccc; height: 50px;">
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false"
                    autocomplete="off">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
    </div>


    <div class="box-body">
        <div class="col-xs-12 col-lg-12 col-md-12 table "> 
            <table id="ordersTable" class="table table-bordered table-striped" data-ordering="true">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Shipping Country</th>
                        <th>Shipping State</th>
                        <th>Shipping City</th>
                        <th>Rate</th> 
          
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td> 1 </td>
                        <td> phone_number </td>
                        <td> phone_number </td>
                        <td> phone_number </td>  
                        <td><span> created_at</span> </td> 
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
            });
        });
    </script>

@endsection
