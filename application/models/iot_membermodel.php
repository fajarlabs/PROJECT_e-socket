<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IOT_MemberModel extends CI_Model implements icrud {
	
	private $table = "iot_member";

	public function __construct() {
		parent::__construct();
	}

	public function create($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Member)) {
			$data = array (
				"{$this->table}.userName" => $o->getUserName(),
				"{$this->table}.firstName" => $o->getFirstName(),
				"{$this->table}.lastName" => $o->getLastName(),
				"{$this->table}.email" => $o->getEmail(),
				//"{$this->table}.phoneNumber" => $o->getPhoneNumber(),
				//"{$this->table}.photo" => $o->getPhoto(),
				"{$this->table}.passWord" => $o->getPassword(),
				"{$this->table}.createdDate" => $o->getCreatedDate(),
				"{$this->table}.active" => $o->getActive()
				);
			$this->db->insert($this->table,$data);	
		}

		return null;
	}

	public function read($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Member)) {
			switch ($option) {
				case 'FILTER_BY_ID':
					$this->db->where("{$this->table}.passWord", $properties);
					$this->db->where("{$this->table}.mid", $o->getMid());
					break;
				default:
					break;
			}

			return $this->db->get($this->table)->result();
		}

		return null;
	}

	public function update($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Member)) {
			switch($option) {
				case 'UPDATE_PASSWORD_ONLY' :
					$data = array ("{$this->table}.passWord" => $o->getPassword());
					break;
				default :
					$data = array (
						"{$this->table}.userName" => $o->getUserName(),
						"{$this->table}.firstName" => $o->getFirstName(),
						"{$this->table}.lastName" => $o->getLastName(),
						"{$this->table}.email" => $o->getEmail(),
						//"{$this->table}.phoneNumber" => $o->getPhoneNumber(),
						//"{$this->table}.photo" => $o->getPhoto(),
						"{$this->table}.modifiedDate" => $o->getModifiedDate(),
						"{$this->table}.active" => $o->getActive()
						);
					break;
			}

			$this->db->where("{$this->table}.mid", $o->getMid());
			$this->db->update($this->table, $data); 
		}
		return null;
	}

	public function delete($o = null, $option = null, $properties = null) {
		if(($o != null) && ($o instanceof IOT_Member)) {
			$this->db->where("{$this->table}.mid", $o->getMid());
			$this->db->delete($this->table);
		}
		return null;
	}
}