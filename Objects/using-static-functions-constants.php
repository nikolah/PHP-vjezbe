<?php
	define('pi',3.14);
	
	class Math 
	{
		const pi = 3.14;
		public $pi = 3.1414141;
			
	}

	$formula = new Math;
		echo $formula->pi; // ispisuje varijablu u klasi - objektni pristup
	echo '<br>';
	echo Math::pi; // :: ispisuje konstantu (u klasi Math) - statički pristup (u klasi možemo napraviti i funkciju 'public static function'
	echo '<br>';
	echo pi; // ispisuje konstantu izvan klase	

	echo '<br><br>';	
	
		
// ZADATAK1: Napraviti izračun površine(r*r*pi) i opsega kruga(2*r*pi), te pravokutnika kao: 1: objektni pristup i 2: statički pristup

	
	class Math2
	{
		const PI = 3.14;
		private $r;
		public static function opsegKruga($radijus) {
			return self::PI * 2 * $radijus;  // self::  - koristimo (unutar iste klase) za pozivanje konstante unutar funkcije
		}
		public static function povrsinaKruga($radius) {
			return self::PI * pow($radius,2);
		}
		public static function povrsinaPravokutnika($a, $b) {
			return $a * $b;
		}
		public function opsKruga($r) {
			return self::PI * 2 * $r;
		}
		public function povKruga($r) {
			return pow($r, 2) * self::PI;  
		}
		public function povKvadrata($a, $b) {
			return $a * $b;
		}
	}
	
	$radius = 8;
	$a = 2; // stranice pravokutnika
	$b = 6; 
	echo 'Ispis koristeći statičke funkcije:<br>';
	echo Math2::opsegKruga($radius) . ' - opseg kruga <br>';
	echo Math2::povrsinaKruga($radius) . ' - površina kruga<br>';
	echo Math2::povrsinaPravokutnika($a, $b) . ' - površina pravokutnika<br>';

	echo '<br>Ispis koristeći objekate:<br>';	
	$izracun = new Math2;
		echo $izracun->opsKruga($radius) . '<br>';
		echo $izracun->povKruga($radius) . '<br>';
		echo $izracun->povKvadrata($a, $b) . '<br>';