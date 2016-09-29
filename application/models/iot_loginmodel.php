<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_LoginModel extends CI_Model {
	private $table = "iot_member";

	public function __construct() {
		parent::__construct();
	}
	
	public function loginCheck($userName, $passWord) {
		$query = $this->db->get_where ( $this->table, array (
				"userName" => $userName,
				"passWord" => $passWord
		));
		
		return $query;
	}
	
}