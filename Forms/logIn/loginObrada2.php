<?php
	session_start();

		// Broj linija (redova) - funkcija
	function linije ($imeDat) {
		$brojLinija = '';
		$fp = fopen($imeDat, 'r');
		while($line = fgets($fp)) {
			$brojLinija++;
		} 
		return $brojLinija;
	}

	// upis usernamea i passworda u datoteke
			// (mogli smo oba upisati u istu datoteku pa kasnije lakše sparivati (uz 1 foreach) i smanjiti posao kreiranja nizova i svega). Ostavio ovako zbog zgodnog sparivanja 2 foreacha u 2 datoteke uz mogući isti username u jednoj datoteci...
	if(isset($_POST['register']) && $_POST['userReg'] != '' && $_POST['userReg'] != null && $_POST['passReg'] != '' && $_POST['passReg'] != null) {
		$userReg = $_POST['userReg'];
		$passReg = $_POST['passReg'];
		$fp = fopen("usernames.txt", 'a+');
		$fp2 = fopen("passwords.txt", 'a+');
		$upisUser = $userReg . "\n"; // umjesto "\n" može i PHP_EOL (prebacuju u novi red)
		fwrite($fp, $upisUser); // funkcionira i kao fwrite($fp, $upis, strlen($upis));
		fclose($fp);
		$upisPass = $passReg . "\n"; 
		fwrite($fp2, $upisPass); 
		fclose($fp2);		

		// provjeravamo broj upisa i brišemo podatke u datotekama ukoliko imamo 50 upisa (točnije : brišemo datoteku i otvaramo novu praznu)
		if (linije('usernames.txt') == 50) {
			unlink('usernames.txt');
			unlink('passwords.txt');
			$fp = fopen("usernames.txt", 'a+');
			$fp2 = fopen("passwords.txt", 'a+');
			$upisUser = $userReg . "\n"; 
			fwrite($fp, $upisUser); 
			fclose($fp);
			$upisPass = $passReg . "\n"; 
			fwrite($fp2, $upisPass); 
			fclose($fp2);
			}		
	} 
	
	// pretvaramo username i passworde u nizove
	
		// funkcija pravi niz iz dat
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
									
	$nizUser = niz('usernames.txt');
	$nizPass = niz('passwords.txt');
	
	// pretražimo dali upisani logUser postoji u datoteci usera. Ako da, ispisujemo ključ. Isto za password. Usporedimo ključeve
	
	if(isset($_POST['login']) && $_POST['userLog'] != '' && $_POST['userLog'] != null && $_POST['passLog'] != '' && $_POST['passLog'] != null) {			
		$userLog = $_POST['userLog'];
		$passLog = $_POST['passLog'];

	// napraviti drugačiju petlju : foreach jedan za drugim,  pa u 2. foreachu varijable $k i $v iz prvog staviti u jednu i usporediti s drugom. ako se nađu 2 iste: true
		$izjava = 'prazno';
		$inputed = $userLog.$passLog;
		foreach($nizUser as $key => $value) {
			foreach($nizPass as $k => $v) {
				$user = $value.$v;
				if($user == $inputed) {
					$izjavaa = 'Free';
					break 2;  // "2" znači da se odnosi na obje petlje
				} else {
					$izjavaa = 'Nemože';
					}
			}
		}
			
		if($kljucUsera == $kljucPass && $kljucUsera != '' && $kljucPass != '' && $kljucUsera != null && $kljucPass != null) {     //$kljucUsera == $kljucPass && $kljucUsera != '' && $kljucPass != ''
				$izjava = '<span style="color:c0c0c0;">Free enterance</span>';
			} else {
				$izjava = '<span style="color:c0c0c0;">Wrong username or password</span>';
				} 
	} else {
		$izjava = '';
		}
		
	$_SESSION['izjava'] = $izjavaa;

	header('Location: zadatakLogin.php');
		