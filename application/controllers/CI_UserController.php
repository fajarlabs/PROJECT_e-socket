<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_User extends CI_Controller {

	private $table = "ref_users";

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array();
		$data['title'] = "User Manajer";
		$data['query'] = $this->db->get("ref_users");
		$this->load->view("UserView",$data);
	}

	public function edit() {
		$args = func_get_args();
		$id =(int) isset($args[0]) ? $args[0] : 0;
		$data['query'] = $this->db->get_where($this->table,array("ru_id"=>$id));
	}

	public function delete() {
		// $args = func_get_args();
		// $id = (int) isset($args[0]) ? $args[0] : 0;
		// $this->db->delete($this->table,array("ru_id"=>$id));

		// redirect("user");
	}

	public function update() {
		$data = array (
			"ru_name" => $this->input->post("ru_name"),
			"ru_full_name" => $this->input->post("ru_full_name"),
			"ru_password" => md5($this->input->post("ru_password")),
			"ru_level" => $this->input->post("ru_level"),
			"ru_status" => $this->input->post("ru_status")
		);

		$this->db->where("ru_id",$this->input->post("ru_id"));
		$this->db->update($this->table, $data);

		redirect("user");
	}

	public function insert() {
		$data = array (
			"ru_name" => $this->input->post("ru_name"),
			"ru_full_name" => $this->input->post("ru_full_name"),
			"ru_password" => md5($this->input->post("ru_password")),
			"ru_level" => $this->input->post("ru_level"),
			"ru_status" => $this->input->post("ru_status")
		);

		$this->db->insert($this->table, $data); 

		redirect("user");
	}
}