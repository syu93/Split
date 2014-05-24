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
	<div class="container cart" style="width: 50%; background:url('css/get.png');float:left;">
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
	$infobank = "SELECT * FROM `content` WHERE title='info bank'";
	$paiement = "SELECT * FROM `content` WHERE title='paiement' ";

	$phone = "SELECT * FROM `content` WHERE title='phone' ";
	$compte = "SELECT * FROM `content` WHERE title='compte' ";	
	$termes = "SELECT * FROM `content` WHERE title='termes' ";
	$nom = "SELECT * FROM `content` WHERE title='nom' ";
	$prenom = "SELECT * FROM `content` WHERE title='prenom' ";
	$expiration = "SELECT * FROM `content` WHERE title='expiration' ";
	$confirm = "SELECT * FROM `content` WHERE title='confirm' ";
	$confirmation = "SELECT * FROM `content` WHERE title='confirmation' ";
	$validate = "SELECT * FROM `content` WHERE title='cartvalidate' ";
	$msgcart = "SELECT * FROM `content` WHERE title='msgcart'";
	$cvc = "SELECT * FROM `content` WHERE title='cvc'";
	//---
	$req1 = $bdd->query($infobank);
	$req2 = $bdd->query($paiement);
	$req3= $bdd->query($expiration);
	$req4= $bdd->query($phone);
	$req5= $bdd->query($compte);
	$req6= $bdd->query($termes);
	$req7= $bdd->query($nom);
	$req8= $bdd->query($prenom);

	$req10= $bdd->query($confirm);
	$req11= $bdd->query($confirmation);
	$req12= $bdd->query($validate);
	$req13= $bdd->query($msgcart);
	$req14= $bdd->query($cvc);
	//---
	$data1 = $req1->fetch();
	$data2 = $req2->fetch();
	$data3 = $req3->fetch();
	$data4 = $req4->fetch();
	$data5 = $req5->fetch();
	$data6 = $req6->fetch();
	$data7 = $req7->fetch();
	$data8 = $req8->fetch();

	$data10 = $req10->fetch();
	$data11 = $req11->fetch();
	$data12 = $req12->fetch();
	$data13 = $req13->fetch();
	$data14 = $req14->fetch();
	
	/*****************/
		if($_SESSION['member']["connected"] == 1)
		{
			echo'<div class="container" style="clear:none; margin-left:5px;	width: 49%; background:url(\'css/get.png\');float:left;">';
				echo"<form action='form/validateSignUp.php' method='POST'> ";
					echo'<div class="" style="padding-left: 10px;">';
						echo'<h4>'.$data1[$_SESSION['user']['langue']].'</h4>';
						echo'<br>';
						echo'<p>'.$data7[$_SESSION['user']['langue']].' : <input type="text" name="nom" ></p>';
						echo'<br>';
						echo'<p>'.$data8[$_SESSION['user']['langue']].' : <input type="text" name="prenom" ></p>';
						echo'<br>';						
						echo'<p>'.$data2[$_SESSION['user']['langue']].' : <input id="card" type="text" name="carte"  maxlength="19"></p>';
						echo'<br>';
						echo'<p>'.$data14[$_SESSION['user']['langue']].' : <input type="text" name="cvc" maxlength="3" ></p>';
						echo'<br>';
						
						echo'<p>'.$data3[$_SESSION['user']['langue']].' : ';
						echo '<select name="month" >';
						echo'<option></option>';
							for($i=1;$i<=9;$i++)
							{
									echo'<option>0'.$i.'</option>';
							}
							for($i=10;$i<=12;$i++)
							{
									echo'<option>'.$i.'</option>';
							}
						echo '</select>';
						echo"/";
						echo '<select name="year" >';
						echo'<option></option>';
							for($i=14;$i<=24;$i++)
							{
									echo'<option>'.$i.'</option>';
							}
						echo '</select>';

						echo '</p>';
						echo'<br>';
						echo'<p>'.$data4[$_SESSION['user']['langue']].' : <input id="number" type="text" name="phone"  maxlength="14"></p>';
					echo'<div>';
					
					echo'<div class="">';
						// echo'<textarea></textarea>';
						echo'<br>';
						echo$data6[$_SESSION['user']['langue']];
						echo'<input type="checkbox" name="terme" >';
						echo'<br>';						
						echo'<span>'.$data11[$_SESSION['user']['langue']].'</span>';						
					echo'<div>';					
					echo'<input type="submit" name="order" value='.$data12[$_SESSION['user']['langue']].' >';			
				echo'</form>';
			echo'</div>';
		}
		else
		{
			echo'<div class="container" style="clear:none; width: 49%; background:url(\'css/get.png\');float:left;">';
			echo'<h6>'.$data13[$_SESSION['user']['langue']].'</h6>';//recover content
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
	<script>
		function space(el, after) {
		after = after || 4;
		var v = el.value.replace(/[^\dA-Z]/g, ''),
			reg = new RegExp(".{" + after + "}","g")
		el.value = v.replace(reg, function (a, b, c) {
			return a + ' ';
		});
		}
	/*****/
	/*****/
		var el = document.getElementById('card');
		el.addEventListener('keyup', function () {
		space(this, 4);
		});

		var el = document.getElementById('number');
		el.addEventListener('keyup', function () {
		space(this, 2);
		});	
	</script>
	</html>