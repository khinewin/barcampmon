<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BarCamp Mon Dashboard</title>

    <!-- Styles -->
    <link href="{{asset('fontAwesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{asset('Templatedemo/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/main.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/responsive.css')}}" rel="stylesheet">

</head>

<body>

    @include('dashboardNavbar')

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