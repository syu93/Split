<?php
	require_once("header.php");
	require_once("../form/init.php");
	require_once("../form/req.php");
	
	/*****************************/
	/*****************************/
	
	
?>
	<div class="container">
		<div class="user"><img src='<?php echo"../".$avat['avatar'] ; ?>'></div>
		<h1><?php echo $pseudo['pseudo']?></h1>
	</div>
<?php
	require_once("../footer.php");
?>