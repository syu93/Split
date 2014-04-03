 <?php
 require_once("init.php");

	start_session();
	
	if(empty($_SESSION["user"]['langue']))
	{			
		$_SESSION["user"]['langue'] = "text_fr";
		$_SESSION['user']['langueLongue'] = "textlongue_fr";
	}
 ?>
 