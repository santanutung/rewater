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

            <h2><strong>Profile</strong> </h2>
            <div class="block-options pull-right">
                {{-- <a href="{{ route('admin.newcomments.index') }}" class="btn  btn-danger ">Back</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form id="form-validation" class="form-horizontal form-bordered" method="post"
                    action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf

                    <fieldset>
                        <div class="form-group   @error('name') has-error @enderror">
                            <label class="col-md-3 control-label" for="val_art_name"> Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">
                                <input type="text" id="val_art_name" name="name" class="form-control"
                                    placeholder="Enter name.." value="{{ $user->name }}">
                                @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group   @error('image') has-error @enderror">
                            <label class="col-md-3 control-label" for="val_art_name"> image <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">
                                <input type="file" id="image" name="image" class="form-control dropify"
                                    data-default-file="{{ @$user->image ? asset('images/profile/' . @$user->image) : '' }}"
                                    class="form-control" placeholder="Enter name.." value="{{ $user->image }}">
                                @error('image')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   @error('email') has-error @enderror">
                            <label class="col-md-3 control-label" for="val_art_email"> Email <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">
                                <input type="text" id="val_art_email" name="email" class="form-control"
                                    placeholder="Enter email.." value="{{ $user->email }}">
                                @error('email')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group   @error('phone') has-error @enderror">
                            <label class="col-md-3 control-label" for="phone"> Phone <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-5">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone.."
                                    value="{{ $user->phone }}">
                                @error('phone')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  @error('address') has-error @enderror ">
                         <label class="col-md-3 control-label" for="address">Address    {{-- <span
                                    class="text-danger">*</span> --}}
                                </label>
                            <div class="col-md-7">

                                <textarea name="address" rows="9" id="address" class="form-control"
                                    placeholder="Description..">{{ $user->address }}</textarea>

                                @error('address')
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
