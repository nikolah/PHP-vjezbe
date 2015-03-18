<?php
	function numb($x) {
		$y = '';
		for ($i=0; $i<=strlen($x)-1; $i++) {
			if ($x[$i] == ',') {
				$x[$i] = '.';
			}
			$y = $y . $x[$i];
		}
		return $y;
	};

	// Ukoliko želimo aktualni tečaj (preko HNBa) moramo utvrditi koji je datum na HNB-u aktualan, pošto se on stalno mijenja
	// Radimo provjeru sutrašnjeg, današnjeg i jučerašnjeg. važeći uvrštavamo

 	function fpfunct() {
		// pravimo sutrašnji datum u skladu s nazivom filea HNB-a iz kojeg čitamo tečaj
		$tomorrow = new DateTime('tomorrow');
		$tomorrowPrint = $tomorrow->format('dmy');
		
		// današnji datum 
		$today = date('dmy');

		// jučer
		$yesterday = new DateTime('yesterday');
		$yestPrint = $yesterday->format('dmy');
	
		// biramo aktualan
	   	$tom = 'http://www.hnb.hr/tecajn/f' . $tomorrowPrint . '.dat';  // Aktualni tečaj za poneke valute sa stranice HNB-a koji ih preuzima iz bloomberga	
		$tod = 'http://www.hnb.hr/tecajn/f' . $today . '.dat';
		$yest = 'http://www.hnb.hr/tecajn/f' . $yestPrint . '.dat';	
 
		if(@fopen($tom, 'r') == true) {  // '@' na početku - ne otvara url ukoliko file ne postoji
			$fp = fopen($tom, 'r');
		}
		else if (@fopen($tod, 'r') == true){
			$fp = fopen($tod, 'r');			
		}
		else if (@fopen($yest, 'r') == true){
			$fp = fopen($yest, 'r');			
		}
		return $fp;
	};
	
?>