<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_OptionModel extends CI_Model {
	private $table = "ci_options";

	public function __construct() {
		parent::__construct();
	}

	public function setOption($opt,$val) {
	    $data = array("co_value" => $val );
		$this->db->where("co_option_name",$opt);
		$this->db->update("ci_options", $data); 
		return $this->db->affected_rows(); 
	}

	public function getOption($opt) {
		$query = $this->db->get_where(
			$this->table, 
			array('co_option_name' => $opt)
		);
		return $query->result();	
	}
}