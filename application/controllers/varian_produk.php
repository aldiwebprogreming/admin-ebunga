<?php 

		class varian_produk extends CI_Controller{


			function __construct(){

				parent:: __construct();
				$this->load->model('m_data');
				$this->load->library('form_validation');
			}



			function data_varian(){


				$data['title'] ='Varian Produk';
				$data['sub_title'] = "Data varian produk";
				$data['varian'] =  $this->m_data->get_data($tabel='tbl_variant');

				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_varian', $data);
				$this->load->view('template2/footer');
			}


			function tambah_varian(){

				$data['title'] = "Tambah Varian Produk";
				$data['sub_title'] = "Tambah varian produk";
				$data['produk'] = $this->m_data->get_data($tabel='tbl_produk');

				$kode = mt_rand(1000,10000);
                $kode1 = mt_rand(1000,10000);
                 

                 $data['kd_variant'] = "EBUNGA_VAR_EBUNGA".$kode."_".$kode1;

				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_varian', $data);
				$this->load->view('template2/footer');



				if($this->input->post('kirim')){


					$data = [

						'kd_variant' => $this->input->post('kd_variant'),
						'kd_product' => $this->input->post('kd_produk'),
						'nama_variant' => $this->input->post('nama_variant'),
						'deks_variant' => $this->input->post('deks_variant'),
						'active' => 1


					];


					$input = $this->db->insert('tbl_variant', $data);
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('varian_produk/tambah_varian');
				}
			}



			function edit_varian(){


				$data['title'] =' Tambah Varian Produk';
				$data['sub_title'] = "Tambah varian produk";
				$id = $this->input->get('id');
				$data['varian'] = $this->m_data->get_det($tabel='tbl_variant', $id);
				
				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_varian', $data);
				$this->load->view('template/footer');

				if ($this->input->post('edit')) {

					$data = [

						'kd_variant' => $this->input->post('kd_variant'),
						'kd_product' => $this->input->post('kd_produk'),
						'nama_variant' => $this->input->post('nama_variant'),
						'deks_variant' => $this->input->post('deks_variant'),
						'active' => $this->input->post('active')


					];


				$id =  $this->input->get('id');
				$tabel = "tbl_variant";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('varian_produk/data_varian');
					
				}



			}


			function hapus_varian(){


				$id = $this->input->get('id');


				$this->db->delete('tbl_variant', array('id' => $id));
				redirect('varian_produk/data_varian');
			}


		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "VARIANT PRODUK EBUNGA";
		$data['footer'] = "Laporan data varian produk ebunga dicetak pada tanggal :";
		$data['variant'] = $this->m_data->get_data("tbl_variant");
 		$this->load->view('cetak/cetak_variant_produk',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_variant_produk", array('Attachment' => 0));
	}



		}


 ?>