<?php 

/**
 * 
 */
class Registrasi_user extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();
		 $this->load->model('m_data');
		 $this->load->library('form_validation');

	}


	public function data_registrasi(){

		$data['title'] = "Data Registrasi";
		$data['sub_title'] = "Data registrasi user";

		$data['registrasi_user'] = $this->m_data->get_data($tabel='tbl_registrasi_user');

		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_registrasi', $data);
		$this->load->view('template2/footer');

	}


	public function edit_registrasi(){
		$data['title'] = "Edit Registrasi";
		$data['sub_title'] = "Edit registrasi";

		$id = $this->input->get('id');
		$data['registrasi'] = $this->m_data->get_det($tabel='tbl_registrasi_user', $id);

		
		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_registrasi', $data);
		$this->load->view('template2/footer');


		if ($this->input->post('edit')) {
			$data = array(
				'kd_registrasi' => $this->input->post('kd_registrasi'),
				'token_registrasi' => $this->input->post('token_registrasi'),
				'full_name' => $this->input->post('full_name'),
				'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'waktu_registrasi' => $this->input->post('waktu_registrasi'),
				'referall_code' => $this->input->post('referall_code'),
				'status_aktivasi' => $this->input->post('status_aktivasi'),
				'waktu_aktivasi' => $this->input->post('waktu_aktivasi')



				 );


			$id = $this->input->get('id');
			$tabel = "tbl_registrasi_user";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('Registrasi_user/data_registrasi');


		}

		}


		public function hapus_registrasi() {



		$id = $this->input->get('id');
		$this->db->delete('tbl_registrasi_user', array('id' => $id));
		 redirect('registrasi_user/data_registrasi');


		}


		function cetak_data(){

		$this->load->library('dompdf_gen');

		$data['judul'] = "REGISTRASI USER";
		$data['footer'] = "Laporan data registrasi user di cetak pada tanggal :";
		$data['registrasi'] = $this->m_data->get_data("tbl_registrasi_user");
 		$this->load->view('cetak/cetak_registrasi',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_registrasi", array('Attachment' => 0));
		}


		function detail(){

		$data['title'] = "Detail Registrasi User";
		$data['sub_title'] = "Detail  registrasi user";
		$id = $this->input->get('id');
		$data['registrasi'] = $this->m_data->get_det($tabel='tbl_registrasi_user', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_registrasiuser', $data);
		$this->load->view('template2/footer');

		}

	function cetak_excel(){

		$data['registrasiuser'] = $this->m_data->get_data('tbl_registrasi_user');
		$this->load->view('excel/cetak_registrasiuser', $data);
	}




}
	

 ?>