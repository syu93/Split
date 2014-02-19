<?php
	//require_once("form/validateSignUp.php");	
?>
<div class="overContainer OCoff" id="overContainer">
	<span id="closeBtn" class="closeBtn">
		<img  src="img/close.PNG">
	</span>
	
	<div class="connect">
		
		<form method="POST" action="form/validateSignUp.php" id="formSi" name="singup" enctype="multipart/form-data">
		
			<span>Genre : </span> 
				<label for="GrM">M. </label><input id="GrM" type="radio" name="genre" value="male" checked>
				<label for="GrF">Mrs. </label><input id="GrF" type="radio" name="genre" value="female">
				
			</br>
			
			<label for="name">Name : </label> <input id="name" type="text" name="name" min="3" required>
			
				<span id="ckname" class="checkOk"></span>
				
			</br>
			
			<label for="fname">Firstname : </label> <input id="fname"type="text" name="firstname" min="3" required>
			
				<span id="ckfname" class="checkOk"></span>
				
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
			
			<label for="pseudo">Pseudo : </label> <input id="pseudo" type='text' name='pseudo' min="2" required>
			
				<span id="ckpseudo" class="checkOk"></span>
			
			</br>
			
			<label for="avatar">Avatar : </label>	<input id="avatar" type="file" name="avatar">
			<input type="hidden" name="MAX_FILE_SIZE" value="12345" />
			
			
				<span id="ckavt"></span>
			
			</br>
			
			<label for="mail">e mail : </label> <input id="mail" type="text" name="mail" required>
			
				<span id="ckmail" class="checkMail"></span>
				
			</br>
			
			<label for="password">Password : </label> <input id="password" type="password" name="password" required>
			
				<span id="ckps" class="checkOk"></span>
				
			</br>
			</br>
			
			<label for="country">Country : </label> <input id="country" type="text" name="country" required>
			
				<span id="ckcountry" class="checkOk"></span>
				
			</br>
			</br>
			
			<input id="submit" type="submit" value="Submit" name="singup">
			<span id="cksub" class="cksub"></span>
		</form>
	</div>
</div>