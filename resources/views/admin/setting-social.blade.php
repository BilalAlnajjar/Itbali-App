@extends('layouts.dashpord')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="mb-0 card-title">Add Project Soical</h3>
        <a href="add-product.html" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save</a>

    </div>
    <form action="" method="">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Facebook">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Instagram">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Twitter">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Youtube</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Youtube">
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
