<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<title>{{title}} &middot; {{subtitle}}</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
	<link href="//bootstrap-themes.github.io/marketing/assets/css/toolkit-minimal.css" rel="stylesheet">
	<link href="//bootstrap-themes.github.io/marketing/assets/css/application-minimal.css" rel="stylesheet">
	
	<style>
	/* note: this is a hack for ios iframe for bootstrap themes shopify page */
	/* this chunk of css is not part of the toolkit :) */
	/* …curses ios, etc… */
	@media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
		body {
			width: 1px;
			min-width: 100%;
			*width: 100%;
		}
		#stage {
			height: 1px;
			overflow: auto;
			min-height: 100vh;
			-webkit-overflow-scrolling: touch;
		}
	}
	</style>
</head>
<body>
	<div class="e ajg">
	<nav class="du st sp bwd ayt app-navbar ahz">
		<button
			class="sj sm azl"
			type="button"
			data-toggle="collapse"
			data-target="#navbarResponsive"
			aria-controls="navbarResponsive"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="sk"></span>
		</button>

		<a class="l ajv" href="./"><span>{{title}}</span></a>

		<div class="collapse so" id="navbarResponsive">
			<ul class="nav navbar-nav ajx">
				<li class="m "> <a class="sb" href="#StartUp">StartUp</a></li>
				<li class="m active"> <a class="sb" href="#Minimal">Minimal</a></li>
				<li class="m "> <a class="sb" href="#Bold">Bold</a></li>
				<li class="m "> <a class="sb" href="#Docs">Docs</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</nav>
</div>