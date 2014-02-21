 <?php
	require_once("bdd/bddconnect.php");
	require_once("form/session.php");
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		
		<link rel="stylesheet" type="text/css" href="css/validate.css">
		
		
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/signup_submit.js"></script>
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
				<form method="POST" action="form/validateSignUp.php">
					<select id="langue" name="langue" class="language">
					<?php
						if($_SESSION['langue'] == text_fr || $_SESSION['langue']==Null)
						{
							echo "<option>Francais</option>";
							echo"<option>English</option>";
						}
						else if($_SESSION['langue'] == text_en)
						{
							echo"<option>English</option>";
							echo "<option>Francais</option>";
						}
					?>
					</select>
				</form>
				<span id="signIn" class="signIn">Sign In / Log In</span>
				<?php 
					require_once("connect.php");
				?>
			</div>
			
			<div class="slideShow">
				<h1>Welcome to Split</h1>
			</div>

		<div id="body">
			<nav class="menu2">						
				<ul class="level1">
					<span><a id="logo" href="index.php"><img  src="img/SPLIT_LOGO.PNG"></a></span>
					
					<?php
					$reponse = $bdd->query('SELECT * FROM content WHERE active="yes" AND tag ="menu" ORDER BY position');
					// var_dump ($reponse);
					while ($donnees = $reponse->fetch())
						{
					?>						
						<li><a href="#">	<?php echo $donnees[$_SESSION['langue']]; ?>	</a></li>
					<?php
						}
					?>
					
					<li class="cart"><a href="game.php">My Cart</a></li>
				</ul>
			</nav>