<?php
	require_once("bdd/bddconnect.php");
	$cart_tag="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
?>
<div class="panier">
	<div class="cart_head">
		<h4><?php $mycart = $bdd->query($cart_tag); $donnees = $mycart->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?></h4>
	</div>
		
	<hr>
	<iframe id="cart_window" name="cart_window" class="cart_window" src="minicart.php"scrolling="auto"></iframe>
	<hr>
	<div>
		<span>Totale :<?php echo $donnees["price"]?></span>
	</div>	
</div>