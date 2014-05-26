 <?php
	require_once("../bdd/bddconnect.php");
	require_once("../form/init.php");
	session_start();
	$connected = ifconnected();
	$pseudo = $_SESSION['member']['pseudo'];
	$logoff="true";
	require_once("../form/req.php");
	/********************************************************/

	// debug($_SESSION);
	// unset($_SESSION['user']['cart']['game'][0]);
	// echo $_SESSION['user']['cart']['game'][0];
	/********************************************************/
	
 ?>
 <!DOCTYPE html>
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
		
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/scrollbar/jquery.mCustomScrollbar.css">
		
		<script src="http://127.0.0.1/split/js/jquery-1.11.0.min.js"></script>
		<script src="http://127.0.0.1/split/js/signup_submit.js"></script>
		<script src="http://127.0.0.1/split/js/overContainer.js"></script>
		
		<script src="../js/validate.js"></script>
		<title>Split</title>
	</head>
	<body>
	<div id="body">
		<div class="over-wrapper">
			<div id="panAcount">			
				<nav class="menu1">
					<ul class="level1">
	<?php
	$library = $bdd->query($lib);
	// var_dump($pseudo);
	// var_dump($lib);
	while ($donnees = $library->fetch()) { ?>
						<li><a class="signIn" herf="#"><?php echo $donnees[$_SESSION['user']['langue']];?></a>
	<?php }	?>
							<ul class="level2">
								
	<?php
	$gmelib = $gmelib.' AND licence.member="'.$_SESSION["member"]['mail'].'" ';
	$game = $bdd->query($gmelib);
	while ($donnees = $game->fetch()) {	?>
								<li class="myGame">
									<span class="g-img">
										<img src="../<?php echo$donnees["url"];?>"/>
									</span>
									<span class="g-desc">
										<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>								
									</span>
		<?php	$play = $bdd->query($ply);
		while ($donnees = $play->fetch()) {	?>
									<ul class="level3">
										<li>
											<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>
		<?php }	?>
										</li>
									</ul>
								</li>
	<?php } ?>
							</ul>
						</li>
					</ul>
				</nav>
					<form method="POST" action="../form/validateSignUp.php" id="formLang">
					<select id="langue" name="langue" class="language">
					<?php
						if($_SESSION['user']['langue'] == "text_fr" || $_SESSION['user']['langue'] == Null)
						{
							echo "<option>Francais</option>";
							echo"<option>English</option>";
						}
						else if($_SESSION['user']['langue'] == "text_en")
						{
							echo"<option>English</option>";
							echo "<option>Francais</option>";
						}
					?>
					</select>
				</form>
	<?php
		$deco = $bdd->query($deco); 
		$donnees = $deco->fetch();		
	?>
	<span class="logoff"><?php echo("<a href='../form/validateSignUp.php?logoff=".$logoff." '>".$donnees[$_SESSION['user']['langue']]."</a>"); ?></span>
		
	<?php	$signup = $bdd->query($sign);
	$donnees = $signup->fetch();
	if($_SESSION['member']['connected']==1){$idt=""; $class="profil";}else{$idt="signIn"; $class="OCoff";}
	?>		
		<span id="<?php echo $idt; ?>" class="signIn">
			<?php echo$donnees[$_SESSION['user']['langue']]; ?>
			<a href="user/user.php?=<?php echo $pseudo["pseudo"]; ?> "><?php echo $pseudo["pseudo"]; ?></a>
			<div class="<?php echo $class; ?>">
				<?php	
					$avt = $bdd->query($profil);
					$avat = $avt->fetch();
					echo"<a href='user/user.php'><img src='../".$avat['avatar']."'/>";
				?>
				<?php
					echo $pseudo['pseudo']."</a>";
				?>	
			</div>					
		</span>

			</div>
			<div class="float-container">

			</div>
			</div>

			<div class="element-container">
				<nav class="menu2 element-container">					
					<ul class="level1">
						<span><a id="logo" href="../index.php"><img  src="../img/SPLIT_LOGO.PNG"></a></span>						
						<?php $reponse = $bdd->query($menu2_user);
						while ($donnees = $reponse->fetch()) {	?>						
							<li><a href="game.php?genre=<?php echo $donnees['title'];?>"> <?php echo $donnees[$_SESSION['user']['langue']]; ?> </a></li>
						<?php }
						
						$cart = $bdd->query($cart);
						while ($donnees = $cart->fetch()) { ?>												
							<li class="cart">
							<i id="nb_cart" class="nb_cart icon-basket" ><?php echo cart_count();?></i>
							<a href="page_cart.php"><?php echo $donnees[$_SESSION['user']['langue']]; ?></a>
							<?php require_once("../include/cart.php");?>						
						</li>
						<?php } ?>
					</ul>
				</nav>