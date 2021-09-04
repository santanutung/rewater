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

        <h2><strong> site settings</strong> </h2>
        <div class="block-options pull-right">

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ route('admin.sitesetting.setting') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group   @error('font_logo_text') has-error @enderror">
                    <label class="col-md-3 control-label" for="font_logo_text">Logo Text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="font_logo_text" name="font_logo_text" class="form-control"
                            placeholder="Enter tittle.." value="{{ $sitesetting->font_logo_text }}">
                        @error('font_logo_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('showcase_tittle') has-error @enderror">
                    <label class="col-md-3 control-label" for="showcase_tittle">Showcase tittle<span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="showcase_tittle" name="showcase_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $sitesetting->portfolio_tittle }}">
                        @error('showcase_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="showcase_text">Showcase text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="showcase_text" rows="9" id="showcase_text" class="form-control"
                            placeholder="Description..">{{ $sitesetting->portfolio_text }}</textarea>

                        @error('showcase_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="form-group   @error('news_tittle') has-error @enderror">
                    <label class="col-md-3 control-label" for="news_tittle">News tittle<span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="news_tittle" name="news_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $sitesetting->news_tittle }}">
                        @error('news_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="news_text">News text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="news_text" rows="9" id="news_text" class="form-control"
                            placeholder="Description..">{{ $sitesetting->news_text }}</textarea>

                        @error('news_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror


                    </div>
                </div>




                {{-- <div class="form-group  ">
                    <label class="col-md-3 control-label" for="contact_text">Contact text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="contact_text" rows="9" id="contact_text" class="form-control"
                            placeholder="Description..">{{ $contactpage_setting->contact_text }}</textarea>

                        @error('contact_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div> --}}






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
