<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_model extends MY_Model
{
	protected $soft_delete = TRUE;
	public function get_movies($limit, $start)
 	{
	 	$this->limit($limit,$start);
	 	$result = $this->get_all();
	 	return $result;
 	}

}
?>