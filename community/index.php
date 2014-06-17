<?php
	require_once("header.php");
	require_once("../form/init.php");
	require_once("../form/req.php");
	
	/*****************************/
	/*****************************/
	// debug($_SESSION);
	// session_start();
	$community = "SELECT * FROM `content` WHERE title='community' ";
	$event = "SELECT * FROM `content` WHERE title='event' ";
	$forum = "SELECT * FROM `content` WHERE title='forum' ";
	
	$partnership = "SELECT * FROM `content` WHERE title='partnership' ";
	$name = "SELECT * FROM `content` WHERE title='nom' ";
	$email = "SELECT * FROM `content` WHERE title='email' ";
	$password = "SELECT * FROM `content` WHERE title='password' ";
	$date = "SELECT * FROM `content` WHERE title='date' ";
	$signup = "SELECT * FROM `content` WHERE title='sign' ";
	$login = "SELECT * FROM `content` WHERE title='login' ";
	$submit = "SELECT * FROM `content` WHERE title='submit' ";
	$deco="SELECT text_fr, text_en FROM content WHERE title='logoff'";
	$subject="SELECT text_fr, text_en FROM content WHERE title='subject'";
	//-----
	$req01 = $bdd->query($community);
	$req02 = $bdd->query($event);
	$req03 = $bdd->query($forum);
	
	$req1 = $bdd->query($partnership);
	$req2 = $bdd->query($name);
	$req3 = $bdd->query($email);
	$req4 = $bdd->query($password);
	$req5 = $bdd->query($date);
	$req6 = $bdd->query($signup);
	$req7 = $bdd->query($login);
	$req8 = $bdd->query($submit);
	$req9 = $bdd->query($deco);
	$req10 = $bdd->query($subject);
	//-----
	$dat01 = $req01->fetch();
	$dat02 = $req02->fetch();
	$dat03 = $req03->fetch();
	
	$dat1 = $req1->fetch();
	$dat2 = $req2->fetch();
	$dat3 = $req3->fetch();
	$dat4 = $req4->fetch();
	$dat5 = $req5->fetch();
	$dat6 = $req6->fetch();
	$dat7 = $req7->fetch();
	$dat8 = $req8->fetch();
	$dat9 = $req9->fetch();
	$dat10 = $req10->fetch();
	
