<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BarCamp Mon</title>

    <!-- Styles -->
    <link href="{{asset('fontAwesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{asset('Templatedemo/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/main.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/responsive.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
        <div id="app">
            @include('navBar')
            @yield('content')
            @include('footer')
        </div>


        <script src="{{ asset('bootstrap/js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/jquery.js') }}" type="text/javascript"></script>
        <script src="{{asset('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>

        <script  src="{{asset('Templatedemo/smoothscroll.js')}}" type="text/javascript"></script>
        <script  src="{{asset('Templatedemo/jquery.isotope.min.js')}}" type="text/javascript"></script>
        <script  src="{{asset('Templatedemo/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
        <script  src="{{asset('Templatedemo/jquery.parallax.js')}}" type="text/javascript"></script>
        <script  src="{{asset('Templatedemo/main.js')}}" type="text/javascript"></script>




</body>
</html>
