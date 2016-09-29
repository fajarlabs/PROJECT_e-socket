<?php 



if (! defined ( 'BASEPATH' ))

	exit ( 'No direct script access allowed' );



class IOT_SignupController extends CI_Controller {



	private $redirectSignup = "signup";



	public function __construct() {

		parent::__construct();

		$this->load->library(array("ci_tools"));

		$this->load->model(array("iot_membermodel"));



		// Create uniq id using uniqid method and ip address

		$unique_id = uniqid ();

		$ip_address = $this->input->ip_address ();

		$this->login_sess = md5 ( $unique_id ) . md5 ( $ip_address );

	}



	public function index() {

		// Title login

		$data ['title'] = "Register Panel | FajarLabs";

		$data ['form_path'] = base_url()."{$this->redirectSignup}/create";

		// Error Message

		$data ['error_message'] = $this->session->flashdata ( "message_error_login" );

		// CSRF TOKEN

		$data ['csrf_hash'] = $this->security->get_csrf_hash ();

		$data ['csrf_token_name'] = $this->security->get_csrf_token_name ();

		// Send session to form

		$data ['monitor'] = $this->login_sess;



		$this->load->view("SignupView",$data);

	}



	public function create() {

		// Set rules data post

		$this->form_validation->set_rules ( 'fullName', 'Fullname', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'userName', 'Username', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'email', 'Email', 'trim|required|valid_email|min_length[5]' );

		$this->form_validation->set_rules ( 'password', 'New Password', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'password2', 'Confirm Password', 'trim|required|min_length[5]' );

		$this->form_validation->set_rules ( 'monitor', 'Monitor', 'required' );

		

		// Validation Input Checking

		if ($this->form_validation->run () === FALSE) {

			$this->session->set_flashdata ( "message_error_login", validation_errors () );

			redirect ($this->redirectSignup);

		} else {



			$firstName = $this->ci_tools->sanitize_text($this->input->post("firstName"));

			$lastName  = $this->ci_tools->sanitize_text($this->input->post("lastName"));

			$userName  = $this->ci_tools->sanitize_text($this->input->post("userName"));

			$email 	   = $this->ci_tools->sanitize_text($this->input->post("email"));

			$password  = $this->ci_tools->sanitize_text($this->input->post("password"));

			$password2 = $this->ci_tools->sanitize_text($this->input->post("password2"));



			if($password != $password2) {

				$this->session->set_flashdata ( "message_error_login", "Confirm password not correct !" );

				redirect($this->redirectSignup);

			} else {

				// Signup

				$oMember = new IOT_Member();

				$oMember->setFirstName($firstName);

				$oMember->setLastName($lastName);

				$oMember->setUserName($userName);

				$oMember->setEmail($email);

				$oMember->setPassWord(md5($password));

				$oMember->setCreatedDate(Date("Y-m-d h:i:s"));

				$oMember->setActive(1);

				$this->iot_membermodel->create($oMember);



				$this->session->set_flashdata ( "message_error_login", "Sign Up Success !" );

				redirect($this->redirectSignup);

			}



		}

	}

}