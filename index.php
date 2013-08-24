<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="scss/app.css"/>
	<title>Jake Klingler | Programmer</title>
	<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
	<div class="header-top">
		<div class="row text-center header-container">
			<h1>JAKE KLINGLER</h1>
			<img src="http://www.gravatar.com/avatar/307a641b6c78cec6701f87d6c59534b9?s=200"/>
			<h3>I'm a programmer from Columbus, OH.</h3>
		</div>
	</div>

	<!-- RESUME -->
	<?php include('resume.php'); ?>	

	<!-- PROJECTS -->
	<?php include('projects.php'); ?>	

	<!-- ABOUT ME -->
	<?php include('about_me.php'); ?>
		
	<!-- LINKS -->
	<?php include('links.php'); ?>

	<script>$(document).foundation();</script>
</body>
</html>