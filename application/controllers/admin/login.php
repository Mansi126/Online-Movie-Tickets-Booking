<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/login_model', 'login');
	}

	public function index()
	{
		$this->load->view('admin/login/index');
	}

	/**
	 * [process for check email and password is valid or not]
	 * @return [true] [if get the result it return true and generate session]
	 */
	public function process()
	{
		if ($this->input->post())
		{
			$data = array('email' => _post('email'),
				'password'            => _post('password'));
			$remember_me = _post('remember_me');
			/*var_dump($remember_me);
			die();*/

			$query  = $this->login->get_many_by($data);
			$result = reset($query);

			if ($query)
			{
				if($remember_me == true)
				{
					/*echo $data['email'];
					echo $data['password'];
					die();*/
					/* Create cookie for store 7 days emailid */
					$this->input->set_cookie('email', $data['email'], 604800);
					/* Create cookie for password 7 days*/
					$this->input->set_cookie('password', $data['password'], 604800);
				}
				else{
					/* Delete email cookie */
				delete_cookie('email');
				/* Delete password cookie */
				delete_cookie('password');
				}
				_setSession('admin', $result);
				redirect('admin/dashboard');
			}
			else
			{
				/* Delete email cookie */
				delete_cookie('email');
				/* Delete password cookie */
				delete_cookie('password');
				$this->session->set_flashdata('login_msg', 'Your email or password is invalid!');

				redirect('admin/login');
			}

			//var_dump(_useSession('admin'));
		}
	}
	
	/**
	 * [logout for unset admin session]
	
	 */
	public function logout()
	{
		_unsetSession('admin');
		redirect('admin/login');
	}
}
