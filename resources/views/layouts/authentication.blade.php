<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('admin/vendor/fonts/circular-std/style.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ url('admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
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

<body>
    <!-- ============================================================== -->
    <!-- auth pages -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
    <!-- end auth pages  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ url('admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
 
</html>