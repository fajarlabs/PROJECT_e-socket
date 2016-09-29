<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_MenuController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("optionmodel");
		$this->load->library("securitylibrary");

		// Memeriksa session object dari data login
		if(!$this->securitylibrary->sessionObjectStatus("session_object"))
			redirect("logout");

		// Memeriksa role modul
		if(!$this->securitylibrary->userRole(array("MenuController","DashboardController"),$this))
			redirect("logout");
	}

	public function index() {
		$data = array();
		$data['title'] = "Menus";

		// Query option menu
		$result = $this->optionmodel->getOption("menus");
		// Menu json value
		if(isset($result[0]->co_value))
			$data['menu_json'] = $result[0]->co_value;
		else 
			$data['menu_json'] = "";
		$data['csrf_hash'] = $this->security->get_csrf_hash();
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();

		$this->load->view("MenuView",$data);
	}

	// Untuk keperluan webservice
	public function webService($option) {
		switch($option) {
			default : 
				echo "This is menu webservice.";
			break;
			case "update" :
				if($this->securitylibrary->isPost()) {
					$this->form_validation->set_rules('json_menu', 'Json Menu','trim|required');
					if ($this->form_validation->run() === FALSE) 
				    	echo "Field Null";
				    else {
				    	$data = $this->input->post("json_menu",TRUE);
				    	$result = $this->optionmodel->setOption("menus",$data);
				    	if($result) 
							echo "Data Saved!";
						else 
							echo "No Data Saved!";
					}
				} else 
					echo "Access Denied!";
			break;
		}
	}
}