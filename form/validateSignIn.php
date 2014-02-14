<?php
 /*************************************************/
//Sign Up
if(!empty($_POST)) // add avatar
{
	$name = $_POST["name"];
	// echo($name);echo("</br>");
	
	$firstname = $_POST["firstname"];
	// echo($firstname);echo("</br>");
	
	$pseudo = $_POST["pseudo"];
	// echo($pseudo);echo("</br>");
	
	$email = $_POST["email"];
	// echo($email);echo("</br>");
	
	$password = $_POST["password"];
	// echo($password);echo("</br>");
	
	$cryptedPW = md5($password);
	// echo($cryptedPW);echo("</br>");
	
	$country = $_POST["country"];
	// echo($country);echo("</br>");
	
	$language = $_POST["language"];
	// echo($language);echo("</br>");
	// echo("</br>");echo("</br>");
	
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(!empty($_POST))
	{
		// Recovery of the game array of the licence
		$test = $bdd->prepare('SELECT pseudo FROM member WHERE pseudo=:pseudo');
		$test->execute(array(
		':pseudo' => $pseudo,
		));
		while ($exist = $test->fetch())
		{
			//$valide = $exist["pseudo"];
		}
		$valide = "Syu93";
		// echo($_POST["pseudo"]);
		echo ($_POST["pseudo"] == $valide)? "true" : "false" ;

		return;
	}
	
	/*if(!empty($pseudo) && !empty($email))
	{

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$test = $bdd->prepare('SELECT id FROM member WHERE email=:email');
		$test->execute(array(
		':email' => $email,
		));
		if ($test->rowCount() != 0)
		{
			$valideMail = "This email is already used"; $vldM = 0;
		}
		else {$valideMail = "OK"; $vldM = 1;}
	}
	else
	{
		$vldP = 0;
		$vldM = 0;
		$validePseudo = "";
		$valideMail = "";
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
}
// Redirection and closed the container...


?>