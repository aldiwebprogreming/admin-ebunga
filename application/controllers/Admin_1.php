<?php 

/**
 * 
 */
class Admin_1 extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_data');
	}



	function data_admin1{

		$data['title'] = "Data Admin 1";
		$data['sub_title'] = "Data admin 1";

		$data['admin1']=$this->m_data->get_data('tbl_admin1')
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_admin1', $data);
		$this->load->view('template2/footer');



	}

	function hapus_admin1(){

		$id=$this->input->get('id');

	 	$this->db->delete('', array('id' => $id));
		 redirect('Daerah_administratif_2/administratif2');
	}


	function edit_admin1(){

		$data['title'] = "Edit admin1";
		$data['sub_title'] = "Edit admin 1";
		
		$id = $this->input->get('id');

		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_admin1', $data);
		$this->load->view('template2/footer');


		if ($this->input->post('edit')) {
				

				$data = [

					'kd_daerah' => $this->input->post('kd_daerah'),
					'nama_daerah' => $this->input->pos('nama_daerah'),
					'kode_post' => $this->input->post('kode_post')

				];

				$tabel = "tbl_admin1";
				$this->m_data->proses_edit($id,$tabel,$data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('/');


		}	



	}


	function tambah_admin1(){

			$data['title'] = "Tambah Data admin1";
			$data['sub_title'] = "Tamabah data admin 1";

			$this->load->view('template2/header', $data);
			$this->load->view('admin/tambah_admin1', $data);
			$this->load->view('template2/footer');

			if ($this->input->post('kirim')) {
						

					$data = [
						'kd_daerah' => $this->input->post('kd_daerah'),
						'nama_daerah' => $this->input->post('nama_daerah'),
						'kode_pos' => $this->input->post('kode_pos')
					];


				
					$this->db->insert('tbl_admin1', $data);

					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('/');

			}

		}



}