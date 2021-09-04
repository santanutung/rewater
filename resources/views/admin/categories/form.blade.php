@extends('layouts.backend.app')
@section('title', 'dashbord')

    @push('css')

    @endpush
@section('content')
    <div class="block full">
        <div class="block-title">

            <h2><strong> {{ isset($category) ? 'Edit ' : 'Create New ' }} Category</strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('admin.categories.index') }}" class="btn  btn-danger ">Back</a>
            </div>
        </div>



        <div class="row">
            <div class="col-xs-12">

                <form id="form-validation" class="form-horizontal form-bordered"
                 method="post" action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" >
                        @csrf
                    @if (isset($category))
                         @method('PUT')
                    @endif
                    <fieldset>
                        <div class="form-group   @error('category') has-error @enderror"
                                    value="{{ $role->name ?? '' }}">
                            <label class="col-md-4 control-label" for="val_category">Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_category" name="category" class="form-control"
                                        placeholder="Enter category.."
                                        value="{{ $category->name ?? ''}}"
                                        >
                                 @error('category')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror


                                </div>
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

    <script>
        $(function() {
            FormsValidation.init();
        });
    </script>

@endpush
