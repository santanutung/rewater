@extends('layouts.backend.app')
@section('title', 'dashbord')
    @push('css')
    @endpush
@section('content')
    <div class="block full">
        <div class="block-title">

        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>


                        <th>User id</th>
                        <th>User name</th>
                        <th>User Email</th>

                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $item)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{$item->email}}</td>
                             <td>{{$item->created_at}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    {{-- <a href="{{ route('admin.news.edit', $item->id) }}" data-toggle="tooltip"
                                        title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a> --}}
                                <a href="{{ route('admin.users.show', $item->id) }}" data-toggle="tooltip"
                                        title="show" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                    {{-- <a href="javascript:void(0)" onclick='deleteData({{ $item->id }})'
                                        data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i
                                            class="fa fa-times">
                                          </i>
                                        </a> --}}
                                </div>
                                <form id='delete-form-{{ $item->id }}'
                                    action="{{ route('admin.news.destroy', $item->id) }}" method="post"
                                    class='d-none'>
                                    @csrf
                                    @method('delete')
                                </form>
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
