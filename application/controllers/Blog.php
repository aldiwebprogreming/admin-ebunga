

<?php 
	
	/**
	 * 
	 */
	class Blog extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();

			$this->load->model('m_data');
			$this->load->library('form_validation');
		}

		public function data_blog(){

				$data['title'] = 'Data Blog';
				$data['sub_title'] = "Data blog";

				$data['blog'] = $this->m_data->get_data($tabel='tbl_blog');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_blog', $data);
				$this->load->view('template2/footer');
		}


		public function tambah_blog(){





				$data['title'] = 'Tambah Blog';
				$data['sub_title'] = "Tambah  blog";

				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_blog', $data);
				$this->load->view('template2/footer');
	

		if ($this->input->post('kirim')) {

			

				$data = array(
					'kd_article' => $this->input->post('kd_article') , 
					'title' => $this->input->post('title') , 
					'sub_title' => $this->input->post('sub_title') ,
					'isi' => $this->input->post('isi') ,  
					'date_publish' =>  $this->input->post('date_publish') ,
					'publish' => $this->input->post('publish') ,
					'kategori' => $this->input->post('kategori')    
			
				);


				$input = $this->db->insert('tbl_blog', $data);
				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('blog/tambah_blog');

			
			}

			
		}



		public function hapus_blog(){


		$id = $this->input->get('id');
		$this->db->delete('tbl_blog', array('id' => $id));
		redirect('blog/data_blog');


		}


		public function edit_blog()
		{


				$data['title'] = 'Edit Blog';
				$data['sub_title'] = "Edit  blog";
				$id = $this->input->get('id');
				$data['edit_blog'] = $this->m_data->get_det($tabel='tbl_blog', $id);
				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_blog', $data);
				$this->load->view('template2/footer');



		if ($this->input->post('edit')) {

		

				$data = array(
					'kd_article' => $this->input->post('kd_article') ,
					'title' => $this->input->post('title') , 
					'sub_title' => $this->input->post('sub_title') ,
					'isi' => $this->input->post('isi') ,  
					'date_publish' =>  $this->input->post('date_publish') ,
					'publish' => $this->input->post('publish') ,
					'kategori' => $this->input->post('kategori')    
			
				);


				$id =  $this->input->get('id');
				$tabel = "tbl_blog";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('blog/data_blog');
		
         	
			}



	}

	function coba(){

		$data['title'] = 'Coba';
		$data['sub_title'] = 'Coba';

		$this->load->view('template2/header', $data);
		$this->load->view('admin/coba', $data);
		$this->load->view('template2/footer');

	}

	function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "BLOG EBUNGA";
		$data['footer'] = "Laporan data blog dicetak pada tanggal :";
		$data['blog'] = $this->m_data->get_data("tbl_blog");
 		$this->load->view('cetak/cetak_blog',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_blog", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Blog";
		$data['sub_title'] = "Detail blog";
		$id = $this->input->get('id');
		$data['blog'] = $this->m_data->get_det($tabel='tbl_blog', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_blog', $data);
		$this->load->view('template2/footer');
	}


	function cetak_excel(){

		$data['blog'] = $this->m_data->get_data('tbl_blog');
		$this->load->view('excel/cetak_blog', $data);
	}


}


