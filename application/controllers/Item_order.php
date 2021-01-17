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
 		$this->load->library('form_validation');
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


 		function edit_item_order(){

 			$data['title'] = "Edit item order";
 			$data['sub_title'] = "Edit Item Order";

 			$id = $this->input->get('id');
 			$data['item_order'] = $this->m_data->get_det($tabel='tbl_item_order', $id);

 			$data['provinsi'] = $this->m_data->get_data($tabel="tbl_provinsi");
 			$this->load->view('template2/header', $data);
 			$this->load->view('admin/edit_itemorder', $data);
 			$this->load->view('template2/footer', $data);

 			if ($this->input->post('edit')) {
 				
 				$data =  array(
 					'kd_order' => $this->input->post('kd_order') ,
 					'kd_token_item' => $this->input->post('kd_token_item'), 
 					'kd_produk' => $this->input->post('kd_produk'),
 					'nama_penerima' => $this->input->post('nama_penerima'),
 					'email_penerima' =>$this->input->post('email_penerima') ,
 					'hp_penerima' =>$this->input->post('hp_penerima') ,
 					'tanggal_kirim' => $this->input->post('tanggal_kirim'),
 					'alamat_kirim' =>$this->input->post('alamat_kirim') ,
 					'kel_kirim' => $this->input->post('kel_kirim'),
 					'kec_kirim' => $this->input->post('kec_kirim'),
 					'kab_kirim' => $this->input->post('kab_kirim'),
 					'prov_kirim' => $this->input->post('prov_kirim'),
 					'message' => $this->input->post('message'),
 					'send_card_email' => $this->input->post('send_card_email'),
 					'waktu_kirim' => $this->input->post('waktu_kirim'),
 					'sub_total' => $this->input->post('sub_total'),
 					'disc' => $this->input->post('disc'),
 					'total' => $this->input->post('total')
 				);

 				$tabel = "tbl_item_order";
				$this->m_data->proses_edit($id,$tabel,$data);
        		$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('item_order/data_itemorder');
 			}

 		}

 		function hapus_item_order(){

 			$id = $this->input->get('id');
			$this->db->delete('tbl_item_order', array('id' => $id));
			redirect('item_order/data_itemorder');
 		}


 		function cetak_data(){

 		$this->load->library('dompdf_gen');

		$data['judul'] = "ITEM ORDER";
		$data['footer'] = "Laporan data item order dicetak pada tanggal : ";
		$data['item_order'] = $this->m_data->get_data("tbl_item_order");
 		$this->load->view('cetak/cetak_itemorder',$data);

 		$paper_size ="LEGAL";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_itemorder", array('Attachment' => 0));

 		}
 }


 ?>