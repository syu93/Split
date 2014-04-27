<?php
	require_once("bdd/bddconnect.php");
	$cart_tag="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
?>
<div class="panier">
	<div class="cart_head">
		<h4><?php $mycart = $bdd->query($cart_tag); $donnees = $mycart->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?></h4>
	</div>
		
	<hr>
	<div id="content"class="content">
		<iframe id="cart_window" name="cart_window" class="cart_window" src="http://127.0.0.1/split/minicart.php"scrolling="no"></iframe>
	</div>
	<hr>
	<div class="total">
		<H4>Total : </H4><span id='total' class='<?php echo devise(); ?>' ><?php echo summary(); ?></span>
	</div>	
</div>