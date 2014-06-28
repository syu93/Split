<?php
	require_once("header.php");
	require_once("form/init.php");
	// echo$_SESSION['langue'];
	require_once("form/req.php");
?>

			<div class="container">
				<div class="article">
					<?php
					$reponse = $bdd->query($action);
					// var_dump ($reponse);
					while ($donnees = $reponse->fetch())
					{
					?>				
						<img src="<?php echo $donnees['url']; ?>">
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