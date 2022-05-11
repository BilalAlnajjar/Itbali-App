@extends('layouts.dashpord')
@section('content')

<!-- ROW-1 OPEN -->

<form method="post" class="card p-5" action="{{route('app.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Android App</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Android App Link</label>
                        <input type="text" class="form-control" id="link_android" name="link_android"
                            placeholder="Enter Product Name">
                    </div>
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="mb-0 card-title">Android App Image</h3>
                            </div>
                            <div class="card-body">
                                <input type="file" class="dropify" data-height="300" id="image_android" name="image_android" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">IOS App</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">IOS App Link</label>
                        <input type="text" class="form-control" id="link_ios" name="link_ios"
                            placeholder="Enter Product Name">
                    </div>
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="mb-0 card-title">IOS App Image</h3>
                            </div>
                            <div class="card-body">
                                <input type="file" class="dropify" data-height="300" id="image_ios" name="image_ios" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <button type="submit" class="btn btn-radius btn-success">Add</button>
    </div>

</form>
<!-- ROW-1 CLOSED -->
<!-- ============== END CONTENT ==============  -->

</div>

<!-- ROW-1 CLOSED -->

</div>
</div>
<!-- CONTAINER END -->
</div>
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
                <button type="button" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div><!-- MODAL-DIALOG -->
</div>
<!-- Remove Order MODAL CLOSED -->
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
