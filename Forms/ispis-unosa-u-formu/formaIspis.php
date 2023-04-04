<meta charset="UTF-8">

<?php

// ZADATAK1: napraviti od ovoga ispis unosa:
//		- upišemo riječ u formu i potvrdimo, ispiše ga ispod
//		- kad ne upišemo ništa u formu, nakon submitanja ispiše "Nema unosa"
//  	- kad reloadamo, ne ispiše se ništa (ili napiše nešto - npr "Stranica je 're-učitana' - prazno")
// 		- moramo uvesti i rezultat prvog učitavanja stranice, koji je priča za sebe (može biti prazno ili napiše npr.: 'Stranica je "re-učitana" - prazno'. Ako želimo to isprobati, treba promijeniti naziv 'izjava' unutar sesije ($_SESSION['izjavaa']) u naziv koji još nije bio korišten (u 'obradaUnosa.php' i 'formaIspis.php').  
//		RIJEŠENO!
// ZADATAK2: brojač reloada (VAŽNO - da od prvog otvaranja filea ne javlja grešku o nepoznatoj varijabli) - RIJEŠENO!
// ZADATAK3: napraviti stvarni kalkulator potencije brojeva i eksponenta do 9 - RIJEŠENO!


session_start();	
?>

<br>
<form method="POST" action="obradaUnosa.php">
<span style="color:c0c0c0; font-size:22px;">Ispis unešene riječi</span>
	<table>
		<tr>
			<td>Upiši riječ</td>
			<td><input type="text" name="rijec"></input></td>
		</tr>
			<td></td>
			<td><input type="submit" value="  Potvrdi  "></input></td>
		</tr>
	</table>
</form>
<?php

	if (isset($_SESSION['izjavaa'])) {
		$izjava = $_SESSION['izjavaa'];
		}
	else {
		$izjava = '<span style="color:c0c0c0;">"Prvi unos - prazno"</span>'; // rezultat prvog unosa odnosno učitavanja
		}
	echo $izjava;
	$_SESSION['izjavaa'] = '<span style="color:c0c0c0;">Stranica je "re-učitana" - prazno</span>';  // ovaj $_SESSION je ključ reacije kod učitavanja stranice
	echo '<br>';
	
?>
		


