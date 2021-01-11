<?php 
 /**
  * 
  */
 class Cetak_user extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('m_data');
 		$this->load->library('dompdf_gen');
 	}


 	function index(){


 		$data['user'] = $this->m_data->get_data("tbl_user");
 		$data['footer'] = "Laporan data user dicetak pada tanggal :";
 		$this->load->view('admin/cetak_user',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_user", array('Attachment' => 0));

 		
 	}
 }


 ?>