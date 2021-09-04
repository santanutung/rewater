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
        <h2><strong> {{ isset($art) ? 'Edit ' : 'Create New ' }} Art</strong> </h2>
        <div class="block-options pull-right">
            <a href="{{ route('admin.arts.index') }}" class="btn  btn-danger ">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ isset($art) ? route('admin.arts.update', $art->id) : route('admin.arts.store') }}"
                enctype="multipart/form-data">
                @csrf
                @if (isset($art))
                @method('PUT')
                @endif
                <fieldset>
                    <div class="form-group   @error('name') has-error @enderror" value="{{ $art->name ?? '' }}">
                        <label class="col-md-3 control-label" for="val_art_name">Name <span
                                class="text-danger">*</span></label>
                        <div class="col-md-5">

                            <input type="text" id="val_art_name" name="name" class="form-control"
                                placeholder="Enter name.." value="{{ $art->name ?? '' }}">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group   @error('main_images') has-error @enderror"
                        value="{{ $art->main_images ?? '' }}">
                        <label class="col-md-3 control-label" for="main_images">Images <span
                                class="text-danger">*</span></label>
                        <div class="col-md-5">

                            <input type="file" id="main_images" name="main_images" class="form-control dropify"
                                data-default-file="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}">
                            @error('main_images')
                            <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    @if (isset($art))


                    @if ($art->extraImages)
                    <div class="form-group   @error('extra_images') has-error @enderror"
                        >
                        <label class="col-md-3 control-label" for="extra_images">Extra Images <span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <div class="row">
                                @foreach ($art->extraImages as $extra_image)
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify"
                                        data-default-file="{{ asset('extra_image/art/' . $extra_image->img) }}">
                                </div>
                                @endforeach
                            </div>
                            @error('extra_images')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @else
                    <div class="form-group   @error('extra_images') has-error @enderror"
                      >
                        <label class="col-md-3 control-label" for="extra_images">Extra Images <span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>

                            </div>
                            @error('extra_images')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    @endif

                    @else
                    <div class="form-group  create  @error('extra_images') has-error @enderror"
                       >
                        <label class="col-md-3 control-label" for="extra_images">Extra Images <span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" id="extra_images" name="extra_images[]"
                                        class="form-control dropify" data-default-file="">
                                </div>

                            </div>
                            @error('extra_images')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @endif


                    <div class="form-group   @error('item_id') has-error @enderror" value="{{ $art->item_id ?? '' }}">
                        <label class="col-md-3 control-label" for="val_item_id">Item ID <span
                                class="text-danger">*</span></label>
                        <div class="col-md-5">

                            <input type="text" id="val_item_id" name="item_id" class="form-control"
                                placeholder="Enter Item id.." value="{{ $art->item_id ?? '' }}">
                            @error('item_id')
                            <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    {{-- <div class="form-group">
                            <label class="col-md-3 control-label" for="example-select">Category</label>
                            <div class="col-md-5">
                                <select id="example-select" name="example-select" class="form-control" size="1">
                                    <option value="0" disabled>Please select</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                    </select>
        </div>
    </div> --}}
    <div class="form-group">
        <label class="col-md-3 control-label" for="art_description">Description
            <span class="text-danger">*</span>

        </label>
        <div class="col-md-7">
            <textarea id="art_description" name="description" rows="9" class="form-control"
                placeholder="Description..">{{ $art->description ?? '' }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Art Type</label>
        <div class="col-md-9">
            <label class="checkbox-inline" for="digital">
                <input type="checkbox" @if (isset($art)) {{ $art->digital == 1 ? 'checked' : '' }} @endif id="digital"
                    name="digital" value="1"> Digital
            </label>
            <label class="checkbox-inline" for="physical">
                <input type="checkbox" @if (isset($art)) {{ $art->physical == 1 ? 'checked' : '' }} @endif id="physical"
                    name="physical" value="1"> Physical
            </label>

        </div>
    </div>

    <div class="form-group physical">
        <label class="col-md-3 control-label" for="physical_instructions">Instructions for physical
            <span class="text-danger">*</span></label>
        <div class="col-md-7">
            <textarea id="physical_instructions" name="physical_instructions" rows="9" class="form-control"
                placeholder="Instructions for physical.."> {{ $art->physical_instructions ?? '' }} </textarea>
        </div>
    </div>
    <div class="form-group digital">
        <label class="col-md-3 control-label" for="digital_instructions">Instructions for digtal<span
                class="text-danger">*</span></label>
        <div class="col-md-7">
            <textarea id="digital_instructions" name="digital_instructions" rows="9" class="form-control"
                placeholder="Instructions for digtal..">{{ $art->digital_instructions ?? '' }}</textarea>
        </div>
    </div>
    <div class="form-group digital   @error('digital_art_price') has-error @enderror"
        value="{{ $art->digital_art_price ?? '' }}">
        <label class="col-md-3 control-label" for="digital_art_price"> Digital art price: <span
                class="text-danger">*</span></label>
        <div class="col-md-5">

            <input type="number" id="digital_art_price" name="digital_art_price" class="form-control digital_art"
                placeholder="Enter amount.." value="{{ $art->digital_art_price ?? '' }}">
            @error('digital_art_price')
            <span class="help-block">{{ $message }}</span>
            @enderror



        </div>
    </div>
    <div class="form-group digital   @error('digital_art_dis') has-error @enderror"
        value="{{ $art->digital_art_dis ?? '' }}">
        <label class="col-md-3 control-label" for="digital_art_dis">Discount in percentage:- <span
                class="text-danger">*</span></label>
        <div class="col-md-5">

            <input type="number" id="digital_art_dis" name="digital_art_dis" class="form-control digital_art"
                placeholder="Enter amount.." value="{{ $art->digital_art_dis ?? '' }}">
            @error('digital_art_dis')
            <span class="help-block">{{ $message }}</span>
            @enderror


        </div>
    </div>
    <div class="form-group digital    @error('digital_art_sell') has-error @enderror"
        value="{{ $art->digital_art_sell ?? '' }}">
        <label class="col-md-3 control-label" for="digital_art_sell">Selling Price:- <span
                class="text-danger">*</span></label>
        <div class="col-md-5">
            <input type="number" readonly id="digital_art_sell" name="digital_art_sell" class="form-control"
                placeholder="Enter amount.." value="{{ $art->digital_art_sell ?? '' }}">
            @error('digital_art_sell')
            <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group physical  @error('physical_art_price') has-error @enderror"
        value="{{ $art->physical_art_price ?? '' }}">
        <label class="col-md-3 control-label" for="physical_art_price">Physical art price:- <span
                class="text-danger">*</span></label>
        <div class="col-md-5">

            <input type="number" id="physical_art_price" name="physical_art_price" class="form-control physical_art"
                placeholder="Enter amount.." value="{{ $art->physical_art_price ?? '' }}">
            @error('physical_art_price')
            <span class="help-block">{{ $message }}</span>
            @enderror

        </div>
    </div>
    <div class="form-group physical  @error('physical_art_dis') has-error @enderror"
        value="{{ $art->physical_art_dis ?? '' }}">
        <label class="col-md-3 control-label" for="physical_art_dis">Discount in percentage:- <span
                class="text-danger">*</span></label>
        <div class="col-md-5">

            <input type="number" id="physical_art_dis" name="physical_art_dis" class="form-control physical_art"
                placeholder="Enter amount.." value="{{ $art->physical_art_dis ?? '' }}">
            @error('physical_art_dis')
            <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group physical  @error('physical_art_sell') has-error @enderror"
        value="{{ $art->physical_art_sell ?? '' }}">
        <label class="col-md-3 control-label" for="physical_art_sell">Selling Price:- <span
                class="text-danger">*</span></label>
        <div class="col-md-5">

            <input type="number" readonly id="physical_art_sell" name="physical_art_sell" class="form-control "
                placeholder="Enter amount.." value="{{ $art->physical_art_sell ?? '' }}">
            @error('physical_art_sell')
            <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- <div class="form-group physical  @error('physical_art_delivery_time') has-error @enderror"
                            value="{{ $art->physical_art_delivery_time ?? '' }}">
    <label class="col-md-3 control-label" for="physical_art_delivery_time">physical art delivery
        date:- <span class="text-danger">*</span></label>
    <div class="col-md-5">

        <input type="text" id="physical_art_delivery_time" name="physical_art_delivery_time" class="form-control
                                      input-datepicker" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"
            value="{{ $art->physical_art_delivery_time ?? '' }}">
        @error('physical_art_delivery_time')
        <span class="help-block">{{ $message }}</span>
        @enderror
    </div>
</div> --}}

