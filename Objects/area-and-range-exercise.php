<?php

// ZADATAK
// preko klasa napraviti kod za računanje opsega kruga(klasa) (2r*pi) i površine pravokutnika(klasa) (a*b) i kvadrata(klasa) (a*a) sa što manje korištenja istih formula

	class GeometrLik 
	{
		const pi = 3.14;
		protected $opseg;
		protected $povrsina;
		
		public function opseg() {
			return $this->opseg;
		}
		public function povrsina() {
			return $this->povrsina;
		}
	}
	
	class Pravokutnik extends GeometrLik 
	{
		protected $a;
		protected $b;
		
		public function __construct($a, $b) {
			$this->a = $a;
			$this->b = $b;
			
			$this->izracunaj();
		}
		public function izracunaj() {
			$this->povrsina = $this->a * $this->b;
			$this->opseg = 2 * ($this->a + $this->b);
		}
	}	

	class Kvadrat extends Pravokutnik
	{
		public function __construct($a) {
			$this->a = $a;
			$this->b = $a;
			parent::$this->izracunaj();
		}
		#public function izracunaj() {
		#	parent::izracunaj();
		#}
	} 
	
	class Krug extends Kvadrat
	{
		public function __construct($a) {
			$this->a = $a;
			$this->izracunaj();
		}
		public function izracunaj() {
			$this->povrsina = pow($this->a, 2)* parent::pi;
			$this->opseg = $this->a * 2 * parent::pi;
		}
	}
				
	$pravokutnik = new Pravokutnik(6, 2);
		echo 'Opseg pravokutnika: ' . $pravokutnik->opseg() . '<br>';
		echo 'Površina pravokutnika: ' . $pravokutnik->povrsina() . '<br><br>';
		
	$kvadrat = new Kvadrat(5);
		echo 'Površina kvadrata: ' . $kvadrat->povrsina() . '<br>';
		echo 'Opseg kvadrata: ' . $kvadrat->opseg() . '<br><br>';

	$krug = new Krug(4);
		echo 'Opseg kruga (kružnice): ' . $krug->opseg() . '<br>';
		echo 'Površina kruga: ' . $krug->povrsina() . '<br>';
	
?>