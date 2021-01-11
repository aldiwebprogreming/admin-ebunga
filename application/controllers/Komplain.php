<?php 

/**
 * 
 */
class Komplain extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('m_data');
		$this->load->library('form_validation');

	}

	public function data_komplain(){

		$data['title'] = "Datae Komplain";
		$data['sub_title'] = "Data komplain";

		$data['komplain'] = $this->m_data->get_data($tabel='tbl_komplain');

		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_komplain', $data);
		$this->load->view('template2/footer');



	}



	public function hapus_komplain(){

		$id = $this->input->get('id');

		$this->db->delete('tbl_komplain', array('id' => $id));
		redirect('komplain/data_komplain');
	

	}

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "KOMPLAIN";
		$data['footer'] = "Laporan data komplain dicetak pada tanngal :";
		$data['komplain'] = $this->m_data->get_data("tbl_komplain");
 		$this->load->view('cetak/cetak_komplain',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_komplain", array('Attachment' => 0));
	}
}