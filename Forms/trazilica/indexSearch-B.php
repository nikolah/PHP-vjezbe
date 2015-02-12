<meta charset="UTF-8">
<br>
<span style="font-size:22; color:c0c0c0;">Pravimo primitivnu tražilicu (Search engine)</span>
<?php	
	session_start();
?>
<br><br>
	<table>
		<tr>
			<td>Upiši riječ:</td>
			<form method="POST" action="obradaSearch.php">
			<td><input type="text" name="rijec1"></input></td>
			<td><input type="submit" value="   Potvrdi   "></input></td>
			</form>
		</tr>
		<tr>
			<td>Upiši slovo ili riječ pretrage:</td>
			<form method="POST" action="obradaSearch.php">
			<td><input type="text" name="rijec2"></input></td>
			<td><input type="submit" value="   Potvrdi   "></input></td>
			</form>
		</tr>
	</table>
<br>
<?php
	if (isset($_SESSION['rijec1'])) {
		$rijec1 = $_SESSION['rijec1'];
		$ispisDat = $_SESSION['dat'];
		$rijec2 = $_SESSION['rijec2'];
		$seekRijeci = $_SESSION['seek'];
		echo 'Upisana riječ: ' . $rijec1 . '<br>';
		echo 'Sve riječi upisa: ' . $ispisDat . '<br>';
		echo 'Riječ ili slovo pretrage: ' . $rijec2 . '<br>';
		echo 'Rezultat pretrage: ' . $seekRijeci . '<br>';
	} 
	$_SESSION['rijec1'] = '';
	$_SESSION['rijec1'] = '';	
?>
<br>
<form method="POST" action="obradaSearch.php">
<button type="submit" name="clear">Obiši sve upise</button>
</form>
