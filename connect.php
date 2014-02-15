<?php
	require_once("form/validateSignUp.php");	
?>
<div class="overContainer OCon" id="overContainer">
	<span id="closeBtn" class="closeBtn">
		<img  src="img/close.PNG">
	</span>
	
	<div class="connect">
		
		<form method="POST" action="form/validateSignUp.php" id="formSi" name="singup">
		
			<span>Genre : </span> 
				<label for="GrM">M. </label><input id="GrM" type="radio" name="genre" value="male" checked>
				<label for="GrF">Mrs. </label><input id="GrF" type="radio" name="genre" value="female">
				
			</br>
			
			<label for="name">Name : </label> <input id="name" type="text" name="name" min=""required>
			
				<span id="ckname" class="checkPseudo"></span>
				
			</br>
			
			<label for="fname">Firstname : </label> <input id="fname"type="text" name="firstname" required>
			
				<span id="ckfname" class="checkPseudo"></span>
				
			</br>
			<div>
				<label for="dateJ">Bithday : </label> 
				<select id="dateJ" name="D">
					<?php for($i=1 ; $i<=31 ; $i++)
						{?>
							<option><?php if($i<=9){echo "0".$i;}else{echo $i;} ?></option>
					<?php
						}?>				
				</select>
				
				<select id="dateM" name="M">
					<?php for($i=1 ; $i<=12 ; $i++)
						{?>
							<option><?php if($i<=9){echo "0".$i;}else{echo $i;} ?></option>
					<?php
						}?>				
				</select>
				
				<select id="dateY" name="Y">
					<?php for($i=1950 ; $i<=2015 ; $i++)
						{?>
							<option><?php echo $i; ?></option>
					<?php
						}?>				
				</select>
			</div>
			</br>
			
			<label for="pseudo">Pseudo : </label> <input id="pseudo" type='text' name='pseudo' required>
			
				<span id="ckpseudo" class="checkPseudo"></span>
			
			</br>
			
			<label for="avatar">Avatar : </label>	<input id="avatar" type="file" name="avatar" required>
			
				<span id="ckavt"></span>
			
			</br>
			
			<label for="mail">e mail : </label> <input id="mail" type="text" name="mail" required>
			
				<span id="ckmail" class="checkMail"></span>
				
			</br>
			
			<label for="password">Password : </label> <input id="password" type="password" name="password" required>
			
				<span id="ckps" class="checkPseudo"></span>
				
			</br>
			</br>
			
			<label for="country">Country : </label> <input id="country" type="text" name="country" required>
			
				<span id="ckcountry" class="checkPseudo"></span>
				
			</br>
			</br>
			
			<label for="langue">Language : </span> <!-- Set the language choses in content and recovery it from sql-->
				<select id="langue" name="language">
					<option>English</option>
					<option>French</option>
				</select>
			
				<span id="cklangue" class="checkPseudo"></span>
				
			</br>
			</br>
			
			<input id="submit" type="submit" value="Submit" name="singup">
			<span id="cksub" class="cksub"></span>
		</form>
	</div>
</div>