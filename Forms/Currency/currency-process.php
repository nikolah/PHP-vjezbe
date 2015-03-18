<?php

	include 'currency-function.php';
	
	session_start();
	
	if(isset($_POST['amount']) && is_numeric($_POST['amount']))  {
		$number = $_POST['amount'];
		$drop1 = $_POST['dropDown1'];
		$drop2 = $_POST['dropDown2'];

		$fp = fpfunct();
		while($line = fgets($fp)) {
		$arr_line = explode('    ', $line);
		$valuta = $line[3] . $line[4] . $line[5];
			if ($valuta == $drop1) {
				$curr1 = $arr_line[1];
			}
		}
		fclose($fp);
		$fp = fpfunct();
		while($line = fgets($fp)) {
		$arr_line = explode('    ', $line);
		$valuta = $line[3] . $line[4] . $line[5];
			if ($valuta == $drop2) {
				$curr2 = $arr_line[1];
			}
		}
		fclose($fp);
		$ispis = $number * (numb($curr1) / numb($curr2));

		// 'round' zaokružuje na broj decimala koji je naveden, a 'sprintf' ispisuje decimale iako je broj cijeli
		$curr = 'For <span style="font-weight:bold;">' . round(sprintf('%0.2f', $number), 2) . ' ' .$drop1 . '</span> you can get <span style="font-weight:bold;">' . round($ispis, 2) . ' ' . $drop2 . '</span>';
	} else {
		$curr = ''; // 'Wrong enter'
	}
	$_SESSION['curr'] = $curr;
	
	header('Location: currency.php');
?>