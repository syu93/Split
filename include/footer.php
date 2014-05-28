<?php
		$cgutext = "SELECT * FROM `content` WHERE title='cgutext'";
		$req1 = $bdd->query($cgutext);
		$dat1 = $req1->fetch();
?>
		</div>
	<?php require_once("com-center.php");?>
		<div class="footer">
			<div class="element-container">
				<ul class="foot_index">
					<li><a class="logo" href="http://127.0.0.1/split"><img src="http://127.0.0.1/split/img/SPLIT_LOGO.PNG"></a></li>
				</ul>
				<ul class="foot_index">
					<?php $reponse = $bdd->query($menu);
					while ($donnees = $reponse->fetch()) {	?>						
							<li><a href="game.php?genre=<?php echo $donnees['title'];?>"> <?php echo $donnees[$_SESSION['user']['langue']]; ?> </a></li>
						<?php }?>
				</ul>
				<ul class="foot_index">
					<li><a href="game.php?genre=<?php echo $dat1['title']; ?>"><?php echo $dat1[$_SESSION['user']['langue']];?></a></li>
				</ul>
			</div>
		</div>
	</div> <!-- body-->
	</body>
</html>
