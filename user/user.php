<?php
	require_once("header.php");
	require_once("../form/init.php");
	require_once("../form/req.php");
	
	/*****************************/
	/*****************************/
	
	
?>
	<div class="container">
		<div class="user">
		<img class="avat" src='<?php echo"../".$avat['avatar'] ; ?>'>
			<h1><?php echo $pseudo['pseudo']?></a></h1>
		</div>
	</div>
<?php
	require_once("../footer.php");
?>