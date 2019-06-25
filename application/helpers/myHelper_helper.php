<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Create function for $this->input->post*/
function _post($post)
{
	$CI   = &get_instance();
	$data = $CI->security->xss_clean($CI->input->post($post));

	return $data;
}

/*Create For $this->session->set_userdata*/
function _setSession($session_name, $set_data)
{
	$CI   = &get_instance();
	$data = $CI->session->set_userdata($session_name, $set_data);

	return $data;
}

/*Create For $this->session->userdata*/
function _useSession($session_name)
{
	$CI   = &get_instance();
	$data = $CI->session->userdata($session_name);

	return $data;
}

/*Create For $this->session->unset_userdata*/
function _unsetSession($session_name)
{
	$CI   = &get_instance();
	$data = $CI->session->unset_userdata($session_name);

	return $data;
}

?>