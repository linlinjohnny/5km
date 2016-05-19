<html>
    <head>
        @section('headerMeta')
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap3.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/mybase.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/mymd.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/mysd.css') }}">

        <script type='text/javascript' src="{{ URL::asset('assets/js/jquery-1.12.3.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::asset('assets/js/bootstrap3.js') }}"></script>
        <title>5km-@yield('title')</title>
        @show
    </head>
    <body>
        @include('common.header')
        <div class="container-fluid">
            <div class='mainTitle '>
                @yield('title')
            </div>
            <div class='mainContent'>
                @yield('content')
            </div>
        </div>
        @include('common.footer')
    </body>
</html>
