<?php
	
	class Validate
	{
		public static function email($email) {
			return filter_var($email, FILTER_VALIDATE_EMAIL); // filter_var vraća true or false
		}

		public static function datum($date) {
			// kod upisa datuma želimo da razdvajanja sa '/' i '-' također rade. pretvaramo ih u točku
			$date1 = '';
			for($i=0; $i<=strlen($date)-1; $i++) {
				if($date[$i] == '/' || $date[$i] == '-') {
					$date[$i] = '.';
					}
				$date1 = $date1 . $date[$i];
			}
			$dateNiz = explode('.', $date1);
			$d = $dateNiz[0];
			$m = $dateNiz[1];
			$y = $dateNiz[2];
			return checkdate( $m, $d, $y );
		}
	}
	
	// validacija e-adrese
	$e_adresa = 'jasna.msb.hr';
		if (Validate::email($e_adresa)) {
			echo 'E-adresa ispravna - correct';
		} else {
			echo 'E-adresa neispravna - wrong';
			}

	echo '<br>';
			
	// provjera, validacija datuma 1 (dd mm yy).
	$datum = '28/2/2015';
	if (Validate::datum($datum)) {
		echo 'Datum je ispravan - correct';
	} else {
		echo 'Datum je neispravan - wrong';
		}
?>
	