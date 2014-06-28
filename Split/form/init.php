<?php
function start_session(){
	session_start();
	if(empty($_SESSION["user"]['id']))
	{			
		$_SESSION['user']['id'] = uniqid("", false);
	}
	if(empty($_SESSION['member']["connected"]))
	{			
		$_SESSION['member']["connected"] = 0;
	}
	if(empty($_SESSION['member']["pseudo"]))
	{			
		$_SESSION['member']["pseudo"] = null;
	}	
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function session_connect($bdd,$m){
	$mail = $m;
	$test = $bdd->query("SELECT pseudo FROM member WHERE email='$mail'");
	$pseudo = $test->fetch();
	
	session_start();
	$_SESSION['member']['id'] = $_SESSION['user']['id'];
	$_SESSION['member']['pseudo'] = $pseudo;
	/*************************************************************************/
	// panier
	/*************************************************************************/	
	
	$_SESSION['member']["connected"] = 1;
	
	// print_r("Session id: ".$_SESSION['member']['id']);
	// echo"<br>";
	// print_r($_SESSION['member']['pseudo']);
	// echo"<br>";
	// print_r($_SESSION['member']["connected"]);
	
	header('Location: ../');
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function session_disconnect($m){
	session_start();
	
	/*************************************************************************/
	// panier
	/*************************************************************************/	
	
	$_SESSION['member']["connected"] = 0;
	
	$_SESSION = array();
	session_destroy();
	
	header('Location: ../');
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function ifconnected(){
	if($_SESSION['member']['connected']==1)
	{
		$connected = $_SESSION['member']['connected'];
		if(!empty($_SESSION['member']['pseudo'])) 
		{
			$pseudo=$_SESSION['member']['pseudo'];
		}
	}
	else
	{
		$connected = $_SESSION['member']['connected'];
	}
	return $connected;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function getUrl() {
	$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
	$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
	$url .= $_SERVER["REQUEST_URI"];
	return $url;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function convert($bdd,$game){
	$dolls = 1.38700;
	
	$price = $bdd->query(" SELECT price FROM game WHERE title='$game' ");
	$px = $donnees = $price->fetch();
	
	if($_SESSION["user"]['langue'] == "text_fr")
	{
		$px = round($px["price"], 2);
		return $px;
	}
	
	else if($_SESSION["user"]['langue'] == "text_en")
	{		
		$plop=$px["price"];
		$dollar = $plop*$dolls;
		$dollar = round($dollar, 2);
		return $dollar;
	}
	
	else if($_SESSION["user"]['langue'] == "text_uk")
	{
		/*Add livre and cange dolls*/
	}	
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function devise(){
	if($_SESSION["user"]['langue'] == "text_fr")
	{
		$devise="icon-euro";
		return $devise;
	}
	
	else if($_SESSION["user"]['langue'] == "text_en")
	{
		$devise="icon-dollar";
		return $devise;
	}
	
	else if($_SESSION["user"]['langue'] == "text_uk")
	{
		//$devise="icon-euro";
	}
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function langue($p){
	if(!empty($p))
	{
		$langue = $p;

		session_start();

		if($langue == "Francais")
		{
			$_SESSION["user"]['langue'] = "text_fr";
			$_SESSION["user"]['langueLongue'] = "textlongue_fr";
			// echo($_SESSION['user']['langue']);
			echo("fr");
		}
		else
		{				
			$_SESSION['user']['langue'] = "text_en";
			$_SESSION['user']['langueLongue'] = "textlongue_en";
			// echo($_SESSION["user"]['langue']);
			echo("en");
		}
		return;
	}
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function uploadgameimg($gameImg, $gameTitle){
	$ext = strtolower(substr(strrchr($gameImg, '.'),1)); //get the extension : without the "."
	// echo $ext;
	$path = "../gameImg/".$gameTitle.".".$ext;
	
	$movefile = move_uploaded_file($_FILES['gameImg']['tmp_name'],$path);
	
	$pth = "gameImg/".$gameTitle.".".$ext;
	return $pth;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/	
function signup($bdd,$g,$n,$f,$d,$p,$a,$e,$pw,$c){
	
	if(isset($g,$n,$f,$d,$p,$a,$e,$pw,$c))
	{
		$genre = $g;//$_POST["genre"];
		// echo($genre);echo("</br>");
		
		$name = $n;//$_POST["name"];
		// echo($name);echo("</br>");
		
		$firstname = $f;//$_POST["firstname"];
		// echo($firstname);echo("</br>");
		
		$date = $d;//$_POST["Y"]."-".$_POST["M"]."-".$_POST["D"];
		// echo($date);echo("</br>");
		
		$pseudo = $p;//$_POST["pseudo"];
		// echo($pseudo);echo("</br>");
		
		$avatar = $a;//$_FILES['avatar']['name'];
		$path = NULL;
		// $_FILES['avatar']['type']; 
		// $_FILES['avatar']['size'];
		// $_FILES['avatar']['tmp_name'];
		// $_FILES['avatar']['error'];
		// echo($avatar);echo("</br>");
		
		$email = $e;//$_POST["mail"];
		// echo($email);echo("</br>");
		
		$password = $pw;//$_POST["password"];
		// echo($password);echo("</br>");
		
			$cryptedPW = md5($password);
			// echo($cryptedPW);echo("</br>");
		
		$country = $c;//$_POST["country"];
		// echo($country);echo("</br>");	


		if($_FILES!=NULL)
		{
			//move the file
			$ext = strtolower(substr(strrchr($avatar, '.'),1)); //get the extension : without the "."
			$path = "../userAvt/".$pseudo.".".$ext;
			$movefile = move_uploaded_file($_FILES['avatar']['tmp_name'],$path);
			$pth = "userAvt/".$pseudo.".".$ext;
		}
		
		if(!empty($genre) && !empty($name) && !empty($firstname) && !empty($pseudo) && !empty($email) && !empty($cryptedPW))
		{

				$req = $bdd->prepare('INSERT INTO member (genre, name, firstname, date, pseudo, avatar, email , password ,country) 
								VALUES(:genre, :name, :firstname, :date, :pseudo, :avatar, :email, :password, :country)');
				$req->execute(array(
					':genre'=> $genre,
					':name'=> $name,
					':firstname'=> $firstname,
					':date'=> $date,
					':pseudo'=> $pseudo,
					':avatar'=> $pth,
					':password'=> $cryptedPW,
					':email'=> $email,
					':country'=> $country,
					));	
		}
		start_session();
		// $_SESSION['user']["pseudo"] = "plop";
		$_SESSION['user']["connected"] = true;
		
		
		session_connect($bdd,$e);
		
		
		header('Location: ../');
	}
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function exist_pseudo($bdd,$p){
	$pseudo = $p;
	
	$repPS=NULL;
	
	$test = $bdd->prepare("SELECT pseudo FROM member WHERE pseudo='$pseudo'");
	$test->execute(array(
	':pseudo' => $pseudo,
	));
	while ($exist = $test->fetch())
	{
		$repPS = $exist["pseudo"];
	}
	
	// tester si le resultat de la reqette est vide
	if ($repPS!=NULL)
	{
		echo("truep");
	}
	else
	{
		// print_r($repPS);
		echo("falsep");
	}
	
	return;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function exist_mail($bdd,$m){
	
	$mail = $m;
	
	$repEM=NULL;
	// Recovery of the game array of the licence
	$test = $bdd->prepare("SELECT email FROM member WHERE email='$mail'");
	$test->execute(array(
	':mail' => $mail,
	));
	while ($exist = $test->fetch())
	{
		$repEM = $exist["email"];
	}
	
	// tester si le resultat de la reqette est vide
	if ($repEM!=NULL)
	{
		// print_r($repEM);
		echo("truem");
	}
	else
	{
		// print_r($repEM);
		echo("falsem");
	}
	return;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function exist_password($bdd,$m,$pw){
	$mail = $m;
	$password = $pw;
	$cryptpw = md5($password);
	
	$repPW=NULL;
	// Recovery of the game array of the licence
	$test = $bdd->query("SELECT password FROM member WHERE password='$cryptpw' AND email='$mail'");

	while ($exist = $test->fetch())
	{
		$repPW = $exist["password"];
	}
	
	// tester si le resultat de la reqette est vide
	if ($repPW!=NULL)
	{
		// print_r("null".$repPW);
		echo("truep");
	}
	else
	{
		// print_r("oui".$repPW);
		echo("falsep");
	}
	return;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function type_avatar($a){
	$repAV=NULL;
	
	$avatar = $a;

	$ext_valide = array("jpg","jpeg","gif","png");
	$ext = strtolower(substr(strrchr($avatar, '.'),1));

	if (in_array($ext, $ext_valide)) {
		$repAV = $_POST["avatar"];
	}		

	if ($repAV!=NULL)
	{
		// print_r($repAV);
		echo("truea");
	}
	else
	{
		// print_r($repAV);
		echo("falsea");
	}
	return;
}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
function addcart(){
	

}
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/
/****************************************************************************/

?>