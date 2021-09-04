@extends('layouts.backend.app')
@section('title', 'dashbord')
    @push('css')
    @endpush
@section('content')
    <div class="block full">
        <div class="block-title">
            <h2><strong>News</strong> </h2>
            <div class="block-options pull-right">
                <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-primary float-right">Add new</a>
            </div>
        </div>
        <p></p>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Tittle</th>

                        <th>Description</th>

                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $key => $item)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $item->tittle }}</td>
                            <td>{{$item->description}}</td>
                             <td>{{$item->created_at->format('M d, Y')}}    {{$item->created_at->format('h:i a')}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.news.edit', $item->id) }}" data-toggle="tooltip"
                                        title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                {{-- <a href="{{ route('admin.news.show', $item->id) }}" data-toggle="tooltip"
                                        title="Edit" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a> --}}
                                    <a href="javascript:void(0)" onclick='deleteData({{ $item->id }})'
                                        data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i
                                            class="fa fa-times">
                                          </i>
                                        </a>
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
