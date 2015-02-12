<?php
	session_start();

	if (isset($_POST['rijec1']) && $_POST['rijec1'] != "" && $_POST['rijec1'] != null) {
		$rijec1 = $_POST['rijec1'];	
		$_SESSION['rijec1'] = $rijec1;
		$fp = fopen('rijeci.txt', 'a+');
		$upis = $rijec1 . "\n";
		fwrite($fp, $upis);
		fclose($fp);
	}
	// Pravimo niz iz podataka datoteke.
	function niz($imeDat) {
		$znakovi = file_get_contents($imeDat);
		$brZnakova = strlen($znakovi);
		$fp = fopen($imeDat, 'r');
		$rijeci = fread($fp, $brZnakova);
		$nizDat = explode("\n", $rijeci);
			// eliminiramo prazan red iz niza
			$brojac = 0;
			foreach($nizDat as $k => $v) {
				if($v == "") {
					unset($nizDat[$brojac]);
					}
				$brojac++;
			};
		return $nizDat;
		}	
	
	$datoteka = niz('rijeci.txt');
	$ispisDatoteke = '';
	foreach ($datoteka as $k => $v) {
		$ispisDatoteke = $ispisDatoteke . $v . ', ';
		}
		
	$_SESSION['dat'] = $ispisDatoteke;	
		
	// riječ pretrage - rijec2
	if (isset($_POST['rijec2']) && $_POST['rijec2'] != "" && $_POST['rijec2'] != null) {
		$rijec2 = $_POST['rijec2'];	
		$_SESSION['rijec2'] = $rijec2;
		}
	
	// funkcija traži među upisanim elementima ('$datoteka') riječ 'rijec2'
	// tražilica nije strpos() ili stripos() nego strstr()
	function seek($x, $strin) {
		$ispis = ''; 
		foreach ($x as $k => $v) {
				$pretraga = strstr($v, $strin);
			if ($pretraga == true || $v == $strin) {
				$ispis = $ispis . $v . ', ';
				}
		}
		return $ispis;
	}
	$seekRijeci = seek($datoteka, $rijec2);
	$_SESSION['seek'] = $seekRijeci;
	
	// brisanje svog sadržaja iz datoteke:
	#file_put_contents('rijeci.txt', '');
	if(isset($_POST['clear'])) {
		file_put_contents('rijeci.txt', '');  // briše sadržaj iz 'rijeci.txt'
		// prikazivanje ništavnog stanja nakon tipke brisanja
		$_SESSION['dat'] = '';
		$_SESSION['rijec1'] = '';
		$_SESSION['rijec2'] = '';
		$_SESSION['seek'] = '';
		}	
	
	header('Location: indexSearch-B.php');	
?>
