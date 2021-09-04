@extends('layouts.backend.app')
@section('title','dashbord')

@push('css')
@endpush
@section('content')
<div class="block full">
    <div class="block-title">
        <h2><strong> {{ 'Order Details' }} </strong> </h2>
        <div class="block-options pull-right">
            <a href="{{ route('admin.contacts.index') }}" class="btn  btn-danger ">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table id="address-datatable" class="table table-vcenter table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="4">  Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="">Name </th>
                            <td class="">{{ $contact->name }}</td>
                             <th class="">Mail</th>
                            <td class="">{{ $contact->mail }}</td>
                            {{-- <th class="">Subject</th>
                            <td class="">{{ $contact->subject }}</td> --}}
                        </tr>
                        <tr>
                          <th class="" colspan="4"> comments :- </th>
                        </tr>
                        <tr>
                            <td class="" colspan="4">{{$contact->comment }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush