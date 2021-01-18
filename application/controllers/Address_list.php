<?php 

/**
 * 
 */
class Address_list extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('m_data');
		$this->load->library('form_validation');
	}
	public function data_address_list()
	{

		$data['title'] = "Data Address List";
		$data['sub_title'] = "Data address list";

		$data['address_list'] = $this->m_data->get_data($tabel='tbl_address_list');
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_address_list', $data);
		$this->load->view('template2/footer');


	}


	public function hapus_address_list(){

		$id = $this->input->get('id');
		$this->db->delete('tbl_address_list', array('id' => $id));
		redirect('address_list/data_address_list');


	}


	public function tambah_address_list(){

		$this->form_validation->set_rules('kd_address','kode address ','trim|is_unique[tbl_address_list.kd_address]');


		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Tambah Address List";
			$data['sub_title'] = "Tambah address list";


			$data['address_list'] = $this->m_data->get_data($tabel='tbl_provinsi');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/tambah_address_list', $data);
			$this->load->view('template2/footer');
		} else {

				$data = array(

					'kd_address' => $this->input->post('kd_address'),
					'name_address' => $this->input->post('name_address'),
					'alamat' => $this->input->post('alamat'),
					'kelurahan' => $this->input->post('kelurahan'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'provinsi' => $this->input->post('provinsi'),
					'kordinat' => $this->input->post('kordinat'),
					'main' => $this->input->post('main'),
					'active' => 1

				);


				$input = $this->db->insert('tbl_address_list', $data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');
				 redirect('address_list/tambah_address_list');

		}


	}

		public function edit_address_list(){

			$data['title'] = "Edit Address List";
			$data['sub_title'] = "Edit address list";

			$id = $this->input->get('id');
			$data['prov1'] = $this->m_data->get_data($tabel='tbl_provinsi');
			$data['address_list'] = $this->m_data->get_det($tabel='tbl_address_list', $id);
			$this->load->view('template2/header', $data);
			$this->load->view('admin/edit_address_list', $data);
			$this->load->view('template2/footer');


			if ($this->input->post("edit")) {
				
					$data = array(

					'kd_address' => $this->input->post('kd_address'),
					'name_address' => $this->input->post('name_address'),
					'alamat' => $this->input->post('alamat'),
					'kelurahan' => $this->input->post('kelurahan'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'provinsi' => $this->input->post('provinsi'),
					'kordinat' => $this->input->post('kordinat'),
					'main' => $this->input->post('main'),
					'active' => $this->input->post('active'),

				);

			$id = $this->input->get('id');
			$tabel = "tbl_address_list";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('address_list/data_address_list');

			}

		}

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "ADDRESS LIST";
		$data['footer'] = "Laporan address list dicetak pada tanggal ";
		$data['address_list'] = $this->m_data->get_data("tbl_address_list");
 		$this->load->view('cetak/cetak_address_list',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_address_list", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Address List";
		$data['sub_title'] = "Detail data address list";
		$id = $this->input->get('id');
		$data['address_list'] = $this->m_data->get_det($tabel='tbl_address_list', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_address', $data);
		$this->load->view('template2/footer');
	}


	function cetak_excel(){

		$data['address_list'] = $this->m_data->get_data($tabel="tbl_address_list");

 		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
 		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

 		$object = new PHPExcel();
 		$object->getProperties()->setCreator("laporan excel");
 		$object->getProperties()->setLastModifiedBy("Ebunga");
 		$object->getProperties()->setTitle("Laporan data temp order");


 		$object->setActiveSheetIndex(0);

 		$object->getActiveSheet()->setCellValue('A1','No');
 		$object->getActiveSheet()->setCellValue('B1','KODE ADRESS');
 		$object->getActiveSheet()->setCellValue('C1','NAME ADDRESS');
 		$object->getActiveSheet()->setCellValue('D1','ALAMAT');
 		$object->getActiveSheet()->setCellValue('E1','KELURAHAN');
 		$object->getActiveSheet()->setCellValue('F1','KECAMATAN');
 		$object->getActiveSheet()->setCellValue('G1','KABUPATEN');
 		$object->getActiveSheet()->setCellValue('H1','PROVINSI');
 		$object->getActiveSheet()->setCellValue('I1','KORDINAT');
 		$object->getActiveSheet()->setCellValue('J1','MAIN');
 		$object->getActiveSheet()->setCellValue('K1','ACTIVE');

 		$baris = 2;
 		$no = 1;

 		foreach ($data['adress_list'] as $add) {
 			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
 			$object->getActiveSheet()->setCellValue('B'.$baris, $add->kd_address);
 			$object->getActiveSheet()->setCellValue('C'.$baris, $add->name_address);
 			$object->getActiveSheet()->setCellValue('D'.$baris, $add->alamat);
 			$object->getActiveSheet()->setCellValue('E'.$baris, $add->kelurahan);
 			$object->getActiveSheet()->setCellValue('F'.$baris, $add->kecamatan);
 			$object->getActiveSheet()->setCellValue('G'.$baris, $add->kabupaten);
 			$object->getActiveSheet()->setCellValue('H'.$baris, $add->provinsi);
 			$object->getActiveSheet()->setCellValue('I'.$baris, $add->kordinat);
 			$object->getActiveSheet()->setCellValue('J'.$baris, $add->main);
 			$object->getActiveSheet()->setCellValue('K'.$baris, $add->aktive);
 			
 			

 		$baris++;
 		}

 		$filename = "Data_address_list".'.xlsx';
 		$object->getActiveSheet()->setTitle("Adress List");
 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 		header('Content-Disposition: attachment; filename="'.$filename.'"'); 
 		header('Cache-Control: max-age=0');

 		$write = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
   		 $write->save('php://output');

   		 exit();


	}

}