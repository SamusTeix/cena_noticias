<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="/js/app.js"></script>
	<title>-- Cena Zero - Cadastro de Notícias --</title>
	<style type="text/css">
		
	.material-icons {
		font-family: 'Material Icons';
		font-weight: normal;
		font-style: normal;
		font-size: 24px;  /* Preferred icon size */
		display: inline-block;
		line-height: 1;
		text-transform: none;
		letter-spacing: normal;
		word-wrap: normal;
		white-space: nowrap;
		direction: ltr;

		/* Support for all WebKit browsers. */
		-webkit-font-smoothing: antialiased;
		/* Support for Safari and Chrome. */
		text-rendering: optimizeLegibility;

		/* Support for Firefox. */
		-moz-osx-font-smoothing: grayscale;

		/* Support for IE. */
		font-feature-settings: 'liga';
	}

	</style>
</head>
<body>

	<div style="margin: 5%;">
		@yield('content')
	</div>

</body>
</html>