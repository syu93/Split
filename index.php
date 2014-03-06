<?php
	require_once("header.php");
	require_once("form/init.php");	
	require_once("form/req.php");
?>

			<div class="container">
			<!--<div class="carousel-header">
				<div class="slideShow">
					<h1>Welcome to Split</h1>
				</div>
			</div>-->
				<?php $game = $bdd->query($game_index);
				while($donnees = $game->fetch()) {	?>
					<div class="article">
					<span class="article-info">
						<i class="icon-info"></i>|<i class="icon-basket"></i>
					</span>
						<img src="<?php echo$donnees["url"];?>">

						<span class="article-text"><?php echo $donnees[$_SESSION['user']['langue']]; ?></span>
					
						<div class="article-describ">
							<?php echo$donnees[$_SESSION["user"]['langueLongue']];?>
						</div>
					</div>
				<?php } ?>
			</div>
<?php
	require_once("footer.php");
?>