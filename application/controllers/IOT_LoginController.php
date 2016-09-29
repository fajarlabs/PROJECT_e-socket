<?php



if (! defined ( 'BASEPATH' ))

	exit ( 'No direct script access allowed' );



class IOT_LoginController extends CI_Controller {

	private $login_sess;

	private $iotMember;

	private $redirectHome = "home";

	private $redirectLogin = "login";

	private $session_object;

	

	function __construct() {

		parent::__construct ();

		$this->load->model(array("iot_loginmodel"));

		

		// Create uniq id using uniqid method and ip address

		$unique_id = uniqid ();

		$ip_address = $this->input->ip_address ();

		$this->login_sess = md5 ( $unique_id ) . md5 ( $ip_address );


		// Object session checking

		$this->session_object = $this->session->userdata("session_object");

		

		// Checking session user

		if($this->session_object) redirect($this->redirectHome);

	}

	

	public function index() {

		// Title login

		$data ['title'] = "Login Panel | FajarLabs";

		// Error Message

		$data ['error_message'] = $this->session->flashdata ( "message_error_login" );

		// CSRF TOKEN

		$data ['csrf_hash'] = $this->security->get_csrf_hash ();

		$data ['csrf_token_name'] = $this->security->get_csrf_token_name ();

		// Send session to form

		$data ['monitor'] = $this->login_sess;

		// Load view template

		$this->load->view ( "LoginView", $data );

	}

	

	public function auth() {

		// Set rules data post

		$this->form_validation->set_rules ( 'userName', 'Username', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'passWord', 'Password', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'monitor', 'Monitor', 'required' );

		

		// Validation Input Checking

		if ($this->form_validation->run () === FALSE) {

			$this->session->set_flashdata ( "message_error_login", validation_errors () );

			redirect ($this->redirectLogin);

		} else {

			// Custom redirect controller

			$query = $this->iot_loginmodel->loginCheck(

					$this->input->post ("userName"),md5($this->input->post ("passWord") 

			));



			if ($query->num_rows () > 0) {

				foreach ( $query->result () as $key => $val ) {

					$this->iotMember = new IOT_Member(

						$val->mid, $val->userName, $val->firstName, 

						$val->lastName, $val->email, $val->phoneNumber, 

						$val->photo, null, null, null, null, $val->active

					);

				}

				

				// Save session array

				$this->session->set_userdata ( "session_object", $this->iotMember );

				

				// Custom modul redirect

				redirect ( $this->redirectHome );

			} else {

				$this->session->set_flashdata ( "message_error_login", "Username or password maybe wrong!" );

				redirect ( $this->redirectLogin );

			}

		}

	}

}