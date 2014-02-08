 <?php
	include("bdd/bddconnect.php");
	include("gameOrder/addLibrary.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		<title>Split</title>
	</head>
	<body>
			<div id="panAcount">
			
				<nav class="menu1" >
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
				
				<a class="signIn" href="#">Sign In / Log In</a>		
			</div>
			
			<div style="display:none;" class="slideShow">
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
					<li class="cart"><a href="#">My Cart</a></li>
				</ul>
			</nav>
			<div class="container">
			<form action="game.php" method="POST">
				<div class="article">
					<img src="gameImg/BF4.JPG">
					<p>
						plop plop plop
						<input type="hidden" name="user" value="Syu93">
						<input type="hidden" name="game" value="TitanFall">						
						<input type="hidden" name="genre" value="action">					
					</p>
				<input type="submit" value="Buy">
				<!--Set the buton in display hidden after clicking : Js-->
				</div>
			</form>	
			</div>
		</div>
	</body>
</html>