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

            <h2><strong> {{ isset($slider) ? 'Edit ' : 'Create New ' }} sliders</strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('admin.sliders.index') }}" class="btn  btn-danger ">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form id="form-validation" class="form-horizontal form-bordered"
                 method="post" action="{{ isset($slider) ? route('admin.sliders.update', $slider->id) : route('admin.sliders.store') }}"    enctype="multipart/form-data" >
                        @csrf
                    @if (isset($slider))
                         @method('PUT')
                    @endif
                    <fieldset>
                        <div class="form-group   @error('sliders') has-error @enderror"
                                    value="{{ $slider->name ?? '' }}">
                            <label class="col-md-4 control-label" for="val_sliders">Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_sliders" name="sliders" class="form-control"
                                        placeholder="Enter sliders.."
                                        value="{{ $slider->name ?? ''}}"
                                        >
                                 @error('sliders')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror


                                </div>
                            </div>
                        </div>

                        <div class="form-group   @error('images') has-error @enderror"
                            value="{{ $slider->img ?? '' }}">
                            <label class="col-md-3 control-label" for="images">Images <span class="text-danger">*</span></label>
                            <div class="col-md-5">

                                <input type="file" id="images" name="images" class="form-control dropify"
                                    data-default-file="{{ @$slider->img ? asset('images/slider/' . @$slider->img) : '' }}">
                                @error('images')
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
