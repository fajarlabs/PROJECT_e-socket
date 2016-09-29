<?php 

class CI_Tools {

	/**
	 * Method checking array custom
	 */
	public function is_array($o=null) {
		if(isset($o)) {
			if(is_array($o)) {
				if(count($o) > 0) 
					return $o;
			}
		} 

		return null;
	}

	public function build_json($o=null) {
		if(isset($o)) {
			if(!empty($o)) {
				header("Content-Type : application/json");
				echo json_encode($o);
			}
		}
	}

	public function sanitize_text($o=null) {
		$o = strip_tags($o);
		$o = str_replace("'","",$o);
		$o = str_replace('"',"",$o);
		$o = addslashes($o);
		$o = mysql_real_escape_string($o);
		return $o;
	}

	public function sanitize_html($o=null) {
		$o = htmlentities($o);
	}
}