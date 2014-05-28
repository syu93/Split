<?php
	require_once("../community/header.php");
	
	require_once("../form/init.php");	
	require_once("../form/req.php");	
	
	echo'<div class="container" style="text-shadow:0 0 1px #3d3d3d; float:left; padding:5px; margin-right:10px; background:url(\'../css/get.png\');">';
		foreach($message['alert'] as $msg):
			echo'<h5>'.$msg.'</h5>';
			echo'<br>';
		endforeach;
	echo"</div>";

?>
<html>
<head>
<style>
.menu2 .cart:hover .panier
{
opacity:0;
display:none;
}
</style>
</head>
</html>