<?php
	require_once("header.php");
	require_once("../form/init.php");
	require_once("../form/req.php");
	
	/*****************************/
	/*****************************/
	// debug($_SESSION);
	
	$partnership = "SELECT * FROM `content` WHERE title='partnership' ";
	$name = "SELECT * FROM `content` WHERE title='nom' ";
	$email = "SELECT * FROM `content` WHERE title='email' ";
	$password = "SELECT * FROM `content` WHERE title='password' ";
	$date = "SELECT * FROM `content` WHERE title='date' ";
	$signup = "SELECT * FROM `content` WHERE title='sign' ";
	$login = "SELECT * FROM `content` WHERE title='login' ";
	$submit = "SELECT * FROM `content` WHERE title='submit' ";
	$deco="SELECT text_fr, text_en FROM content WHERE title='logoff'";
	//-----
	$req1 = $bdd->query($partnership);
	$req2 = $bdd->query($name);
	$req3 = $bdd->query($email);
	$req4 = $bdd->query($password);
	$req5 = $bdd->query($date);
	$req6 = $bdd->query($signup);
	$req7 = $bdd->query($login);
	$req8 = $bdd->query($submit);
	$req9 = $bdd->query($deco);
	//-----
	$dat1 = $req1->fetch();
	$dat2 = $req2->fetch();
	$dat3 = $req3->fetch();
	$dat4 = $req4->fetch();
	$dat5 = $req5->fetch();
	$dat6 = $req6->fetch();
	$dat7 = $req7->fetch();
	$dat8 = $req8->fetch();
	$dat9 = $req9->fetch();
	
?>
	<div class="container">
	<?php
	if(isset($_GET['page'])){
		if($_GET['page']=='partenariat')
		{
			if($_SESSION['partner']['connected'] == 1)
			{				
				echo '<span style="float:right; background:#3D3D3D; line-height:22px;padding:3px; color:#ccc; margin-bottom:10px;">'.$_SESSION['partner']['name'].' <a href="../form/validateSignUp.php?partnerlogoff=true">('.$dat9[$_SESSION['user']['langue']].')</a></span>';
				?>
				<div class="article connect" style="width:100%; height:240px; text-align:left;">
				<div class="bandeau"><?php echo $dat1[$_SESSION['user']['langue']]; ?></div>
				<div>
				<?php				
			}
			else
			{
	?>	
		<div class="article connect" style="width:100%; height:240px; text-align:left;">
			<div class="bandeau"><?php echo $dat1[$_SESSION['user']['langue']]; ?></div>
				<div style="padding:10px;">
					<div style="float:left; width:430px; margin-right:0px;">
					<p><?php echo $dat6[$_SESSION['user']['langue']]; ?></p><br>
						<form id="formPartSI" action="http://127.0.0.1/split/form/validateSignUp.php" method="POST">
						
							<div class="element">
								<label for="name"><?php echo $dat2[$_SESSION['user']['langue']]?> : </label>
								<span id="ckpseudoPart" class="checkOk"></span>
							</div>								
							<div class="input">
								<input type="text" id="partName1" name="partName1" required>
							</div>
							
							<div class="element">
								<label for="partMail1"><?php echo $dat3[$_SESSION['user']['langue']]?> : </label>
								<span id="ckmailPart" class="checkOk"></span>
							</div>								
							<div class="input">
								<input type="email" id="partMail1" name="partMail1" required>
							</div>
							
							<div class="element">
								<label for="partPsw1"><?php echo $dat4[$_SESSION['user']['langue']]?> : </label>
							</div>								
							<div class="input">
								<input type="password" id="partPsw1" name="password" required>
							</div>
							<br>
							<br>
							<div>
								<input id="sign_part" type="submit" value='<?php echo $dat8[$_SESSION['user']['langue']]?>' name="sign_part">
							</div>
						</form>
					</div>
					
					<div style="float:left; width: 430px;">
					<p><?php echo $dat7[$_SESSION['user']['langue']]; ?></p><br>
						<form id="formPartLi" action="http://127.0.0.1/split/form/validateSignUp.php" method="POST" name="formPartLi">
						
							<div class="element">
								<label for="mailP1"><?php echo $dat3[$_SESSION['user']['langue']]?> : </label>
							</div>
							<div class="input">
								<input type="text" id="mailP1" name="mailP1">
							</div>
							
							<div class="element">
								<label for="passwordP1"><?php echo $dat4[$_SESSION['user']['langue']]?> : </label>
							</div>
							<div class="input">
								<input type="password" id="passwordP1" name="passwordP1">
							</div>
							
							<br>
							<br>
							
							<div>
								<input id="log_part" type="submit" value='<?php echo $dat8[$_SESSION['user']['langue']]?>' name="log_part">
								<span id="cksubP1" class="checkOk"></span>
							</div>
							
						</form>
					</div>
				</div>
		</div>
	<?php
		}}}
	?>
	</div>
<?php
	require_once("../include/footer.php");
?>