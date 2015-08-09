<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,300,200' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" language="Javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" language="Javascript" src="js/main.js"></script>
		<title>CSS Testing</title>
	</head>
	<body>
		 
		<nav class="navbar">
			<a id="" class="nodebutton" href="#top">Home</a>
			<a id="" class="nodebutton" href="#projects">Projects</a>
			<a id="" class="nodebutton" href="#about">About</a>
		</nav>
		</div>
		<div class="container center">
			<h1 id="1" class="title" name="top">This is my website.</h1>
			<div id="1" class="textbox">
				<p class="text">Hello, World!</p>
			</div>
			<div class="container center">
			<h1 class="title" name="projects">Projects</h1>
			<div class="textbox">
			<?php
				include projects.php;
				?>
			</div>
		</div>
	</body>

</html>