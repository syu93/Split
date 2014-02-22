 <?php
 require_once("init.php");
	session_start();
	$_SESSION['user'] = uniqid("", false);
	if(!array_key_exists ('langue', $_SESSION))
	{
		$_SESSION["user"]['langue']= "text_fr";
	}
	
 ?>
 