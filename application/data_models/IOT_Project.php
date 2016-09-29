<?php 



class IOT_Project {

	private $project_id;

	private $project_name;

	private $field;

	private $description;

	private $mid;

	private $create_date;

    private $modified_date;

    private $token;

    private $field_json;



 	public function __construct($project_id = null, $project_name = null, $field = null,$field_json=null, $token=null, $description = null, $mid = null, $create_date = null,$modified_date = null) {

 		$this->project_id = $project_id;

 		$this->project_name = $project_name;

 		$this->field = $field;

 		$this->description = $description;

 		$this->mid = $mid;

 		$this->create_date = $create_date;

		$this->token = $token;

        $this->modified_date = $modified_date;

        $this->field_json = $field_json;

 	}



    public function setFieldJson($field_json) {

        $this->field_json = $field_json;

    }



    public function getFieldJson() {

        return $this->field_json;

    }



    public function setToken($token){

        $this->token = $token;

    }



    public function getToken() {

        return $this->token;

    }



    /**

     * Gets the value of project_id.

     *

     * @return mixed

     */

    public function getProjectId()

    {

        return $this->project_id;

    }



    /**

     * Sets the value of project_id.

     *

     * @param mixed $project_id the project id

     *

     * @return self

     */

    public function setProjectId($project_id)

    {

        $this->project_id = $project_id;



        return $this;

    }



    /**

     * Gets the value of project_name.

     *

     * @return mixed

     */

    public function getProjectName()

    {

        return $this->project_name;

    }



    /**

     * Sets the value of project_name.

     *

     * @param mixed $project_name the project name

     *

     * @return self

     */

    public function setProjectName($project_name)

    {

        $this->project_name = $project_name;



        return $this;

    }



    /**

     * Gets the value of field.

     *

     * @return mixed

     */

    public function getField()

    {

        return $this->field;

    }



    /**

     * Sets the value of field.

     *

     * @param mixed $field the field

     *

     * @return self

     */

    public function setField($field)

    {

        $this->field = $field;



        return $this;

    }



    /**

     * Gets the value of description.

     *

     * @return mixed

     */

    public function getDescription()

    {

        return $this->description;

    }



    /**

     * Sets the value of description.

     *

     * @param mixed $description the description

     *

     * @return self

     */

    public function setDescription($description)

    {

        $this->description = $description;



        return $this;

    }



    /**

     * Gets the value of mid.

     *

     * @return mixed

     */

    public function getMid()

    {

        return $this->mid;

    }



    /**

     * Sets the value of mid.

     *

     * @param mixed $mid the mid

     *

     * @return self

     */

    public function setMid($mid)

    {

        $this->mid = $mid;



        return $this;

    }



    /**

     * Gets the value of create_date.

     *

     * @return mixed

     */

    public function getCreateDate()

    {

        return $this->create_date;

    }



    /**

     * Sets the value of create_date.

     *

     * @param mixed $create_date the create date

     *

     * @return self

     */

    public function setCreateDate($create_date)

    {

        $this->create_date = $create_date;



        return $this;

    }



    /**

     * Gets the value of modified_date.

     *

     * @return mixed

     */

    public function getModifiedDate()

    {

        return $this->modified_date;

    }



    /**

     * Sets the value of modified_date.

     *

     * @param mixed $modified_date the modified date

     *

     * @return self

     */

    public function setModifiedDate($modified_date)

    {

        $this->modified_date = $modified_date;



        return $this;

    }

}



?>