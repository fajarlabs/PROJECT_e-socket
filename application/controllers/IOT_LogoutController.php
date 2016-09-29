<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_LogoutController extends CI_Controller {

	private $redirectLogin = "login";

	function __construct() {
		parent::__construct();
		$this->session->sess_destroy();
	}

	public function index() {
		redirect($this->redirectLogin);
	}

}