<?php 

	/**
	 * 
	 */
		class Get extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();

			$this->load->model('m_data');
			
		}


		function kabupaten(){

				$id = $this->input->get('id')

			 $query = $this->db->get_where('tbl_kabupaten', array('id_prov' => $id ))->result_array();

			 var_dump($query);
		}



	}


 ?>