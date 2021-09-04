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

            <h2><strong> {{ isset($news) ? 'Edit ' : 'Create New ' }} sliders</strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('admin.news.index') }}" class="btn  btn-danger ">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form id="form-validation" class="form-horizontal form-bordered"
                 method="post" action="{{ isset($news) ? route('admin.news.update', $news->id) : route('admin.news.store') }}"    enctype="multipart/form-data" >
                        @csrf
                    @if (isset($news))
                         @method('PUT')
                    @endif
                    <fieldset>
                        <div class="form-group   @error('tittle') has-error @enderror"
                                    value="{{ $news->tittle ?? '' }}">
                            <label class="col-md-3 control-label" for="val_tittle">Tittle <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">

                                    <input type="text" id="tittle" name="tittle" class="form-control"
                                        placeholder="Enter tittle.."
                                        value="{{ $news->tittle ?? ''}}"
                                        >
                                 @error('tittle')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror



                            </div>
                        </div>


                          <div class="form-group   @error('description') has-error @enderror"
                                    value="{{ $news->description ?? '' }}">
                            <label class="col-md-3 control-label" for="val_description">Description <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-7">

                         <textarea id="news_description" name="description" rows="9" class="form-control"
                                    placeholder="Description..">{{ $news->description ?? '' }}</textarea>


                                 @error('description')
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
