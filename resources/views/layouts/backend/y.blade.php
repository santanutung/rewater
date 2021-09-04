<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    @stack('css')
</head>
<body>


<!-- Top Bar -->
    @include('layouts.backend.partial.topbar')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('layouts.backend.partial.sidebar')
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    @yield('content')
</section>


<script>

</script>
@stack('js')
</body>
</html>