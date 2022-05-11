@extends('layouts.dashpord')
@section('content')

<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

        <div class="card-body">

            <a href="{{route('slid-web.create')}}">
                <button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add Home Page Slider</button">
            </a>

        </div>

    </div><!-- COL END -->
</div>

<div class="row row-cards row-deck">

    @foreach ($slids as $slid )

    <div class="col-md-12">

        <div class="card">
            <img class="card-img-topbr-tr-0 br-tl-0" src="{{asset('storage/'.$slid->image)}}" alt="{{$slid->title}}">
            <div class="card-header">
                <h5 class="card-title">{{$slid->title}} </h5>

            </div>
            <div class="card-body">
                <p class="card-text">{{$slid->sub_title}}</p>

                {{-- <a href="" class="btn btn-danger " data-toggle="modal"
                                            data-target="#smallModal"><i class="fa fa-remove mr-1"
                                            data-toggle="tooltip" title="Remove Order"></i> </a> --}}
                <a class="btn btn-sm btn-primary" href="{{route('slid-web.edit',$slid->id)}}"><i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-sm btn-danger" data-toggle="modal" href="" data-target="#smallModal"  data-toggle="tooltip" title="Remove Order"><i class="fa fa-trash"></i> Delete</a>
            </div>
        </div>
    </div><!-- COL-END -->

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
                <form method="POST"
                action="{{route('slider.destroy',$slid->id)}}">
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

</div>

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
