<?php
		// brojač reloadinga
	session_start();

	if (!isset($_SESSION['count4'])) {  // da nebi kod prvog loadanja javljalo grešku
		$_SESSION['count4'] = 0;  
		} 
	else {
		$_SESSION['count4']++ ;  
		}

	echo $_SESSION['count4'] ;
		
		// "s povratom nakon 5"
	/*
	if ($_SESSION['count4'] >= 5 || $_SESSION['count4'] == 0){
	$_SESSION['count4'] = 1;
	*/
	
?>