<?php 
	
	/**
	 * 
	 */
	class Variasi_produk extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();

			$this->load->model('m_data');
			$this->load->library('form_validation');
		}

		public function data_variasi_produk(){

				$data['title'] = 'Data Variasi Produk';
				$data['sub_title'] = "Data variasi produk";

				$data['variasi_p'] = $this->m_data->get_data($tabel='tbl_variasi_produk');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_variasi_produk', $data);
				$this->load->view('template2/footer');
		}


		public function tambah_variasi_produk(){


	  	 $this->load->helper(array('form', 'url'));

          $config['upload_path']          = './img_produk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);



				$data['title'] = 'Tambah  Variasi Produk';
				$data['sub_title'] = "Tambah variasi produk";

				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_variasi_produk', $data);
				$this->load->view('template2/footer');
	

		if ($this->input->post('kirim')) {

			if (!$this->upload->do_upload('foto')) {
				 $error = array('error' => $this->upload->display_errors());
			 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
         	 redirect("variasi_produk/tambah_variasi_produk");
			} else {

				$data = array(
					'kd_sub_produk' => $this->input->post('kode_sub_produk') , 
					'nama_sub_produk' => $this->input->post('nama_sub_produk') , 
					'deks_sub_produk' => $this->input->post('deks_sub_produk') ,
					'kd_produk' => $this->input->post('kode_produk') ,  
					'foto' =>  $this->upload->data('file_name') ,  
					'active' => 1   
			
				);


				$input = $this->db->insert('tbl_variasi_produk', $data);
				$data = array('upload_data' => $this->upload->data());

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('variasi_produk/tambah_variasi_produk');
		
         	
			}

			
			}

			
		}



		public function hapus_variasi_produk(){


		$id = $this->input->get('id');
		$this->db->delete('tbl_variasi_produk', array('id' => $id));
		redirect('variasi_produk/data_variasi_produk');


		}


		public function edit_variasi_produk()
		{

			$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './img_produk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);



				$data['title'] = 'Edit Variasi Produk';
				$data['sub_title'] = "Edit data variasi produk";

				$data['variasi_p'] = $this->m_data->get_data($tabel='tbl_variasi_produk');

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_variasi_produk', $data);
				$this->load->view('template2/footer');
	

		if ($this->input->post('edit')) {

			if (!$this->upload->do_upload('foto')) {
				 $error = array('error' => $this->upload->display_errors());
			 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
         	 redirect("variasi_produk/edit_variasi_produk");
			} else {

				$data = array(
					'kd_sub_produk' => $this->input->post('kode_sub_produk') , 
					'nama_sub_produk' => $this->input->post('nama_sub_produk') , 
					'deks_sub_produk' => $this->input->post('deks_sub_produk') ,
					'kd_produk' => $this->input->post('kode_produk') ,  
					'foto' =>  $this->upload->data('file_name') ,  
					'active' => $this->input->post('active')   
			
				);

				$id =  $this->input->get('id');
				$tabel = "tbl_variasi_produk";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				$data = array('upload_data' => $this->upload->data());

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('variasi_produk/data_variasi_produk');
		
         	
			}

			
			}


		}



	}

 ?>