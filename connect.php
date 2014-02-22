<div class="overContainer OCon" id="overContainer">
	<span id="closeBtn" class="closeBtn">
		<img  src="img/close.PNG">
	</span>
	
	<div class="connect">
		<hr class="hr-vert">
		<div class="form2">
			<form method="POST" action="form/validateSignUp.php" id="formSi" name="singup" enctype="multipart/form-data">
				<div class="element">
					<span>Genre : </span> 
						<div class="genre"><label for="GrM">M. </label><input id="GrM" type="radio" name="genre" value="male" checked></div>
						<div class="genre"><label for="GrF">Mrs. </label><input id="GrF" type="radio" name="genre" value="female"></div>
				</div>
				
				<div class="element"><label for="name">Name : </label><span id="ckname" class="checkOk"></span></div> 
				<div class="input"><input id="name" type="text" name="name" min="3" required></div>
					
				
				<div class="element"><label for="fname">Firstname : </label><span id="ckfname" class="checkOk"></span></div>
				<div class="input"><input id="fname"type="text" name="firstname" min="3" required></div>			
					
				
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
				
				<div class="element"><label for="pseudo">Pseudo : </label><span id="ckpseudo" class="checkOk"></span></div>
				<div class="input"><input id="pseudo" type='text' name='pseudo' min="2" required></div>
				
				<div class="element"><label for="mail">Email : </label><span id="ckmail" class="checkMail"></span></div>
				<div class="input"><input id="mail" type="text" name="mail" required></div>
				
				<div class="element"><label for="password">Password : </label><span id="ckps" class="checkOk"></span></div>
				<div class="input"><input id="password" type="password" name="password" required></div>					
				
				<hr>
				
				<div class="element"><label for="avatar">Avatar : </label><span id="ckavt"></span></div>
				<div class="input"><input id="avatar" type="file" name="avatar"></div>
				<input type="hidden" name="MAX_FILE_SIZE" value="12345" />						
				
				<hr>
				
				<div class="element">
				<label for="country">Country : </label><span id="ckcountry" class="checkOk"></span></div>
				<div class="input">
					<select id="country" type="text" name="country" placeholder="plop" required>
						<option></option>
						<option>France</option>
						<option>Angleterre</option>
						<option>Etats-Unis</option>
					<select>
				</div>			
					
				
				</br>
				</br>			
				<input id="submit" type="submit" value="Submit" name="singup">
				<span id="cksub" class="cksub"></span>
			</form>
		</div>
	</div>
</div>