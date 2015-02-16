<meta charset="UTF-8">
<br>
<span style="font-size:24; color:c0c0c0;">Upisani podaci upisuju se u datoteku, uz moguću pretragu i ispis</span>
<?php
	session_start();
?>
<br><br><br>
	<table>
	<tr>
		<td>Upiši riječ</td>
		<form method="POST" action="obradaIndexa4.php">
		<td><input type="text" name="rijec1"></td>
		<td><input type="submit" value="   Potvrdi    "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">
		<td>Upiši slovo ili riječ pretrage:</td>
		<td><input type="text" name = "rijecPretrage"></td>
		<td><input type="submit" value="   Potvrdi    "></td>
		</form>
	</tr>
	</table>
<br>
	<table>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brojZnakova' value="  Broj upisanih slova  "></td>
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
		<td><input type="submit" name='brojRedova' value="  Broj redova u datoteci  "></td>
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
		<td><input type="submit" name='brojRijeci' value="  Broj upisanih riječi "></td>
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
		<td><input type="submit" name='brojRecenica' value="  Broj upisanih rečenica  "></td>
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
		<td><input type="submit" name='zadnjaRijec' value="  Posljednje upisana riječ/riječi  "></td>
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
		<td><input type="submit" name='sveRijeci' value="  Sve upisane riječi  "></td>
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
		<td><input type="submit" name='ispisRijecPretrage' value="  Riječ pretrage  "></td>
		</form>
		<td>
		<?php
			$ispisRijeciPretrage = $_SESSION['ispisRijeciPretrage'];
			echo $ispisRijeciPretrage;
		?>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='rezultatPretrage' value="  Rezultat pretrage  "></td>
		</form>
		<td>
			<?php
				echo $_SESSION['rezultatPretrage'];
			?>
		</td>
	</tr>	
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='deletePretraga' value="  Obriši riječ pretrage  "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='niz' value="  Ispiši sve riječi datoteke kao niz  "></td>
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
		<td><input type="submit" name='sve' value="  Ispiši sve   "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='obrisiSve' value="  Obriši sve  "></td>
		</form>
	</tr>
	<tr>
		<form method="POST" action="obradaIndexa4.php">	
		<td><input type="submit" name='brisanje' value="  Obriši sve podatke u datoteci  "></td>
		</form>
	</tr>
	</table>