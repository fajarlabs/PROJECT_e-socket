<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class ci_defaultcontroller extends CI_Controller {



	function __construct() {

		parent::__construct();

	}



	public function index() {

		redirect("login");

	}
}