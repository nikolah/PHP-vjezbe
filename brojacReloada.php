<?php
		// brojač reloadinga
	session_start();

	if (!isset($_SESSION['count'])) {  // da nebi kod prvog loadanja javljalo grešku
		$_SESSION['count'] = 0;  // možemo i upisati prazan string '' umjesto nule.. počet će ispisivati i brojati od 1
		} 
	else {
		$_SESSION['count']++ ;  
		}

	echo $_SESSION['count'] ;
		
		// ubacivanje "If-a"
	/*
	if ($_SESSION['counter'] >= 5 || $_SESSION['counter'] == 0){
	$_SESSION['counter'] = 1;
	*/
	
?>