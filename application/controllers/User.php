<?php 
	
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

		$this->load->model('m_data');
		$this->load->library('form_validation');
		}



		public function data_user(){


			$data['title'] = "Data User";
			$data['sub_title'] = "Data User";
			$data['user'] = $this->m_data->get_data($tabel='tbl_user');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_user', $data);
			$this->load->view('template2/footer');



		}


		public function tambah_user(){


			$this->form_validation->set_rules('username','username','trim|is_unique[tbl_user.username]');


			if ($this->form_validation->run() == False) {
			
			$data['title'] = "Tambah User";
			$data['sub_title'] = "Tambah Data User";
			

			$this->load->view('template2/header', $data);
			$this->load->view('admin/tambah_user', $data);
			$this->load->view('template2/footer');

			} else {

				$data = array(
					'username' => $this->input->post('username'), 
					'type' => $this->input->post('type'),
					'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT), 
					'active' => 1


				);

				$input = $this->db->insert('tbl_user', $data);

				
					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

				redirect('user/tambah_user');
			



			}
			

		}


				public function edit_user(){


	
			
			
			$data['title'] = "Edit User";
			$data['sub_title'] = "Edit Data User";

			$id = $this->input->get('id');
			$data['edit_user'] = $this->m_data->get_det($tabel='tbl_user', $id);
			

			$this->load->view('template2/header', $data);
			$this->load->view('admin/edit_user', $data);
			$this->load->view('template2/footer');


			if ($this->input->post('edit')) {
			
		

			

				$data = array(
					'username' => $this->input->post('username'), 
					'type' => $this->input->post('type'),
					'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
					'active' => $this->input->post('active')

				);

				$id = $this->input->get('id');
				$tabel = 'tbl_user';

				$edit = $this->m_data->proses_edit($id,$tabel,$data);

	

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('user/data_user');


					}
			

		}


	public function hapus_user(){

		$id = $this->input->get('id');

		$this->db->delete('tbl_user', array('id' => $id));

		 redirect('user/data_user');

	}


	function pilih_data(){

		$id = $this->input->get('status');


		if ($id == 'all') {
		$data['user'] = $this->m_data->get_data($tabel='tbl_user');
		$this->load->view('admin/selecet_user', $data);
		} else{

		$data['user'] = $this->m_data->get_det1($tabel='tbl_user', $id);
		$this->load->view('admin/selecet_user', $data);
		}
	}


	function detail(){

		$id = $this->input->get('id');
		$data['title'] = "Detail User";

		$data['user'] = $this->db->get_where('tbl_user', array('id' => $id))->result_array();
		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_user', $data);
		$this->load->view('template2/footer');
	}

	function cetak_excel(){

		$data['user'] = $this->m_data->get_data('tbl_user');
		$this->load->view('excel/cetak_user', $data);
	}



	}


 ?>