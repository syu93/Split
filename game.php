 <?php
	include("header.php");
	include("bdd/bddconnect.php");
	include("gameManage/addLibrary.php");
?>

			<div class="container">
			<form action="game.php" method="POST">
				<div class="article">
					<img src="gameImg/BF4.JPG">
					<p>
						plop plop plop
						<input type="hidden" name="user" value="Syu93">
						<input type="hidden" name="game" value="TitanFall">						
						<input type="hidden" name="genre" value="action">					
					</p>
				<input type="submit" value="Buy">
				<!--Set the buton in display hidden after clicking : Js-->
				</div>
			</form>	
			</div>
		</div>
	</body>
</html>