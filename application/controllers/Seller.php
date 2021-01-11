<?php 

	/**
	 * 
	 */
	class Seller extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');
		}


			public function data_seller(){

				$data['title'] = "Data Seller";
				$data['sub_title'] = "Data seller";

				$data['seller'] = $this->m_data->get_data($tabel='tbl_seller');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_seller',$data);
				$this->load->view('template2/footer');




			}


			function tambah_seller(){

				$data['title'] = 'Tambah Seller';
				$data['sub_title'] = "Tambah seller";


				$data['provinsi'] = $this->m_data->get_data($tabel= 'tbl_provinsi');

				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_seller', $data);
				$this->load->view('template2/footer');



				if($this->input->post('kirim')){

					$data = [

						'username' => $this->input->post('username'),
						'full_name' => $this->input->post('full_name'),
						'email' => $this->input->post('email'),	
						'phone' => $this->input->post('phone'),
						'country' => $this->input->post('country'),
						'provinsi' => $this->input->post('provinsi'),
						'kabupaten' => $this->input->post('kabupaten'),
						'kecamatan' => $this->input->post('kecamatan'),
						'kelurahan' => $this->input->post('kelurahan'),
						'alamat' => $this->input->post('alamat'),
						'postal_code' => $this->input->post('postal_code'),
						'ktp' => $this->input->post('ktp'),
						'npwp' => $this->input->post('npwp'),
						'siup' => $this->input->post('siup'),
						'status' => $this->input->post('status'),
						'suspend' => 1
					];



				$input = $this->db->insert('tbl_seller', $data);
				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('seller/tambah_seller');



				}
			}






			public function hapus_seller(){

				$id = $this->input->get('id');
				$this->db->delete('tbl_seller', array('id' => $id));

				redirect('seller/data_seller');

			}



			public function edit_seller(){

				$data['title'] ="Edit Seller";
				$data['sub_title'] = "Edit seller";

				$id = $this->input->get('id');
				$tabel = "tbl_seller";
				$data['seller'] = $this->m_data->get_det($tabel,$id);
				$data['prov1'] = $this->m_data->get_data($tabel='tbl_provinsi');

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_seller',$data);
				$this->load->view('template2/footer');


				if ($this->input->post('edit')) {
					
					$data = array(
						'username' => $this->input->post('username') ,
						'full_name' => $this->input->post('full_name'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
						'country' => $this->input->post('country'),
						'provinsi' => $this->input->post('provinsi'),
						'kabupaten' => $this->input->post('kabupaten'),
						'kecamatan' => $this->input->post('kecamatan'),
						'kelurahan' => $this->input->post('kelurahan'),
						'postal_code' => $this->input->post('postal_code'),
						'alamat' => $this->input->post('alamat'),
						'ktp' => $this->input->post('ktp'),
						'npwp' => $this->input->post('npwp'),
						'siup' => $this->input->post('siup'),
						'suspend' => $this->input->post('suspend')

					);


					$id = $this->input->get('id');
					$tabel = "tbl_seller";
					$edit =  $this->m_data->proses_edit($id,$tabel,$data);

					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

					redirect('seller/data_seller');


				}


				}


		function status_seller(){

			$id = $this->input->get('id');

			$data = [

				'status' => 'disable'

			];

	
				$tabel = "tbl_seller";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);
					

					$this->session->set_flashdata('pesan2', '<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong> Berhasil mendisable seller.</strong>
						</div>');

				redirect('seller/data_seller');




		}


		function status_seller_disable(){

			$id = $this->input->get('id');

			$data = [

				'status' => 'active'

			];

	
				$tabel = "tbl_seller";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong> Berhasil mengaktifkan seller.</strong>
						</div>');


				redirect('seller/data_seller');





		}


		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "SELLER EBUNGA";
		$data['footer'] = "Laporan data seller ebunga dicetak pada tanggal :";
		$data['seller'] = $this->m_data->get_data("tbl_seller");
 		$this->load->view('cetak/cetak_seller',$data);

 		$paper_size ="LEGAL";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_seller", array('Attachment' => 0));
	}


	function detail(){

		$data['title'] = "Detail Seller";
		$data['sub_title'] = "Detail  seller";
		$id = $this->input->get('id');
		$data['seller'] = $this->m_data->get_det($tabel='tbl_seller', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_seller', $data);
		$this->load->view('template2/footer');
	}




		


	}	

 ?>