<?php 
	
	/**
	 * 
	 */
	class Dashbord extends CI_Controller
	{
		
	

		public function index()
		{

			

			$data['title'] = "Dashbord";

			$this->load->view('template2/header', $data);
			$this->load->view('admin/dashbord');
			$this->load->view('template2/footer');

		}


		


		

	}


 ?>