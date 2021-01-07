<?php 

	/**
	 * 
	 */
	class Produk extends CI_Controller
	{
		
		function __construct()
		{

		parent:: __construct();
		$this->load->model('m_data');
		$this->load->library('form_validation');
		}


		public function data_produk(){
			$data['title'] = "Data Produk";
			$data['sub_title'] = "Data produk";

			$data['produk'] = $this->m_data->get_data($tabel='tbl_produk');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_produk', $data);
			$this->load->view('template2/footer');	

		}

		public function tambah_produk(){


	  	 $this->load->helper(array('form', 'url'));

          $config['upload_path']          = './img_produk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);



			$data['title'] = "Tambah Produk";
			$data['sub_title'] = " Tambah data produk";

			$data['kategori'] = $this->m_data->get_data($tabel='tbl_sub_kategori');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/tambah_produk', $data);
			$this->load->view('template2/footer');

			if ($this->input->post('kirim')) {


				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("produk/tambah_produk");

	         	} else {

				$nama_produk = trim($this->input->post('nama_produk'));
				$out = explode(" ", strtolower($nama_produk));
				$slug = implode("-", $out);
				
				$data = [

					'kd_produk' => $this->input->post('kd_produk'),
					'nama_produk' => $nama_produk,
					'slug' => $slug,
					'deks_produk' => $this->input->post('deks'),
					'kategori' => $this->input->post('kategori'),
					'sub_kategori' =>$this->input->post('sub_kategori'),
					'id_branch' =>$this->input->post('stok'),
					'id_seller'=>$this->input->post('id_seller'),
					'harga'=>$this->input->post('harga'),
					'stok'=> $this->input->post('stok'),
					'foto_utama' => $this->upload->data('file_name'),  
					'active'=> 1


				];	


				$input = $this->db->insert('tbl_produk', $data);
				$data = array('upload_data' => $this->upload->data());

				if($input AND $data){

					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('produk/tambah_produk');
				}

			}

			}
		}

			public function hapus_produk(){

				$id = $this->input->get('id');
				$this->db->delete('tbl_produk', array('id' => $id));
				 redirect('produk/data_produk');
		}


		public function edit_produk(){


		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './img_produk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);



			$data['title'] = "Edit Produk";
			$data['sub_title'] = " Edit data produk";

			$id = $this->input->get('id');
			$tabel ="tbl_produk";
			$data['produk'] = $this->m_data->get_det($tabel, $id);

			$this->load->view('template2/header', $data);
			$this->load->view('admin/edit_produk', $data);
			$this->load->view('template2/footer');

			if ($this->input->post('edit')) {


				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("produk/edit_produk");

	         	} else {

				$nama_produk = trim($this->input->post('nama_produk'));
				$out = explode(" ", strtolower($nama_produk));
				$slug = implode("-", $out);
				
				$data = [

					'kd_produk' => $this->input->post('kd_produk'),
					'nama_produk' => $nama_produk,
					'slug' => $slug,
					'deks_produk' => $this->input->post('deks'),
					'kategori' => $this->input->post('kategori'),
					'sub_kategori' =>$this->input->post('sub_kategori'),
					'id_branch' =>$this->input->post('stok'),
					'id_seller'=>$this->input->post('id_seller'),
					'harga'=>$this->input->post('harga'),
					'stok'=> $this->input->post('stok'),
					'foto_utama' => $this->upload->data('file_name'),  
					'active'=>  $this->input->post('active')


				];	


				$tabel = "tbl_produk";
				$this->m_data->proses_edit($id,$tabel,$data);
				$data = array('upload_data' => $this->upload->data());


					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('produk/data_produk');
			
			}

			}
		}

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "PRODUK EBUNGA";
		$data['produk'] = $this->m_data->get_data("tbl_produk");
 		$this->load->view('cetak/cetak_produk',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_produk", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Produk";
		$data['sub_title'] = "Detail produk";
		$id = $this->input->get('id');
		$data['produk'] = $this->m_data->get_det($tabel='tbl_produk', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_produk', $data);
		$this->load->view('template2/footer');
	}


	}

 ?>