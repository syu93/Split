<?php
	require_once("../community/header.php");
	
	require_once("../form/init.php");	
	require_once("../form/req.php");	
	
	echo'<div class="container" style=" text-shadow:0 0 1px #3d3d3d; padding:5px 0 5px 5px; background:url(\'../css/get.png\');">';
		echo"<h2>".$dat17[$_SESSION['user']['langue']]."</h2>";
	echo"</div>";
	
	echo'<div class="container" style="text-shadow:0 0 1px #3d3d3d; float:left; padding:5px; margin-right:10px; width:300px;background:url(\'../css/get.png\');">';
	echo'<form action="http://127.0.0.1/split/form/validateSignUp.php" method="POST">';
		echo'<h6>'.$dat1[$_SESSION['user']['langue']].'</h6>';
		echo'<p>'.$dat7[$_SESSION['user']['langue']]." : ".$name."  ".$firstname.'</p>';
		echo'<p>'.$dat5[$_SESSION['user']['langue']]." : ".substr_replace($carte, "XXX XXXX XXXX", 6, 13).'</p>';
		echo'<p>'.$dat3[$_SESSION['user']['langue']]." : ".$date_exp.'</p>';
		echo'<p>'.$dat14[$_SESSION['user']['langue']]." : ".substr_replace($code, "XX", 1, 2).'</p>';
		echo'<p>'.$mail.'</p>';
		echo'<br>';
		echo$vld_bt;
		echo'<br>';
		echo'<span>'.$dat19[$_SESSION['user']['langue']].' : </span><span class="'.devise().'">'.$total.'</span>-<span class="'.devise().'">'.$substract_total.'</span>';
		echo'<br>';
		echo'<span>'.$dat20[$_SESSION['user']['langue']].' : </span><span class="'.devise().'">'.$subtotal.'</span>';
	echo'</form>';
	echo"</div>";
	foreach($message['order']as$message):
		echo'<div class="container" style="clear: none; text-shadow:0 0 1px #3d3d3d; float:right; padding:5px; width:570px;background:url(\'../css/get.png\');">';
				echo'<h5>'.$message.'</h5>';
				echo'<br>';
		echo"</div>";
	endforeach;
	

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