<?php
	require_once("header.php");
	require_once("../form/init.php");
	require_once("../form/req.php");
	
	/*****************************/
	/*****************************/
	
	$partnership = "SELECT * FROM `content` WHERE title='partnership' ";
	$name = "SELECT * FROM `content` WHERE title='nom' ";
	$email = "SELECT * FROM `content` WHERE title='email' ";
	$password = "SELECT * FROM `content` WHERE title='password' ";
	$date = "SELECT * FROM `content` WHERE title='date' ";
	$signup = "SELECT * FROM `content` WHERE title='sign' ";
	$login = "SELECT * FROM `content` WHERE title='login' ";
	$submit = "SELECT * FROM `content` WHERE title='submit' ";
	//-----
	$req1 = $bdd->query($partnership);
	$req2 = $bdd->query($name);
	$req3 = $bdd->query($email);
	$req4 = $bdd->query($password);
	$req5 = $bdd->query($date);
	$req6 = $bdd->query($signup);
	$req7 = $bdd->query($login);
	$req8 = $bdd->query($submit);
	//-----
	$dat1 = $req1->fetch();
	$dat2 = $req2->fetch();
	$dat3 = $req3->fetch();
	$dat4 = $req4->fetch();
	$dat5 = $req5->fetch();
	$dat6 = $req6->fetch();
	$dat7 = $req7->fetch();
	$dat8 = $req8->fetch();
	
?>
	<div class="container">
	<?php 
	if(isset($_GET['page'])){
		if($_GET['page']=='partenariat')
		{
	?>
			<div class="article" style="width:100%; height:240px; text-align:left;">
				<div class="bandeau"><?php echo $dat1[$_SESSION['user']['langue']]; ?></div>
					<div style="padding:10px;">
						<div style="float:left";>
						<p><?php echo $dat6[$_SESSION['user']['langue']]; ?></p>
							<form action="http://127.0.0.1/split/form/validateSignUp.php" method="POST">
								<p><label style="float:left" for="name"><?php echo $dat2[$_SESSION['user']['langue']]?> : </label>
									<input type="text" id="name" name="name" style="float:none;">
								</p>
								<p><label style="float:left" for="email"><?php echo $dat3[$_SESSION['user']['langue']]?> : </label>
									<input type="text" id="email" name="email" style="float:none;">
								</p>
								<p><label style="float:left" for="pswd"><?php echo $dat4[$_SESSION['user']['langue']]?> : </label>
									<input type="password" id="pswd" name="password" style="float:none;">
								</p>
								<p><label style="float:left" for=""><?php echo $dat2[$_SESSION['user']['langue']]?> : </label>
									<input type="file" id="name" name="avatar" style="float:none;">
								</p>
								<br>
								<p>
									<input style="float:left" type="submit" value='<?php echo $dat8[$_SESSION['user']['langue']]?>' name="sign_part">
								</p>
							</form>
						</div>
						
						<div style="float:left;">
						<p><?php echo $dat7[$_SESSION['user']['langue']]; ?></p>
							<form action="http://127.0.0.1/split/form/validateSignUp.php" method="POST">
								<p><label style="float:left" for="email"><?php echo $dat3[$_SESSION['user']['langue']]?> : </label>
									<input type="text" id="email" name="email" style="float:none;">
								</p>
								<p><label style="float:left" for="pswd"><?php echo $dat4[$_SESSION['user']['langue']]?> : </label>
									<input type="password" id="pswd" name="password" style="float:none;">
								</p>
								<br>
								<p>
									<input style="float:left" type="submit" value='<?php echo $dat8[$_SESSION['user']['langue']]?>' name="log_part">
								</p>
							</form>
						</div>
					</div>
				</div>
	<?php
		}}
	?>
	</div>
<?php
	require_once("../include/footer.php");
?>