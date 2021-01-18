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
		$data['footer'] = "Laporan data bank account dicetak pada tanggal :";
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

	function cetak_excel(){

		$data['bk_account'] = $this->m_data->get_data($tabel='tbl_bank_account');

		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
 		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

 		$object = new PHPExcel();
 		$object->getProperties()->setCreator("laporan excel");
 		$object->getProperties()->setLastModifiedBy("Ebunga");
 		$object->getProperties()->setTitle("Laporan data bank account");


 		$object->setActiveSheetIndex(0);

 		$object->getActiveSheet()->setCellValue('A1','NO');
 		$object->getActiveSheet()->setCellValue('B1','KODE BANK ACCOUNT');
 		$object->getActiveSheet()->setCellValue('C1','TIPE USER');
 		$object->getActiveSheet()->setCellValue('D1','ID USER');
 		$object->getActiveSheet()->setCellValue('E1','KODE BANK');
 		$object->getActiveSheet()->setCellValue('F1','ACCOUNT NAME');
 		$object->getActiveSheet()->setCellValue('G1','ACCOUNT NUMBER');
 		$object->getActiveSheet()->setCellValue('H1','MAIN');
 		$object->getActiveSheet()->setCellValue('I1','ACTIVE');

 		$baris = 2;
 		$no = 1;

 		foreach ($data['bk_account'] as $data) {
 			
 			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
 			$object->getActiveSheet()->setCellValue('B'.$baris, $data->kd_bank_account);
 			$object->getActiveSheet()->setCellValue('C'.$baris, $data->tipe_user);
 			$object->getActiveSheet()->setCellValue('D'.$baris, $data->id_user);
 			$object->getActiveSheet()->setCellValue('E'.$baris, $data->kode_bank);
 			$object->getActiveSheet()->setCellValue('F'.$baris, $data->account_name);
 			$object->getActiveSheet()->setCellValue('G'.$baris, $data->account_number);
 			$object->getActiveSheet()->setCellValue('G'.$baris, $data->main);
 			$object->getActiveSheet()->setCellValue('G'.$baris, $data->active);

 			$baris++;
 		}

 		$filename = "data_bank_account".'.xlsx';
 		$object->getActiveSheet()->setTitle("Data bank account");
 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 		header('Content-Disposition: attachment; filename="'.$filename.'"'); 
 		header('Cache-Control: max-age=0');

 		$write = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
   		 $write->save('php://output');

   		 exit();



		

 		// require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
 		// require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

 		// $object = new PHPExcel();
 		// $object->getProperties()->setCreator("laporan excel");
 		// $object->getProperties()->setLastModifiedBy("Ebunga");
 		// $object->getProperties()->setTitle("Laporan data temp order");


 		// $object->setActiveSheetIndex(0);

 		// $object->getActiveSheet()->setCellValue('A1','No');
 		// $object->getActiveSheet()->setCellValue('B1','KODE BANK ACCOUNT');
 		// $object->getActiveSheet()->setCellValue('C1','TIPE USER');
 		// $object->getActiveSheet()->setCellValue('D1','ID USER');
 		// $object->getActiveSheet()->setCellValue('E1','KD BANK');
 		// $object->getActiveSheet()->setCellValue('F1','ACCOUNT NAME');
 		// $object->getActiveSheet()->setCellValue('G1','ACCOUNT NUMBER');
 		// $object->getActiveSheet()->setCellValue('J1','MAIN');
 		// $object->getActiveSheet()->setCellValue('K1','ACTIVE');

 		// $baris = 2;
 		// $no = 1;

 		// foreach ($data['bk_account'] as $data_bank) {
 		// 	$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
 		// 	$object->getActiveSheet()->setCellValue('B'.$baris, $data_bank->kd_bank_account);
 		// 	$object->getActiveSheet()->setCellValue('C'.$baris, $data_bank->tipe_user);
 		// 	$object->getActiveSheet()->setCellValue('D'.$baris, $data_bank->id_user);
 		// 	$object->getActiveSheet()->setCellValue('E'.$baris, $data_bank->kd_bank);
 		// 	$object->getActiveSheet()->setCellValue('F'.$baris, $data_bank->account_name);
 		// 	$object->getActiveSheet()->setCellValue('G'.$baris, $data_bank->account_number);
 		// 	$object->getActiveSheet()->setCellValue('H'.$baris, $data_bank->main);
 		// 	$object->getActiveSheet()->setCellValue('I'.$baris, $data_bank->active);
 		
 			
 			

 		// $baris++;
 		// }

 		// $filename = "data_bank_account".'.xlsx';
 		// $object->getActiveSheet()->setTitle("Bank Account");
 		// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 		// header('Content-Disposition: attachment; filename="'.$filename.'"'); 
 		// header('Cache-Control: max-age=0');

 		// $write = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
   // 		 $write->save('php://output');

   // 		 exit();


	}


	}



 ?>