 <?php
 require_once("init.php");
	session_start();
	$_SESSION['langue']= "text_fr";
	$_SESSION['user'] = uniqid("", false);
 ?>
 