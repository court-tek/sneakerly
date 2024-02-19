<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('admin/vendor/fonts/circular-std/style.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ url('admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
	    <!-- ============================================================== -->
	    <!-- navbar -->
	    <!-- ============================================================== -->
	    @include('admin.layouts.header')
	    <!-- ============================================================== -->
	    <!-- end navbar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- left sidebar -->
	    <!-- ============================================================== -->
	    @include('admin.layouts.sidebar')
	    <!-- ============================================================== -->
	    <!-- end left sidebar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- wrapper  -->
	    <!-- ============================================================== -->
	    @yield('content')
		<!-- ============================================================== -->
		<!-- end wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- end main wrapper  -->
	<!-- ============================================================== -->
	<!-- Optional JavaScript -->
	<!-- jquery 3.3.1 -->
	<script src="{{ url('admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
	<!-- bootstap bundle js -->
	<script src="{{ url('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
	<!-- slimscroll js -->
	<script src="{{ url('admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
	<!-- main js -->
	<script src="{{ url('admin/libs/js/main-js.js') }}"></script>
	<!-- morris-chart js -->
	<script src="{{ url('admin/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
	<script src="{{ url('admin/vendor/charts/morris-bundle/morris.js') }}"></script>
	<script src="{{ url('admin/vendor/charts/morris-bundle/morrisjs.html') }}"></script>
	<!-- chart js -->
	<script src="{{ url('admin/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
	<script src="{{ url('admin/vendor/charts/charts-bundle/chartjs.js') }}"></script>
	<!-- dashboard js -->
	<script src="{{ url('admin/libs/js/dashboard-influencer.js') }}"></script>
</body>
</html>