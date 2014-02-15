 <?php
	//include("bdd/bddconnect.php");
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		
		<link rel="stylesheet" type="text/css" href="css/validate.css">
		
		
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/checkExist.js"></script>
		<script src="js/overContainer.js"></script>
		
		<script src="js/validate.js"></script>
		<title>Split</title>
	</head>
	<body>
			<div id="panAcount">
			
				<nav class="menu1">
					<ul class="level1">
						<li><a herf="#"> My Library</a>
							<ul class="level2">
								<li><a herf="#"> sql</a>
									<ul class="level3">
										<li><a href="#">Play !</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				
				<select name="lanquage" class="lanquage">
					<option> sql </option>
				</select>
				
				<span id="signIn" class="signIn">Sign In / Log In</span>
				<?php 
					include("connect.php");
				?>
			</div>
			
			<div class="slideShow">
				<h1>Welcome to Split</h1>
			</div>

		<div id="body">
			<nav class="menu2">						
				<ul class="level1">
					<span><a id="logo" href="index.php"><img  src="img/SPLIT_LOGO.PNG"></a></span>
					<li><a href="#">Menu1</a>
					<ul class="level2">
						<li><a herf="#"> sql</a>
							<ul class="level3">
								<li><a href="#">Play !</a>
								</li>
							</ul>
						</li>
					</ul>
					</li>
					<li><a href="#">Menu1</a></li>
					<li><a href="#">Menu1</a></li>
					<li><a href="#">Menu1</a></li>
					<li><a href="#">Menu1</a></li>
					<li class="cart"><a href="game.php">My Cart</a></li>
				</ul>
			</nav>