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
						<img src="<?php echo$donnees["url"];?>">

						<span class="article-text"><?php echo $donnees[$_SESSION['user']['langue']]; ?></span>
					</div>
				<?php } ?>
			</div>
<?php
	require_once("footer.php");
?>