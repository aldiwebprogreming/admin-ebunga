<?php 

	/**
	 * 
	 */
	class Get_data extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
		}

		function index(){

		$data['order'] = $this->m_data->get_data($tabel='tbl_customer_order');
		$this->load->view('get_data/ambil_dataorder', $data);
	
		}

	}
 ?>