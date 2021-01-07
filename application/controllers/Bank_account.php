<?php 
		
	/**
	 * 
	 */
	class Bank_account extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');
		}


	public function data_bank_account(){

		$data['title'] = 'Data Bank Account';
		$data['sub_title'] = "Data bank account";

		$data['bk_account'] = $this->m_data->get_data($tabel='tbl_bank_account');
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_bank_account', $data);
		$this->load->view('template2/footer');

	}

	public function tambah_bank_account() {

		$this->form_validation->set_rules('kd_bank_account','kode bank account', 'trim|is_unique[tbl_bank_account.kd_bank_account]');

		if ($this->form_validation->run() == FALSE) {
		
		$data['title'] = 'Tambah Bank Account';
		$data['sub_title'] = "Data Bank Account";

		$this->load->view('template2/header', $data);
		$this->load->view('admin/tambah_bank_account', $data);
		$this->load->view('template2/footer');

	} else {


		$data = array(
			'kd_bank_account' => $this->input->post('kd_bank_account') ,
			'tipe_user' => $this->input->post('tipe_user'),
			'id_user' => $this->input->post('id_user'),
			'kd_bank' => $this->input->post('kd_bank'),
			'account_name' => $this->input->post('account_name'),
			'account_number' => $this->input->post('account_number'),
			'main' => $this->input->post('main'),
			'active' => 1
		

			 );


		$input = $this->db->insert('tbl_bank_account', $data);

			if ($input) {
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('bank_account/tambah_bank_account');
					
				} else {


					 $this->session->set_flashdata('message', 'swal("Gagal!", "Data gagal ditambahkan", "error");');

				redirect('bank_account/tambah_bank_account');

				}

	}


} 

	public function edit_bk_account(){

		$data['title'] = 'Edit Bank Account';
		$data['sub_title'] = " Edit Data Bank Account ";

		$id = $this->input->get('id');
		$data['bk_account'] = $this->m_data->get_det($tabel='tbl_bank_account', $id);

		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_bk_account', $data);
		$this->load->view('template2/footer');



		if ($this->input->post('edit')) {
			

		$data = array(
			'kd_bank_account' => $this->input->post('kd_bank_account') ,
			'tipe_user' => $this->input->post('tipe_user'),
			'id_user' => $this->input->post('id_user'),
			'kd_bank' => $this->input->post('kd_bank'),
			'account_name' => $this->input->post('account_name'),
			'account_number' => $this->input->post('account_number'),
			'main' => $this->input->post('main'),
			'active' => $this->input->post('active'),
		

			 );

			$id = $this->input->get('id');
			$tabel = "tbl_bank_account";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

			

				$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('Bank_account/data_bank_account');
		

		}


	}




public function hapus_bk_account(){

	$id = $this->input->get('id');
		$this->db->delete('tbl_bank_account', array('id' => $id));
		redirect('bank_account/data_bank_account');
	
}


		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "BANK ACCOUNT EBUNGA";
		$data['bank_account'] = $this->m_data->get_data("tbl_bank_account");
 		$this->load->view('cetak/cetak_bank_account',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_bank_account", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Bank Account";
		$data['sub_title'] = "Detail bank account";
		$id = $this->input->get('id');
		$data['bank_account'] = $this->m_data->get_det($tabel='tbl_bank_account', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_bank', $data);
		$this->load->view('template2/footer');
	}


	}

 ?>