<div class="form-group physical   @error('size_physical') has-error @enderror" value="{{ $art->size_physical ?? '' }}">
    <label class="col-md-3 control-label" for="size_physical">Size of physical :- <span
            class="text-danger">*</span></label>
    <div class="col-md-5">

        <input type="text" id="size_physical" name="size_physical" class="form-control" placeholder="Enter size.."
            value="{{ $art->size_physical ?? '' }}">
        @error('size_physical')
        <span class="help-block">{{ $message }}</span>
        @enderror

    </div>
</div>
<div class="form-group physical  @error('frame_color') has-error @enderror" value="{{ $art->frame_color ?? '' }}">
    <label class="col-md-3 control-label" for="frame_color">Frame color
        :- <span class="text-danger">*</span></label>
    <div class="col-md-5">
        <input type="text" id="frame_color" name="frame_color" class="form-control" placeholder="Enter color.."
            value="{{ $art->frame_color ?? '' }}">
        @error('frame_color')
        <span class="help-block">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group physical  @error('materia_used_painting') has-error @enderror"
    value="{{ $art->materia_used_painting ?? '' }}">
    <label class="col-md-3 control-label" for="materia_used_painting">Frame material
        :- <span class="text-danger">*</span></label>
    <div class="col-md-5">

        <input type="text" id="materia_used_painting" name="materia_used_painting" class="form-control"
            placeholder="Enter material.." value="{{ $art->materia_used_painting ?? '' }}">
        @error('materia_used_painting')
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
<script>
    $(document).ready(function() {
            if ($("#digital").is(':checked')) {
                $('.digital').show();
            } else {
                $('.digital').hide();
            }

            $('#digital').click(function(event) {
                if (this.checked) {
                    $('.digital').show();

                } else {
                    $('.digital').hide()

                }
            });
            if ($("#physical").is(':checked')) {
                $('.physical').show();


            } else {
                $('.physical').hide();


            }
            $('#physical').click(function(event) {
                if (this.checked) {
                    $('.physical').show();

                } else {
                    $('.physical').hide()

                }
            });

            $('.physical_art').on('keyup change ', function() {
                var physical_art_price = $('#physical_art_price').val();
                var physical_art_dis = $('#physical_art_dis').val();
                var physical_art_sell = physical_art_price - ((physical_art_dis * physical_art_price) / 100)

                $('#physical_art_sell').val(physical_art_sell > 0 ? physical_art_sell : 0);

            })

            $('.digital_art').on('keyup change ', function() {
                var digital_art_price = $('#digital_art_price').val();
                var digital_art_dis = $('#digital_art_dis').val();
                var digital_art_sell = digital_art_price - ((digital_art_dis * digital_art_price) / 100)

                $('#digital_art_sell').val(digital_art_sell > 0 ? digital_art_sell : 0);

            })



        });
</script>
{{-- <script src="{{ asset('backend/js/tinymce.js') }}"></script> --}}


<script>
    // $(function() {
        //     //TinyMCE
        //     tinymce.init({
        //         selector: "textarea#tinymce",
        //         theme: "modern",
        //         height: 300,
        //         plugins: [
        //             'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        //             'searchreplace wordcount visualblocks visualchars code fullscreen',
        //             'insertdatetime media nonbreaking save table contextmenu directionality',
        //             'emoticons template paste textcolor colorpicker textpattern imagetools'
        //         ],
        //         toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        //         toolbar2: 'print preview media | forecolor backcolor emoticons',
        //         image_advtab: true
        //     });
        //     tinymce.suffix = ".min";
        //     tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        // });
</script>

@endpush