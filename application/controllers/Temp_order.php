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

 	function cetak_excel(){

 		$data['order'] = $this->m_data->get_data($tabel="tbl_temp_order");

 		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
 		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

 		$object = new PHPExcel();
 		$object->getProperties()->setCreator("laporan excel");
 		$object->getProperties()->setLastModifiedBy("Ebunga");
 		$object->getProperties()->setTitle("Laporan data temp order");


 		$object->setActiveSheetIndex(0);

 		$object->getActiveSheet()->setCellValue('A1','No');
 		$object->getActiveSheet()->setCellValue('B1','KODE TEMP');
 		$object->getActiveSheet()->setCellValue('C1','CUSTOMER');
 		$object->getActiveSheet()->setCellValue('D1','WAKTU');
 		$object->getActiveSheet()->setCellValue('E1','KODE PRODUK');
 		$object->getActiveSheet()->setCellValue('F1',' QT');
 		$object->getActiveSheet()->setCellValue('G1','TOTAL');

 		$baris = 2;
 		$no = 1;

 		foreach ($data['order'] as $order) {
 			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
 			$object->getActiveSheet()->setCellValue('B'.$baris, $order->kd_temp);
 			$object->getActiveSheet()->setCellValue('C'.$baris, $order->kd_customer);
 			$object->getActiveSheet()->setCellValue('D'.$baris, $order->waktu);
 			$object->getActiveSheet()->setCellValue('E'.$baris, $order->kd_product);
 			$object->getActiveSheet()->setCellValue('F'.$baris, $order->qt);
 			$object->getActiveSheet()->setCellValue('G'.$baris, $order->total);

 			$baris++;
 		}

 		$filename = "Data_temp_order".'.xlsx';
 		$object->getActiveSheet()->setTitle("Data Temp Order");
 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 		header('Content-Disposition: attachment; filename="'.$filename.'"'); 
 		header('Cache-Control: max-age=0');

 		$write = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
   		 $write->save('php://output');

   		 exit();



 	}

}

 ?>