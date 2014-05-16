<?php
	require_once("include/header.php");
	require_once("bdd/bddconnect.php");
	require_once("form/req.php");
 	$cart_tag="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
	$cart_tot="SELECT text_fr, text_en FROM content WHERE title='total' ";
?>
<html>
<head>
<style>
.menu2 .cart:hover .panier
{
opacity:0;
display:none;
}
</style>
</head>
<body>
	<div class="container" style="width: 50%; background:url('css/get.png');float:left;">
		<div class="cart_head">
			<h4><?php $mycart1 = $bdd->query($cart_tag); $donnees = $mycart1->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?></h4>
		</div>
		<hr>
		<div id="content"class="content">
			<iframe id="cart_window" name="cart_window" class="cart_window" src="http://127.0.0.1/split/include/minicart.php"scrolling="no"></iframe>
		</div>
		<hr>
		<div class="total">
			<H2><?php $mycart2 = $bdd->query($cart_tot); $donnees = $mycart2->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?> : 
			<span id='total' class='<?php echo devise(); ?>' ><?php echo summary(); ?></span></H2>
		</div>	
	</div>
	<?php
	/*****************/
	$infobank = "SELECT * FROM `content` WHERE title='infobank'";
	$paiement = "SELECT * FROM `content` WHERE title='paiement' ";
	$facture = "SELECT * FROM `content` WHERE title='facturation' ";
	$phone = "SELECT * FROM `content` WHERE title='phone' ";
	$compte = "SELECT * FROM `content` WHERE title='compte' ";	
	$termes = "SELECT * FROM `content` WHERE title='termes' ";
	//---
	$req1 = $bdd->query($infobank);
	$req2 = $bdd->query($paiement);
	$req3= $bdd->query($facture);
	$req4= $bdd->query($phone);
	$req5= $bdd->query($compte);
	$req6= $bdd->query($termes);
	//--
	$data1 = $req1->fetch();
	$data2 = $req2->fetch();
	$data3 = $req3->fetch();
	$data4 = $req4->fetch();
	$data5 = $req5->fetch();
	$data6 = $req6->fetch();
	
	/*****************/
		if($_SESSION['member']["connected"] == 1)
		{
			echo'<div class="container" style="clear:none; width: 49%; background:url(\'css/get.png\');float:left;">';
				echo"<form action='validateSignUp.php' method='POST'> ";
					echo'<div class="">';
						echo'<span>'.$data1[$_SESSION['user']['langue']].'</span>';
						echo'<span></span>';
						echo'<input type="text" name="nom">';
					echo'<div>';

					echo'<div class="">';
						echo'<span>'.$data2[$_SESSION['user']['langue']].'</span>';
						echo'<span></span>';
						echo'<input type="text" name="nom">';
					echo'<div>';
				
				echo'</form>';
			echo'</div>';
		}
		else
		{
			echo'<div class="container" style="clear:none; width: 49%; background:url(\'css/get.png\');float:left;">';
			echo'<span>You must be connected to order</span>';//recover content
			echo'</br>';
			
			$signup = $bdd->query($sign);
			$donnees = $signup->fetch();
			$idt="signIn2"; $class="OCoff";
	?>		
			<span id="<?php echo $idt; ?>" class="signIn">
	<?php
			echo$donnees[$_SESSION['user']['langue']];
		
		echo'</div>';
		}
	?>
	</body>
	</html>