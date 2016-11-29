<!DOCTYPE HTML>
<html>

<head>
	<title>@yield('tatile')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/main0.css" />
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<div id="header">
			<!-- Logo -->
			<div id="logo">
				<a class="logo">
					<img src="images/20.png" alt="" />
				</a>
			</div>
		</div>

    @yield('content')

	</div>
	<!-- Scripts -->
	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/skel.min.js"></script>
	<script src="public/js/util.js"></script>
	<script src="public/js/main.js"></script>

</body>

</html>
