 <?php
 require_once("init.php");
	session_start();
	if(!array_key_exists ('langue', $_SESSION))
	{
		$_SESSION['langue']= "text_fr";
	}
	$_SESSION['user'] = uniqid("", false);
 ?>
 