<!DOCTYPE html>
<html>
<?php
require_once'../form/init.php';
require_once'header.php';
?>

<div class="addContent module">
	<h1>Modification d'un contenu</h1>
	<br>
	<form method="post" action="updategame.php">
		<h2>Choisisez le module a modifier</h2>
		<span>Tout les modules</span>
			<select name="SelectModule">
				<option></option>
				<?php
				//	Recovevy of the content list
				$optContent = $bdd->query('SELECT * FROM game');
				while ($opt = $optContent->fetch())
				{
				?>
					<option><?php echo $opt['title']; ?></option>
				<?php
				}
				?>
			</select>
		<input type="submit" value="Modify" name="submitSelectModule"/>
	</form>

	<?php
	// Recovery of the selected module (by module name or page)
	$SelectModule=NULL;
	$SelectPage=NULL;
	if(isset($_POST['submitSelectModule'])) // If the choice of module is sent
	{
		if(!empty($_POST['SelectModule'])) //	if the select module is not empty
		{
			$SelectModule=$_POST['SelectModule'];
		}
	}
	?>

	<?php
	/* Module */
	//	Verification of the SQL request to execute
		//	If the variable SelectModule is not empty --> Recovery of the module by its name
	if(!empty($_POST['SelectModule']))	
	{
		$req = $bdd->prepare('SELECT * FROM game WHERE title=?');
		$req->execute(array($SelectModule,));
		/*Recovery*/
		while ($donnees = $req->fetch())
		{
		?>
		<form method="post" action="updategame.php" enctype="multipart/form-data">
		<br>
		<h2>Position actuel</h2>
			<p>
				<?php echo'<input name="contentid" type="hidden" value="'.$donnees['id'].'"/>'?>
				<textarea class="contentActPos" readonly><?php echo $donnees['position']; ?></textarea>				
				<br>
				<br>
		<h2>Position du contenu</h2>
				<br>
				<select name="contentPosition">								
						<?php for($i=0 ; $i<=10 ; $i++)
							{?>
								<option><?php echo $i; ?></option>
						<?php
							}?>

				</select>
			</p>
		<br>
		<p>
			<h2>Tag</h2>	<br>	<textarea class="contentTitle" name="contentTag"><?php echo $donnees['tag']; ?></textarea>
		</p>
		
		<p>
			<h2>Ttire du contenu</h2>	<br>	<textarea class="contentTitle" name="contentTitle"><?php echo $donnees['title']; ?></textarea>
		</p>
		<br>
		<p>
			<h2>Contenu fr</h2>	<br>	<textarea class="contentText" name="contentTextFr"><?php echo $donnees['text_fr']; ?></textarea>
			<h2>Contenu en</h2>	<br>	<textarea class="contentText" name="contentTextEn"><?php echo $donnees['text_en']; ?></textarea>

			<h2>Contenu Long fr</h2>	<br>	<textarea class="contentText" name="gameTextlongueFr"><?php echo $donnees['textlongue_fr']; ?></textarea>
			<h2>Contenu Long en</h2>	<br>	<textarea class="contentText" name="gameTextlongueEn"><?php echo $donnees['textlongue_en']; ?></textarea>
		</p>
		<br>
		<p>
			<span>Prix du jeu</span>	<br>	<textarea class="" name="gamePrice"><?php echo $donnees['price']; ?></textarea>
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
			<h2>Connected</h2>
			<select name="connected">
				<option>no</option>
				<option>yes</option>
			</select>
			</p>
			<br>
			<p>
			<span>Afficher ce contenu</span>
			<span>Afficher : </span>
			<?php echo'<input class="inputtext" type="text" value="'.$donnees['active'].'" readonly/>';?>
			<br>
			<select name="contentactive">
				<option>yes</option>
				<option>no</option>
			</select>
			</p>
			<br>
			<input type="submit" value="Submit" name="submitContentModify"/>
		</form>
		<br>
		<hr>
		<br>
		<?php
		}
	}
	/*Recovery*/
	/* Module */
	?>
	
	<?php
	// SQL Updating
	if(isset($_POST['submitContentModify']))
	{
		$contentTitle = $_POST['contentTitle'];
		$contentTextFr = $_POST['contentTextFr'];
		$contentTextEn = $_POST['contentTextEn'];
		$gameTextlongueFr = $_POST['gameTextlongueFr'];
		$gameTextlongueEn = $_POST['gameTextlongueEn'];
		$contentPosition = $_POST['contentPosition'];
		
		$price = $_POST['gamePrice'];
		$gameImg = $_FILES['gameImg']['name'];
		
		$pth = uploadgameimg($gameImg, $contentTitle);
		
		$gameGenre = $_POST['gameGenre'];
		
		$connected =$_POST['connected'];
		$contentactive =$_POST['contentactive'];
		$contentid=$_POST['contentid'];

		$req = $bdd->prepare('UPDATE game SET url=:url, price=:price, genre=:gameGenre,  title=:contentTitle, text_fr=:contentTextFr, text_en=:contentTextEn,textlongue_fr=:gameTextlongueFr, textlongue_en=:gameTextlongueEn, position=:contentPosition,connected=:connected,active=:contentactive WHERE id=:contentid');
		$req->execute(array(
		':contentTitle'=> $contentTitle,
		':contentid'=> $contentid,
		':contentTextFr'=> $contentTextFr,
		':contentTextEn'=> $contentTextEn,
		':gameTextlongueFr'=> $gameTextlongueFr,
		':gameTextlongueEn'=> $gameTextlongueEn,
		':contentPosition'=> $contentPosition,
		':connected'=> $connected,
		':contentactive'=> $contentactive,
		':price'=> $price,
		':gameGenre'=> $gameGenre,
		':url'=> $pth,
		));	
	}
	?>
</div>
<br clear="both">
</div>
</div>
</body>
</html>