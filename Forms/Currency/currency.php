<?php

/*
	Exercise 1. Currency calculator

	Implement simple currency calculator utility-program, 
	which can be used to calculate currency conversions from dollars to euros. 
	Exchange rates can be found for example on http://www.x-rates.com/d/EUR/table.html. 
	Implement simple HTML-form where user user can input amount of dollars (currency.html) 
	and PHP-script (calculate.php) to calculate currency conversion. 
	PHP-script will read the input values from HTML-form and perform conversion by multiplying dollars 
	with current exchange rate.
	http://www.oamk.fi/~jjuntune/php/exercises.php
*/

	include 'currency-function.php';

	echo '<br><span style="color:c0c0c0; font-size:22px"> The simple currency calculator</span><br>';	
	
	// list
	
	$fp = fpfunct();
	fgets($fp);
	echo '<br>';
	echo '<span style="font-size: 22px; color:c0c0c0;">Currency (HRK for 1 ..) using HNB (Croatian National Bank) exchange rate   |  date: ' . date('d / m / Y') . ':</span><br><br>'; 
	while($line = fgets($fp)) {
		$arr_line = explode('    ', $line);	
		$valuta = $line[3] . $line[4] . $line[5];
		echo $valuta . ' : ';
		echo $arr_line[1] . ' <br>';
	}
	fclose($fp);
	
?>
	<br>
	<table>
	<form method="post" action="currency-process.php">
	<tr>
		<td>Enter amount of money and currency: </td>
		<td><input type="number" step="any" name="amount" maxlength ="10"></input></td> <?php  // "any" dozvoljava upis decimalnih ili cijelih brojeva ?>
		<td>
			<?php
				$fp = fpfunct();
				fgets($fp);
					echo '<select name="dropDown1"> Currency: ';
						while($line = fgets($fp)) {
							$arr_line = explode('    ', $line);	
							$valuta = $line[3] . $line[4] . $line[5];
							echo ' <option value="' . $valuta . '">' . $valuta . '</option>'; 
						} 
					echo '</select>';
			?>
		</td>
	<td style="color:c0c0c0;">For decimals, floating point is punctuation mark </td>
	</tr>
	<tr>
		<td>Choose currency in which you want to change your money: </td>
		<td></td>
		<td>
			<?php
				$fp = fpfunct();
				fgets($fp);
					echo '<select name="dropDown2"> Currency: ';
						while($line = fgets($fp)) {
							$arr_line = explode('    ', $line);	
							$valuta = $line[3] . $line[4] . $line[5];
							echo ' <option value="' . $valuta . '">' . $valuta . '</option>'; 
						} 
					echo '</select>';
			?>
		</td>
		<td><input type = "submit" value="  Submit  "></input></td>
	</tr>
	</form>
	</table>
	<br>

	<?php 
		session_start();
		if(isset($_SESSION['curr'])) {
			$ispis = $_SESSION['curr'];
		} else {
			$ispis = ''; // 'First load : Prvi unos - prazno'
		}
		echo $ispis;
	?>
					