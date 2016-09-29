<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_HomeController extends CI_Controller {
	
	private $session_object;
	private $redirectLogout = "logout";

	function __construct() {
		parent::__construct();
		
		// Load Library
		$this->load->library(array("securitylibrary","datetimelibrary"));
		
		// Object session checking
		$this->session_object = $this->session->userdata("session_object");
		
		// Checking session user
		if(!$this->session_object) redirect($this->redirectLogout);
	}

	public function index() {
		$data = array();
		// Title Halaman Web
		$data['title'] = "Wellcome";
		// Data sesi login
		$data['session_object'] = $this->session_object;
		// Untuk menampilkan halaman pertamakali pada iframe
		$data['first_page'] = array("tab_title" => "Dashboard", "src" => "dashboard");
		// Load tampilan
		$this->load->view("HomeView",$data);
	}
}