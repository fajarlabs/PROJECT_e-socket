<?php
class IOT_Member {
	private $mid;
	private $userName;
	private $firstName;
	private $lastName;
	private $email;
	private $phoneNumber;
	private $photo;
	private $passWord;
	private $createdDate;
	private $modifiedDate;
	private $modifiedBy;
	private $active;
	
	function __construct($mid = null, $userName = null, $firstName = null, $lastName = null, $email = null, $phoneNumber = null, $photo = null, $passWord = null, $createdDate = null, $modifiedDate = null, $modifiedBy = null, $active = null) {
		$this->mid = $mid;
		$this->userName = $userName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->phoneNumber = $phoneNumber;
		$this->photo = $photo;
		$this->passWord = $passWord;
		$this->createdDate = $createdDate;
		$this->modifiedDate = $modifiedDate;
		$this->modifiedBy = $modifiedBy;
		$this->active = $active;
	}
	
	/**
	 * mid,
	 * 
	 * @return unkown
	 */
	public function getMid() {
		return $this->mid;
	}
	
	/**
	 * mid,
	 * 
	 * @param unkown $mid,        	
	 * @return IotMember
	 */
	public function setMid($mid) {
		$this->mid = $mid;
		return $this;
	}
	
	/**
	 * userName
	 * 
	 * @return unkown
	 */
	public function getUserName() {
		return $this->userName;
	}
	
	/**
	 * userName
	 * 
	 * @param unkown $userName        	
	 * @return IotMember
	 */
	public function setUserName($userName) {
		$this->userName = $userName;
		return $this;
	}
	
	/**
	 * firstName
	 * 
	 * @return unkown
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 * firstName
	 * 
	 * @param unkown $firstName        	
	 * @return IotMember
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	
	/**
	 * lastName
	 * 
	 * @return unkown
	 */
	public function getLastName() {
		return $this->lastName;
	}
	
	/**
	 * lastName
	 * 
	 * @param unkown $lastName        	
	 * @return IotMember
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}
	
	/**
	 * email
	 * 
	 * @return unkown
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * email
	 * 
	 * @param unkown $email        	
	 * @return IotMember
	 */
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * phoneNumber
	 * 
	 * @return unkown
	 */
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}
	
	/**
	 * phoneNumber
	 * 
	 * @param unkown $phoneNumber        	
	 * @return IotMember
	 */
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		return $this;
	}
	
	/**
	 * photo
	 * 
	 * @return unkown
	 */
	public function getPhoto() {
		return $this->photo;
	}
	
	/**
	 * photo
	 * 
	 * @param unkown $photo        	
	 * @return IotMember
	 */
	public function setPhoto($photo) {
		$this->photo = $photo;
		return $this;
	}
	
	/**
	 * passWord
	 * 
	 * @return unkown
	 */
	public function getPassWord() {
		return $this->passWord;
	}
	
	/**
	 * passWord
	 * 
	 * @param unkown $passWord        	
	 * @return IotMember
	 */
	public function setPassWord($passWord) {
		$this->passWord = $passWord;
		return $this;
	}
	
	/**
	 * createdDate
	 * 
	 * @return unkown
	 */
	public function getCreatedDate() {
		return $this->createdDate;
	}
	
	/**
	 * createdDate
	 * 
	 * @param unkown $createdDate        	
	 * @return IotMember
	 */
	public function setCreatedDate($createdDate) {
		$this->createdDate = $createdDate;
		return $this;
	}
	
	/**
	 * modifiedDate
	 * 
	 * @return unkown
	 */
	public function getModifiedDate() {
		return $this->modifiedDate;
	}
	
	/**
	 * modifiedDate
	 * 
	 * @param unkown $modifiedDate        	
	 * @return IotMember
	 */
	public function setModifiedDate($modifiedDate) {
		$this->modifiedDate = $modifiedDate;
		return $this;
	}
	
	/**
	 * modifiedBy
	 * 
	 * @return unkown
	 */
	public function getModifiedBy() {
		return $this->modifiedBy;
	}
	
	/**
	 * modifiedBy
	 * 
	 * @param unkown $modifiedBy        	
	 * @return IotMember
	 */
	public function setModifiedBy($modifiedBy) {
		$this->modifiedBy = $modifiedBy;
		return $this;
	}
	
	/**
	 * active
	 * 
	 * @return unkown
	 */
	public function getActive() {
		return $this->active;
	}
	
	/**
	 * active
	 * 
	 * @param unkown $active        	
	 * @return IotMember
	 */
	public function setActive($active) {
		$this->active = $active;
		return $this;
	}
}