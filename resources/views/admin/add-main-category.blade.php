@extends('layouts.dashpord')
@section('content')

<div class="card">
<form action="{{route('main_category.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="card-header d-flex justify-content-between">
        <h3 class="mb-0 card-title">Add Main Category</h3>
        <button type="submit" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save</button>

    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Main Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Customer Name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group d-flex " style="margin-top:40px">
                        <label class="form-label mt-0">Status : </label>
                        <div class="material-switch pull-left mt-2 ml-5">
                            <input id="someSwitchOptionSuccess" id="status" name="status"  checked type="checkbox" />
                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                    </div>

                </div>

                <!-- COL END -->
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Upload Main Category image</h3>
                        </div>
                        <div class="card-body">
                            <input type="file" class="dropify" data-max-file-size="1M" name="image" id="image" />
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
