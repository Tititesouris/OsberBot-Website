<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>OsberBot</title>
		<link rel="stylesheet" href="/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="/css/style.css" />
		<meta name="viewport" content="initial-scale=0.8" />
	</head>
	<body>
		@include('templates.navbar')
		<div id="main">
			@yield('content')
		</div>
		@include('templates.footer')
		<script src="/js/jquery-2.1.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>