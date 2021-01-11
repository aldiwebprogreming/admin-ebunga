<?php 

/**
 * 
 */
class Promo extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_data');
		$this->load->library('form_validation');
	}



	public function data_promo(){	


		$data['title'] = 'Data Promo';
		$data['sub_title'] = "Data Promo";

		$data['promo'] = $this->m_data->get_data($tabel='tbl_promo');
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_promo', $data);
		$this->load->view('template2/footer');



	}

	public function tambah_promo() {

		$this->form_validation->set_rules('kode_promo','kode promo', 'trim|is_unique[tbl_promo.kd_promo]');

		if ($this->form_validation->run() == FALSE) {
		
		$data['title'] = 'Tambah Promo';
		$data['sub_title'] = "Data Promo";

		$this->load->view('template2/header', $data);
		$this->load->view('admin/tambah_promo', $data);
		$this->load->view('template2/footer');

	} else {


		$data = array(
			'kd_promo' => $this->input->post('kd_promo') ,
			'nama_promo' => $this->input->post('nama_promo'),
			'deks_promo' => $this->input->post('deks_promo'),
			'cakupan' => $this->input->post('cakupan'),
			'id_seller' => $this->input->post('id_seller'),
			'tipe' => $this->input->post('tipe'),
			'value' => $this->input->post('value'),
			'start_active' => $this->input->post('start_active'),
			'end_active' => $this->input->post('end_active'),
			'status' => $this->input->post('status'),

			 );


		$input = $this->db->insert('tbl_promo', $data);

			if ($input) {
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('promo/tambah_promo');
					
				} else {


					 $this->session->set_flashdata('message', 'swal("Gagal!", "Data gagal ditambahkan", "error");');

				redirect('promo/tambah_promo');

				}

	}


} 

public function edit_promo(){


		$data['title'] = 'Edit Promo';
		$data['sub_title'] = " Edit Data Promo";

		$id = $this->input->get('id');
		$data['edit_promo'] = $this->m_data->get_det($tabel='tbl_promo', $id);

		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_promo', $data);
		$this->load->view('template2/footer');



		if ($this->input->post('edit')) {
			

			$data = array(
			'kd_promo' => $this->input->post('kd_promo') ,
			'nama_promo' => $this->input->post('nama_promo'),
			'deks_promo' => $this->input->post('deks_promo'),
			'cakupan' => $this->input->post('cakupan'),
			'id_seller' => $this->input->post('id_seller'),
			'tipe' => $this->input->post('tipe'),
			'value' => $this->input->post('value'),
			'start_active' => $this->input->post('start_active'),
			'end_active' => $this->input->post('end_active'),
			'status' => $this->input->post('status'),

			 );

			$id = $this->input->get('id');
			$tabel = "tbl_promo";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

			

				$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('promo/data_promo');
		


		}


}
	public function hapus_promo()
		{

		$id = $this->input->get('id');
		$this->db->delete('tbl_promo', array('id' => $id));
		redirect('promo/data_promo');
		}

function status_promo(){

$data =[

	'status' => 'nonaktkif'
];
	
	$tabel = "tbl_promo";
	$id = $this->input->get('id');
	$this->m_data->proses_edit($id,$tabel, $data);

$this->session->set_flashdata('message', 'swal("Sukses!", "Berhasil mengnonaktifkan", "success");');

redirect('promo/data_promo');
}


function status_promo1(){

$data =[

	'status' => 'aktif'
];
	
	$tabel = "tbl_promo";
	$id = $this->input->get('id');
	$this->m_data->proses_edit($id, $tabel, $data);

	$this->session->set_flashdata('message', 'swal("Sukses!", "Berhasil mengaktifkan", "success");');

	redirect('promo/data_promo');
}





function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "PROMO EBUNGA";
		$data['footer'] = "Laporan data promo ebunga dicetak pada tanggal :";
		$data['promo'] = $this->m_data->get_data("tbl_promo");
 		$this->load->view('cetak/cetak_promo',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_promo", array('Attachment' => 0));
	}


	function detail(){

		$data['title'] = "Detail Promo";
		$data['sub_title'] = "Detail Data Promo";
		$id = $this->input->get('id');
		$data['promo'] = $this->m_data->get_det($tabel='tbl_promo', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_promo', $data);
		$this->load->view('template2/footer');
	}


}

 ?>