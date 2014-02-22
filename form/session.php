 <?php
 require_once("init.php");
	session_start();
	$_SESSION['user']['id'] = uniqid("", false);
	// var_dump($_SESSION);
	// echo$_SESSION['user']['id'];
	
	if(empty($_SESSION["user"]['langue']))
	{			
		$_SESSION["user"]['langue'] = "text_fr";
		// echo"plop";
	}
 ?>
 