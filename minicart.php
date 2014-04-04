 <?php
	require_once("bdd/bddconnect.php");
	require_once("form/init.php");
	$game = null;
	$cart="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
	session_start();
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/style.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/com-center.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/footer.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/menu.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/article.css">
		
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/validate.css">
		
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/fontello/css/fontello.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/fontello-back/css/back.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/icone/css/icone.css">
	</head>
	<body class="mycart_wrapper">
		<div class="cart_body">
			<div class="cart_head">
				<h4><?php $mycart = $bdd->query($cart); $donnees = $mycart->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?></h4>
			</div>
			<hr>
		<?php
			foreach( $_SESSION['user']['cart']['game']as$game):
				$g=trim($game," \t\n\r\0\x0B"); //delete the space around the variable
				$incart="SELECT * FROM game WHERE text_fr='".$g."' ";
				$cartitem = $bdd->query($incart);
				$donnees = $cartitem->fetch();
					echo"<div id='mycartItem' class='cart_item'>";
							echo "<a href='#'><img src=".$donnees["url"]."></a>";
							echo "<p class=''>".$donnees[$_SESSION['user']['langue']]."</p>";
							echo "<p class='".devise(); echo "'>".$donnees["price"]."</p>" ;
							echo"<br>";				
					echo"</div>";
			endforeach;
		echo"<hr>";	
		echo"<span>Totale :".$donnees["price"]."</span>";
		?>
		</div>
	</body>
</html>