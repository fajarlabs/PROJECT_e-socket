<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_TokenLibrary {

	private $max = 4;
	
	// 12345-12345-12345-12345 
	private function rand10000() {
		return rand(10000,99999);
	} 

	public function generate() {
		$token = "";
		for($i = 0; $i < 4; $i++) {
			$comma = "";
			if(($this->max-1) != $i) {
				$comma = "-";
			}
			$token .= $this->rand10000().$comma;
		}

		return $token;
	}
}
