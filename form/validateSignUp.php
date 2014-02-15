<?php
	try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=splitbdd', 'root', '');
}
	catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

 /*************************************************/
 /*************************************************/
 /*************************************************/
 /*************************************************/
 
 function avatar(){
	$avatar = $_POST["avatar"];
	
	$ext_valide = array("jpg","jpeg","gif","png");
	$ext = strtolower(substr(strrchr($avatar, '.'),1));
	
	if (in_array($ext, $ext_valide)) {
		$repAV = $avatar;
	}
 }
 
 /*************************************************/
 /*************************************************/
 /*************************************************/
 /*************************************************/
 

if(!empty($_POST))
{
	if(!empty($_POST["singup"]))
	{
	// var_dump($_POST);
	
		if(!isset($_POST["genre"],$_POST["name"],$_POST["firstname"],$_FILE[""],$_POST["pseudo"],$_POST["email"],$_POST["password"],$_POST["country"],$_POST["language"]))
		{
			$genre = $_POST["genre"];
			echo($genre);echo("</br>");
			
			$name = $_POST["name"];
			echo($name);echo("</br>");
			
			$firstname = $_POST["firstname"];
			echo($firstname);echo("</br>");
			
			$date = $_POST["Y"]."/".$_POST["M"]."/".$_POST["D"];
			echo($date);echo("</br>");
			
			$pseudo = $_POST["pseudo"];
			echo($pseudo);echo("</br>");
			
			$avatar = $_POST["avatar"];
			echo($avatar);echo("</br>");
			
			$email = $_POST["mail"];
			echo($email);echo("</br>");
			
			$password = $_POST["password"];
			echo($password);echo("</br>");
			
			$cryptedPW = md5($password);
			echo($cryptedPW);echo("</br>");
			
			$country = $_POST["country"];
			echo($country);echo("</br>");
			
			$language = $_POST["language"];
			echo($language);echo("</br>");
			echo("</br>");echo("</br>");
			
			return;
		}
	}

	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/

	/*if(!empty($name) && !empty($firstname) && !empty($pseudo) && !empty($email) && !empty($cryptedPW) && !empty($country) && !empty($language))
	{
		if($vldP == 1 && $vldM == 1)
		{
			$req = $bdd->prepare('INSERT INTO member (name, firstname, pseudo ,email , password ,country ,language) 
								VALUES(:name, :firstname, :pseudo ,:email , :password , :country , :language)');
			$req->execute(array(
					':name'=> $name,
					':firstname'=> $firstname,
					':pseudo'=> $pseudo,
					':password'=> $cryptedPW,
					':email'=> $email,
					':country'=> $country,
					':language'=> $language,
					));
		}	
	}*/
	
	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/
	
	//Sign Up
	if(!empty($_POST["pseudo"]))
	{
		$pseudo = $_POST["pseudo"];
		
		$repPS=NULL;
		// Recovery of the game array of the licence
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
			echo("true");
		}
		else
		{
			// print_r($repPS);
			echo("false");
		}
		
		return;
	}
	
	if(!empty($_POST["mail"]))
	{
		$mail = $_POST["mail"];
		
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
			echo("true");
		}
		else
		{
			// print_r($repEM);
			echo("false");
		}
		return;
	}
	
	if(!empty($_POST["avatar"]))
	{
		$repAV=NULL;
		
		$avatar = $_POST["avatar"];

		$ext_valide = array("jpg","jpeg","gif","png");
		$ext = strtolower(substr(strrchr($avatar, '.'),1));

		if (in_array($ext, $ext_valide)) {
			$repAV = $_POST["avatar"];
		}		

		if ($repAV!=NULL)
		{
			// print_r($repAV);
			echo("true");
		}
		else
		{
			// print_r($repAV);
			echo("false");
		}
		return;
	}
}
// Redirection and closed the container...


?>