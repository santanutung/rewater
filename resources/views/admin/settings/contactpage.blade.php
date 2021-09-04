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

        <h2><strong> Contact page settings</strong> </h2>
        <div class="block-options pull-right">

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ route('admin.contactpage.setting', $contactpage_setting->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')


                 <div class="form-group   @error('contact_main_tittle') has-error @enderror"
                    value="{{ $contactpage_setting->contact_main_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact page tittle<span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_main_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_main_tittle }}">
                        @error('contact_main_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                 <div class="form-group   @error('contact_main_text') has-error @enderror"
                    value="{{ $contactpage_setting->contact_main_text }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact sub tittle<span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_main_text" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_main_text }}">
                        @error('contact_main_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                 <div class="form-group   @error('hello_text') has-error @enderror"
                    value="{{ $contactpage_setting->hello_text }}">
                    <label class="col-md-3 control-label" for="val_tittle">Hello text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="hello_text" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->hello_text }}">
                        @error('hello_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="form-group   @error('about_tittle') has-error @enderror"
                    value="{{ $contactpage_setting->about_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">About tittle <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="about_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->about_tittle }}">
                        @error('about_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
















                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="about_text">About text <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="about_text" rows="9" id="about_text" class="form-control"
                            placeholder="Description..">{{ $contactpage_setting->about_text }}</textarea>

                        @error('about_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_tittle') has-error @enderror"
                    value="{{ $contactpage_setting->contact_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact tittle <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_tittle }}">
                        @error('contact_tittle')
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
                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="contact_address">Contact address <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="contact_address" rows="9" id="contact_address" class="form-control"
                            placeholder="Description..">{{ $contactpage_setting->contact_address }}</textarea>

                        @error('contact_address')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_phone_1') has-error @enderror"
                    value="{{ $contactpage_setting->contact_phone_1 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact phone one <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_phone_1" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_phone_1 }}">
                        @error('contact_phone_1')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_phone_2') has-error @enderror"
                    value="{{ $contactpage_setting->contact_phone_2 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact phone two </label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_phone_2" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_phone_2 }}">
                        @error('contact_phone_2')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_email_1') has-error @enderror"
                    value="{{ $contactpage_setting->contact_email_1 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact phone one <span
                            class="text-danger">*</span> </label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_email_1" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_email_1 }}">
                        @error('contact_email_1')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_email_2') has-error @enderror"
                    value="{{ $contactpage_setting->contact_email_2 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact phone two </label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_email_2" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_email_2 }}">
                        @error('contact_email_2')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('contact_button_text') has-error @enderror"
                    value="{{ $contactpage_setting->contact_button_text }}">
                    <label class="col-md-3 control-label" for="val_tittle">Contact button text  <span class="text-danger">*</span> </label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="contact_button_text" class="form-control"
                            placeholder="Enter tittle.." value="{{ $contactpage_setting->contact_button_text }}">
                        @error('contact_button_text')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                {{-- <div class="form-group  ">
            <label class="col-md-3 control-label" for="footer_copyright">footer copyright <span class="text-danger">*</span></label>
            <div class="col-md-7">

                <textarea name="footer_copyright" rows="9" id="footer_copyright" class="form-control" placeholder="Description..">{{ $footer_settings->footer_copyright }}</textarea>

                @error('footer_copyright')
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
