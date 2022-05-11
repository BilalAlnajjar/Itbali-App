@extends('layouts.dashpord')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="card">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header d-flex justify-content-between">
            <h3 class="mb-0 card-title">Add Product</h3>
            <button type="submit" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save</button>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" name="price" placeholder="Price" value="">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                        @error('quantity')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group d-flex">
                        <label class="form-label mt-0">Status : </label>
                        <div class="material-switch pull-left mt-2 ml-5">
                            <input id="someSwitchOptionSuccess" checked type="checkbox" name="status" />
                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="form-label">Date</label>

                        <input id="date" class="form-control fc-datepicker fc-datepicker" placeholder="MM/DD/YYYY" type="text"
                            name="date">

                            @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label class="form-label mt-0">Product Type</label>
                        <select id="product_type" class="form-control select2 custom-select" data-placeholder="Choose one"
                            name="product_type">
                            <option label="Choose one">
                            </option>
                            <option value="print">مطبعة</option>
                            <option value="freelancer">اعمال حرة</option>

                        </select>
                        @error('product_type')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Created By</label>
                        <input id="created_by" type="text" class="form-control" name="created_by" placeholder="Created By">
                        @error('created_by')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">description</h3>
                        </div>
                        <div class="card-body">
                            <div id="" style="display: none;"></div>
                            <div class="note-editor note-frame card">
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message">
                                    </div>
                                </div>
                                <div>

                                </div>
                                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                                    @error('summernote')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                        </div>
                    </div>
                </div>

                <!-- COL END -->
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Upload Product image</h3>
                        </div>
                        <div class="card-body">
                            <input id="image" type="file" class="dropify" data-max-file-size="1M" multiple name="image" />
                        </div>
                    </div>
                </div><!-- COL END -->

                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
        </div>
    </form>
</div>

</div>

</div>
<!-- CONTAINER END -->
</div>

<script>
    $(document).ready(function(){
        $('#summernote').summernote({
            height: 200,
        });
    });
</script>

@endsection
