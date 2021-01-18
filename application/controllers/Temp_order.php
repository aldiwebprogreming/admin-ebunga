<?php 

/**
 * 
 */
class Temp_order extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('m_data');
		$this->load->library('form_validation');


	}

	function data_temp_order(){


		$data['title'] = "Data temp order";
		$data['sub_title'] = "Data Temp Order";

		$data['order'] = $this->m_data->get_data($tabel="tbl_temp_order");
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_temp_order', $data);
		$this->load->view('template2/footer');




	}

	function tambah_temp_order(){

		$data['title'] = "Tembah temp order";
		$data['sub_title'] = "Tambah Temp Order";


		$data['produk'] = $this->m_data->get_data($tabel="tbl_produk");

		$this->load->view('template2/header', $data);
		$this->load->view('admin/tambah_temp_order',$data);
		$this->load->view('template2/footer');


		if ($this->input->post('kirim')) {
			
			$data = [

				'kd_temp' => $this->input->post('kd_temp'),
				'customer' =>$this->input->post('customer'),
				'waktu' =>$this->input->post('waktu'),
				'kd_product' =>$this->input->post('kd_product'),
				'qt' =>$this->input->post('qt'),
				'total' =>$this->input->post('total')
			];

		$this->db->insert('tbl_temp_order', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
		 redirect('temp_order/tambah_temp_order');

		}


	}

	function edit_temp_order(){

		$data['title'] = "Edit temp order";
		$data['sub_title'] =" Edit Tempt Order";
		$id = $this->input->get('id');
		$data['order'] = $this->m_data->get_det($tabel='tbl_temp_order', $id);
		$data['produk'] = $this->m_data->get_data($tabel="tbl_produk");

		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_temp_order', $data);
		$this->load->view('template2/footer');



		if ($this->input->post('edit')) {
			
			$data = [


				'kd_temp' => $this->input->post('kd_temp'),
				'customer' =>$this->input->post('customer'),
				'waktu' =>$this->input->post('waktu'),
				'kd_product' =>$this->input->post('kd_product'),
				'qt' =>$this->input->post('qt'),
				'total' =>$this->input->post('total')

			];

			$id = $this->input->get('id');
			$tabel = "tbl_temp_order";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

			redirect('temp_order/data_temp_order');
		}
}


 	function cetak_data(){

 		$this->load->library('dompdf_gen');

		$data['judul'] = "TEMP ORDER EBUNGA";
		$data['footer'] = "Laporan data temp order ebunga  dicetak pada tanggal : ";
		$data['temp_order'] = $this->m_data->get_data("tbl_temp_order");
 		$this->load->view('cetak/cetak_temp_order',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_temp_order", array('Attachment' => 0));
 	}

}

 ?>