<?php
	session_start();

	// Kreiranje datoteke 'rijeci.txt' ako je nema - (da ne izbacije grešku)
	if(isset($_POST['sve'])) {
		fopen('rijeci.txt', 'x');
		}
	
	// Upis podatka u datoteku
	if(isset($_POST['rijec1']) && $_POST['rijec1'] != '' && $_POST['rijec1'] != null) {
		$rijec1 = $_POST['rijec1'];
		$fp = fopen("rijeci.txt", 'a+');
		$upis = $rijec1 . "\n"; // umjesto "\n" može i PHP_EOL (prebacuju u novi red)
		fwrite($fp, $upis); // funkcionira i kao fwrite($fp, $upis, strlen($upis));
		fclose($fp);		
	}

	// Broj linija (redova) - funkcija
	function linije ($imeDat) {
		$brojLinija = '';
		$fp = fopen($imeDat, 'r');
		while($line = fgets($fp)) {
			$brojLinija++;
		} 
		return $brojLinija;
	}


	// Broj upisanih znakova (nakon brisanja) uključujući razmake. 
		// Funkcija 'strlen' broji i redove pa smo broj redova oduzeli kako bismo dobili točan broj upisanih znakova
	$brZnakova = '';
	if(isset($_POST['brojZnakova']) || isset($_POST['sve'])) {  // "sve" je samo zbog mogućeg ispisa sveg što slijedi jednom tipkom "ispiši sve"
		$znakovi = file_get_contents('rijeci.txt');
		$brZnakova = strlen($znakovi) - linije('rijeci.txt');
	} 
	$_SESSION['brojZnakova'] = $brZnakova;

	
	// Broj linija u datoteci
	$brRedova = '';
	if(isset($_POST['brojRedova']) || isset($_POST['sve'])) {
		$brRedova = linije('rijeci.txt');
		}
	$_SESSION['brojRedova'] = $brRedova;
	

	// broj riječi (razmaka + prijelaza u novi red)
	$brojacRijeci = '';
    if(isset($_POST['brojRijeci']) || isset($_POST['sve'])) {
		$znakovi = file_get_contents('rijeci.txt');
		for($i=0; $i<=strlen($znakovi)-1; $i++) {
			if ($znakovi[$i] == " " || $znakovi[$i] == "\n") {
				$brojacRijeci++;
			}
		};
	}
	$_SESSION['brojRijeci'] = $brojacRijeci;	

	
	// broj rečenica
	$brojacRecenica = '';
    if(isset($_POST['brojRecenica']) || isset($_POST['sve'])) {
		$znakovi = file_get_contents('rijeci.txt');
		for($i=0; $i<=strlen($znakovi)-1; $i++) {
			if ($znakovi[$i] == ". " || $znakovi[$i] == "?" || $znakovi[$i] == "!") {
				$brojacRecenica++;
			} 
		};
		if ($brojacRecenica == 0 || $brojacRecenica == '' | $brojacRecenica == null) {
			$brojacRecenica = 'There is no sentence';
			}
	}
	$_SESSION['brojRecenica'] = $brojacRecenica;	
	

	// Posljednja riječ upisa	
	$zRijec = '';
	if(isset($_POST['zadnjaRijec']) || isset($_POST['sve'])) {
		$fp = fopen('rijeci.txt', 'r');
		while($line = fgets($fp)) {
			$zRijec = $line;
			}
		fclose($fp);
	} 
	$_SESSION['zadnjaRijec'] = $zRijec;
	
	
	 // Ispis svih rijeci
	 $ispisDatoteke = '';
	 if(isset($_POST['sveRijeci']) || isset($_POST['sve'])) {
		$ispisDatoteke = file_get_contents('rijeci.txt');
		}
	$_SESSION['sveRijeci'] = $ispisDatoteke;
	
	
	// Tražilica
	
		// Upis riječi pretrage u datoteku
	
	if(isset($_POST['rijecPretrage']) && $_POST['rijecPretrage'] != '' && $_POST['rijecPretrage'] != null) {
		$rijecPretrage = $_POST['rijecPretrage'];
		$fp2 = fopen("rijecPretrage.txt", 'w');
		$upisPretrage = $rijecPretrage; 
		fwrite($fp2, $upisPretrage); 
		fclose($fp2);		
	}
	
		// Ispis riječi pretrage
	$ispisRijeciPretrage = '';
	if(isset($_POST['ispisRijecPretrage']) || isset($_POST['sve'])) {
		$fp2 = fopen("rijecPretrage.txt", 'r+');
		$ispisRijeciPretrage = fread($fp2, 100);
		fclose($fp2);
	}
	$_SESSION['ispisRijeciPretrage'] = $ispisRijeciPretrage;
	
	
	// Pretraga datoteke po riječi pretrage

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

		// Funkcija pretrage po nizu
	function seek($x, $strin) {  // $x - naziv niza koji pretražujemo, $strin - riječ pretrage
		$ispis = ''; 
		foreach ($x as $k => $v) {
				$pretraga = strstr($v, $strin);
			if ($pretraga == true || $v == $strin) {
				$ispis = $ispis . $v . ', ';
				}
		}
		return $ispis;
	}
			
		// Pretražujemo
	$rezultatPretrage = '';
	if(isset($_POST['rezultatPretrage']) || isset($_POST['sve'])) {
		$nizDatoteke = niz('rijeci.txt');
		$fp2 = fopen("rijecPretrage.txt", 'r+');
		$rijecPretrage = fread($fp2, 100);		
		if ($rijecPretrage != null) {
			$pretraga = seek($nizDatoteke, $rijecPretrage);
			if ($pretraga == '' || $pretraga == null || $pretraga == false) {
				$rezultatPretrage = 'No search result with: ' . $rijecPretrage;
			} else {
				$rezultatPretrage = $pretraga;
				}
		} else {
			$rezultatPretrage = 'There is no word/letter of search';
			}
		fclose($fp2);
	}
	$_SESSION['rezultatPretrage'] = $rezultatPretrage;
	
		// Brisanje riječi pretrage
	if(isset($_POST['deletePretraga'])) {
		$fp2 = fopen("rijecPretrage.txt", 'w');	
		fwrite($fp2, null);
		fclose($fp2);
		}
	
		// Ispis datoteke kao niza
	$ispisNiza = '';
	if(isset($_POST['niz']) || isset($_POST['sve'])) {
		$nizDatoteke = niz('rijeci.txt');
		$niz = '';
			foreach($nizDatoteke as $k => $v) {
				$niz = $niz . $k . ' => ' . $v . ', ';
			}
		$ispisNiza = $niz;
		}
	$_SESSION['ispisNiza'] = $ispisNiza;
	
	// Brisanje podataka datoteke
	if(isset($_POST['brisanje'])) {
		$fp2 = fopen('rijeci.txt', 'w');
		fwrite($fp2, '');
		fclose ($fp2);
		$fp3 = fopen('rijecPretrage.txt', 'w');
		fwrite($fp3, '');
		fclose ($fp3);	
		}
		
	header('Location: index4b.php');
?>