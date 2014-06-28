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
					echo"</br>";	
					echo"user ID :".$_SESSION['user']['id'];
					echo"</br>";
					echo"user Session Active :".$_SESSION['member']['connected'];
					if($_SESSION['member']['connected']==false)echo"false";
					if($_SESSION['member']['connected']==true)echo"true";
					echo"</br>";
					$plop = $_SESSION['member']['pseudo'];
					$p = $_SESSION['member']['pseudo'];
					
					echo"</br>";
					echo $p["pseudo"];
					
					?>
				</div>
			</div>
		</div>
	</body>
</html>