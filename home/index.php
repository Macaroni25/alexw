<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,300,200' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" language="Javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" language="Javascript" src="js/main.js"></script>
		<title>Home</title>
	
		<script type="text/javascript"" src="smooth.pack.js"></script>
	</head>
	<body>
		
			<nav class="navbar">
				<a class="anchor" id="down1" href="#top">Home</a>
				<a class="anchor" id="down1" href="#projects">Projects</a>
				<a class="anchor" id="down1" href="#about">About</a>
			</nav>
			<div class="container center">
				<h1 class="title" name="top">This is my website.</h1>
				<div class="textbox">
					<p class="text">Hello, World!</p>
					<br>
					<a class="nodebutton" href="https://github.com/Macaroni25">Here's my github profile!</a>
					<a class="nodebutton" href="https://github.com/Macaroni25">Here's this websites github repo!</a>
					<br><br>
					<p class="text"> Add a folder and push to this repo and this website will automatically update with your content.</p>
				</div>
			</div>
			</div>
		
				<div class="container center">
					<h1 class="title">
						<a name="projects" id="projects">Projects<a></h1>
			
			<?php
				include 'projects.php';
				?>
			
	
		</div>

		<div class="container center">
			<h1 class="title"><a name="about" id="about">About</a></h1>
			<div class="textbox">
			
			<?php
				include 'about.html';
				?>
			</div>
			</div>
		</div>
		<script>
				$(document).ready(function(){

   $(function() {
      $('.anchor').click(function() {
        var id = $(this).attr('href');
        $('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
        // Prevent default behavior of link
        return false;
      });
    });


	});
			</script>
	</body>

</html>