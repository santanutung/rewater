@extends('layouts.backend.app')
@section('title', 'dashbord')
    @push('css')
    <style>
        .font_icon {
    font-size: 20px;
}
    </style>
    @endpush
@section('content')
    <div class="block full">
        <div class="block-title">
            <h2><strong>Order</strong> </h2>
            <div class="block-options pull-right">

            </div>
        </div>
        <p>


        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Order number</th>
                        <th>Amount</th>
                         <th>Status</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->grand_total }}</td>
                             <td >{{ $order->status}}</td>
                            <td>{{ $order->created_at->format('M d,  Y') }}
                                                                {{ $order->created_at->format('h:i a') }}</td>

                            <td class="text-center">
                                <div class="btn-group">

                                <a href="{{ route('customer.orders.show', $order->id) }}" data-toggle="tooltip"
                                        title="Show" class="btn btn-xs font_icon btn-primary"><i class="fa fa-eye"></i></a>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         function deleteData(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                })
            }

            function resetForm(formId) {
                document.getElementById(formId).reset();
            }
    </script>
    <script src="{{ asset('backend/js/pages/tablesDatatables.js') }}"></script>
    <script>
        $(function() {
            TablesDatatables.init();

        });
    </script>
@endpush
