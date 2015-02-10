<?php
	session_start();

	if(isset($_POST['rijec'])) {
		if ($_POST['rijec'] == null || ($_POST['rijec']) == ''){
			$izjava = 'Nema unosa';
			} else {
			$izjava = $_POST['rijec'];
			}
		$_SESSION['izjavaa'] = $izjava;
	}

	header('Location: formaIspis.php');
?>
		
		