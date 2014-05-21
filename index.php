<?php
	require_once("include/header.php");
	require_once("form/init.php");	
	require_once("form/req.php");

	/*****************************/
	/*****************************/	
?>
<div class="container">
	<?php 
		$i = 0;
		$req = "SELECT * from genre";
		$rep = $bdd->query($req);
		while($q = $rep->fetch())
		{
	?>
		<div class="index_g"><a href="game.php?genre=<?php echo $q['genre'];?>"><?php echo $q[$_SESSION['user']['langue']];?></a></div>
	<?php
		$game_idx = $bdd->query($game_index.$q['genre'].'" ');
			$url = getUrl();
			while($donnees = $game_idx->fetch()) 
			{
			// echo $donnees['title'];
			$genre_idx = $bdd->query($genre_index." AND game.title='".$donnees['title']."' ");
			$genre_idx_inf = $bdd->query($genre_index." AND game.title='".$donnees['title']."' ");
			
			$carteditor	= "SELECT editor.text_fr, editor.text_en FROM game, editor WHERE game.title='".$donnees['title']."' AND game.ideditor=editor.name";
			$carteditor = $bdd->query($carteditor);
			$c_editor = $carteditor->fetch();
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
							<a id="b_cart<?php echo$i; ?>" alt="<?php echo$i; ?>" class="addcart" href="">Ajouter au Panier | <span class="icon-basket"></span></a>
						</div>
						
						<div class="article-genre">
						<?php 
							$cartitem3 = $bdd->query($tag);
							$donnees3 = $cartitem3->fetch();
							
							echo '<span>'.$donnees3[$_SESSION['user']['langue']].' : ' ;
						
						while($donnees2 = $genre_idx_inf->fetch()){
							echo '<a class="g_genre" href="game.php?genre='.$donnees2['genre'].'" >'.$donnees2[$_SESSION['user']['langue']].'</a>';
						}
						echo'<br>';
						$cartitem2 = $bdd->query($editor);
						$donnees2 = $cartitem2->fetch();
						echo'<span>'.$donnees2[$_SESSION['user']['langue']].' : '.$c_editor[$_SESSION['user']['langue']].'</span>';
						?>
							</span>
						</div>
						<!--<iframe id='video_<?php //echo $i; ?>' width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>-->
					</div>						
				</div>				
			<?php 
			$i++;
			}
		}
	?>
				<span id="nb-game" data="<?php echo$i; ?>"></<span>
</div>
<?php
	require_once("include/footer.php");
?>