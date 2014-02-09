 <?php
	if($_POST == true)
	{
		$tag = $_POST["game"];
		$genre = $_POST["genre"];
		$user = $_POST["user"];
		
		// echo($tag);
		// echo($user);
		
		if(isset($tag, $user))
		{
			// created a random licence for the user
			// Each generated Key is store into the game licences array and verify when the user try to lunch the game
			$licence= uniqid();
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
			
			$newGame[][$genre][$licence] = $tag;
			// var_dump($newGame);
			
			$addNewGame = serialize($newGame);
		
		/**************************************************************************************/
		/**************************************************************************************/
		/**************************************************************************************/
		/**************************************************************************************/
		
			// Recovery of the game array of the licence
			$req2 = $bdd->prepare('SELECT licence FROM game WHERE tag =:tag');
			$req2->execute(array(
			':tag'=> $tag,
			));
			while ($rep2 = $req2->fetch())
			{
				$licenceExist = $rep2["licence"];
				// var_dump($rep2["licence"]);			
			}
			
			$gameLicence = unserialize($licenceExist);
			// var_dump($gameLicence);
			
			$gameLicence[] = $licence;
			// var_dump($gameLicence);
			
			$gl = serialize($gameLicence);
			// var_dump($gl);
		/******************************************************************************************/
		/******************************************************************************************/
		/******************************************************************************************/
		/******************************************************************************************/
		
				$req3 = $bdd->prepare('UPDATE game SET licence=:newLicence WHERE tag=:tag');
				$req3->execute(array(
				':newLicence'=> $gl,
				':tag'=> $tag,
				));
				
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