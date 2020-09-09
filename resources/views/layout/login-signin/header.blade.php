<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title', ' Learning laravel')</title>
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{{ url('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ url('/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <!-- {{ URL::to('/') }} -->
		@yield('content')
    
</body>

</html>