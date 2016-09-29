<?php



if (! defined ( 'BASEPATH' ))

	exit ( 'No direct script access allowed' );



class IOT_APIController extends CI_Controller {



	private $redirectLogout  = "logout";

	private $folderView 	 = "project"; // Template folder

	private $pathRoute       = "project"; // Route register



	function __construct() {

		parent::__construct ();

		$this->load->model(array("iot_projectmodel"));

		$this->load->library(array("ci_tools"));

	}



	function index() {

		echo "<b>It's works !";

	}



	/**

	 * Method push data

	 *

	 * @param      <type>  $token  The token

	 */

	function push($token=null) {

		// Query convert to object

		$array_get = $this->input->get();



		// Search value by token

		$o = new IOT_Project();

		$o->setToken($token);

		$array_iot = $this->iot_projectmodel->read($o,'FILTER_BY_TOKEN');



		// Check array $array_iot

		if($this->ci_tools->is_array($array_iot)) {



			// Check array $array_get

			if($this->ci_tools->is_array($array_get)) {



				// Iterate $array_iot

				foreach($array_iot as $key) {



					// Checking json

					$oJson = json_decode($key->field_json);

					foreach($array_get as $key_field => $val_field) {

						if(isset($oJson->$key_field)) {

							$oJson->$key_field = $val_field;

							// Update json project

							$oUpdate = new IOT_Project();

							$oUpdate->setProjectId($key->project_id);

							$oUpdate->setFieldJson(json_encode($oJson));



							$this->iot_projectmodel->update($oUpdate,'UPDATE_TOKEN_ONLY_FROM_OUTSIDE');

						}

					}

				}

			}

		}



		$result = new stdClass();
                 
                $result->value = "success";

		$result->code = 200;



		// Print

		$this->ci_tools->build_json($result);

	}



	/**

	 * Method get json last data

	 *

	 * @param      <type>  $token  The token

	 * @param      <type>  $field  The field

	 */

	function last($token=null,$field=null) {

		// Query convert to object

		$array_get = $this->input->get();



		// Search value by token

		$o = new IOT_Project();

		$o->setToken($token);



		$oResult = new stdClass();

		$array_iot = $this->iot_projectmodel->read($o,'FILTER_BY_TOKEN');



		if($this->ci_tools->is_array($array_iot)) {



			foreach($array_iot as $key) {



				$oJson = json_decode($key->field_json);

				if(isset($oJson->$field)) {

					$oResult->value = $oJson->$field;

					$oResult->code = 200;

				} else {
                                        $oResult->value = "";

					$oResult->code = 200;
                                }

			}

		}



		// Print

		$this->ci_tools->build_json($oResult);

	}

}