<?php
	require_once("init.php");
	require_once("../bdd/bddconnect.php");
	
	if(!empty($_POST))
	{
			// check for Sign Up with ajax file: signup_submit.js
			if(!empty($_POST["pseudo"]))
			{
				exist_pseudo($bdd,$_POST["pseudo"]);
			}
			
			if(!empty($_POST["mail"]))
			{
				exist_mail($bdd,$_POST["mail"]);
			}
			
			if(!empty($_POST["avatar"]))
			{
				type_avatar($_POST["avatar"]);
			}

		

			if(!empty($_POST["mail1"]))
			{
				exist_mail($bdd,$_POST["mail1"]);
			}
			
			if(!empty($_POST["password1"]))
			{
				exist_password($bdd,$_POST["mail01"],$_POST["password1"]);
			}
	}
?>
