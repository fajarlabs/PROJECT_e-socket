<?php 

interface icrud {
	public function create($o = null, $option = null, $properties = null);
	public function read($o = null, $option = null, $properties = null);
	public function update($o = null, $option = null, $properties = null);
	public function delete($o = null, $option = null, $properties = null);
}