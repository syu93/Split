<?php
	require_once("header.php");
	require_once("form/init.php");
	// echo$_SESSION['langue'];
	
?>

			<div class="container">
				<div class="article">
					<?php
					$reponse = $bdd->query('SELECT * FROM game ');
					// var_dump ($reponse);
					while ($donnees = $reponse->fetch())
						{
					?>						
						<img src="gameImg/titanfall.jpg">
						<a href="#">	<?php echo $donnees['title']; ?>	</a>
						<br>
						<?php echo $donnees['price']; ?><span>€</span>
						</br>
						<input type="button" value="Ajouter au panier">
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>