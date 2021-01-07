<?php 

	/**
	 * 
	 */
	class Daerah_administratif_3 extends CI_Controller
	{
		
		function __construct()
		{

			parent::__construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');

		}


		public function administratif3(){

		$data['title'] = "Administratif 3";
		$data['sub_title'] = "Data daerah administratif 3";
		$data['adms'] = $this->m_data->get_data($tabel='tbl_daerah_administratif_3');
		$this->load->view('template/header', $data);
		$this->load->view('admin/administratif3', $data);
		$this->load->view('template/footer');


}

		public function tambah_administratif3(){
		$data['title'] = "Administratif 3";
		$data['sub_title'] = "Data daerah administratif 3";
		
		$this->load->view('template/header', $data);
		$this->load->view('admin/tambah_administratif3', $data);
		$this->load->view('template/footer');


		if ($this->input->post('kirim')) {
			$data = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'kode_pos' => $this->input->post('kode_post'),
				'tingkat' => $this->input->post('tingkat')

				 );


				$this->db->insert('tbl_daerah_administratif_3', $data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('Daerah_administratif_3/tambah_administratif3');


		}

		}


		public function edit_adminstratif3(){
		$data['title'] = "Administratif 3";
		$data['sub_title'] = "Data daerah administratif 3";

		$id = $this->input->get('id');
		$data['adms'] = $this->m_data->get_det($tabel='tbl_daerah_administratif_3', $id);

		
		$this->load->view('template/header', $data);
		$this->load->view('admin/edit_administratif3', $data);
		$this->load->view('template/footer');


		if ($this->input->post('edit')) {
			$data = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'kode_pos' => $this->input->post('kode_post'),
				'tingkat' => $this->input->post('tingkat')

				 );


			$id = $this->input->get('id');
			$tabel = "tbl_daerah_administratif_3";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);


				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');
				 redirect('Daerah_administratif_3/administratif3');


		}

		}


		public function hapus_adminstratif3() {


		$id = $this->input->get('id');
		$this->db->delete('tbl_daerah_administratif_3', array('id' => $id));
		 redirect('Daerah_administratif_3/administratif3');


		}



	}


 ?>