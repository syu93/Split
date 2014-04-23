<?php
	try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=splitbdd', 'root', '');
	// $bdd->exec("SET NAMES 'UTF8'");
}
	catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>