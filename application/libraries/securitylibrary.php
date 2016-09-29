<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SecurityLibrary {

	private $CI;
	private $action = array("create","read","update","delete");

	public function __construct() {
		$this->CI =& get_instance();
	}

	public function sessionObjectStatus($name) {
		$session_object = $this->CI->session->userdata($name);
		if((is_object($session_object)) && (!empty($session_object)))
			return true;
		else 
			return false; 
	}

	public function userRole($role,$class) {
		if(is_array($role)) {
			$myClass = get_class($class);
			foreach($role as $val){
				if($val == $myClass)
					return true;
			}

			return false;
		}
	}

	public function isPost() {
		if($_SERVER['REQUEST_METHOD'] == "POST")
			return true;
		else 
			return false;
	}

	public function isGet() {
		if($_SERVER['REQUEST_METHOD'] == "POST")
			return true;
		else 
			return false;
	}
}