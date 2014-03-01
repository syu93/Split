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
	$contentTag = $_POST['contentTag'];
	// echo$contentTag;
	
	$contentTitle = $_POST['contentTitle'];
	// echo$contentTitle;
	
	$contentTextFr = $_POST['contentTextFr'];
	// echo$contentText;

	$contentTextEn = $_POST['contentTextEn'];
	// echo$contentText;
	
	$contentPosition = $_POST['contentPosition'];
	// echo$contentPosition;
	
	$connected = $_POST['connected'];
	// echo$connected;
	
	$contentactive = $_POST['contentactive'];
	// echo$contentactive;

	$req = $bdd->prepare('INSERT INTO content(tag, title, text_fr, text_en, position,connected, active) VALUES(:contentTag,:contentTitle, :contentTextFr, :contentTextEn, :contentPosition,:connected, :contentactive)');
	$req->execute(array(
	':contentTag'=> $contentTag,
	':contentTitle'=> $contentTitle,
	':contentTextFr'=> $contentTextFr,
	':contentTextEn'=> $contentTextEn,
	':contentPosition'=> $contentPosition,
	':connected'=> $connected,
	':contentactive'=> $contentactive,
	));
	
/*
 *	Recovery and Scripture in the DB
 */
}
?>
				<div class="addContent module">
					<h1>Ajout d'un contenu</h1>
					<br>
					<form method="post" action="addcontent.php">
					<p>
						<span>Position du contenu</span>
						<br>
					<select name="contentPosition">								
							<?php for($i=0 ; $i<=20 ; $i++)
								{?>
									<option><?php echo $i; ?></option>
							<?php
								}?>
					</select>
					</p>
					<p>
						<span>Tag du contenu</span>	<br>	
						<select name="contentTag">
							<option>menu</option>
							<option>text</option>
						</select>
					</p>
					<p>
						<span>Ttire du contenu</span>	<br>	<textarea class="contentText" name="contentTitle"></textarea>
					</p>
					<br>
					<p>
						<span>Text Francais</span>	<br>	<textarea class="contentText" name="contentTextFr"></textarea>
						
						<span>Text English</span>	<br>	<textarea class="contentText" name="contentTextEn"></textarea>
					</p>
					<br>
					
					<p>
						<span>connected</span>	<br>
						<select name="connected">
							<option>yes</option>
							<option>no</option>
						</select>
					</p>
					
					
					<br>
					<p>
					<span>Afficher ce contenu</span>
						<select name="contentactive">
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