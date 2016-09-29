<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class CI_Error404Controller extends CI_Controller {



	function __construct() {

		parent::__construct();

	}



	public function index() {

		$data['title'] = "Error 404";
		$this->load->view("Error404View",$data);

	}
}