<!DOCTYPE html>
<html>
<?php
require_once'header.php';
?>
<?php
if(isset($_POST['submitMenu']))
{
/*
 *	Recovery and Scripture in the DB
 */
	if(!empty($_POST['menu-newlink']))
	{
		$link = $_POST['menu-newlink'].".php";		
	}
	else
	{
		$link = $_POST['menu-link'];
	}
	
	//	Creat a new menu link
	$menu  = '<li><a href="';	
	$menu .= $link;
	$menu .= '">';
	$menu .= $_POST['menu'];
	$menu .= '</a></li>';
	
	$menuname = $_POST['menu'];
	
	$active = $_POST['menuactive'];
	
	$position = $_POST['menuposition'];	
	
/*
 *	Create new page
 */

//	We check if a page with the same name already exists
if(file_exists("../".$link))
{
// if the file exist we add the variable pagename
	$newpage = null;
}
else
{
// if the file doesn't exist we add the variable page name
	$contenu  = '<?php $pagename ='.'"'.$_POST['menu'].'";?>';
	$contenu .= file_get_contents('template/sitetemplate.php');
	$h = fopen("../".$_POST['menu'].".php", "w");
	$newpage = fwrite($h, $contenu);
	fclose($h);
}

/*
 *	Create new page
 */
if($newpage == null )
{	
	$req = $bdd->prepare('INSERT INTO menu(menuName, position, content, active) VALUES(:menuname,:position,:content, :active )');
	$req->execute(array(
	':menuname'=> $menuname,
	':position'=> $position,
	':content'=> $menu,
	':active'=> $active,
	));
}
	
if($newpage == true )
{	/*
	 *	Rajouter le menu Name et l'active
	 */
	
	$req = $bdd->prepare('INSERT INTO menu(menuName, position, content, active) VALUES(:menuname,:position,:content, :active )');
	$req->execute(array(
	':menuname'=> $menuname,
	':position'=> $position,
	':content'=> $menu,
	':active'=> $active,
	));
	
	$req = $bdd->prepare('INSERT INTO pagename(link, pagename) VALUES(:link, :pagename)');
	$req->execute(array(
    'link' => $link,
    'pagename' => $_POST['menu'],
	));
}
else
{
	die('An error occured');
}
 
/*
 *	Recovery and Scripture in the DB
 */
}
?>

				<div class="addContent menu">
					<h1>Ajout rapide d'un menu</h1>
					<br>
						<form method="post" action="addmenu.php">
					<p>
						<span>Nom du menu</span>	<input class="inputtext" class="contentText" name="menu">
					</p>
					<br>
					<p>
						<span>Nouvelle page : </span><span>Nom de la nouvelle page</span>	<input class="inputtext" type="text" name="menu-newlink"/>
					</p>	
					<br>
					<p>
						<span>Page d&eacute;j&agrave; existante : </span><span>Selection dans les page existant</span>
						<br>
						<select name="menu-link">
						<option></option>
							<?php
							//	Recovevy of the pagename
							$optPagename = $bdd->query('SELECT * FROM pagename');
							while ($donnees = $optPagename->fetch())
							{
							?>							
								<option><?php echo $donnees['link']; ?></option>
							<?php
							}
							?>
						</select>
						
					</p>
					<br>
					<p>
					<span>Afficher ce menu</span>
					<select name="menuactive">
						<option>yes</option>
						<option>no</option>
					</select>
					</p>
					<br>
					<p>
					<span>Position du menu</span>
						<select name="menuposition">
						<?php
						$i=1;
						while($i <=6)
						{
						?>
							<option><?php echo($i++);?></option>
						<?php
						}
						?>
						</select>
					</p>
					<br>
							<input type="submit" value="Submit" name="submitMenu"/>
					</form>

				</div>
				</div><br clear="both">
			</div>
		</div>
	</body>
</html>