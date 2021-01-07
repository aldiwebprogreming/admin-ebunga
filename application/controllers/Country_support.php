<?php 

class Country_support extends CI_Controller{


		function __construct(){

			parent:: __construct();

			$this->load->model('m_data');
			$this->load->library('form_validation');

		}



		function data_countrySupport(){

			$data['title'] = "Data Country";
			$data['sub_title'] = "Data country support";
			$data['country'] = $this->m_data->get_data($tabel='tbl_country_support');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_country', $data);
			$this->load->view('template2/footer');



		}


		function tambah_countrySupport(){

			$data['title'] = "Tambah Country";
			$data['sub_title'] = "Tambah country support";


			$this->form_validation->set_rules('kd_country', 'kode country','trim|is_unique[tbl_country_support.kd_country]');

			$this->form_validation->set_rules('name_country','name country','trim|is_unique[tbl_country_support.name_country]');


			if ($this->form_validation->run() == FALSE) {
				
					$this->load->view('template2/header', $data);
					$this->load->view('admin/tambah_country', $data);
					$this->load->view('template2/footer');	

			} else {


					$data = [

						'kd_country' => $this->input->post('kd_country'),
						'name_country' => $this->input->post('name_country'),
						'status' => $this->input->post('status'),
						'active' => 1

					];


					$input = $this->db->insert('tbl_country_support', $data);
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');

				 	redirect('Country_support/tambah_countrySupport');




			}


		}


		function edit_country(){


			$data['title'] = "Edit country";
			$data['sub_title'] = "Edit country";
			$id = $this->input->get('id');
			$data['country'] = $this->m_data->get_det($tabel='tbl_country_support', $id);


			$this->load->view('template2/header', $data);
			$this->load->view('admin/edit_country', $data);
			$this->load->view('template2/footer');


			if ($this->input->post('edit')) {
				$data = [

					'kd_country' => $this->input->post('kd_country'),
					'name_country' => $this->input->post('name_country'),
					'status' => $this->input->post('status'),
					'active' => $this->input->post('active')
			];


					$tabel = "tbl_country_support";
					$this->m_data->proses_edit($id,$tabel,$data);
					
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				 	redirect('Country_support/data_countrySupport');

			}


			
		}


		function hapus_country(){


			$id = $this->input->get('id');

			$this->db->delete('tbl_country_support', array('id' => $id));
				redirect('Country_support/data_countrySupport');
		}

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "COUNTRY SUPPORT EBUNGA";
		$data['country'] = $this->m_data->get_data("tbl_country_support");
 		$this->load->view('cetak/cetak_country',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_country", array('Attachment' => 0));
	}

	
}


 ?>