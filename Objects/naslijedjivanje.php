<?php
	class Lik 
	{
		public $ime;
		public function hi()
		{
			return 'Hi! My name is ' . $this->ime;
		}
	}
	
	class Patuljak extends Lik 
	{
		public function drink() {
			return 'živeli!';
			}
	}
	
	class Snjegulica extends Lik
	{
		public function hi() {
			return parent :: hi() . " What's your name?";
			}
	}
	
	class beba extends Snjegulica
	{
		public function hi() {
			$this->ime = ' bebaa ...';
			return parent :: hi() . ' ueeeeeee :( :( !!';
			}
	}
	
	$snjesko = new Lik();
		$snjesko->ime = "Snješko";
		echo $snjesko->hi() .'<br>';
		
	$ljutko = new Patuljak();
		$ljutko->ime = "Ljutko";
		echo $ljutko->drink() . '<br>';
		echo $ljutko->hi() . '<br>';
		
	$curica = new Snjegulica();
		$curica->ime = 'Curica ko Snjegulica. ';
		echo $curica->hi() . '<br>';

	$beba = new Beba();
		echo $beba->hi() . '<br>';

?>
	
	
	
	
	
	