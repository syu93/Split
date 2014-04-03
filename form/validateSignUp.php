<?php
	require_once("init.php");
	// require_once("session.php");
	require_once("../bdd/bddconnect.php");
 
/*************************************************/
/*************************************************/
/*************************************************/
/*************************************************/
	if(isset($_POST['signup']))
	{
		if(isset($_POST["name"],$_POST["firstname"],$_POST["pseudo"],$_POST["mail"],$_POST["password"],$_POST["country"]))
		{
			$date = $_POST["Y"]."-".$_POST["M"]."-".$_POST["D"];
			$avt = $_FILES["avatar"]["name"];

			signup($bdd,$_POST["genre"],$_POST["name"],$_POST["firstname"],$date,$_POST["pseudo"],$avt,$_POST["mail"],$_POST["password"],$_POST["country"]);
		}
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST['langue']))
	{
		langue($_POST["langue"]);
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST['mail1']))
	{
		session_connect($bdd,$_POST['mail1']);
	}
	
	if(isset($_GET["logoff"]))
	{
		session_disconnect($_GET["logoff"]);
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST["selct"]))
	{
		session_start();
		$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$_POST["selct"].'" ');
		$donnees = $req->fetch();
		echo $donnees;
		
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	
	if(isset($_POST["cart"]))
	{
	$item = $_POST["cart"];
	
	$_SESSION['user']['cart']['id_game'] = array();
	$_SESSION['user']['cart']['game'] = array(); 
	$_SESSION['user']['cart']['price'] = array(); 
	$_SESSION['user']['cart']['editor'] = array(); 
	$_SESSION['user']['cart']['genre'] = array(); 
	$_SESSION['user']['cart']['pegi'] = array(); 
	$_SESSION['user']['cart']['url'] = array(); 
	
	
	
	session_start();
	$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$_POST["cart"].'" ');
	$donnees = $req->fetch();
	
	
	
	$plop = array_search($donnees['id'], $_SESSION['user']['cart']['id_game']);
	if($plop !==false)
	{
	// debug($_SESSION['user']['cart']['id_game']);

	}
	if(empty($_SESSION['user']['cart']['game']))
		{
			$_SESSION['user']['cart']['game'] = array($item);
		}
	else
	{
		array_push($_SESSION['user']['cart']['game'],$item);
	}
	
	
	foreach( $_SESSION['user']['cart']['game'] as $game) {echo '<div class="bandeau">'.$game.'</div>';}
	return;
	}	
?>