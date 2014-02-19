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
 

if(!empty($_POST))
{
	if(!empty($_POST["singup"]))
	{
	// var_dump($_POST);
	
		if(!isset($_POST["genre"],$_POST["name"],$_POST["firstname"],$_FILE["avatar"]['name'],$_POST["pseudo"],$_POST["email"],$_POST["password"],$_POST["country"]))
		{
			$genre = $_POST["genre"];
			// echo($genre);echo("</br>");
			
			$name = $_POST["name"];
			// echo($name);echo("</br>");
			
			$firstname = $_POST["firstname"];
			// echo($firstname);echo("</br>");
			
			$date = $_POST["Y"]."-".$_POST["M"]."-".$_POST["D"];
			// echo($date);echo("</br>");
			
			$pseudo = $_POST["pseudo"];
			// echo($pseudo);echo("</br>");
			
			$avatar = $_FILES['avatar']['name'];
			$path = NULL;
					$_FILES['avatar']['type']; 
					$_FILES['avatar']['size'];
					$_FILES['avatar']['tmp_name'];
					$_FILES['avatar']['error'];
			// echo($avatar);echo("</br>");
			
			$email = $_POST["mail"];
			// echo($email);echo("</br>");
			
			$password = $_POST["password"];
			// echo($password);echo("</br>");
			
			$cryptedPW = md5($password);
			// echo($cryptedPW);echo("</br>");
			
			$country = $_POST["country"];
			// echo($country);echo("</br>");
			
		}
		/*********************************************************************************/
		/*********************************************************************************/
		/*********************************************************************************/
		/*********************************************************************************/
		
		if($_FILES!=NULL)
		{
			//move the file
			$ext = strtolower(substr(strrchr($avatar, '.'),1)); //get the extension : without the "."
			$path = "../userAvt/".$pseudo.".".$ext;
			$movefile = move_uploaded_file($_FILES['avatar']['tmp_name'],$path);
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
						':avatar'=> $path,
						':password'=> $cryptedPW,
						':email'=> $email,
						':country'=> $country,
						));	
			}
	}
	
	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/
	/*********************************************************************************/

	// check for Sign Up with ajax file: checkExist.js
	if(!empty($_POST["pseudo"]))
	{
		$pseudo = $_POST["pseudo"];
		
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
header("Location: ../");

?>