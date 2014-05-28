<?php
	require_once("../bdd/bddconnect.php");
	require_once("../form/init.php");
	// session_start();
	$data_member = 'SELECT * FROM member WHERE email="'.$_SESSION['member']['mail'].'"';
	$req1 = $bdd->query($data_member);
	$dat1= $req1->fetch();
	$newDate = date("d/m/Y", strtotime($dat1["registred"]));
?>
<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Premailer Test</title>
	</head>
	
	<body style="width:900px; margin-left:auto; margin-right:auto; background:#e5e5e5; padding:10px; border:solid #333 1px; box-shadow:0 0 3px 1px #000;">
		<table style="">
			<thead style="font-size:35px; color:#3d3d3d; font-weight:bold;">
				<tr><td><img src="http://127.0.0.1/split/img/SPLIT_LOGO.jpg" style="width: 200px;"><hr></td></tr>
				<tr><td>Recap of your order</td></tr>
			</thead>
			<tbody style="font-size:25px; color:#3d3d3d;">
				<tr><td style="height: 20px;"></td></tr>
				<tr sytle="margin-top:15px;"><td>Dear Mr / Mrs. <?php echo $dat1['firstname']." ".$dat1['name'];?>,</td></tr>
				<tr><td>Thank you for your purchase.</td></tr>

				
				<tr>
					<td style="border:solid #ccc 1px; padding:5px; box-shadow:0 0 3px 1px #000;">
						<b>Your informations :</b><br>
						<?php echo 'Herve TUTUAKU';?><br>
						<?php echo $_SESSION['member']['mail'];?><br>
						<?php echo 'Member since : '.$newDate ;?><br><br>
						<b>Payement :</b><?php echo'Credit card.' ;?><br>
					</td>
					<td style="width: 40px;"></td>
					<td style="border:solid #ccc 1px; padding:5px; box-shadow:0 0 3px 1px #000;">
						<b>Detail of your order :</b><br>
						<?php 
							foreach($_SESSION['user']['order']['game']as$data):
								$cart_game=$data ->display_cart();
								$req2 = $bdd->query("SELECT * FROM game WHERE title='".$cart_game."'");
								$dat2= $req2->fetch();
								echo	"<span>".$dat2[$_SESSION['user']['langue']]."</span>";
							endforeach;
						?>
						<br>
						<br>
						<b>Purchased on : </b><?php echo date("d/m/Y"); ?><br>
					</td>
				</tr>

				<tr><td style="height: 20px;"></td></tr>
				
				<tr><td style="height: 20px;"></td></tr>
				<tr>
				<?php //list of game
					echo "<td>";
					
					echo "</td>";
				?>
				</tr>
				<tr><td style="height: 20px;"><hr></td></tr>
			</tbody>
			<tfoot style="font-size:25px; color:#3d3d3d; border-top: solid 1px #000;">
				<tr><td>Plop Plop Plop Plop Plop Plop Plop </td></tr>
			</tfoot >
		</table>
	</body>
</html>