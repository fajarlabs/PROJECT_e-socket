<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DateTimeLibrary {
	
	public function timestamp_to_date_indonesia($timestamp, $timezone = 'UTC'){
	    $datetime = new DateTime($timestamp, new DateTimeZone($timezone));
	    return $datetime->format('d M Y');
	}
}