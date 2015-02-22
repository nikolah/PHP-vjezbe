<?php
	
	// func_get_args - primjer kako pomoću klasa ispisuje upisane argumente
	// func_get_args - čini se da spravlja argumente u niz. koliko ima argumenata, toliko ih isporuči	
	// argumenti mogu određivati sadržaj tablice ili koješta drugo
	// prvi dio coolTablice - kasnije to proširimo na izradu cijele tablice
		
	class pocetakCoolTablice {
		private $header;

		public function setHeader()
		{
			$args = func_get_args();
			if(is_array($args[0])) {
				$this->header = $args[0];
			} else {
				$this->header = $args;
				}
		}

		public function rezultat()
		{
			$ispis = '';
			foreach ($this->header as $element) {
				$ispis = $ispis . $element . ', ';
				}
			return $ispis;
		}
	}
	
	$tablica = new pocetakCoolTablice;
		$tablica->setHeader(1, 'hrana');
		echo $tablica->rezultat();
?>