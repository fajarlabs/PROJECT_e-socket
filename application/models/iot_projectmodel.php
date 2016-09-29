<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_ProjectModel extends CI_Model implements icrud {
	
	private $table = "iot_project";

	public function __construct() {
		parent::__construct();
	}

	public function create($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Project)) {
			$data = array (
				"{$this->table}.project_name" => $o->getProjectName(),
				"{$this->table}.field" => $o->getField(),
				"{$this->table}.field_json" => $o->getFieldJson(),
				"{$this->table}.token" => $o->getToken(),
				"{$this->table}.description" => $o->getDescription(),
				"{$this->table}.mid" => $o->getMid(),
				"{$this->table}.create_date" => $o->getCreateDate()
				);
			$this->db->insert($this->table,$data);	
		}

		return null;
	}

	public function read($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Project)) {
			switch ($option) {
				case 'FILTER_BY_MEMBER':
					$this->db->where("{$this->table}.mid", $o->getMid());
					break;
				case 'FILTER_BY_PROJECT':
					$this->db->where("{$this->table}.project_id", $o->getProjectId());
					$this->db->where("{$this->table}.mid", $o->getMid());
					break;
				case 'FILTER_BY_TOKEN':
					$this->db->where("{$this->table}.token", $o->getToken());
					break;
				default:
					break;
			}

			return $this->db->get($this->table)->result();
		}

		return null;
	}

	public function update($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Project)) {
			switch($option) {
				case 'UPDATE_TOKEN_ONLY_FROM_OUTSIDE':
					$data = array(
						"{$this->table}.field_json" => $o->getFieldJson(),
						"{$this->table}.modified_date" => Date("Y-m-d h:i:s")
					);
					break;
				default :
					$data = array(
						"{$this->table}.project_name" => $o->getProjectName(),
						"{$this->table}.field" => $o->getField(),
						"{$this->table}.field_json" => $o->getFieldJson(),
						"{$this->table}.description" => $o->getDescription(),
						"{$this->table}.modified_date" => Date("Y-m-d h:i:s")
						);
					$this->db->where("{$this->table}.mid", $o->getMid());
					break;
			}

			$this->db->where("{$this->table}.project_id", $o->getProjectId());
			$this->db->update($this->table, $data); 
		}
		return null;
	}

	public function delete($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Project)) {
			$this->db->where("{$this->table}.project_id", $o->getProjectId());
			$this->db->where("{$this->table}.mid", $o->getMid());
			$this->db->delete($this->table);
		}
		return null;
	}
}