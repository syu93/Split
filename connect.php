<?php
	include("form/validateSignIn.php");
?>
<div class="overContainer" id="overContainer">
	<span class="closeBtn">
		<img  src="img/close.PNG" onclick="closeOverContainerConnect()">
	</span>
	
	<div class="connect">
		
		<form method="POST" action="index.php" name="singup">
			<span>Name : </span> <input type="text" name="name" value='<?php if($_POST){echo($_POST["name"]);}?>'>
			</br>
			<span>Firstname : </span> <input type="text" name="firstname" value='<?php if($_POST){echo($_POST["firstname"]);}?>'>
			</br>
			<span>Pseudo : </span> <input type='text' name='pseudo' value='<?php if($_POST){echo($_POST["pseudo"]);}?>' onChange='checkIfExist()'>
			
				<span class="checkPseudo"><?php if($_POST){echo($validePseudo);}?></span>
			
			</br>
			
			<span>e mail : </span> <input type="text" name="email" value='<?php if($_POST){echo($_POST["email"]);}?>' onChange='checkIfExist()'>
			
				<span class="checkMail"><?php if($_POST){echo($valideMail);}?></span>
				
			</br>
			<span>Password : </span> <input id="signinPW" type="password" name="password" value='<?php if($_POST){echo($_POST["password"]);}?>'>
			</br>
			</br>
			<span>Country : </span> <input type="text" name="country" value='<?php if($_POST){echo($_POST["country"]);}?>'>
			</br>
			</br>
			<span>Language : </span> <!-- Set the language choses in content and recovery it from sql-->
				<select name="language" value='<?php if($_POST){echo($_POST["language"]);}?>'>
					<option>English</option>
					<option>French</option>
				</select>
			</br></br>
			<input type="submit" value="Submit" name="singup">
		</form>
	</div>
</div>