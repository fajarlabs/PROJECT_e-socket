<?php



if (! defined ( 'BASEPATH' ))

	exit ( 'No direct script access allowed' );



class IOT_ProjectController extends CI_Controller {



	private $session_object;

	private $redirectLogout  = "logout";

	private $folderView 	 = "project"; // Template folder

	private $pathRoute       = "project"; // Route register



	function __construct() {

		parent::__construct ();

		$this->load->model(array("iot_projectmodel"));

		$this->load->library(array("iot_tokenlibrary","ci_tools"));



		// Checking session user

		$this->session_object = $this->session->userdata("session_object");

		if(!$this->session_object) redirect($this->redirectLogout);

	}



	function index() {



		$data['title'] = "Data Tables Project";

		$data['form_title'] = "Data Tables Project";

		$filter_member = new IOT_Project();

		$filter_member->setMid($this->session_object->getMid());

		$data['list_data'] = $this->iot_projectmodel->read($filter_member,'FILTER_BY_MEMBER');

		$this->load->view("{$this->folderView}/ProjectListView",$data);

	}



	function createProject() {

		$data = array();

		$data['title'] = "Create Project";

		// CSRF TOKEN

		$data ['csrf_hash'] = $this->security->get_csrf_hash ();

		$data ['csrf_token_name'] = $this->security->get_csrf_token_name ();

		$data ['project_id'] = '';

		$data ['form_title'] = "Simple Form";

		$data ['form_path'] = base_url()."project/saveProject";

		$this->load->view("{$this->folderView}/ProjectFormView",$data);

	}



	function saveProject() {

		$projectId    = $this->ci_tools->sanitize_text($this->input->post("projectId"));

		$projectName  = $this->ci_tools->sanitize_text($this->input->post("projectName"));

		$projectField = $this->ci_tools->sanitize_text($this->input->post("projectField"));

		$projectDesc  = $this->ci_tools->sanitize_text($this->input->post("projectDescription"));

		$create_date  = Date("Y-m-d h:i:s"); 	  // Create date

		$modification_date = Date("Y-m-d h:i:s"); // Modification Date

		$mid = $this->session_object->getMid();

		$token = "";

		if(empty($projectId)) {


			// Search token existing and create new

			$flag = true;

			while($flag) {

				$token = $this->iot_tokenlibrary->generate();

				$resultToken = $this->iot_projectmodel->read($token);

				if(count($resultToken) < 1) $flag = false;

			}



			$iotProject = new IOT_Project();

			$iotProject->setProjectName($projectName);

			$iotProject->setField($projectField);

			$iotProject->setDescription($projectDesc);

			$iotProject->setMid($mid);

			$iotProject->setCreateDate($create_date);

			$iotProject->setToken($token);



			// Field Json

			$oJson = new stdClass();

			$fieldExplode = explode(",",$projectField);

			foreach($fieldExplode as $key => $val) {

				$oJson->$val = "";

			}



			$iotProject->setFieldJson(json_encode($oJson));



			$this->iot_projectmodel->create($iotProject);

		

		} else {

			$iotProject = new IOT_Project();

			$iotProject->setProjectId($projectId);

			$iotProject->setProjectName($projectName);

			$iotProject->setField($projectField);

			$iotProject->setDescription($projectDesc);

			$iotProject->setMid($mid);

			$iotProject->setModifiedDate($modification_date);



			// Field Json

			$oJson = new stdClass();

			$fieldExplode = explode(",",$projectField);

			foreach($fieldExplode as $key => $val) {

				$oJson->$val = "";

			}



			$iotProject->setFieldJson(json_encode($oJson));



			$this->iot_projectmodel->update($iotProject);

		}



		redirect("{$this->pathRoute}/messageSuccessProject");

	}



	function editProject($id = null) {

		$data = array();

		$data['title'] = "Edit Project";

		// CSRF TOKEN

		$data ['csrf_hash'] = $this->security->get_csrf_hash ();

		$data ['csrf_token_name'] = $this->security->get_csrf_token_name ();

		$data ['project_id'] = $id;

		$data ['form_title'] = "Edit Project";

		$data ['form_path'] = base_url()."project/saveProject";

		$iotProject = new IOT_Project();

		$iotProject->setProjectid($id);

		$iotProject->setMid($this->session_object->getMid());

		$data ['project_data']    = $this->iot_projectmodel->read($iotProject,'FILTER_BY_PROJECT');



		$this->load->view("{$this->folderView}/ProjectFormView",$data);

	}



	function confirmProject($id = null) {

		$data['project_id'] = $id; 

		$this->load->view("{$this->folderView}/ProjectConfirmView",$data);

	}



	function deleteProject($id = null) {

		$iotProject = new IOT_Project();

		$iotProject->setProjectid($id);

		$iotProject->setMid($this->session_object->getMid());

		$this->iot_projectmodel->delete($iotProject);



		redirect("{$this->pathRoute}/messageSuccessProject");

	}



	function messageSuccessProject() {

		$data['title'] = "Create Project Success";

		$data['alert'] = "Saved Successfully";

		

		$this->load->view("{$this->folderView}/ProjectMessageView",$data);

	}



	function viewApi($id=null) {

		$data['title'] = "View Detail";

		$data['form_title'] = "Simple View";



		$iotProject = new IOT_Project();

		$iotProject->setProjectid($id);

		$iotProject->setMid($this->session_object->getMid());

		$data['project_data'] = $this->ci_tools->is_array($this->iot_projectmodel->read($iotProject,'FILTER_BY_PROJECT'));

		$this->load->view("{$this->folderView}/ProjectApiView",$data);

	}



}