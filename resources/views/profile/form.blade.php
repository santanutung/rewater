@extends('layouts.backend.app')
@section('title', 'dashbord')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" />
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }

    </style>
@endpush
@section('content')
<div class="block full">
    <div class="block-title">

        <h2><strong> {{ isset($comment) ? 'Edit ' : 'Create New ' }} sliders</strong> </h2>
        <div class="block-options pull-right">
            <a href="{{ route('admin.newcomments.index') }}" class="btn  btn-danger ">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ isset($comment) ? route('admin.newcomments.update', $comment->id) : route('admin.newcomments.store') }}"
                enctype="multipart/form-data">
                @csrf
                @if (isset($comment))
                    @method('PUT')
                @endif
                <fieldset>

                 <div class="form-group   @error('artname') has-error @enderror" >
                            <label class="col-md-3 control-label" for="val_art_name">Art Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">

                                <input type="text" id="val_art_name"  class="form-control " disabled
                                    placeholder="Enter name.." value="{{ $art->name ?? '' }}">
                                @error('artname')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group   @error('name') has-error @enderror" >
                            <label class="col-md-3 control-label" for="val_art_name">Customer Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">

                                <input type="text" id="val_art_name" name="name" class="form-control"
                                    placeholder="Enter name.." value="{{ $comment->name ?? '' }}">
                                @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group  @error('rating') has-error @enderror">
                        <label class="col-md-3 control-label" for="example-select">Rating  <span
                                    class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select id="example-select" name="rating" class="form-control" size="1">
                                <option disabled>Please select</option>
                                <option @if($comment->rating==0) selected  @endif value="0">0</option>
                                <option @if($comment->rating==1) selected  @endif value="1">1</option>
                                <option @if($comment->rating==2) selected  @endif value="2">2</option>
                                <option @if($comment->rating==3) selected  @endif value="3">3</option>
                                <option @if($comment->rating==4) selected  @endif value="4">4</option>
                                <option @if($comment->rating==5) selected  @endif value="5">5</option>
                            </select>
                            @error('rating')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group   @error('comment') has-error @enderror"
                        value="{{ $comment->comment ?? '' }}">
                        <label class="col-md-3 control-label" for="val_description">Comment <span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">

                            <textarea id="" name="comment" rows="9" class="form-control"
                                placeholder="comment..">{{ $comment->comment ?? '' }}</textarea>
                            @error('comment')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                     <div class="form-group  @error('approve') has-error @enderror">
                        <label class="col-md-3 control-label" for="example-select">Aprove  <span
                                    class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select id="example-select" name="approve" class="form-control" size="1">
                                <option disabled>Please select</option>

                                <option @if($comment->is_approve==0) selected  @endif value="0">Not Approve</option>
                                <option @if($comment->is_approve==1) selected  @endif value="1">Approve</option>

                            </select>
                            @error('approve')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i>
                                Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i>
                                Reset</button>
                        </div>
                    </div>

            </form>
        </div>
    </div>

</div>

@endsection

@push('js')
<script src="{{ asset('backend/js/pages/formsValidation.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(function() {
        FormsValidation.init();
        $('.dropify').dropify();

    });
</script>

@endpush
