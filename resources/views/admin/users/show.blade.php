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
            <h2><strong> {{ 'User Details' }} </strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('admin.users.index') }}" class="btn  btn-danger ">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table id="address-datatable" class="table table-vcenter table-condensed table-bordered">

                        <thead>
                            <tr>
                                <th class="text-center" colspan="4">User Details</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th class="">Name</th>
                                <td class="">{{ $user->name }}</td>
                                <th class="">Email </th>
                                <td class="">{{ $user->email }} INR</td>
                            </tr>
                            <tr>
                                <th class="">Phone</th>
                                <td class="">{{ $user->phone }}</td>
                                <th class="">Account created </th>
                                <td class="">{{ $user->created_at->format('M d,  Y') }}
                                    {{ $user->created_at->format('h:i a') }}</td>
                            </tr>
                            <tr>
                                <th class="" colspan="4">Address :- </th>
                            </tr>
                            <tr>
                                <td class="" colspan="4">{{ $user->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
