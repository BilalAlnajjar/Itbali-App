@extends('layouts.dashpord')
@section('content')

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)

                            <!-- Remove Order MODAL -->
                            <div id="smallModal" class="modal fade">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Order !!
                                            </h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are You Sure To Delete Order !!</p>
                                        </div><!-- MODAL-BODY -->
                                        <div class="modal-footer">
                                            <form method="POST" action="{{route('customer.destroy',$customer->id)}}">
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

                            <tr>
                                <td>{{$customer->id}}</td>
                                <td><span class="avatar avatar-xl brround cover-image"
                                        data-image-src="{{ asset("storage/".$customer->image ) }}"></span>
                                    </td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->number_mobile}}</td>
                                <td>{{$customer->address}}</td>
                                <td>

                                    <a href="" class="btn btn-danger " data-toggle="modal" data-target="#smallModal"><i
                                            class="fa fa-remove mr-1" data-toggle="tooltip" title="Remove Order"></i>
                                    </a>

                                </td>
                            </tr>

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

<!-- Show Order MODAL -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
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
                                    <p class="font-weight-bolder">Order Number : <span class="text-blue">55</span></p>
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
