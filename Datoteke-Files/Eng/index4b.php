<meta charset="UTF-8">
<br>
<span style="font-size:24; color:c0c0c0;">Data is written in file, with possible search and display on screen</span>
<?php
	session_start();
?>
<br><br><br>
	<table>
	<tr>
		<td>Enter a word or some text </td>
		<form method="POST" action="obradaIndexa4.php">
		<td><input type="text" name="rijec1"></td>
		<td><input type="submit" value="   Potvrdi    "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">
		<td>Enter a word or letter of search </td>
		<td><input type="text" name = "rijecPretrage"></td>
		<td><input type="submit" value="   Potvrdi    "></td>
		</form>
	</tr>
	</table>
<br>
	<table>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brojZnakova' value="  Number of letters/marks  "></td>
		</form>
		<td>
		<?php
			$brZnakova = $_SESSION['brojZnakova'];
			echo $brZnakova; 
		?>
		</td>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brojRedova' value="  Number of lines  "></td>
		</form>
		<td>
		<?php
			$brLinija = $_SESSION['brojRedova'];
			echo $brLinija; 
		?>
		</td>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brojRijeci' value="  Number of words  "></td>
		</form>
		<td>
		<?php
			$brRijeci = $_SESSION['brojRijeci'];
			echo $brRijeci;
		?>
		</td>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brojRecenica' value="  Number of sentences  "></td>
		</form>
		<td>
		<?php
			$brRecenica = $_SESSION['brojRecenica'];
			echo $brRecenica;
		?>
		</td>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='zadnjaRijec' value="  Last entered word  "></td>
		</form>
		<td>
		<?php
			$zRijec = $_SESSION['zadnjaRijec'];
			echo $zRijec; 
		?>
		</td>
		</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='sveRijeci' value="  All of the entered words  "></td>
		</form>
		<td>
		<?php
			$sveRijeci = $_SESSION['sveRijeci'];
			echo $sveRijeci;

		?>
		<td>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='ispisRijecPretrage' value="  The word of search  "></td>
		</form>
		<td>
		<?php
			$ispisRijeciPretrage = $_SESSION['ispisRijeciPretrage'];
			echo $ispisRijeciPretrage;
		?>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='rezultatPretrage' value="  Search  "></td>
		</form>
		<td>
			<?php
				echo $_SESSION['rezultatPretrage'];
			?>
		</td>
	</tr>	
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='deletePretraga' value="  Delete the word of search  "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='niz' value="  Display text as an array  "></td>
		</form>
		<td>
			<?php
				echo $_SESSION['ispisNiza'];
			?>
		</td>
	</tr>	
	</table>
<br>

	<table>
		<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='sve' value="  Display all   "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='obrisiSve' value="  Clear all   "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brisanje' value="  Delete all entered data in the files  "></td>
		</form>
	</tr>
	</table>