<?php
	require_once("bdd/bddconnect.php");
	require_once("form/session.php");
	
	if($_SESSION['member']["cart"]!=null)
	{
		//$_SESSION['member']["cart"];
	}
?>
<div class="panier">
	<div>
		<h4><?php echo $donnees[$_SESSION['user']['langue']]; ?></h4>
	</div>
	<hr>
	<div class="cart-content">
		<div id="mycartItem" class="item"><?php echo $_SESSION['member']["cart"]; ?></div>
	</div>
</div>	