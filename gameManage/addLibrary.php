 <?php
	if($_POST == true)
	{
		$title = $_POST["game"];
		$genre = $_POST["genre"];
		$user = $_POST["user"];
		
		// echo($title);
		// echo($user);
		
		if(isset($title, $user))
		{
			// created a random licence for the user
			// Each generated Key is store into the game licences array and verify when the user try to lunch the game
			$licence= $title."-".uniqid();
			// echo ($licence);
			
			// Recovery of the game array of the user
			$req1 = $bdd->prepare('SELECT game FROM member WHERE pseudo =:user');
			$req1->execute(array(
			':user'=> $user,
			));
			while ($rep1 = $req1->fetch())
			{
				$userGame = $rep1["game"];
				// var_dump($rep1["game"]);
			}
			
			$newGame = unserialize($userGame);
			// var_dump ($newGame);
			
			$newGame[][$genre][$licence] = $title;
			// var_dump($newGame);
			
			$addNewGame = serialize($newGame);
		
		/**************************************************************************************/
		/**************************************************************************************/
		/**************************************************************************************/
		/**************************************************************************************/
		
			// Recovery of the game array of the licence
			$licenceExist = "plop";
			
			$req2 = $bdd->prepare('SELECT licence FROM game WHERE title =:title');		
			$req2->execute(array(
			':title'=> $title,
			));
			while ($rep2 = $req2->fetch())
			{
				$licenceExist = $rep2["licence"];
				// var_dump($rep2["licence"]);			
			}
			
			if($licenceExist == NULL)
			{
				$gameLicence = unserialize($licenceExist);
				// var_dump($gameLicence);
			}
			$gameLicence[] = $licence;
			// var_dump($gameLicence);
			
			$gl = serialize($gameLicence);
			// echo($gl);
			// echo($title);

		/******************************************************************************************/
		/******************************************************************************************/
		/******************************************************************************************/
		/******************************************************************************************/
		
				$req3 = $bdd->prepare('UPDATE game SET licence=:newLicence WHERE title=:title');
				$req3->execute(array(
				':newLicence'=> $gl,
				':title'=> $title,
				));
				// var_dump($req3);
				
				// find a way to test the fist request !!!
				
				if($req3)
				{
					$req4 = $bdd->prepare('UPDATE member SET game=:newGame WHERE pseudo=:user');
					$req4->execute(array(
					':newGame'=> $addNewGame,
					':user'=> $user,
					));
				}
				else("An error occured");

		}
	}
 ?>