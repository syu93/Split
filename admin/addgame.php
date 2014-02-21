<!DOCTYPE html>
<html>
<?php
require_once'../form/init.php';
require_once'header.php';
?>
<?php
if(isset($_POST['submitContent']))
{
/*
 *	Recovery and Scripture in the DB
 */
	$gamePosition = $_POST['gamePosition'];
	
	$gameTag = $_POST['gameTag'];
	// echo$gameTag;
	
	$gameTitle = $_POST['gameTitle'];
	// echo$gameTitle;
	
	$gameTextFr = $_POST['gameTextFr'];
	// echo$gameText;

	$gameTextEn = $_POST['gameTextEn'];
	
	$gameTextlongueFr = $_POST['gameTextlongueFr'];
	// echo$gameText;

	$gameTextlongueEn = $_POST['gameTextlongueEn'];
	// echo$gameText;
	
	$connected = $_POST['connected'];
	// echo$connected;
	
	$gamePrice = $_POST['gamePrice'];
	
	$gameGenre = $_POST['gameGenre'];
	
	$gameactive = $_POST['gameactive'];
	// echo$gameactive;
	
	$gameImg = $_FILES['gameImg']['name'];
	
	// var_dump($_FILES['gameImg']);
	$pth=NULL;
	uploadgameimg($pth, $gameImg, $gameTitle);
	echo$pth;
	
	$req = $bdd->prepare('INSERT INTO game(url,price,genre,textlongue_fr,textlongue_en,tag, title, text_fr, text_en, position,connected, active)VALUES(:pth, :gameGenre,:gamePrice,:gameTextlongueFr,:gameTextlongueEn,:gameTag,:gameTitle,:gameTextFr,:gameTextEn,:gamePosition,:connected,:gameactive)');
	$req->execute(array(
	':gamePosition'=> $gamePosition,
	':gameTag'=> $gameTag,
	':gameTitle'=> $gameTitle,
	':gameTextFr'=> $gameTextFr,
	':gameTextEn'=> $gameTextEn,
	':gameTextlongueFr'=> $gameTextlongueFr,
	':gameTextlongueEn'=> $gameTextlongueEn,
	':connected'=> $connected,
	':gamePrice'=> $gamePrice,
	':gameGenre'=> $gameGenre,
	':gameactive'=> $gameactive,
	':pth'=> $pth,
	));
	
/*
 *	Recovery and Scripture in the DB
 */
}
?>
				<div class="addContent module">
					<h1>Ajout d'un jeu</h1>
					<br>
					<form method="post" action="addgame.php" enctype="multipart/form-data">
					<p>
						<span>Position du jeu</span>
						<br>
					<select name="gamePosition">								
							<?php for($i=0 ; $i<=10 ; $i++)
								{?>
									<option><?php echo $i; ?></option>
							<?php
								}?>
					</select>
					</p>
					<p>
						<span>Tag du jeu</span>	<br>	
						<select name="gameTag">
							<option>game</option>
							<option>menu</option>							
							<option>text</option>
						</select>
					</p>
					<p>
						<span>Ttire du jeu</span>	<br>	<textarea class="contentText" name="gameTitle"></textarea>
					</p>
					<br>
					<p>
						<span>Text court Francais</span>	<br>	<textarea class="contentText" name="gameTextFr"></textarea>
					<br>	
						<span>Text court English</span>	<br>	<textarea class="contentText" name="gameTextEn"></textarea>
					</p>
					<br>
					<p>
						<span>Text long Francais</span>	<br>	<textarea class="contentText" name="gameTextlongueFr"></textarea>
					<br>	
						<span>Text long English</span>	<br>	<textarea class="contentText" name="gameTextlongueEn"></textarea>
					</p>
					<p>
						<span>connected</span>	<br>
						<select name="connected">
							<option>yes</option>
							<option>no</option>
						</select>
					</p>
					
					<p>
					<span>Prix du jeu</span>	<br>	<textarea class="" name="gamePrice"></textarea>
					</p>
					
					<p>
					<span>Image</span>	<br>	<input type="file" class="" name="gameImg">
				
					</p>
					
					<br>
					<p>
					<span>Type de jeu</span>
						<select name="gameGenre">
							<option>action</option>
							<option>aventure</option>
							<option>strategie</option>
							<option>RPG</option>
							<option>MMO</option>
						</select>
					</p>
					
					<p>
					<span>Afficher ce jeu</span>
						<select name="gameactive">
							<option>yes</option>
							<option>no</option>
						</select>
					</p>
					<br>
							<input type="submit" value="Submit" name="submitContent"/>
					</form>
				</div>
				</div><br clear="both">
			</div>
		</div>
	</body>
</html>