<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Movies extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('pagination');
			$this->load->model('admin/movie_model','movies');
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
			$data['movies'] = $this->movies->get_all();

			//pagination
			//pagination
			$config = array();
	        $config["base_url"] = base_url().'admin/movies';
	        $config['full_tag_open'] = "<ul class='pagination'>";
		    $config['full_tag_close'] = '</ul>';
		    $config['num_tag_open'] = '<li>';
		    $config['num_tag_close'] = '</li>';
		    $config['cur_tag_open'] = '<li class="active"><a href="#">';
		    $config['cur_tag_close'] = '</a></li>';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';
		    $config['first_tag_open'] = '<li>';
		    $config['first_tag_close'] = '</li>';
		    $config['last_tag_open'] = '<li>';
		    $config['last_tag_close'] = '</li>';
		 	$config['prev_link'] = 'Prev';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';
		    $config['next_link'] = 'Next';
		    $config['next_tag_open'] = '<li>';
		    $config['next_tag_close'] = '</li>';
	        $config["total_rows"] = $this->movies->count_by('deleted','0');
	        $config["per_page"] = 4;
	        $config["uri_segment"] = 3;
	      

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	        $data["links"] = $this->pagination->create_links();

	        $data['movies'] = $this->movies->get_movies($config["per_page"], $page);
	        //var_dump($data);die();
	        $data['contents'] = $this->load->view('admin/movies/index',$data,TRUE);
			$this->load->view('admin/index',$data);
			
		}

		/**
		 * [add for add movies information in table]
		 */
		public function add()
		{
			  	if($this->input->post())
			  	{
			  		if(_post('status') == 'on')
			  		{
			  			$status = 0;
			  		}
			  		else
			  		{
			  			$status = 1;
			  		}
			  		$data = array(
			  						'title' => _post('title'),
			  						'category' => _post('category'),
			  						'genres' => _post('genres'),
			  						'director' => _post('director'),
			  						'duration' => _post('duration'),
			  						'release_date'=>_post('release_date'),
			  						'information'=>_post('information'),	
			  						'status'=>$status
			  		);

			  		//this code for image uploading
					$config['upload_path'] = './assets/img/movies/uploads';
		            $config['allowed_types'] = 'jpg|png|jpeg';
		            $config['max_size'] = '15360';
		            $config['max_width'] = '15360';
		            $config['max_height'] = '15360';

		            $this->load->library('upload', $config);

		            $this->upload->initialize($config);
		            
		            //this code for insert image
		            if ($this->upload->do_upload('image')) 
		            {
		                $data['image'] = $this->upload->data('file_name');

		                if ($data != '') 
						{
							$result = $this->movies->insert($data);
							if($result != '')
							{
								
								$this->session->set_flashdata('add_msg', 'Your data inserted successfully!');
							}

							redirect('admin/movies');
			            }
			          
		            } 
		           

			  	}
			  	else
			  	{
			  		$data['contents'] = $this->load->view('admin/movies/add','',TRUE);
					$this->load->view('admin/index',$data);
			  	}
			  
		}

	
	
	}

?>	
