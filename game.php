<?php
	require_once("include/header.php");
	require_once("bdd/bddconnect.php");
	require_once("form/req.php");
	// require_once("gameManage/addLibrary.php");
	require_once("form/init.php");
	$game_p_genre = $game_p_genre." AND gamegenre.idgenre='".$_GET["genre"]."' ";
	echo $_GET["genre"];
?>
<div class="container">
	<?php $game_idx = $bdd->query($game_p_genre);
	//FIXME : Add a genre separator
	$i = 0;
	$url = getUrl();
	while($donnees = $game_idx->fetch()) {
	$genre_idx = $bdd->query($genre_index." AND game.title='".$donnees['title']."' ");
	$genre_idx2 = $bdd->query($genre_index." AND game.title='".$donnees['title']."' ");
	?>
		<div class="article">
		<div id="<?php echo $i; ?>" class="bandeau"><?php echo $donnees[$_SESSION['user']['langue']]; ?></div>
			<span class="article-info">
				<a id="jeux<?php echo$i; ?>" alt="<?php echo$i; ?>" class="info<?php echo$i; ?>" ><i class="icon-info"></i></a> | <a id="cart<?php echo$i; ?>" alt="<?php echo$i; ?>"><i class="icon-basket"></i></a>
			</span>
			
			<img src="<?php echo$donnees["url"];?>">

			<p class="article-text">
				<?php
				while($donnees2 = $genre_idx->fetch()){
					echo '<a class="g_genre" href="game.php?genre='.$donnees2['genre'].'" >'.$donnees2[$_SESSION['user']['langue']].'</a>';
				}
				?>
			</p>
			
			<span id="p_<?php echo $i; ?>" class="game-price <?php echo devise(); ?>"><?php echo $donnees["price"];?></span>
		
			<!--<div class="article-describ">
				<?php //echo$donnees[$_SESSION["user"]['langueLongue']];?>
			</div>-->
		</div>
		
		<div class="gameDescrib OCoff" id="overContainer2<?php echo$i; ?>">
			<div class="over-wrapper game-title">
				<a type="button" id="gameBack" class="gameBack icon-left-open-1">Back</a>
				<span id="<?php echo $i; ?>" class=""><?php echo$donnees[$_SESSION['user']['langue']]; ?></span>
			</div>
			
			<div class="page-game">						
				<img src="<?php echo$donnees["url"];?>"/>

				<div class="describ-text">
					<span id="<?php echo $i; ?>" class="article-text">
						<?php echo$donnees[$_SESSION['user']['langue']]; ?>
					</span>
					
					<div class="long-describ">
						<?php echo$donnees[$_SESSION["user"]['langueLongue']];?>
					</div>
				</div>
				
				<div>
					<a class="addcart" href="">Ajouter au Panier | <span class="icon-basket"></span></a>
				</div>
				
				<div class="article-genre">
					<span>Tags : 
				<?php 
				while($donnees2 = $genre_idx2->fetch()){
					echo '<a class="g_genre" href="game.php?genre='.$donnees2['genre'].'" >'.$donnees2[$_SESSION['user']['langue']].'</a>';
				}
				?>
					</span>
				</div>
			</div>
		</div>				
	<?php 
	$i++;
	} ?>
	<span id="nb-game" data="<?php echo$i; ?>"></<span>
</div>
<?php
	require_once("include/footer.php");
?>