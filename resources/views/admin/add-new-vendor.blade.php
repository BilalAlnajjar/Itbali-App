@extends('layouts.dashpord')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vendor Information</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('vendor.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city">
                        @error('city')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" id="category" class="form-control"
                            placeholder="Enter Category">
                        @error('category')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Vendor Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Provide VendorName">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="mb-0 card-title">Logo Upload</h3>
                            </div>
                            <div class="card-body">
                                <div class="dropify-wrapper" style="height: 312px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div><input type="file" class="dropify" data-height="300" name="logo"
                                        id="logo"><button type="button" class="dropify-clear">Remove</button>
                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner">
                                                <p class="dropify-filename"><span class="dropify-filename-inner"></span>
                                                </p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vendor Information</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Provide Vendor management email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Provide Vendor management password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="number_mobile" name="number_mobile"
                        placeholder="Provide your phone number">

                    @error('number_mobile')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

    </div><!-- COL END -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success mt-1">Add Restaurant</button>
    </div>
    </form>
</div>

</div>

</div>
<!-- CONTAINER END -->
</div>

@endsection
