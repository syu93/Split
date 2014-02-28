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
	<div id="body">
		<div class="over-wrapper">
			<div id="panAcount">			
				<nav class="menu1">
					<ul class="level1">
	<?php
	$library = $bdd->query('SELECT text_fr, text_en FROM content WHERE title="mylibrary" AND active="yes" AND tag ="menu" AND connected="yes"');
	while ($donnees = $library->fetch())
	{
	?>
						<li><a herf="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>
	<?php
	}
	?>
							<ul class="level2">
								<li class="myGame">
	<?php
	$game = $bdd->query('SELECT * FROM game WHERE active="yes" AND tag ="game" AND connected="no"');
	while ($donnees = $game->fetch())
	{
	?>
									<span class="g-img">
										<img src="<?php echo$donnees["url"];?>"/>
									</span>
									<span class="g-desc">
										<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>									
									</span>
	<?php }	/*
	$play = $bdd->query('SELECT text_fr, text_en FROM content WHERE title="play" AND active="yes" AND tag ="menu" AND connected="yes"');
	while ($donnees = $play->fetch())
	{*/
	?>
									<ul class="level3">
										<li>
											<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>
	<?php
	// } 
	?>
	<?php
	// } 
	?>

										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
	<?php
	$signup = $bdd->query('SELECT text_fr, text_en FROM content WHERE title="signup" AND active="yes" AND tag ="text" AND connected="no"');
	while ($donnees = $signup->fetch())
	{
	?>				
				<span id="signIn" class="signIn"><?php echo$donnees[$_SESSION['user']['langue']];?></span>
	<?php
	}
	?>			
				<form method="POST" action="form/validateSignUp.php" id="formLang">
					<select id="langue" name="langue" class="language">
					<?php
						if($_SESSION['user']['langue'] == "text_fr" || $_SESSION['user']['langue'] == Null)
						{
							echo "<option>Francais</option>";
							echo"<option>English</option>";
						}
						else if($_SESSION['user']['langue'] == "text_en")
						{
							echo"<option>English</option>";
							echo "<option>Francais</option>";
						}
					?>
					</select>
				</form>
			</div>
				<?php 
					//require_once("connect.php");
				?>
			</div>
			<!--
			<div class="carousel-header">
				<div class="slideShow">
					<h1>Welcome to Split</h1>
				</div>
			</div>
			<nav class="menu2">						
				<ul class="level1">
					<span><a id="logo" href="index.php"><img  src="img/SPLIT_LOGO.PNG"></a></span>
					
					<?php
					if($_SESSION['user']['connected']==false)
					{
					$reponse = $bdd->query('SELECT * FROM content WHERE active="yes" AND tag ="menu" AND connected="no" ORDER BY position');
					}
					else if($_SESSION['user']['connected']==true)
					{
					$reponse = $bdd->query('SELECT * FROM content WHERE active="yes" AND tag ="menu" AND connected="yes" ORDER BY position');
					}
					// var_dump ($reponse);
					while ($donnees = $reponse->fetch())
						{
					?>						
						<li><a href="action.php">	<?php echo $donnees[$_SESSION['user']['langue']]; ?>	</a></li>
					<?php
						}
					?>
					
					<li class="cart"><a href="game.php">My Cart</a></li>
				</ul>
			</nav>