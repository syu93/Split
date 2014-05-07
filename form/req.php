<?php
	// Header
	$menu=" SELECT * FROM content WHERE active=1 AND tag ='menu' AND page='index' ORDER BY position LIMIT 6";
	$menu2_user=" SELECT * FROM content WHERE active=1 AND tag ='menu' AND page='user' ORDER BY position LIMIT 6";
	$lib="SELECT text_fr, text_en FROM content WHERE title='mylibrary' AND active=1 AND tag ='menu' AND connected='".$connected."' ";		
	$gmelib="SELECT * FROM game WHERE active=1 AND tag ='game' AND connected='".$connected."' ";
	$ply="SELECT text_fr, text_en FROM content WHERE title='play' AND active=1 AND tag ='menu' AND connected='".$connected."' ";
	$sign="SELECT text_fr, text_en FROM content WHERE title='signup' AND active=1 AND tag ='text' AND connected='".$connected."' ";
	$deco="SELECT text_fr, text_en FROM content WHERE title='logoff' AND active=1 AND tag ='text' AND connected='".$connected."' ";
	$cart="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
	$profil="SELECT * FROM member WHERE id='".$pseudo["id"]."'";
	
	
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// Index
	$game_index='SELECT * FROM game, gamegenre WHERE game.title = gamegenre.idgame ORDER BY gamegenre.idgenre ';
	$genre_index='SELECT genre.genre, genre.text_fr, genre.text_en FROM game,`gamegenre`, genre WHERE game.title = gamegenre.idgame AND genre.genre = gamegenre.idgenre ';
	
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// Cart
	$game_editor= "SELECT ideditor FROM game";
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// user	
	$menu_user = " SELECT * FROM content WHERE active=1 AND tag ='menu' AND title = 'mylibrary' ORDER BY position LIMIT 5";
	
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// game	
	$game_p_genre='SELECT * FROM game, gamegenre WHERE game.title = gamegenre.idgame ';
	
	// test
	$testgenre = 'SELECT genre.genre FROM game, genre, gamegenre WHERE game.id=gamegenre.idgame AND gamegenre.idgenre=genre.id AND game.title="TitanFall"';
	
	$testfriend = 'SELECT friend.pseudofriend FROM member, friend WHERE member.pseudo=friend.pseudomember AND member.pseudo="Syu93" ';
	
?>