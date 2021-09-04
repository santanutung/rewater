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
                    <h1 class="animation-tossing"><i class="fa fa-bullhorn text-success"></i> 503</h1>
                    <h2 class="h3">Oops, we are sorry but our service is currently not available..<br>Please try again in a minute..</h2>
                </div>

            </div>
        </div>

@endsection

@push('js')
@endpush

