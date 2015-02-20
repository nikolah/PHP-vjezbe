<?php

	class Patuljak {
		public $rijec = 'riječ';
		public function pozdrav($textPozdrava) {
			return $textPozdrava;
			}
		public function predstaviSe() {
			return 'Bok, ja sam ' . $this->ime . ' i imam ' . $this->godine . ' godina';
			}
	#	public function __construct($ime) {
	#		$this->ime = $ime;
		}
	

	$ljutko = new Patuljak($nekitekst);
		$ljutko->ime = 'Ljutkoooo';
		$ljutko->godine = 24;
		
	echo $ljutko->ime . ' kaže bok';
	$text = 'Hello';
	echo '<br>';
	echo $ljutko->pozdrav($text);
	
	$smjesko = new Patuljak();
		$smjesko->ime = 'Smješko';
		$smjesko->godine = 25;
		
	echo '<br>';
	echo $smjesko->predstaviSe();
	
	echo '<br><br><br>';

	
	// Tamagochi

	// TAMAGOCHI - virtualni kućni ljubimac - OBJEKT
	//  - godine (int) (minus znači private proprety)
	//  - težina (int)
	// - emocije (int)
	// ----------------Izradi METODE (funkcije) unutar klase koje će biti javne i čijim ćemo pozivanjem moći očitati privatne, gore navedene varijable:
	// + saznaj Godine()
	// + saznaj Tezinu()
	// + saznaj Emocij()
	// + nahrani();
	// + podragaj();
	
	// ZADATAK
		// napraviti klasu tamagochi i implementirati nabrojene metode. metode trebaju vratiti godine i težinu koje su 'private'
		// ime tamagochija (Boris).. 'Boris(nahrani)'  - napravi funkciju koja će povećati vrijednost težine za 1
	
	class Tamagochi {
		private $god = 15;
		private $tez = 5;
		private $emo = 'lovely';
		public function godine() {
			return $this->god; 
			}
		public function tezina() {
			return $this->tez;
			}
		public function emocije() {
			return $this->emo;
			}
		public function nahrani() {
			$tez = $this->tez + 1;
			return $tez;
			}
		public function podragaj() {
			$emotion = $this->emo . ' 2 times!';
			return $emotion;
			}
	}
	$rex = new Tamagochi();
#		$rex->god =20;
		
	echo $rex->godine() . '<br>';
	echo $rex->tezina() . '<br>';
	echo $rex->emocije() . '<br>';
	echo $rex->nahrani() . '<br>';
	echo $rex->podragaj() . '<br>';