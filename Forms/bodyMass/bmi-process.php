<?php
	session_start();
	$bmi = 'ništa';
	if(isset($_POST['weight']) && isset($_POST['height']) && is_numeric($_POST['weight']) && is_numeric($_POST['height']))  {
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$bmi = 'Your BMI: ' . $weight / pow($height,2);
	} else {
		$bmi = ''; // 'Wrong enter'
	}
	$_SESSION['bmi'] = $bmi;
	
	header('Location: bmi.php');
?>