?>
	<div class="container">
	<?php
	if(isset($_POST['submit']))
	{
		$thrd = addslashes ($_POST['thread']);
		$msg = addslashes ($_POST['message']);
		$q_new_post = "INSERT INTO forum (forum, thread, user, message) VALUES('".$_POST['forum']."', '".$thrd."', '".$_SESSION['member']['mail']."', '".$msg."')";
		// echo $thrd;
		// echo $msg;
		// echo $q_new_post;
		$new_post = $bdd->query($q_new_post);
	}
	
	if(isset($_GET['page'])){
		if($_GET['page']=='partenariat')
		{
		$forum = "partner";
			if($_SESSION['partner']['connected'] == 1)
			{				
				echo '<span style="float:right; background:#3D3D3D; line-height:22px;padding:3px; color:#ccc; margin-bottom:10px;">'.$_SESSION['partner']['name'].' <a href="../form/validateSignUp.php?partnerlogoff=true">('.$dat9[$_SESSION['user']['langue']].')</a></span>';
				
				$r_partner = $bdd->query('SELECT * FROM forum WHERE forum = "'.$forum.'" ORDER BY date DESC');
	?>
				<div class="article connect" style="width:100%; height:auto; text-align:left; box-shadow:none;  padding-bottom:0;">
				<div class="bandeau"><?php echo $dat1[$_SESSION['user']['langue']]; ?></div>
				<?php
					while($f_partner = $r_partner->fetch())
					{
					$thread = $f_partner['thread'];
					//----
					$author = $f_partner['user'];
					$a_member = $bdd->query('SELECT * FROM member WHERE email = "'.$author.'" ');
					$rep_member = $a_member->fetch();
				?>
					<div class="forum">
						<div class="forum_inf">
							<img style="width: 140px; height: 70px;" src='../<?php echo $rep_member['avatar']; ?>'/>
							<br>
							<span style="margin-left:3px;"><?php echo $rep_member['pseudo']; ?></span>
							<br>
							<span style="margin-left:3px;"><?php echo $f_partner['date']; ?></span>
						</div >
						
						<div class="forum_msg" style="float:left;">
							<span><span style="text-decoration:underline;"><?php echo $dat10[$_SESSION['user']['langue']]; ?></span> : <a style="font-size:16px; color:#444;" href=""><?php echo $f_partner['thread']; ?></a></span>
							<p><?php echo $f_partner['message']; ?></p>
						</div>
					</div>
				<?php
					}
				?>
				</div>
				<?php				
			}
			else
			{
	?>	
		<div class="article connect" style="width:100%; height:240px; text-align:left;padding-bottom:0;">
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
			}
		}
		else if($_GET['page']=='event')
		{
			$forum = "event";
			$r_forum = $bdd->query('SELECT * FROM forum WHERE forum = "'.$forum.'" ORDER BY date DESC');
		?>
			<div class="article connect" style="width:100%; height:auto; text-align:left; box-shadow:none;padding-bottom:0;">
			<div class="bandeau"><?php echo $dat02[$_SESSION['user']['langue']]; ?></div>
		<?php
			while($f_forum = $r_forum->fetch())
			{
			$thread = $f_forum['thread'];
			//----
			$author = $f_forum['user'];
			$a_member = $bdd->query('SELECT * FROM member WHERE email = "'.$author.'" ');
			$rep_member = $a_member->fetch();
			?>
				<div class="forum">
					<div class="forum_inf">
						<img style="width: 140px; height: 70px;" src='../<?php echo $rep_member['avatar']; ?>'/>
						<br>
						<span style="margin-left:3px;"><?php echo $rep_member['pseudo']; ?></span>
						<br>
						<span style="margin-left:3px;"><?php echo $f_forum['date']; ?></span>
					</div>
					
					<div class="forum_msg" style="float:left;">
						<span><span style="text-decoration:underline;"><?php echo $dat10[$_SESSION['user']['langue']]; ?></span> : <a style="font-size:16px; color:#444;" href=""><?php echo $f_forum['thread']; ?></a></span>
						<p><?php echo $f_forum['message']; ?></p>
					</div>
				</div>
			<?php
			}
			?>
			</div>
		<?php
		}
		
		else if($_GET['page']=='forum')
		{
			$forum = "forum";
			$r_forum = $bdd->query('SELECT * FROM forum WHERE forum = "'.$forum.'" ORDER BY date DESC');
		?>
			<div class="article connect" style="width:100%; height:auto; text-align:left; box-shadow:none;padding-bottom:0;">
			<div class="bandeau"><?php echo $dat03[$_SESSION['user']['langue']]; ?></div>
		<?php
			while($f_forum = $r_forum->fetch())
			{
			$thread = $f_forum['thread'];
			//----
			$author = $f_forum['user'];
			$a_member = $bdd->query('SELECT * FROM member WHERE email = "'.$author.'" ');
			$rep_member = $a_member->fetch();
			?>
				<div class="forum">
					<div class="forum_inf">
						<img style="width: 140px; height: 70px;" src='../<?php echo $rep_member['avatar']; ?>'/>
						<br>
						<span style="margin-left:3px;"><?php echo $rep_member['pseudo']; ?></span>
						<br>
						<span style="margin-left:3px;"><?php echo $f_forum['date']; ?></span>
					</div>
					
					<div class="forum_msg" style="float:left;">
						<span><span style="text-decoration:underline;"><?php echo $dat10[$_SESSION['user']['langue']]; ?></span> : <a style="font-size:16px; color:#444;" href=""><?php echo $f_forum['thread']; ?></a></span>
						<p><?php echo $f_forum['message']; ?></p>
					</div>
				</div>
			<?php
			}
			?>				
			</div>
		<?php
		}
	}
	else
	{
	?>
		
		<div class="article connect" style="width:100%; height:auto; text-align:left; box-shadow:none;padding-bottom:0;">
		<div class="bandeau"><?php echo $dat01[$_SESSION['user']['langue']]; ?></div>
		<?php
			$r_forum = $bdd->query('SELECT * FROM forum ORDER BY date DESC');
			while($f_forum = $r_forum->fetch())
			{
			$thread = $f_forum['thread'];
			//----
			$author = $f_forum['user'];
			$a_member = $bdd->query('SELECT * FROM member WHERE email = "'.$author.'" ');
			$rep_member = $a_member->fetch();
			?>
				<div class="forum">
					<div class="forum_inf">
						<img style="width: 140px; height: 70px;" src='../<?php echo $rep_member['avatar']; ?>'/>
						<br>
						<span style="margin-left:3px;"><?php echo $rep_member['pseudo']; ?></span>
						<br>
						<span style="margin-left:3px;"><?php echo $f_forum['date']; ?></span>
					</div>
					
					<div class="forum_msg"style="float:left;">
						<span><span style="text-decoration:underline;"><?php echo $dat10[$_SESSION['user']['langue']]; ?></span> : <a style="font-size:16px; color:#444;" href=""><?php echo $f_forum['thread']; ?></a></span>
						<p><?php echo $f_forum['message']; ?></p>
					</div>
				</div>
			<?php
			}
			?>		
		</div>
	</div>
<?php
	}
		if($_SESSION['member']['connected'] == 1)
		{
?>
					<div class="forum_respond">
						<form method="post" id="respond_form" action="<?php echo$_SESSION['user']['location'];?>" class="OCoff">
							<span><a href=""><?php echo $thread; ?></a></span>
							<input type="hidden" name="forum" value="<?php echo $forum; ?>">
							<input type="hidden" name="thread" value="<?php echo $thread; ?>">
							<textarea name="message" style="width:890px; height:200px;"></textarea>
							<input id="respond_sub" style="float:none;" type="submit" name="submit" value="<?php echo $dat8[$_SESSION['user']['langue']];?>">
						</form>

						<form method="post" id="new_form" action="<?php echo$_SESSION['user']['location'];?>" class="OCoff">
							<input type="hidden" name="forum" value="<?php echo $forum; ?>">
							<textarea style="float:none; width:500px; height:25px;" id="thread" type="text" name="thread"></textarea>
							<textarea name="message" style="width:890px; height:200px;"></textarea>
							<input id="new_sub" style="float:none;" type="submit" name="submit" value="<?php echo $dat8[$_SESSION['user']['langue']];?>">
						</form>
						<a id="responce" href="">Repondre</a>, <a id="new_msg" href="">nouveau message</a>
					</div>
<?php
		}
	require_once("../include/footer.php");
?>