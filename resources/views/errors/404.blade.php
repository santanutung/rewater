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
                    <h1 class="animation-pulse"><i class="fa fa-exclamation-circle text-warning"></i> 404</h1>
                    <h2 class="h3">Oops, we are sorry but the page you are looking for was not found..<br>But do not worry, we will have a look into it..</h2>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                </div>
            </div>
        </div>

@endsection

@push('js')
@endpush