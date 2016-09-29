<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_ChangePasswordController extends CI_Controller {

	private $session_object;
	private $redirectLogout  = "logout";
	private $folderView 	 = "change_password"; // Template folder
	private $pathRoute       = "change_password"; // Route register

	public function __construct() {
		parent::__construct();

		// model
		$this->load->model(array('iot_membermodel'));

		// Library
		$this->load->library(array("ci_tools"));

		// Checking session user
		$this->session_object = $this->session->userdata("session_object");

		// Redirect
		if(!$this->session_object) redirect($this->redirectLogout);
	}

	public function index() {
		// CSRF TOKEN
		$data['title'] = "Confirm Password";
		$data['csrf_hash'] = $this->security->get_csrf_hash ();
		$data['csrf_token_name'] = $this->security->get_csrf_token_name ();
		// Error Message
		$data['error_message'] = $this->session->flashdata ( "message_error_login" );
		// Properties
		$data['form_title'] = "Form Simple";
		$data['form_path'] = base_url()."change_password/updatePassword";

		// Template 
		$this->load->view("{$this->folderView}/ChangePasswordView",$data);
	}

	public function updatePassword() {

		$this->form_validation->set_rules ( 'oldPassword', 'Old Password', 'trim|required|min_length[5]' );
		$this->form_validation->set_rules ( 'newPassword', 'New Password', 'trim|required|min_length[5]' );
		$this->form_validation->set_rules ( 'confirmPassword', 'Confirm Password', 'trim|required|min_length[5]' );

		// Validation Input Checking
		if ($this->form_validation->run () === FALSE) {
			$this->session->set_flashdata ( "message_error_login", validation_errors () );
			redirect ($this->pathRoute);
		} else {

			// Value old password
			$oldPassword 	 = $this->ci_tools->sanitize_text($this->input->post("oldPassword"));
			$newPassword 	 = $this->ci_tools->sanitize_text($this->input->post("newPassword"));
			$confirmPassword = $this->ci_tools->sanitize_text($this->input->post("confirmPassword"));

			// Read member by id
			$resultMember = $this->iot_membermodel->read(new IOT_Member($this->session_object->getMid()),'FILTER_BY_ID',md5($oldPassword));

			// Count result member
			if(count($resultMember) > 0) {
				if($newPassword == $confirmPassword) {
					$oMember = new IOT_Member();
					$oMember->setMid($this->session_object->getMid());
					$oMember->setPassWord(md5($newPassword));
					$oNewPassword = $this->iot_membermodel->update($oMember,'UPDATE_PASSWORD_ONLY');
					$this->load->view("{$this->folderView}/ChangePasswordMessageView");
				} else {
					$this->session->set_flashdata( "message_error_login", "Change password error or maybe old password not correct !" );
					redirect("{$this->pathRoute}");
				}
			} else {
				$this->session->set_flashdata( "message_error_login", "Change password error or maybe old password not correct !" );
				redirect($this->pathRoute);
			}
		}
	}
}