<?php

	class CoolTable 
	{

		private $header;
		private $body;

		public function setHeader() 
		{
			$args = func_get_args(); 
			if(is_array($args[0])) {
				$this->header = $args[0];
				}
			else {
				$this->header = $args;
				}
		}
		
		public function setRow() 
		{
			$args = func_get_args(); 
			if(is_array($args[0])) {
				$this->body[] = $args[0];
				}
			else {
				$this->body[] = $args;
				}
		}
		
		public function tableHTML() 
		{
			// prepare table
			$html = '<table>' . PHP_EOL;
			
			// prepare header
			$html .= '<tr>' . PHP_EOL;
				foreach($this->header as $element) {
					$html .= '<th>' . $element . '</th>' . PHP_EOL;
					}
			$html .= '</tr>' . PHP_EOL;
			
			// prepare body
			foreach($this->body as $row) {
				$html .= '<tr>' . PHP_EOL;
				foreach($row as $element) {	
					$html .= '<td>' . $element . '</td>' . PHP_EOL;
					}
				$html .= '</tr>' . PHP_EOL;
			}
			$html .= '</table>';
			return $html;
		}	
	}		
		
	$tabla = new CoolTable();	
		$tabla->setHeader('Ime', 'Prezime', 'OiB');
		$tabla->setRow('Janko', 'Gospočić', '258123');
		$tabla->setRow('Karla', 'Kos', '324144');
		echo $tabla->tableHTML();
		
		
		
		
		
		
		
		
		
		
		