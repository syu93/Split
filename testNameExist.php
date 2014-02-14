<?php
	$plop="plop";
	
	if(!empty($_POST))
	{
		// echo($_POST["pseudo"]);
		echo ($_POST["pseudo"] == $plop)? "true" : "false" ;
		// print_r ($_POST["pseudo"]);
		return;
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/overContainer.js"></script>
	<!--<script type="text/javascript" src="js/checkExist.js"></script>-->
</head>
<body>

<input type="button"  value="plolp1" onClick="myFunction1();">

</br></br>

<input type="button" value="plolp2" onClick="myFunction2();">

<div id="div">
	<form id="monForm" name="singup" action="test.php" method="post">
		<label for="pseudo" >Pseudo</label>
		
		<input type="text" id="pseudo" name="pseudo" />
		
		
		<label for="mail">Email</label>
		<input type="email" id="mail" name="mail"/>

		<input type="button" id="envoyer" value="Envoyer"/>
	</form>
</div>

</body>
</html>
<script type="text/javascript">
	

	var plop1 = {};
	// Creat Json

	$("#pseudo").change(function(){

	plop1.pseudo = $('#pseudo').val();
	// alert(plop1.pseudo);
		$.ajax({
			type: "POST",
			url: "test.php",
			data: plop1,
			success: function(data){
				// alert($('#pseudo').val());
				// alert(typeof(data))
				// alert(data)
				if(data == 'true')
				{
					alert("This Pseudo already exist");
				}
				else
				{
					alert("Good");
				}
				
			}, 
			dataType: "text"
		});		
	});
</script>