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

        <h2><strong> Rozerpay settings</strong> </h2>
        <div class="block-options pull-right">

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ route('admin.rozerpay.setting') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group   @error('rozerpay_key_id') has-error @enderror">
                    <label class="col-md-3 control-label" for="rozerpay_key_id">Key Id <span
                            class="text-danger">*</span> </label>
                    <div class="col-md-5">

                        <input type="text" id="rozerpay_key_id" name="rozerpay_key_id" class="form-control"
                            placeholder="Enter tittle.." value="{{ $sitesetting->rozerpay_key_id }}">
                        @error('rozerpay_key_id')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group   @error('rozerpay_key_secret') has-error @enderror">
                    <label class="col-md-3 control-label" for="rozerpay_key_secret">Key Secret<span
                            class="text-danger">*</span> </label>
                    <div class="col-md-5">

                        <input type="text" id="rozerpay_key_secret" name="rozerpay_key_secret" class="form-control"
                            placeholder="Enter tittle.." value="{{ $sitesetting->rozerpay_key_secret }}">
                        @error('rozerpay_key_secret')
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
