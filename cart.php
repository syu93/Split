<?php
	require_once("bdd/bddconnect.php");
	
?>
<div class="panier">
	<div>
		<h4><?php echo $donnees[$_SESSION['user']['langue']]; ?></h4>
	</div>
	<hr>
	<div class="cart-content">
	<?php foreach( $_SESSION['user']['cart']['game'] as $game):	?>
		<div id="mycartItem" class="item bandeau"><?php echo $game; ?></div>
	<?php endforeach; ?>
	</div>
</div>	