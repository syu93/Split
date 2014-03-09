<?php
	require_once("header.php");
	require_once("form/init.php");	
	require_once("form/req.php");
	
	/*****************************/
	/*****************************/
	
?>

			<div class="container">
			<!--<div class="carousel-header">
				<div class="slideShow">
					<h1>Welcome to Split</h1>
				</div>
			</div>-->
				<?php $game_idx = $bdd->query($game_index);
				$i = 0;
				$url = getUrl();
				while($donnees = $game_idx->fetch()) {	
				?>
					<div class="article">
					<span class="article-info">
						<a id="jeux<?php echo$i; ?>" alt="<?php echo$i; ?>" class="info<?php echo$i; ?>" ><i class="icon-info"></i></a>|<a href="#"><i class="icon-basket"></i></a>
					</span>
						<img src="<?php echo$donnees["url"];?>">

						<span id="<?php echo $i; ?>" class="article-text"><?php echo $donnees[$_SESSION['user']['langue']]; ?></span>
					
						<div class="article-describ">
							<?php echo$donnees[$_SESSION["user"]['langueLongue']];?>
						</div>
					</div>
					
					<div class="gameDescrib OCoff" id="overContainer2<?php echo$i; ?>">
						<a id="gameBack" class="gameBack">Back</a>
						<div class="page-game">
							<img src="<?php echo$donnees["url"];?>">
							<br>
							<div class="describ-text">
								<span id="<?php echo $i; ?>" class="article-text"><?php echo$donnees[$_SESSION['user']['langue']]; ?></span>
								<div class="long-describ">
									<?php echo$donnees[$_SESSION["user"]['langueLongue']];?>
								</div>
							</div>
						</div>
					</div>					
				<?php 
				$i++;
				} ?>
			<span id="nb-game" data="<?php echo$i; ?>"></<span>
			</div>
<?php
	require_once("footer.php");
?>