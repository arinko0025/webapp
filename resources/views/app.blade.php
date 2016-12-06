<!DOCTYPE HTML>
<html>

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/main0.css" />
	@yield('head')
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<div id="header">
			<nav>
					<ul>
						<li><a href="/mypage">mypage</a></li>
						<li><a href="/cart">cart</a></li>
					</ul>
			</nav>
					<!-- Logo -->
			<div id="logo">
				<a class="logo">
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
