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
					echo"</br>";	
					echo"user ID :".$_SESSION['user']['id'];
					echo"</br>";
					echo"user Session Active :".$_SESSION['user']['connected'];
					if($_SESSION['user']['connected']==false)echo"false";
					if($_SESSION['user']['connected']==true)echo"true";
					echo"</br>";
					echo"user pseudo :".$_SESSION['user']['pseudo'];
					echo"</br>";
					?>
				</div>
			</div>
		</div>
	</body>
</html>