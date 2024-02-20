<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
	{{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
	{{-- <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin> --}}
	{{-- <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap') }}" rel="stylesheet"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ url('admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
	    <!-- ============================================================== -->
	    <!-- navbar -->
	    <!-- ============================================================== -->
	    @include('layouts.admin.header')
	    <!-- ============================================================== -->
	    <!-- end navbar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- left sidebar -->
	    <!-- ============================================================== -->
	    @include('layouts.admin.sidebar')
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
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
		</script>
</body>
</html>