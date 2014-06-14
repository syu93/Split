<?php
	require_once("init.php");
	require_once("../bdd/bddconnect.php");
	
	if(!empty($_POST))
	{
		/*********************************************************************************/
		/*********************************************************************************/
		//Inscription
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

		/*********************************************************************************/
		/*********************************************************************************/
		//Connexion

			if(!empty($_POST["mail1"]))
			{
				exist_mail($bdd,$_POST["mail1"]);
			}
			
			if(!empty($_POST["password1"]))
			{
				exist_password($bdd,$_POST["mail01"],$_POST["password1"]);
			}
			
		/*********************************************************************************/
		/*********************************************************************************/
		/*********************************************************************************/
		/*********************************************************************************/
		if(!empty($_POST["namePart"]))
		{
			exist_pseudo_part($bdd,$_POST["namePart"]);
		}
			
		if(!empty($_POST["mailPart"]))
		{
			exist_mail_part($bdd,$_POST["mailPart"]);
		}
	}
?>
