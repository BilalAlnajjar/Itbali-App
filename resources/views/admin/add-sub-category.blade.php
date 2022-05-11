@extends('layouts.dashpord')
@section('content')
<div class="card">
    <form action="{{route('sub_category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-header d-flex justify-content-between">
        <h3 class="mb-0 card-title">Add Sub Category</h3>
        <button type="submit" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save</button>

    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">sub Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-0">Main Category</label>
                        <select class="form-control select2 custom-select" data-placeholder="Choose one" name="main_category_id" id="main_category_id">
                            <option label="Choose one">
                            </option>

                            @foreach ($main_categories as $main_category)
                                <option value="{{$main_category->id}}">{{$main_category->name}}</option>
                            @endforeach

                        </select>
                        @error('main_category_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group d-flex " style="margin-top:40px">
                        <label class="form-label mt-0">Status : </label>
                        <div class="material-switch pull-left mt-2 ml-5">
                            <input id="someSwitchOptionSuccess" name="status" checked type="checkbox" />
                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                    </div>

                </div>

                <!-- COL END -->
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Upload Sub Category image</h3>
                        </div>
                        <div class="card-body">
                            <input type="file" class="dropify" name="image" id="image" data-max-file-size="1M" />
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

@endsection
