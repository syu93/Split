<?php
	$menu=" SELECT * FROM content WHERE active='yes' AND tag ='menu' ORDER BY position LIMIT 5";
	$lib="SELECT text_fr, text_en FROM content WHERE title='mylibrary' AND active='yes' AND tag ='menu' AND connected='".$connected."' ";		
	$gmelib="SELECT * FROM game WHERE active='yes' AND tag ='game' AND connected='".$connected."' ";
	$ply="SELECT text_fr, text_en FROM content WHERE title='play' AND active='yes' AND tag ='menu' AND connected='".$connected."' ";
	$sign="SELECT text_fr, text_en FROM content WHERE title='signup' AND active='yes' AND tag ='text' AND connected='".$connected."' ";
	$deco="SELECT text_fr, text_en FROM content WHERE title='logoff' AND active='yes' AND tag ='text' AND connected='".$connected."' ";
	$cart="SELECT text_fr, text_en FROM content WHERE title='cart' AND active='yes' AND tag ='menu' ";
	$profil="SELECT avatar FROM member WHERE pseudo='".$pseudo["pseudo"]."'";
?>