@extends('layouts.dashpord')
@section('content')


                    <!-- ROW-1 OPEN -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 ">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title">Products</h3>
                                    <a href="{{route('product.create')}}"  class="btn btn-info text-white" ><i class="fa fa-plus-circle mr-2"></i>Add Product</a>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="table table-striped table-bordered text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Created By</th>
                                                    <th>Date Added</th>
                                                    <th>Product Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
                                                <!-- Remove Produce MODAL -->
                                                <div id="smallModal" class="modal fade">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Product !!</h6>
                                                                <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Sure To Delete Product !!</p>
                                                            </div><!-- MODAL-BODY -->
                                                            <div class="modal-footer">
                                                                    <form method="POST" action="{{route('product.destroy',$product->id)}}">
                                                                        @csrf
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-primary text-white">Yes</button>
                                                                        <a type="button" class="btn btn-secondary text-white" data-dismiss="modal">Cancel</a>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div><!-- MODAL-DIALOG -->
                                                </div>
                                                <!-- Remove Product MODAL CLOSED -->
                                                <tr>
                                                    @php
                                                        $poduct_id = $product->id;
                                                    @endphp
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>$ {{$product->price}}</td>
                                                    <td >{{$product->quantity}}</td>
                                                    <td>{{$product->created_by}}</td>
                                                    <td>{{$product->date}}</td>
                                                    <td>{{$product->product_type}}</td>


                                                    @if($product->status == 'Active')
                                                        <td><i class="fa fa-check mr-1 text-success"></i>{{$product->status}} </td>
                                                    @endif

                                                    @if($product->status == 'InActive')
                                                    <td><i class="fa fa-remove mr-1 text-danger"></i> {{$product->status}}</td>
                                                    @endif
                                                    <td>

                                                        <a href="" class="btn btn-danger " data-toggle="modal"
                                                            data-target="#smallModal"><i class="fa fa-remove mr-1"
                                                                data-toggle="tooltip" title="Remove Order"></i> </a>
                                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning "><i class="fa fa-edit mr-1"
                                                                data-toggle="tooltip" title="Edit Order"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- TABLE WRAPPER -->
                                <div class="pt-4">
                                    {{ $products->links() }}

                                </div>

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
