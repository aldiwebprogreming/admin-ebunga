

<?php 
	
	/**
	 * 
	 */
	class Customer_order extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();

			$this->load->model('m_data');
			$this->load->library('form_validation');
		}

		public function data_customer_order(){

				$data['title'] = 'Data Customer Order';
				$data['sub_title'] = "Data customer order";

				$data['order'] = $this->m_data->get_data($tabel='tbl_customer_order');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_customer_order', $data);
				$this->load->view('template2/footer');
		}


		public function tambah_customer_order(){



				$data['title'] = 'Tambah Customer Order';
				$data['sub_title'] = "Tambah customer order";

				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_customer_order', $data);
				$this->load->view('template2/footer');
	

		if ($this->input->post('kirim')) {

			

				$data = array(

					'kd_order' => $this->input->post('kd_order') , 
					'customer' => $this->input->post('customer') , 
					'total_item' => $this->input->post('total_item') ,
					'total_charge' => $this->input->post('total_charge') ,  
					'disc' =>  $this->input->post('disc') ,
					'order_time' =>  $this->input->post('order_time') ,
					   
				);


				$input = $this->db->insert('tbl_customer_order', $data);
				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('customer_order/tambah_customer_order');

			
			}

			
		}



		public function hapus_customer_order(){


		$id = $this->input->get('id');
		$this->db->delete('tbl_customer_order', array('id' => $id));
		redirect('customer_order/data_customer_order');


		}


		public function edit_customer_order()
		{


				$data['title'] = 'Edit Customer Order';
				$data['sub_title'] = "Edit  customer";
				$id = $this->input->get('id');
				$data['edit_customer_order'] = $this->m_data->get_det($tabel='tbl_customer_order', $id);

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_customer_order', $data);
				$this->load->view('template2/footer');



		if ($this->input->post('edit')) {

		
			$data = array(

					'kd_order' => $this->input->post('kd_order') , 
					'customer' => $this->input->post('customer') , 
					'total_item' => $this->input->post('total_item') ,
					'total_charge' => $this->input->post('total_charge') ,  
					'disc' =>  $this->input->post('disc') ,
					'order_time' =>  $this->input->post('order_time') ,
					   
				);


				$id =  $this->input->get('id');
				$tabel = "tbl_customer_order";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('customer_order/data_customer_order');
		
         	
			}



	}


	function get_customer_order(){


		$data['order'] = $this->m_data->get_order();
		$this->load->view('admin/tabel_order', $data);
	}



		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "CUSTOMER ORDER";
		$data['customer_order'] = $this->m_data->get_data("tbl_customer_order");
 		$this->load->view('cetak/cetak_customer_order',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_customer_order", array('Attachment' => 0));
	}

	

}


