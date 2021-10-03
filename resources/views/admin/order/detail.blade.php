@extends('layout.dashboard-layout.app')

@section('title')
    Order Detail
@endsection

@section('style')
    <style>

        .blockUI {
            z-index: 1060 !important;
        }

    </style>
@endsection

@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12  bh-mb">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Order Detail</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Order Detail</li>
                        </ol>
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
                                        <th>Product Name </th>
                                        <th>Category Name </th>
                                        <th>Material Name </th>
                                        <th>Cord Name </th>
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($orderDetails as $orderDetail)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{isset($orderDetail->product) ? $orderDetail->product->name:'N/A'}}</td>
                                            <td>{{isset($orderDetail->category) ? $orderDetail->category->name:'N/A'}}</td>
                                            <td>{{isset($orderDetail->material) ? $orderDetail->material->name:'N/A'}}</td>
                                            <td>{{isset($orderDetail->cord) ? $orderDetail->cord->name:'N/A'}}</td>
                                            <td>{{$orderDetail->price}}</td>
                                            <td>{{$orderDetail->quantity}}</td>
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
