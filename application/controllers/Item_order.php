<?php 

 /**
  * 
  */
 class Item_order extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent:: __construct();

 		$this->load->model('m_data');
 	}

 	function data_itemorder(){

 			$data['title'] = "Data item order";
 			$data['sub_title'] = "Data Item Order";
 			$data['item_order'] = $this->m_data->get_data($tabel='tbl_item_order');

 			$this->load->view('template2/header', $data);
 			$this->load->view('admin/data_itemorder', $data);
 			$this->load->view('template2/footer', $data);

 		}


 		function detail_item_order(){
	 		$data['title'] = "Detail item order";
	 		$data['sub_title'] = "Datail Item Order";

	 		$tabel = "tbl_item_order";
	 		$id = $this->input->get('id');
	 		$data['item_order'] = $this->m_data->get_det($tabel, $id);


 			$this->load->view('template2/header', $data);
 			$this->load->view('detail/detail_item_order', $data);
 			$this->load->view('template2/footer', $data);

 		}
 }


 ?>