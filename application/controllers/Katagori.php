<?php 
/**
 * 
 */
class Katagori extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_data');

	}


	public function data_katagori(){

		$data['title'] = "Katagori";
		$data['sub_title'] = "Data Katagori";

		$tabel = "tbl_kategori_produk";
		$data['kategori'] = $this->m_data->get_data($tabel);

		$this->load->view("template2/header", $data);
		$this->load->view("admin/data_katagori", $data);
		$this->load->view("template2/footer");

	}



	public function tambah_katagori() {


		$data['title'] = "Tambah Kategori";
		$data['sub_title'] = "Tambah Kategori";

		$this->load->view("template2/header", $data);
		$this->load->view("admin/tambah_katagori", $data);
		$this->load->view("template2/footer");


			if ($this->input->post('kirim')) {
				

				$data = array(
					'kd_kategori' => $this->input->post('kd_kategori') , 
					'nama_kategori' => $this->input->post('nama_kategori'),
					'deks' => $this->input->post('deks'),
					'active' => 1


				);


				$this->db->insert('tbl_kategori_produk', $data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('katagori/tambah_katagori');

			}


	}


	public function edit(){

			$data['title'] = "Edit Kategori";
			$data['sub_title'] = "Edit Kategori";

			$tabel = "tbl_kategori_produk";
			$id = $this->input->get('id');

			$data['edit_kategori'] = $this->m_data->get_det($tabel, $id);

			$this->load->view('template2/header', $data);
			$this->load->view('admin/form_edit', $data);
			$this->load->view('template2/footer');



			if ($this->input->post('edit')) {
				
				$data = array(

					'kd_kategori' => $this->input->post('kd_kategori') ,
					'nama_kategori' => $this->input->post('nama_kategori'),
					'deks' => $this->input->post('deks') ,
					'active' => $this->input->post('active') 

					 );
				$tabel = "tbl_kategori_produk";

					$this->m_data->proses_edit($id,$tabel,$data);
        		// $this->db->where('id', $id);
        		// $this->db->update('tbl_kategori_produk', $data);
        		 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('katagori/data_katagori');



			}

	}


	public function hapus_kategori_produk(){

		$id = $this->input->get('id');

		$this->db->delete('tbl_kategori_produk', array('id' => $id));

		 redirect('katagori/data_katagori');

	}

	public function sub_kategori(){

		$data['title'] = " Sub Kategori";
		$data['sub_title'] = "Data Sub Kategori";

		$tabel = "tbl_sub_kategori";
		$data['sub_kategori'] = $this->m_data->get_data($tabel);

		$this->load->view("template2/header", $data);
		$this->load->view("admin/dataSub_kategori", $data);
		$this->load->view("template2/footer");



	}

	public function tambahsub_katagori() {


		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './gambar_subproduk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);




		$data['title'] = "Tambah  Sub Kategori";
		$data['sub_title'] = "Tambah  Sub Ketagori";
		$data['kategori'] = $this->m_data->get_data($tabel='tbl_kategori_produk');
		$this->load->view("template2/header", $data);
		$this->load->view("admin/tambahsub_kategori", $data);
		$this->load->view("template2/footer");


			if ($this->input->post('kirim')) {

				if (!$this->upload->do_upload('foto')) {

				$error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("kategori/tambahsub_katagori");
					
				} else {
				
				$nama_kategori = trim($this->input->post('nama_kategori'));
				$out = explode(" ",  strtolower($nama_kategori));
				$slug = implode("-", $out);

				$data = array(
					'kd_sub_kategori' => $this->input->post('kd_sub_kategori') , 
					'nama_kategori' => $nama_kategori,
					'slug' => $slug,
					'kd_kategori' => $this->input->post('kd_kategori'),
					'foto' => $this->upload->data('file_name'),  
					'aktif' => 1


				);


				$this->db->insert('tbl_sub_kategori', $data);
				$data = array('upload_data' => $this->upload->data());

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('katagori/tambahsub_katagori');

			}

		}


	}



	public function editsub_kategori(){


		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './gambar_subproduk/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);



			$data['title'] = "Edit  Sub Kategori";
			$data['sub_title'] = "Edit  Sub Kategori";

			$tabel = "tbl_sub_kategori";
			$id = $this->input->get('id');

			$data['edit_subkategori'] = $this->m_data->get_det($tabel, $id);
			$data['kategori1'] = $this->m_data->get_data($tabel='tbl_kategori_produk');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/form_edit_sub', $data);
			$this->load->view('template2/footer');



			if ($this->input->post('edit')) {

				if (!$this->upload->do_upload('foto')) {

				$error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("katagori/sub_kategori");
					
					
				} else {

				$nama_kategori = trim($this->input->post('nama_kategori'));
				$out = explode(" ", strtolower($nama_kategori));
				$slug = implode("-", $out);
				
				$data = array(

					'kd_sub_kategori' => $this->input->post('kd_sub_kategori') ,
					'nama_kategori' => $nama_kategori,
					'slug' => $slug,
					'kd_kategori' => $this->input->post('kd_kategori'),
					'foto'=> $this->upload->data('file_name'),
					'aktif' => $this->input->post('active') 

					 );

				
					$tabel = "tbl_sub_kategori";
					$this->m_data->proses_edit($id,$tabel,$data);
					$data = array('upload_data' => $this->upload->data());
				
        		
        		 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('katagori/sub_kategori');


				}
			}

	}

	public function hapus_sub_kategori(){

		$id = $this->input->get('id');

		$this->db->delete('tbl_sub_kategori', array('id' => $id));

		 redirect('katagori/sub_kategori');

	}


	

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "KATEGORI PRODUK EBUNGA";
		$data['kategori'] = $this->m_data->get_data("tbl_kategori_produk");
 		$this->load->view('cetak/cetak_kategori',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_kategori_produk", array('Attachment' => 0));
	}



}

 ?>