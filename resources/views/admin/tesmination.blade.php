@extends('layouts.dashpord')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<link rel="stylesheet" href="\star.css">
<form method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Testimonial</h3>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="type your banner title">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rate</label>
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comment</h3>
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
                                    <textarea name="comment" id="summernote" cols="30" rows="10"></textarea>
                                    @error('summernote')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                        </div>
                    </div>
                </div>

                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="mb-0 card-title">Upload File</h3>
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
                                    </div><input type="file" class="dropify" data-height="300" name="image"
                                        id="image"><button type="button" class="dropify-clear">Remove</button>
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
                    </div>

                </div>
            </div>
        </div><!-- COL END -->
        @error('image')
        <p class="text-danger">{{ $message }}</p>
        @enderror


        <div class="card text-center">
            <div class="card-body">
                <input type="submit" class="btn btn-success mt-2" value="Save" id="click">
                <input type="button" class="btn btn-danger mt-2" value="Cancel" id="click">
            </div>
        </div>
    </div>

</form>

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
