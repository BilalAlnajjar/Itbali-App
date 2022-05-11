@extends('layouts.dashpord')
@section('content')
<!-- ROW-1 OPEN -->
<div class="row">
    <div class="card">
        <div class="card-header border-bottom-0 p-4">
            <h2 class="card-title">Vendor Products </h2>

        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Dashboard / Products</h3>
                    <a href="{{route('products-vendor.create',$vendor->id)}}">
                        <button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i> Add Product</button">
                    </a>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>PRODUCT PICTURE </th>
                                        <th>NAME PRODUCT</th>
                                        <th>PRODUCT INFO</th>

                                        <th>PRICE</th>
                                        <th>MENU CATEGORY</th>
                                        <th>SETTINGS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendor->products as $product )

                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{asset('storage/'.$product->image)}}"
                                                width="40"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->discount}}</td>
                                        <td>{{$product->sub_category()->first()->name}}</td>

                                        <td><a class="btn btn-sm btn-primary" href="{{route('products-vendor.edit',$product->id)}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                            data-target="#smallModal"><i class="fa fa-trash"></i>
                                                Delete</a>
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
                <form method="POST" action="{{route('products-vendor.destroy',$product->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div><!-- MODAL-DIALOG -->
</div>
<!-- Remove Order MODAL CLOSED -->

                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- TABLE WRAPPER -->
    </div>
    <!-- SECTION WRAPPER -->
</div>
</div>
<!-- ROW-1 CLOSED -->
<!-- ============== END CONTENT ==============  -->

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
