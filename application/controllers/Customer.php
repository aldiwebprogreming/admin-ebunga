

<?php 
	
	/**
	 * 
	 */
	class Customer extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();

			$this->load->model('m_data');
			$this->load->library('form_validation');
		}

		public function data_customer(){

				$data['title'] = 'Data Customer';
				$data['sub_title'] = "Data customer";

				$data['customer'] = $this->m_data->get_data($tabel='tbl_customer');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_customer', $data);
				$this->load->view('template2/footer');
		}


		public function tambah_customer(){

			$this->form_validation->set_rules('email','email','trim|is_unique[tbl_customer.email]');


				if ($this->form_validation->run() == FALSE) {
					
				$data['title'] = 'Tambah Customer ';
				$data['sub_title'] = "Tambah customer";

				$data['prov'] = $this->m_data->get_data($tabel='tbl_provinsi');
				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_customer', $data);
				$this->load->view('template2/footer');
				} else {

					$data = [

						'email' => $this->input->post('email'),
						'full_name' => $this->input->post('full_name'),
						'phone'=> $this->input->post('phone'),
						'birth_date'=> $this->input->post('birth_date'),
						'gender'=> $this->input->post('gender'),
						'alamat'=> $this->input->post('alamat'),
						'kelurahan'=> $this->input->post('kelurahan'),
						'kecamatan'=> $this->input->post('kecamatan'),
						'kabupaten'=> $this->input->post('kabupaten'),
						'provinsi'=> $this->input->post('provinsi'),
						'active'=> 1
					];

						$input = $this->db->insert('tbl_customer', $data);


				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('customer/tambah_customer');


				}

			
		}



		public function hapus_customer(){


		$id = $this->input->get('id');
		$this->db->delete('tbl_customer', array('id' => $id));
		redirect('customer/data_customer');


		}


		public function edit_customer()
		{


				$data['title'] = 'Edit Customer ';
				$data['sub_title'] = "Edit customer";

				$id = $this->input->get('id');

				$data['prov'] = $this->m_data->get_data($tabel='tbl_provinsi');
				$data['customer'] = $this->m_data->get_det($tabl='tbl_customer',$id);
				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_customer', $data);
				$this->load->view('template2/footer');



		if ($this->input->post('edit')) {



					$data = [

						'email' => $this->input->post('email'),
						'full_name' => $this->input->post('full_name'),
						'phone'=> $this->input->post('phone'),
						'birth_date'=> $this->input->post('birth_date'),
						'gender'=> $this->input->post('gender'),
						'alamat'=> $this->input->post('alamat'),
						'kelurahan'=> $this->input->post('kelurahan'),
						'kecamatan'=> $this->input->post('kecamatan'),
						'kabupaten'=> $this->input->post('kabupaten'),
						'provinsi'=> $this->input->post('provinsi'),
						'active'=> $this->input->post('active')
					];


			

				$id =  $this->input->get('id');
				$tabel = "tbl_customer";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('customer/data_customer');
		
         	
			}



	}


	function get_customer(){

		$data['pelanggan'] = $this->m_data->get_pelanggan();
		$this->load->view('admin/tabel_pelanggan', $data);


	}


	function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "CUSTOMER";
		$data['footer'] = "Laporan data customer dicetak pada tanggal : ";
		$data['customer'] = $this->m_data->get_data("tbl_customer");
 		$this->load->view('cetak/cetak_customer',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_customer", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Customer";
		$data['sub_title'] = "Detail customer";
		$id = $this->input->get('id');
		$data['customer'] = $this->m_data->get_det($tabel='tbl_customer', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_customer', $data);
		$this->load->view('template2/footer');
	}

}


