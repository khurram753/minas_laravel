@extends('layout.dashboard-layout.app')

@section('title')
    Order Listing
@endsection


@section('style')
    <style>

        .blockUI {
            z-index: 1060 !important;
        }

        .list_canl {
            background-color: #000;
            border-color: #000;
            color: #fff;
            cursor: pointer;
            border: 1px solid #000;
            border-radius: 2px;
            padding: 5px 2px;
            font-size: 11px;
            font-weight: 700;
            margin: 2px 0px;
        }

    </style>
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Order Listing</h1>
                        {{--                        <ol class="breadcrumb float-right">--}}
                        {{--                            <li class="breadcrumb-item">Home</li>--}}
                        {{--                            <li class="breadcrumb-item active">Language Listing</li>--}}
                        {{--                        </ol>--}}
{{--                        <div class="float-right">--}}
{{--                            <a href="{{route('newsCreate')}}">--}}
{{--                                <button class="btn btn-primary">Create News</button>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">


                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered" id="data_table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order ID</th>
                                        <th>Email</th>
                                        <th>Payment Status</th>
                                        <th>Payment Method</th>
{{--                                        <th>Status</th>--}}

                                        <th>Country</th>
                                        <th>Address 1</th>
                                        <th>Address 2</th>
                                        <th>City</th>
                                        <th>Postal Code</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $order)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{ucfirst($order->status)}}</td>
                                            <td>{{ucfirst($order->payment_method)}}</td>
{{--                                            <td>{{ucfirst($order->admin_status)}}</td>--}}
                                            <td>{{$order->country}}</td>
                                            <td>{{$order->address1}}</td>
                                            <td>{{$order->address2}}</td>
                                            <td>{{$order->city}}</td>
                                            <td>{{$order->postal_code}}</td>

                                            <td>
                                                <a href="{{route('userOrderDetail',['id'=>$order->id])}}" class="btn btn-primary btn-lg list_canl">See Details</a>
{{--                                                <a href="{{route('orderCompleted',['id'=>$order->id])}}" class="btn btn-primary btn-lg list_canl">Completed</a>--}}
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>


                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>



@endsection


@section('script')


    <script src="{{asset('admin/js/dataTable.js')}}"></script>



    <script>


        $(document).on('ready', function () {

            $('#data_table').DataTable();


        });


    </script>

@endsection


