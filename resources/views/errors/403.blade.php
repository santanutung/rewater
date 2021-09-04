@extends('errors.app')
@section('title','404page')

@push('css')
@endpush
@section('content')
 <div id="error-container">
           <div id="error-container">
            <div class="error-options">
                <h3><i class="fa fa-chevron-circle-left text-muted"></i> <a href="/">Go Home</a></h3>
            </div>
            <div class="row">
                   <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1 class="animation-hatch"><i class="fa fa-times text-danger"></i> 403</h1>
                    <h2 class="h3">Oops, we are sorry but you do not have permission to access this page..</h2>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                </div>
            </div>
        </div>

@endsection

@push('js')
@endpush
