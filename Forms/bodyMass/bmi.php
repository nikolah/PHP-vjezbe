<?php

/*
	Exercise 2. Simple body mass index calculator utility

	Implement simple calculator utility-program, 
	which can be used to calculate person's Body Mass Index (BMI). 
	The formula for calculating BMI is weight / (height * height). 
	Implement simple HTML-form (bmi.html) where user can input weight (in kilogramms) 
	and height (in meters, floating point is punctuation mark). 
	PHP-script (bmi.php) called from form's action-method will execute the calculation in print out the result.
	http://www.oamk.fi/~jjuntune/php/exercises.php
*/

	echo '<br><span style="color:c0c0c0; font-size:22px"> Calculator of your Body mass index (BMI) - measure of body fat based on height and weight</span><br>';
	echo '	<span style="color:c0c0c0; font-weight:bold;">
			BMI Categories: </span><br>
			<span style="color:c0c0c0;">
			Underweight = < 18.5 <br>
			Normal weight = 18.5–24.9 <br>
			Overweight = 25–29.9 <br>
			Obesity = BMI of 30 or greater<br><br>
			</span>'
?>
	<table>
	<form method="post" action="bmi-process.php">
	<tr>
		<td>Enter your weight (kg) </td>
		<td><input type="number" step="any" name="weight"></input></td> <?php // ovaj "any" dozvoljava upis decimalnih ili cijelih brojeva ?>
		<td style="color:c0c0c0;">For decimals, floating point is punctuation mark</td>
	</tr>
	<tr>
		<td>Enter your height (m) </td>
		<td><input type="number" step="any" name="height"></input></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td><input type = "submit" value="  Submit  "></input></td>
	</tr>
	</form>
	</table>
	<br>
	<?php 
		session_start();
		if(isset($_SESSION['bmi'])) {
			$ispis = $_SESSION['bmi'];
		} else {
			$ispis = ''; // 'Prvi unos - prazno'
		}
		echo $ispis;
	?>
					