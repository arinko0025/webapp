<!DOCTYPE HTML>
<html>

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/main0.css" />
	@yield('head')
	@yield('header')
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<div id="header">
			<nav>
					<ul>
						@if(Auth::check())
						<li><a href="/logout">logout</a></li>
						<li><a href="/mypage">mypage</a></li>
						@else
						<li><a href="/login">login</a></li>
					@endif
						<li><a href="/cart">cart</a></li>
					</ul>
			</nav>
					<!-- Logo -->
			<div id="logo">
				<a class="logo" href="/top">
					<img src="images/20.png" alt="" />
				</a>
			</div>
		</div>

{{-- <footer>
	ariko
</footer> --}}

    @yield('content')

	</div>
	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/skel.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>

</body>

</html>
