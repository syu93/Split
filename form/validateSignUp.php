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

	if(isset($_POST["select"]))
	{
		session_start();
		$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$_POST["select"].'" ');
		$donnees = $req->fetch();
		echo $donnees["video"];		
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	
	if(isset($_POST["cart"]))
	{
	$item = $_POST["cart"];
	$price = $_POST["price"];
		
	session_start();
	$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$_POST["cart"].'" ');
	$donnees = $req->fetch();	
	$in_cart = array_search($donnees[$_SESSION["user"]["langue"]], $_SESSION['user']['cart']['game']);
	if($in_cart !== false)
	{
		echo cart_count();
		return;
		die();
	}
	else
	{
		if(empty($_SESSION['user']['cart']['game']))
		{
			$_SESSION['user']['cart']['game'] = array($item);
			$_SESSION['user']['cart']['price'] = array($price);
			$_SESSION['user']['cart']['nb_cart']=cart_count();
			echo cart_count();
		}
		else
		{
			array_push($_SESSION['user']['cart']['game'],$item);
			array_push($_SESSION['user']['cart']['price'],$price);
			$_SESSION['user']['cart']['nb_cart']=cart_count();
			echo cart_count();
		}	
	}	
	
	return;
	}
	
	if(isset($_POST["prx_add"]))
	{
		session_start();
		echo summary();
		return;
	}

	if(isset($_POST["prx_rm"]))
	{
		session_start();
		echo rm_summary($_POST["prx_rm"]);
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_POST["arr_idx"]))
	{
		session_start();
		unset($_SESSION['user']['cart']['game'][$_POST["arr_idx"]]);
		unset($_SESSION['user']['cart']['price'][$_POST["arr_idx"]]);
		
		$_SESSION['in_cart']['game']=array();
		$_SESSION['in_cart']['price']=array();
		
		foreach($_SESSION['user']['cart']['game']as$in_cart):
			array_push($_SESSION['in_cart']['game'], $in_cart);
		endforeach;
		
		foreach($_SESSION['user']['cart']['price']as$in_cart):
			array_push($_SESSION['in_cart']['price'], $in_cart);
		endforeach;
		
		$_SESSION['user']['cart']['game']=array();
		$_SESSION['user']['cart']['price']=array();
		
		foreach($_SESSION['in_cart']['game']as$in_cart):
			array_push($_SESSION['user']['cart']['game'], $in_cart);
		endforeach;
		
		foreach($_SESSION['in_cart']['price']as$in_cart):
			array_push($_SESSION['user']['cart']['price'], $in_cart);
		endforeach;
		
		$_SESSION['user']['cart']['nb_cart'] = $_SESSION['user']['cart']['nb_cart'] - 1;
		echo cart_count();
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_POST["order"]))
	{
		session_start();
		foreach($_SESSION['user']['cart']['game']as$cart_game):
			$req1= $bdd->query('SELECT title FROM game WHERE game.text_fr="'.$cart_game.'" OR game.text_en="'.$cart_game.'" ');
			$data1 = $req1->fetch();			
			$c_game = $data1['title'];
			
			$req2 = $bdd->query('SELECT * FROM licence WHERE idgame="'.$c_game.'" AND member="" ');
			$data2 = $req2->fetch();
			$c_licence = $data2['licencekey'];
			if(empty($c_licence))
			{
				$message="We are sorry, no key remaining for this item, try later";
				require_once("../include/message.tpl");
				// header('Location: ../index.php');//FIXME: create a validate payement page
				die();
			}
			
			$req3 =  $bdd->query('UPDATE `licence` SET `member`= "'.$_SESSION['member']['pseudo']['email'].'" WHERE idgame = "'.$c_game.'" AND member ="" ');
		endforeach;

/******************/
     $to      = $_SESSION['member']['pseudo']['email'];
     $subject = 'Your order';
     $message = 'Recape of your order'; //Take the contente of a template message
     $headers = 'From: Support Split<support@split.com>' . "\r\n" .
     'Reply-To: custumer-service@split.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     mail($to, $subject, $message, $headers);		
/******************/		
		// header('Location: ../index.php');//FIXME: create a validate payement page
	}

?>