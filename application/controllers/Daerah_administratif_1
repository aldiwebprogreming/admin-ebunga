<?php 

	/**
	 * 
	 */
	class Daerah_administratif_1 extends CI_Controller
	{
		
		function __construct()
		{

			parent::__construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');

		}


		public function administratif1(){

		$data['title'] = "Administratif 1";
		$data['sub_title'] = "Data daerah administratif 1";
		$data['adms'] = $this->m_data->get_data($tabel='tbl_daerah_administratif_1');
		$this->load->view('template/header', $data);
		$this->load->view('admin/administratif1', $data);
		$this->load->view('template/footer');


}

		public function tambah_administratif1(){
		$data['title'] = "Administratif 1";
		$data['sub_title'] = "Data daerah administratif 1";
		
		$this->load->view('template/header', $data);
		$this->load->view('admin/tambah_administratif1', $data);
		$this->load->view('template/footer');


		if ($this->input->post('kirim')) {
			$data = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'kode_pos' => $this->input->post('kode_post'),
				'tingkat' => $this->input->post('tingkat')

				 );


				$this->db->insert('tbl_daerah_administratif_1', $data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('Daerah_administratif_1/tambah_administratif1');


		}

		}


		public function edit_adminstratif1(){
		$data['title'] = "Administratif 1";
		$data['sub_title'] = "Data daerah administratif 1";

		$id = $this->input->get('id');
		$data['adms'] = $this->m_data->get_det($tabel='tbl_daerah_administratif_1', $id);

		
		$this->load->view('template/header', $data);
		$this->load->view('admin/edit_administratif1', $data);
		$this->load->view('template/footer');


		if ($this->input->post('edit')) {
			$data = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'kode_pos' => $this->input->post('kode_post'),
				'tingkat' => $this->input->post('tingkat')

				 );


			$id = $this->input->get('id');
			$tabel = "tbl_daerah_administratif_1";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);


				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('Daerah_administratif_1/administratif1');


		}

		}


		public function hapus_adminstratif1() {


		$id = $this->input->get('id');
		$this->db->delete('tbl_daerah_administratif_1', array('id' => $id));
		 redirect('Daerah_administratif_1/administratif1');


		}



	}


 ?>