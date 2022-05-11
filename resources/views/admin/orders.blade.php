@extends('layouts.dashpord')
@section('content')

                    <!-- ROW-1 OPEN -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Orders</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="table table-striped table-bordered text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Order Number</th>
                                                    <th>Product</th>
                                                    <th>Quntaty</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)

                                                <tr>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->number}}</td>
                                                    <td>{{$order->products()->first()->name}}</td>
                                                    <td>{{$order->quantity}}</td>
                                                    <td>$ {{$order->amount}}</td>
                                                    <td>{{$order->date}}</td>
                                                    <td>
                                                        @if($order->status == "pending" || $order->status == "processing")
                                                        <i class="fa fa-check mr-1 text-success"></i> Active
                                                        @endif

                                                        @if($order->status == "completed" || $order->status == "diclined")
                                                        <i class="fa fa-remove mr-1 text-danger"></i> InActive
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-info "  data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-eye mr-1"
                                                                data-toggle="tooltip" title="Show Order"></i> </a>
                                                        <a href="" class="btn btn-danger " data-toggle="modal"
                                                            data-target="#smallModal"><i class="fa fa-remove mr-1"
                                                                data-toggle="tooltip" title="Remove Order"></i> </a>
                                                        <a href="{{route('order.edit',$order->id)}}" class="btn btn-warning "><i class="fa fa-edit mr-1"
                                                                data-toggle="tooltip" title="Edit Order"></i> </a>
                                                    </td>
                                                </tr>

                                                <!-- Remove Order MODAL -->
                                                    <div id="smallModal" class="modal fade">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Order !!</h6>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are You Sure To Delete Order !!</p>
                                                                </div><!-- MODAL-BODY -->
                                                                <div class="modal-footer">
                                                                    <form method="POST" action="{{route('order.destroy',$order->id)}}">
                                                                        @csrf
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-primary text-white">Yes</button>
                                                                        <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Cancel</a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div><!-- MODAL-DIALOG -->
                                                    </div>
                                                    <!-- Remove Order MODAL CLOSED -->
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
                                                                                    <h3 class="card-title">Order <span class="text-blue">#{{$order->number}}</span></h3>

                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div>
                                                                                        <p class="font-weight-bolder">Order  Number : <span class="text-blue">{{$order->number}}</span></p>
                                                                                        <p class="font-weight-bolder">Product : <span class="text-blue">{{$order->product}}</span></p>
                                                                                        <p class="font-weight-bolder">Quntaty : <span class="text-blue">{{$order->quantity}}</span></p>
                                                                                        <p class="font-weight-bolder">Amount : <span class="text-blue">$ {{$order->amount}}</span></p>
                                                                                        <p class="font-weight-bolder">Date : <span class="text-blue">{{$order->date}}</span></p>
                                                                                        <p class="font-weight-bolder">Status :
                                                                                            @if($order->status == "pending" || $order->status == "processing")
                                                                                            <span class="text-success">Active</span>
                                                                                            @endif

                                                                                            @if($order->status == "completed" || $order->status == "diclined")
                                                                                            <span class="text-danger">InActive</span>
                                                                                            @endif
                                                                                        </p>
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
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- TABLE WRAPPER -->
                            </div>
                            <!-- SECTION WRAPPER -->
                        </div>
                    </div>
                    <!-- ROW-1 CLOSED -->




                </div>
            </div>
            <!-- CONTAINER END -->
        </div>


@endsection
