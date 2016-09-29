<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SecurityLibrary {

	private $CI;
	private $action = array("create","read","update","delete");

	public function __construct() {
		$this->CI =& get_instance();
	}

	public function actionRole($segmen = null) {
		$method = $this->CI->uri->segment(2);
		foreach($this->action as $key => $val) {
			if($method == $val) {
				return true;
			}
		}
	}
}