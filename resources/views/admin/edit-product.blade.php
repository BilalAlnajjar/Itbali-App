@extends('layouts.dashpord')
@section('content')

                    <div class="card">
                    <form method="POST" action="{{route('product.update',$product->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="mb-0 card-title">edit product</h3>
                            <button type="submit" class="btn btn-info text-white" ><i class="fa fa-plus-circle mr-2"></i>Save</button>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Product Name" id="name" value="{{$product->name}}">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <input type="text" class="form-control" name="price"
                                            placeholder="Price" id="price" value="{{$product->price}}" >
                                            @error('price')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" class="form-control" name="quantity"
                                            placeholder="Quantity" value="{{$product->quantity}}" id="quantity">

                                            @error('quantity')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group d-flex">
                                        <label class="form-label mt-0">Status : </label>
                                        <div class="material-switch pull-left mt-2 ml-5">
                                            <input id="someSwitchOptionSuccess" name="status" @if($product->status == "Active") checked @endif type="checkbox" />
                                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="form-label">Date</label>

                                        <input class="form-control fc-datepicker fc-datepicker" placeholder="MM/DD/YYYY"
                                            type="text" value="{{$product->date}}" name="date" id="date">

                                            @error('date')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label mt-0">Product Type</label>
                                        <select class="form-control select2 custom-select" data-placeholder="Choose one" name="product_type">
                                            <option label="Choose one">
                                            </option>
                                            <option value="print" @if($product->product_type == "print") selected @endif >مطبعة</option>
                                            <option value="freelancer" @if($product->product_type == "freelancer") selected @endif>اعمال حرة</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Created By</label>
                                        <input type="text" class="form-control" name="created_by"
                                            placeholder="Created By" value="{{$product->created_by}}">
                                    </div>


                                </div>


                            </div>
                        </div>
                    </form>
                    </div>


                </div>

            </div>

            <!-- CONTAINER END -->
        </div>


@endsection
