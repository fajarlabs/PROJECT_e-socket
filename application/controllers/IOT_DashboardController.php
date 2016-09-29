<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_DashboardController extends CI_Controller {

	private $session_object;
	private $redirectLogout = "logout";

	public function __construct() {
		parent::__construct();

		// Object session checking
		$this->session_object = $this->session->userdata("session_object");
		
		// Checking session user
		if(!$this->session_object) redirect($this->redirectLogout);
	}

	public function index() {
		$data = array();
		$data['title'] = "Dashboard";
		$this->load->view("DashboardView",$data);
	}

	public function view($id,$data) {
		echo "hello $id $data";	
	}
}