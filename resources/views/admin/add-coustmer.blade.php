@extends('layouts.dashpord')
@section('content')

<div class="card">
    <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-header d-flex justify-content-between">
        <h3 class="mb-0 card-title">Add Customer</h3>
        <button type="submit" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save</button>

    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Customer Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Customer Name">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Customer Email</label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="Customer Email"
                            value="">

                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="form-label">Customer Mobile</label>
                        <input type="text" class="form-control" id="number_mobile" name="number_mobile" placeholder="Customer Mobile">
                        @error('number_mobile')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Customer Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Customer Address">

                        @error('address')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!-- COL END -->
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Upload Customer image</h3>
                        </div>
                        <div class="card-body">
                            <input type="file" class="dropify" data-max-file-size="1M" multiple name="image" id="image" />
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
