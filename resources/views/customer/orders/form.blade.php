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
            <h2><strong> {{'Order Details'}} </strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('customer.myorder.index') }}" class="btn  btn-danger ">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                  <div class="table-responsive">
            <table id="" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">type</th>
                        {{-- <th class="text-center">satus</th> --}}
                        <th class="text-center">Price</th>
                        
                        {{-- <th class="text-center"> Review </th> --}}
                    </tr>
                </thead>
                 <tbody>

                     @foreach ($order->items as $key =>$order_item)
                     {{-- {{dd($order_item)}} --}}
                   {{-- {{dd($order->status)}} --}}
                        <tr>
                            <td class="text-center">{{ $key+1}}</td>

                              <td class="text-center">{{ $order_item->art->name}}</td>
                               <td class="text-center">{{ $order_item->item_type}}</td>

                            <td class="text-center">{{ $order_item->price}}</td>
                            {{-- <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('customer.orders.edit', $order->id) }}" data-toggle="tooltip"
                                        title="Rate & Review Art" class="btn  font_icon btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                </div>

                            </td> --}}
                             {{-- <td class="text-center">{{ $order_item->created_at}}</td> --}}


                        </tr>
                     @endforeach

                </tbody>


            </table>
        </div>
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
