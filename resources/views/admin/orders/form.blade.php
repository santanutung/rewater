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
        <h2><strong> {{ 'Order Details' }} </strong> </h2>
        <div class="block-options pull-right">
            <a href="{{ route('admin.orders.index') }}" class="btn  btn-danger ">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">type</th>
                            {{-- <th class="text-center">satus</th> --}}
                            <th class="text-center">Price</th>
                            {{-- <th class="text-center"> Review </th>
                            <th class="text-center"> Comment </th> --}}
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($order->items as $key => $order_item)
                            {{-- {{dd($order_item)}} --}}
                            {{-- {{dd($order->status)}} --}}
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>

                                <td class="text-center">{{ $order_item->art->name }}</td>
                                <td class="text-center">{{ $order_item->item_type }}</td>

                                <td class="text-center">{{ $order_item->price }}</td>
                                {{-- <td class="text-center">
                                <div class="btn-group">
                                     <a href="{{ route('customer.orders.edit', $order->id) }}" data-toggle="tooltip"
                                        title="Rate & Review Art" class="btn  font_icon btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('customer.orders.show', $order->id) }}" data-toggle="tooltip"
                                        title="Rate & Review Art" class="btn  font_icon btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                </div>
                            </td> --}}
                                {{-- <td class="text-center">{{ $order_item->created_at}}</td> --}}


                            </tr>
                        @endforeach

                    </tbody>


                </table>
                <br>
                <br>

                <table id="address-datatable" class="table table-vcenter table-condensed table-bordered">

                    <thead>
                        <tr>
                            <th class="text-center" colspan="4">Billing Details</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th class="">Order Number</th>
                            <td class="">{{ $order->order_number }}</td>
                            <th class="">Grand total </th>
                            <td class="">{{ $order->grand_total }} INR</td>
                        </tr>

                        <tr>
                            <th class=""> Billing city</th>
                            <td class="">{{ $order->billing_city }}</td>
                            <th class="">Billing state </th>
                            <td class="">{{ $order->billing_state }}</td>
                        </tr>
                        <tr>
                            <th class=""> Billing postcode</th>
                            <td class="">{{ $order->billing_postcode }}</td>
                            <th class="">Billing email</th>
                            <td class="">{{ $order->billing_email }}</td>
                        </tr>
                        <tr>
                            <th class="">Billing address </th>
                            <td class="">{{ $order->billing_address_1 }}</td>
                            <th class="">Billing phone</th>
                            <td class="">{{ $order->billing_phone }}</td>
                        </tr>
                        <tr>
                            <th class="" colspan="4">Order comments :- </th>
                        </tr>
                        <tr>
                            <td class="" colspan="4">{{ $order->order_comments }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form id="form-validation" class="form-horizontal form-bordered" method="post"
                action="{{ route('admin.orders.update', $order->id) }}" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <fieldset>
                    {{-- <div class="form-group   @error('status') has-error @enderror">
                                    <label class="col-md-3 control-label" for="status">Status <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-5">

                                        <input type="text" id="status" name="status" class="form-control"
                                            placeholder="Enter tittle.." value="{{ $order->status }}">
                                        @error('status')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror


                                    </div>
                                </div> --}}
                    <div class="form-group  @error('status') has-error @enderror">
                        <label class="col-md-3 control-label" for="example-select">Status <span
                                class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <select id="example-select" name="status" class="form-control" size="1">
                                <option disabled>Please select</option>

                                <option @if ($order->status == 'pending') selected @endif value="pending">Pending</option>
                                <option @if ($order->status == 'processing') selected @endif value="processing">Processing</option>
                                <option @if ($order->status == 'completed') selected @endif value="completed">Completed</option>
                                <option @if ($order->status == 'decline') selected @endif value="decline">Decline</option>
                            </select>
                            @error('status')
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


<script src="{{ asset('backend/js/pages/tablesDatatables.js') }}"></script>
<script>
    $(function() {
        TablesDatatables.init();

    });
</script>



{{-- <script src="{{ asset('backend/js/tinymce.js') }}"></script> --}}



@endpush
