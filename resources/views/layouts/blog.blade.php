<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{url('blog/css/main.css')}}">
		<noscript><link rel="stylesheet" href="{{url('blog/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
                @section('intro')
                    @include('layouts.blog.intro')
                @show

				<!-- Header -->
				@include('layouts.blog.header')
				<!-- Nav -->
				@include('layouts.blog.navigation')
				<!-- Main -->
				@yield('content')
				<!-- Footer -->
				@include('layouts.blog.contact')

				<!-- Copyright -->
				@include('layouts.blog.copyright')

			</div>

		<!-- Scripts -->
			<script src="{{url('blog/js/jquery.min.js')}}"></script>
			<script src="{{url('blog/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{url('blog/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{url('blog/js/skel.min.js')}}"></script>
			<script src="{{url('blog/js/util.js')}}"></script>
			<script src="{{url('blog/js/main.js')}}"></script>

	</body>
</html>