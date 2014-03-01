<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="overContainer OCoff" id="overContainer">
	<span id="closeBtn" class="closeBtn">
		<img  src="img/close.PNG">
	</span>
	
	<div class="connect">
		<div class="form1">
			<form method="POST" action="form/validateSignUp.php" id="formLi">
				<div><div class="element"><label for="mail1">Email : </label><span id="ckmail1" class="checkMail"></span></div>
				<hr>
				<div class="input"><input id="mail1" type="email" name="mail" required></div>
				</div>
				<div>
				<div class="element"><label for="password1">Password : </label><span id="ckps" class="checkOk"></span></div>
				<hr>
				<div class="input"><input id="password1" type="password" name="password" required></div>
				</div>
			</form>
		</div>
		
		<hr class="hr-vert">
		
		<div class="form2">
			<form method="POST" action="form/validateSignUp.php" id="formSi" enctype="multipart/form-data">
				<div class="element">
					<span>Genre : </span> 
						<div class="genre"><label for="GrM">M. </label><input id="GrM" type="radio" name="genre" value="male" checked></div>
						<div class="genre"><label for="GrF">Mrs. </label><input id="GrF" type="radio" name="genre" value="female"></div>
				</div>
				
				<div class="element"><label for="name2">Name : </label><span id="ckname" class="checkOk"></span></div> 
				<div class="input"><input id="name2" type="text" name="name" min="3" required></div>
					
				
				<div class="element"><label for="fname2">Firstname : </label><span id="ckfname" class="checkOk"></span></div>
				<div class="input"><input id="fname2"type="text" name="firstname" min="3" required></div>			
					
				
				<div class="element"><label for="dateJ">Bithday : </label></div>
					<div class="date">
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

				<hr>
				
				<div class="element"><label for="pseudo2">Pseudo : </label><span id="ckpseudo" class="checkOk"></span></div>
				<div class="input"><input id="pseudo2" type='text' name='pseudo' min="2" required></div>
				
				<div class="element"><label for="mail2">Email : </label><span id="ckmail2" class="checkMail"></span></div>
				<div class="input"><input id="mail2" type="email" name="mail" required></div>
				
				<div class="element"><label for="password2">Password : </label><span id="ckps" class="checkOk"></span></div>
				<div class="input"><input id="password2" type="password" name="password" required></div>					
				
				<hr>
				
				<div class="element"><label for="avatar">Avatar : </label><span id="ckavt"></span></div>
				<div class="input"><input id="avatar" type="file" name="avatar" requiered></div>
				<input type="hidden" name="MAX_FILE_SIZE" value="12345" />						
				
				<hr>
				
				<div class="element">
				<label for="country2">Country : </label><span id="ckcountry" class="checkOk"></span></div>
				<div class="input">
					<select id="country2" type="text" name="country" placeholder="plop" required>
						<option></option>
						<option>France</option>
						<option>Angleterre</option>
						<option>Etats-Unis</option>
					<select>
				</div>			
					
				
				</br>
				</br>
				
				<input id="submit" name="signup" type="submit" value="Submit">
				<span id="cksub2" class="cksub"></span>
			</form>
		</div>
	</div>
</div>