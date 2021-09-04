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

        <h2><strong> Footer settings</strong> </h2>
        <div class="block-options pull-right">

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ route('admin.footer.footer_update', $footer_settings->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <h2 class="text-center">Footer One</h2>
                </div>

                <div class="form-group   @error('footer_one_tittle') has-error @enderror"
                    value="{{ $footer_settings->footer_one_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Main Tittle <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="footer_one_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $footer_settings->footer_one_tittle }}">
                        @error('footer_one_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group   @error('footer_one_email') has-error @enderror"
                    value="{{ $footer_settings->footer_one_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Footer one email <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="footer_one_email" class="form-control" placeholder="Enter tittle.."
                            value="{{ $footer_settings->footer_one_email }}">
                        @error('footer_one_email')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>





                <div class="form-group   @error('footer_one_phone') has-error @enderror"
                    value="{{ $footer_settings->footer_one_phone }}">
                    <label class="col-md-3 control-label" for="val_tittle">Footer one phone <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="footer_one_phone" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->footer_one_phone }}">
                        @error('footer_one_phone')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('footer_one_tittle_2') has-error @enderror"
                    value="{{ $footer_settings->footer_one_tittle_2 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Footer one tittle two <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="footer_one_tittle_2" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->footer_one_tittle_2 }}">
                        @error('footer_one_tittle_2')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group   @error('social_icon_1') has-error @enderror"
                    value="{{ $footer_settings->social_icon_1 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social icon one <small>(ex: fa
                            fa-facebook)</small> <span class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_1" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_1 }}">
                        @error('social_icon_1')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('social_icon_link_1') has-error @enderror"
                    value="{{ $footer_settings->social_icon_link_1 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social Link one <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_link_1" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_link_1 }}">
                        @error('social_icon_link_1')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="form-group   @error('social_icon_2') has-error @enderror"
                    value="{{ $footer_settings->social_icon_2 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social icon two <small>(ex: fa
                            fa-facebook)</small> <span class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_2" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_2 }}">
                        @error('social_icon_2')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('social_icon_link_2') has-error @enderror"
                    value="{{ $footer_settings->social_icon_link_2 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social link two <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_link_2" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_link_2 }}">
                        @error('social_icon_link_2')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group   @error('social_icon_3') has-error @enderror"
                    value="{{ $footer_settings->social_icon_3 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social icon three <small>(ex: fa
                            fa-facebook)</small> <span class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_3" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_3 }}">
                        @error('social_icon_3')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('social_icon_link_3') has-error @enderror"
                    value="{{ $footer_settings->social_icon_link_3 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social link three <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_link_3" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_link_3 }}">
                        @error('social_icon_link_3')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group   @error('social_icon_4') has-error @enderror"
                    value="{{ $footer_settings->social_icon_4 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social icon four <small>(ex: fa
                            fa-facebook)</small> <span class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_4" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_4 }}">
                        @error('social_icon_4')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group   @error('social_icon_link_4') has-error @enderror"
                    value="{{ $footer_settings->social_icon_link_4 }}">
                    <label class="col-md-3 control-label" for="val_tittle">Social link four <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" name="social_icon_link_4" class="form-control" placeholder="Enter .."
                            value="{{ $footer_settings->social_icon_link_4 }}">
                        @error('social_icon_link_4')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                {{-- <div class="form-group   @error('footer_one_email') has-error @enderror"
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
                        </div> --}}

                <div class="form-group">
                    <h2 class="text-center">Footer two</h2>
                </div>
                <div class="form-group   @error('footer_two_tittle') has-error @enderror"
                    value="{{ $footer_settings->footer_two_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Main Tittle <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="footer_two_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $footer_settings->footer_two_tittle }}">
                        @error('footer_two_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <h2 class="text-center">Footer three</h2>
                </div>

                <div class="form-group   @error('footer_three_tittle') has-error @enderror"
                    value="{{ $footer_settings->footer_three_tittle }}">
                    <label class="col-md-3 control-label" for="val_tittle">Main Tittle <span
                            class="text-danger">*</span></label>
                    <div class="col-md-5">

                        <input type="text" id="tittle" name="footer_three_tittle" class="form-control"
                            placeholder="Enter tittle.." value="{{ $footer_settings->footer_three_tittle }}">
                        @error('footer_three_tittle')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="val_description">Description <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="footer_three_text" rows="9" class="form-control"
                            placeholder="Description..">{{ $footer_settings->footer_three_text }}</textarea>

                        @error('description')
                            <span class="help-block">{{ $message }}</span>
                        @enderror


                    </div>
                </div>

                <div class="form-group">
                    <h2 class="text-center">Footer copyright</h2>
                </div>


                <div class="form-group  ">
                    <label class="col-md-3 control-label" for="footer_copyright">footer copyright <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">

                        <textarea name="footer_copyright" rows="9" id="footer_copyright" class="form-control"
                            placeholder="Description..">{{ $footer_settings->footer_copyright }}</textarea>

                        @error('footer_copyright')
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
