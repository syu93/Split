<!DOCTYPE html>
<html>
<?php
require_once'header.php';
?>
<div class="addContent module">
	<form method="post" action="updatemenu.php">
			<h2>Choisisez le menus a modifier</h2>
			<span>Tout les menus</span>
				<select name="SelectMenu">
					<option></option>
					<?php
					//	Recovevy of the content list
					$optContent = $bdd->query('SELECT * FROM menu');
					while ($opt = $optContent->fetch())
					{
					?>
						<option><?php echo $opt['menuName']; ?></option>
					<?php
					}
					?>
				</select>
			<input type="submit" value="Modify" name="submitSelectMenu"/>
	</form>
	
<?php
$selectmenu='';
if(isset($_POST['submitSelectMenu']))
{
	$selectmenu = $_POST['SelectMenu'];
}
?>
<?php
	$req = $bdd->prepare('SELECT * FROM menu WHERE menuName=?');
	$req->execute(array($selectmenu,));

	while ($donnees = $req->fetch())
	{
?>
	<form method="post" action="updatemenu.php">
	<?php echo'<input name="contentid" type="hidden" value="'.$donnees['id'].'"/>';?>
	<br>
	<h2>Nouveau nom du menu</h2>
		<p>
			<?php echo'<input class="inputtext" name="menu" type="text" value="'.$donnees['menuName'].'"/>';?>
		</p>
	<br>
	<h2>Nouveau lien du du menu</h2>
		<p>
			<select>
				<?php
				$optPagename = $bdd->query('SELECT * FROM pagename');
				while ($opt = $optPagename->fetch())
				{
				?>
					<option><?php echo $opt['pagename']; ?></option>
				<?php
				}
				?>				
			</select>
		</p>
	<br>
	<h2>Afficher ce menu</h2>
		<p>
			<h3>Etat actulel :</h3>
			<span>Afficher : </span>	<?php echo'<input class="inputtext" type="text" value="'.$donnees['active'].'" readonly/>';?>
			<br>
			<span>Modifier</span>
			<select name="menuactive">
				<option>yes</option>
				<option>no</option>
			</select>
		</p>
	<br>
	<h2>Position du menu</h2>
		<p>
			<span>Modifier</span>
			<select name="menuposition">
			<?php
			$i=1;
			while($i <=6)
			{
				if($donnees['position']!=$i)
				{
				?>	<option> <?php echo($i++); ?> </option>	<?php
				}
				else
				{
				?>	<option selected>	<?php echo$donnees['position'];	$i++; ?></option>	<?php
				}
			}
			?>
			</select>
		</p>
	</br>
	<input type="submit" name="submitMenuModify" value="submit"/>
	</form>
<?php
	}
// pour la requette de position echo alert(); ...
?>

<?php
if(isset($_POST['submitMenuModify']))
{
	$contentid=$_POST['contentid'];
	
	//	Recovery of the page  witch match with the name
	$req = $bdd->prepare('SELECT link FROM pagename WHERE pagename=?');
	$req->execute(array($_POST['menu'],));
	$donnees = $req->fetch();	
	$link = $donnees['link'];	
	
	$menu  = '<li><a href="';	
	$menu .= $link;
	$menu .= '">';
	$menu .= $_POST['menu'];
	$menu .= '</a></li>';
	
	$menuname = $_POST['menu'];
	
	$active = $_POST['menuactive'];
	
	$position = $_POST['menuposition'];	
	
	$req = $bdd->prepare('UPDATE menu SET menuName=:menuname, position=:position, content=:menu, active=:active WHERE id=:contentid');
	$req->execute(array(
	':menuname'=> $menuname,
	':contentid'=> $contentid,
	':position'=> $position,
	':menu'=> $menu,
	':active'=> $active,
	));	
}
?>
</div>
<br clear="both">
</div>
</div>
</body>
</html>