<?php 

	/**
	 * 
	 */
	class Operator extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');

		}

		public function data_operator(){

			$data['title']= "Data Operator";
			$data['sub_title'] = "Data operator ebunga";

			$data['operator'] = $this->m_data->get_data($tabel='tbl_operator');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_operator', $data);
			$this->load->view('template2/footer');


		}

		public function tambah_operator(){

			$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[tbl_operator.username]');
			
			if ($this->form_validation->run() == FALSE) {

				$data['title'] = "Tambah Operator";
				$data['sub_title'] = 'Tambah operator ebunga';
				$this->load->view('template2/header', $data);
				$this->load->view('admin/tambah_operator', $data);
				$this->load->view('template2/footer');
					
			}
			else {

					$data = array(
						'username' => $this->input->post('username'),
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'hp' => $this->input->post('hp'), 
						'alamat' => $this->input->post('alamat'),
						'posisi' => $this->input->post('posisi'),
						'bio' => $this->input->post('bio'),
						'active' => 1
					);


					$input = $this->db->insert('tbl_operator',$data);
					if ($input) {
						$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

					redirect('operator/tambah_operator');
					}

			}


			



		}

			public function edit_operator(){

				$data['title'] = "Edit Operator";
				$data['sub_title'] = 'Edit operator ebunga';

				$id = $this->input->get('id');
				$data['operator'] = $this->m_data->get_det($tabel='tbl_operator', $id);

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_operator', $data);
				$this->load->view('template2/footer');



				if ($this->input->post('edit')) {
					
				$data = array(
						'username' => $this->input->post('username'),
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'hp' => $this->input->post('hp'), 
						'alamat' => $this->input->post('alamat'),
						'posisi' => $this->input->post('posisi'),
						'bio' => $this->input->post('bio'),
						'active' => $this->input->post('active')
					);


					$id = $this->input->get('id');
					$tabel = "tbl_operator";
					$edit =  $this->m_data->proses_edit($id,$tabel,$data);

					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

					redirect('operator/data_operator');
				}

			}

public function hapus_operator(){

		$id = $this->input->get('id');
		$this->db->delete('tbl_operator', array('id' => $id));
		redirect('operator/data_operator');
	
}

function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "OPERATOR EBUNGA";
		$data['oprator'] = $this->m_data->get_data("tbl_operator");
 		$this->load->view('cetak/cetak_oprator',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_oprator", array('Attachment' => 0));
	}


	}

