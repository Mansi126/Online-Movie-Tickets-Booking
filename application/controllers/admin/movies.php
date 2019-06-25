<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Movies extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			
			//$this->load->model('admin/teacher_model','teachers');
			if(empty(_useSession('admin')))
			{
				redirect('admin/login');
			}
			
		}

		/**
		 * [index for display movies information]
		 * 
		 */
		public function index()
		{

	        $data['contents'] = $this->load->view('admin/movies/index','',TRUE);
			$this->load->view('admin/index',$data);
			
		}

		public function add()
		{
			  	$data['contents'] = $this->load->view('admin/movies/add','',TRUE);
				$this->load->view('admin/index',$data);
		}

	
	
	}

?>	
