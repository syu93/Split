 <?php
	require_once("bdd/bddconnect.php");
	require_once("form/init.php");
	$game = null;
	
	$editor="SELECT * FROM content WHERE title='editor' ";
	$price="SELECT * FROM content WHERE title='price' ";
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
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/devise/css/devise.css">
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/trash/css/trash.css">
		
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/scrollbar/jquery.mCustomScrollbar.css">
		
		<script src="http://127.0.0.1/split/js/jquery-1.11.0.min.js"></script>
		<script src="http://127.0.0.1/split/js/signup_submit.js"></script>
		<script src="http://127.0.0.1/split/js/overContainer.js"></script>
		<style>
		.mCSB_container
		{
		margin-right:17px;
		}
		</style>
		
	</head>
	<body class="mycart_wrapper">
		<div id="scroll_b" class="scroll_b" >
			<div class="cart_body" style="width:400px">
			<?php
				$i=0;
				foreach( $_SESSION['user']['cart']['game']as$game):
				
					$g=trim($game," \t\n\r\0\x0B"); //delete the space around the variable
					$gm ="'".preg_quote($g,"'" )."'"; // Escape the singles quotes
					/********************************************************************************/
					$incart="SELECT * FROM game WHERE game.text_fr=".$gm." ";
					$cartinfo="SELECT editor.text_fr, editor.text_en FROM game, editor WHERE game.text_fr=".$gm." AND game.ideditor=editor.name";
					// echo $incart;
					$cartitem1 = $bdd->query($incart);
					$cartinfo = $bdd->query($cartinfo);
					$cartitem2 = $bdd->query($editor);
					$cartitem3 = $bdd->query($price);
					
					$donnees1 = $cartitem1->fetch();
					$info = $cartinfo->fetch();
					$donnees2 = $cartitem2->fetch();
					$donnees3 = $cartitem3->fetch();
					/********************************************************************************/
					echo"<div id='mycartItem' class='cart_item'>";
							echo"<span id='sum' data=".$_SESSION['user']['cart']['nb_cart']."></span>";
							echo "<a href='#'><img src=".$donnees1["url"]."></a>";
							echo "<H6>".$donnees1[$_SESSION['user']['langue']]."</H6>";
							echo "<p style='font-size:12px'>".$donnees2[$_SESSION['user']['langue']]." : ".$info[$_SESSION['user']['langue']]."</p>";
							echo "<p style='font-size:12px'>".$donnees3[$_SESSION['user']['langue']]." :</span><span class='".devise(); echo "' style='font-size:12px'>".$donnees1["price"]."</p>" ;
							echo"<span id='trash".$i."' class='c_trash icon-trash-2' data=".$i."></span>";
						echo"</div>";
				$i++;
				endforeach;?>
			</div>
		</div>

	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#scroll_b").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
	</body>

</html>