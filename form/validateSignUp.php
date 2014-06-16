<?php
	require_once("init.php");
	// require_once("session.php");
	require_once("../bdd/bddconnect.php");
 
/*************************************************/
/*************************************************/
/*************************************************/
/*************************************************/
	if(isset($_POST['signup']))
	{
		if(isset($_POST["name"],$_POST["firstname"],$_POST["pseudo"],$_POST["mail"],$_POST["password"],$_POST["country"]))
		{
			$date = $_POST["Y"]."-".$_POST["M"]."-".$_POST["D"];
			$avt = $_FILES["avatar"]["name"];

			signup($bdd,$_POST["genre"],$_POST["name"],$_POST["firstname"],$date,$_POST["pseudo"],$avt,$_POST["mail"],$_POST["password"],$_POST["country"]);
		}
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST['langue']))
	{
		langue($_POST["langue"]);
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST['mail1']))
	{
		session_connect($bdd,$_POST['mail1']);
	}
	
	if(isset($_GET["logoff"]))
	{
		session_disconnect($_GET["logoff"]);
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(isset($_POST["select"]))
	{
		session_start();
		$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$_POST["select"].'" ');
		$donnees = $req->fetch();
		echo $donnees["video"];		
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	
	if(isset($_POST["cart"]))
	{
		//recover the mage added infos
		$item = $_POST["cart"];
		$price = $_POST["price"];

		//Transform the game text_fr of text_en into title in the bdd
		session_start();		
		$req= $bdd->query('SELECT * FROM game WHERE '.$_SESSION["user"]["langue"].'="'.$item.'" ');
		$donnees = $req->fetch();
		$in_cart_item = $donnees['title'];//peut etre text_fr

		//Initriat the verification array
		$tab_verif = array();
		
		// Foreach the cart object to recover all the game in cart
		foreach($_SESSION['user']['cart'] as $data):
			// $data->order_count("7 Days to Die",22.99);
			$ic_game = $data->display_cart();
			array_push($tab_verif,$ic_game); // Push it the the verification array
		endforeach;
		// search for the item already in the cart
		$in_cart = array_search($in_cart_item,$tab_verif);
		
		if($in_cart !== false)
		{
			echo cart_count();
			return;
			die();
		}
		else
		{
			if(empty($tab_verif))
			{
				// First add of item
				$obj =new cart;
				$_SESSION['user']['cart'][] = $obj;
				foreach($_SESSION['user']['cart'] as $data):
					$data->order_count($in_cart_item,$price);
				endforeach;
				$_SESSION['user']['nb_cart']=cart_count();
				echo cart_count();
			}
			else
			{
				$arr=new cart;
				$arr->order_count($in_cart_item,$price);
				array_push($_SESSION['user']['cart'], $arr);	
				$_SESSION['user']['nb_cart']=cart_count();
				echo cart_count();
			}	
		}
		
		return;
	}
	
	if(isset($_POST["prx_add"]))
	{
		session_start();
		echo summary();
		return;
	}

	if(isset($_POST["prx_rm"]))
	{
		session_start();
		echo rm_summary($_POST["prx_rm"]);
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_POST["arr_idx"]))
	{
		session_start();
		foreach($_SESSION['user']['cart'] as $data):
			$data->display_cart();
			unset($_SESSION['user']['cart'][$_POST["arr_idx"]]);
		endforeach;
		
		$_SESSION['in_cart']['game']=array();
		
		foreach($_SESSION['user']['cart']as$in_cart):
			array_push($_SESSION['in_cart']['game'], $in_cart);
		endforeach;
		
		$_SESSION['user']['cart']=array();
		
		foreach($_SESSION['in_cart']['game']as$in_cart):
			array_push($_SESSION['user']['cart'], $in_cart);
		endforeach;
		
		$_SESSION['user']['nb_cart'] = $_SESSION['user']['nb_cart'] - 1;
		echo cart_count();
		return;
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_POST["order"]))
	{
		session_start();
		$name = $_POST['nom'];
		$firstname = $_POST['prenom'];
		$carte = $_POST['carte'];
		$date_exp = $_POST['month']."/".$_POST['year'];
		$code = $_POST['cvc'];
		$mail =$_SESSION['member']['mail'];
		//---------------------
		$infobank = "SELECT * FROM `content` WHERE title='info bank'";
		$paiement = "SELECT * FROM `content` WHERE title='paiement' ";

		$phone = "SELECT * FROM `content` WHERE title='phone' ";
		$compte = "SELECT * FROM `content` WHERE title='compte' ";	
		$termes = "SELECT * FROM `content` WHERE title='termes' ";
		$nom = "SELECT * FROM `content` WHERE title='nom' ";
		$prenom = "SELECT * FROM `content` WHERE title='prenom' ";
		$expiration = "SELECT * FROM `content` WHERE title='expiration' ";
		$confirm = "SELECT * FROM `content` WHERE title='confirm' ";
		$confirmation = "SELECT * FROM `content` WHERE title='confirmation' ";
		$validate = "SELECT * FROM `content` WHERE title='cartvalidate' ";
		$msgcart = "SELECT * FROM `content` WHERE title='msgcart'";
		$cvc = "SELECT * FROM `content` WHERE title='cvc'";
		
		$nokey = "SELECT * FROM `content` WHERE title='nokey'";
		$alreadybuy = "SELECT * FROM `content` WHERE title='alreadybuy'";
		$orderrecap = "SELECT * FROM `content` WHERE title='orderrecap'";
		$available = "SELECT * FROM `content` WHERE title='available'";
		$tot = "SELECT * FROM `content` WHERE title='total'";
		$subtot = "SELECT * FROM `content` WHERE title='subtotal'";
		//---
		$req1 = $bdd->query($infobank);
		$r_bk = $bdd->query($infobank);
		$req2 = $bdd->query($paiement);
		$req3= $bdd->query($expiration);
		$req4= $bdd->query($phone);
		$req5= $bdd->query($compte);
		$req6= $bdd->query($termes);
		$req7= $bdd->query($nom);
		$req8= $bdd->query($prenom);

		$req10= $bdd->query($confirm);
		$req11= $bdd->query($confirmation);
		$req12= $bdd->query($validate);
		$req13= $bdd->query($msgcart);
		$req14= $bdd->query($cvc);
		
		$req15= $bdd->query($nokey);
		$req16= $bdd->query($alreadybuy);
		$req17= $bdd->query($orderrecap);
		$req18= $bdd->query($available);
		$req19= $bdd->query($tot);
		$req20= $bdd->query($subtot);
		//---
		$dat1 = $req1->fetch();
		$dat100 = $r_bk->fetch();
		$dat2 = $req2->fetch();
		$dat3 = $req3->fetch();
		$dat4 = $req4->fetch();
		$dat5 = $req5->fetch();
		$dat6 = $req6->fetch();
		$dat7 = $req7->fetch();
		$dat8 = $req8->fetch();

		$dat10 = $req10->fetch();
		$dat11 = $req11->fetch();
		$dat12 = $req12->fetch();
		$dat13 = $req13->fetch();
		$dat14 = $req14->fetch();
		
		$dat15 = $req15->fetch();
		$dat16 = $req16->fetch();
		$dat17 = $req17->fetch();
		$dat18 = $req18->fetch();
		$dat19 = $req19->fetch();
		$dat20 = $req20->fetch();
		
		//---------------------
		$dat_15 = $dat15[$_SESSION['user']['langue']];
		$dat_16 = $dat16[$_SESSION['user']['langue']];
		//---------------------
		$message['order'] = array();
		$validate_order['item'] = array();
		$total  = summary();
		$substract_total=0;
		$subtotal=summary();
		$i=1;
		$vld_bt='';
		$_SESSION['user']['order']['game']=array();
		$_SESSION['user']['order']['licence']=array();
		//---------------------
		foreach($_SESSION['user']['cart']as$crt_game):
			$cart_price=$crt_game ->price_cart();
			$cart_game=$crt_game ->display_cart();
		
			$req1= $bdd->query('SELECT * FROM game WHERE game.text_fr="'.$cart_game.'" OR game.text_en="'.$cart_game.'" OR game.title="'.$cart_game.'" ');
			$data1 = $req1->fetch();			
			$c_game = $data1['title'];			
			
			$req2 = $bdd->query('SELECT * FROM licence WHERE idgame="'.$c_game.'" AND member="" ');
			$data2 = $req2->fetch();
			$data_2 = $req2->rowCount();
			$c_licence = $data2['licencekey'];
			//------------------------------
			$o_check = $bdd->query('SELECT * FROM licence WHERE idgame="'.$c_game.'" AND member="'.$mail.'"');
			$data3 = $o_check->rowCount();
			//------------------------------
			if($data_2 < 1) //Check if a licence for this game is available
			{
				$dat_15 = $cart_game." :<br>".$dat15[$_SESSION['user']['langue']].".";
				array_push($message['order'], $dat_15);
				$vld_bt='<input type="submit" name="validate_order" style="display:none; float: none;" value="'.$dat12[$_SESSION['user']['langue']].'">';//Griser le boutton
				//------------------------------
				$substract_total += $cart_price;
			}
			else if($data3 >= 1) //Check if the user already have a licence for this game
			{
				$dat_16 = $cart_game." :<br>".$dat16[$_SESSION['user']['langue']].".";
				array_push($message['order'], $dat_16);
				$vld_bt='<input type="submit" name="validate_order" style="display:none; float: none;" value="'.$dat12[$_SESSION['user']['langue']].'">';//Griser le boutton
				//------------------------------
				$substract_total += $cart_price;
			}
			else // Make the order if conditions are full fill
			{
				array_push($message['order'], $cart_game." : ".$dat18[$_SESSION['user']['langue']].".");
				order($cart_game,$cart_price,$c_licence);
				$vld_bt='<input type="submit" name="validate_order" style="float: none;" value="'.$dat12[$_SESSION['user']['langue']].'">';
			}
		endforeach;
		
	$subtotal = subtotal($subtotal,$substract_total);
	require_once("../include/message.tpl");
	}
	
	if(isset($_POST['validate_order']))
	{
		session_start();
		$i=0;
		$message = array("alert"=>"");
		$message['alert'] = array();
		
		$today = date("Ymd");
		$date = date("Y-m-d");
		
		$nb_order = $bdd->prepare('SELECT * FROM order');
		$nb_order->execute();						
		$n_order = $nb_order->rowCount();
		$n_order+=1;
		$n_order = str_pad($n_order, 4, '0', STR_PAD_LEFT);
		$id_order = $n_order."-".$today;
		$reg_order =  "INSERT INTO `order`(`idorder`, `idclient`, `date`) VALUES ('".$id_order."','".$_SESSION['member']['mail']."','".$date."')";
		
		foreach($_SESSION['user']['order']['game']as$data):
		$cart_price=$data ->price_cart();
		$cart_game=$data ->display_cart();		
		
		$req1= $bdd->query('SELECT * FROM game WHERE game.text_fr="'.$cart_game.'" OR game.text_en="'.$cart_game.'" OR game.title="'.$cart_game.'" ');
		$data1 = $req1->fetch();
		$c_game = $data1['title'];
			$c_licence = $_SESSION['user']['order']['licence'][$i];
				$buygame =  $bdd->prepare('UPDATE `licence` SET `member`= :member WHERE idgame = :game AND licencekey= :licence AND member ="" ');				
				$succed = $buygame->execute(array(
				':member'=>$_SESSION['member']["mail"],
				':game'=>$c_game,
				':licence'=>$c_licence,
				));
				$buygame =  $bdd->query('SELECT * FROM `licence` WHERE member="'.$_SESSION['member']["mail"].'" AND idgame = "'.$c_game.'" AND licencekey="'.$c_licence.'" ');
				//--
				$orderok = $bdd->query('SELECT * FROM content WHERE title = "orderok"');
				$ordererr = $bdd->query('SELECT * FROM content WHERE title = "ordererr"');
				
				$repok = $orderok->fetch();
				$reperr = $ordererr->fetch();
				
				if(!$buygame)
				{
					array_push($message['alert'],"".$reperr[$_SESSION['user']['langue']]."");
				require_once("../include/alert.tpl");
					die();
				}
				else
				{
					array_push($message['alert'],"".$repok[$_SESSION['user']['langue']]."");
					//--------------------
					$req_order = $bdd->query($reg_order);					
					$ck_order = $bdd->query('SELECT * FROM `order` WHERE `idorder`="'.$id_order.'" ');
					if(!$ck_order)
					{
						$reg_order = "";
					}
					else
					{
						$reg_o_details = "INSERT INTO orderdetails (idorder, idgame) VALUES('".$id_order."', '".$c_game."')";
						$reg_o_d = $bdd->query($reg_o_details);
					}
					//--------------------
					require_once("../include/alert.tpl");
				}
		$i++;
		endforeach;
	/******************/
		ob_start(); // turn on output buffering
		include('../include/mail.php');
		$res = ob_get_contents(); // get the contents of the output buffer
		ob_end_clean(); //  clean (erase) the output buffer and turn off output buffering
	
		$to  = $_SESSION['member']['mail'];
		$subject = 'Confirmation of you order';
		$message = $res; //Take the contente of a template message
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers= 'Content-type: text/html; charset=utf-8' . "\r\n";	 
		$headers.= 'Content-Transfer-Encoding: 8bit' . "\r\n";	
		$headers.= 'From: Customer Service <custumer-service@split.com>' . "\r\n" .
		 'Reply-To: custumer-service@split.com' . "\r\n" .
		 'X-Mailer: PHP/' . phpversion();
		 mail($to, $subject, $message, $headers);		
	/******************/	
	empty_cart();
	// END of the order
	}
	
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
// Sign up for the partner
	if(isset($_POST["sign_part"]))
	{
		session_start();
		$_SESSION['partner']['name'] = $_POST["partName1"];
		$psw = md5($_POST["password"]);
		$date = date("Y-m-d");
		//----
		$register = 'INSERT into partner (name, email, password, registred) VALUES("'.$_SESSION['partner']['name'].'","'.$_POST["partMail1"].'", "'.$psw.'", "'.$date.'")';
		$req = $bdd ->query($register);
		//----
		init_session_partner();
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_POST['mailP1']))
	{
		session_start();
		$test = $bdd->query("SELECT name FROM partner WHERE email='".$_POST['mailP1']."' ");
		$name = $test->fetch();

		$_SESSION['partner']['name'] = $name['name'];
		init_session_partner();
	}
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
	if(isset($_GET["partnerlogoff"]))
	{
		partner_session_disconnect($_GET["partnerlogoff"]);
	}

?>