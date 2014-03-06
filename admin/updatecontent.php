<!DOCTYPE html>
<html>
<?php
require_once'header.php';
?>

<div class="addContent module">
	<h1>Modification d'un contenu</h1>
	<br>
	<form method="post" action="updatecontent.php">
		<h2>Choisisez le module a modifier</h2>
		<span>Tout les modules</span>
			<select name="SelectModule">
				<option></option>
				<?php
				//	Recovevy of the content list
				$optContent = $bdd->query('SELECT * FROM content');
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
		$req = $bdd->prepare('SELECT * FROM content WHERE title=?');
		$req->execute(array($SelectModule,));
		/*Recovery*/
		while ($donnees = $req->fetch())
		{
		?>
		<form method="post" action="updatecontent.php">
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
						<?php for($i=0 ; $i<=20 ; $i++)
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
		</p>
		<br>
		<h2>Page du contenu</h2>
			<p>
			<br>
				<select name="pagename">

					<option><?php echo $donnees['page']; ?></option>
	
				</select>
			</p>
			<br>
			
			<p>
			<h2>Connecter</h2>
			<br>
			<select name="connected">
				<?php
					if($donnees['connected'] == 0)
					{
						echo "<option value='0'>No</option>";
						echo "<option value='1'>Yes</option>";
					}
					else if($donnees['connected'] == 1)
					{
						echo "<option value='1'>Yes</option>";
						echo "<option value='0'>No</option>";
					}
				?>
			</select>
			</p>
			<br>
			<p>
			<span>Afficher ce contenu</span>
			<select name="contentactive">
			<?php
					if($donnees['active'] == "no")
					{
						echo "<option value='0'>No</option>";
						echo "<option value='1'>Yes</option>";
					}
					else if($donnees['active'] == "yes")
					{
						echo "<option value='1'>Yes</option>";
						echo "<option value='0'>No</option>";
					}
				?>
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
		$contentPosition = $_POST['contentPosition'];
		$contentPagename =$_POST['pagename'];
		$connected =$_POST['connected'];
		$contentactive =$_POST['contentactive'];
		$contentid=$_POST['contentid'];

		$req = $bdd->prepare('UPDATE content SET title=:contentTitle, text_fr=:contentTextFr, text_en=:contentTextEn, position=:contentPosition, page=:contentPage,connected=:connected,active=:contentactive WHERE id=:contentid');
		$req->execute(array(
		':contentTitle'=> $contentTitle,
		':contentid'=> $contentid,
		':contentTextFr'=> $contentTextFr,
		':contentTextEn'=> $contentTextEn,
		':contentPosition'=> $contentPosition,
		':contentPage'=> $contentPagename,
		':connected'=> $connected,
		':contentactive'=> $contentactive,
		));	
	}
	?>
</div>
<br clear="both">
</div>
</div>
</body>
</html>