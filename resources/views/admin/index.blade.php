@extends('layouts.dashpord')

@section('content')
<!-- ROW-1 -->
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$online_visitor}}</h2>
                        <p class="text-white mb-0">Total Users </p>
                    </div>
                    <div class="ml-auto"> <i class="ion ion-person-add text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-secondary img-card box-secondary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$orders_count}}</h2>
                        <p class="text-white mb-0">Total order</p>
                    </div>
                    <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">89,786</h2>
                        <p class="text-white mb-0">Total Profit</p>
                    </div>
                    <div class="ml-auto"> <i class="fa fa-dollar text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-info img-card box-info-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">43,336</h2>
                        <p class="text-white mb-0">Monthly Sales</p>
                    </div>
                    <div class="ml-auto"> <i class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div>
<!-- ROW-1 END -->



<!-- ROW-5 -->
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title mb-0">Order Product</h3>
            </div>
            <div class="card-body">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table border table-vcenter text-nowrap align-items-center">
                                <thead class="">
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Product</th>
                                        <th>Quntaty</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)

                                    <tr>
                                        <td>{{$order->number}}</td>
                                        <td>{{$order->product}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>$ {{$order->amount}}</td>
                                        <td>
                                            @if($order->status == "pending" || $order->status == "processing")
                                            <i class="fa fa-check mr-1 text-success"></i> Active
                                            @endif

                                            @if($order->status == "completed" || $order->status == "diclined")
                                            <i class="fa fa-remove mr-1 text-danger"></i> InActive
                                            @endif
                                        </td>
                                        <td><a href=""  class="btn btn-info-light "  data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-eye mr-1" data-toggle="tooltip" title="Show Order"></i> </a></td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div><!-- ROW-5 END -->
</div>
</div>
<!-- CONTAINER END -->
</div>
<!-- Show Order MODAL -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="row">
 <!-- COL END -->
<div class="col-md-12  col-xl-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Order <span class="text-blue">#55</span></h3>

        </div>
        <div class="card-body">
            <div>
                <p class="font-weight-bolder">Order  Number : <span class="text-blue">55</span></p>
                <p class="font-weight-bolder">Product : <span class="text-blue">Paper</span></p>
                <p class="font-weight-bolder">Quntaty : <span class="text-blue">5</span></p>
                <p class="font-weight-bolder">Amount : <span class="text-blue">$ 2,356</span></p>
                <p class="font-weight-bolder">Date : <span class="text-blue">07/15/2021</span></p>
                <p class="font-weight-bolder">Status : <span class="text-success">Active</span></p>
            </div>
        </div>
    </div>
</div><!-- COL END -->
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
<!-- Show Order CLOSED -->

@endsection
