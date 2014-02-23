 <?php
 require_once("init.php");

	start_session();
	
	if(empty($_SESSION["user"]['langue']))
	{			
		$_SESSION["user"]['langue'] = "text_fr";
		// echo"plop";
	}
 ?>
 