<?php 

/**
 * 
 */
class Address_list extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('m_data');
		$this->load->library('form_validation');
	}
	public function data_address_list()
	{

		$data['title'] = "Data Address List";
		$data['sub_title'] = "Data address list";

		$data['address_list'] = $this->m_data->get_data($tabel='tbl_address_list');
		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_address_list', $data);
		$this->load->view('template2/footer');


	}


	public function hapus_address_list(){

		$id = $this->input->get('id');
		$this->db->delete('tbl_address_list', array('id' => $id));
		redirect('address_list/data_address_list');


	}


	public function tambah_address_list(){

		$this->form_validation->set_rules('kd_address','kode address ','trim|is_unique[tbl_address_list.kd_address]');


		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Tambah Address List";
			$data['sub_title'] = "Tambah address list";


			$data['address_list'] = $this->m_data->get_data($tabel='tbl_provinsi');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/tambah_address_list', $data);
			$this->load->view('template2/footer');
		} else {

				$data = array(

					'kd_address' => $this->input->post('kd_address'),
					'name_address' => $this->input->post('name_address'),
					'alamat' => $this->input->post('alamat'),
					'kelurahan' => $this->input->post('kelurahan'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'provinsi' => $this->input->post('provinsi'),
					'kordinat' => $this->input->post('kordinat'),
					'main' => $this->input->post('main'),
					'active' => 1

				);


				$input = $this->db->insert('tbl_address_list', $data);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');
				 redirect('address_list/tambah_address_list');

		}


	}

		public function edit_address_list(){

			$data['title'] = "Edit Address List";
			$data['sub_title'] = "Edit address list";

			$id = $this->input->get('id');
			$data['prov1'] = $this->m_data->get_data($tabel='tbl_provinsi');
			$data['address_list'] = $this->m_data->get_det($tabel='tbl_address_list', $id);
			$this->load->view('template2/header', $data);
			$this->load->view('admin/edit_address_list', $data);
			$this->load->view('template2/footer');


			if ($this->input->post("edit")) {
				
					$data = array(

					'kd_address' => $this->input->post('kd_address'),
					'name_address' => $this->input->post('name_address'),
					'alamat' => $this->input->post('alamat'),
					'kelurahan' => $this->input->post('kelurahan'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kabupaten' => $this->input->post('kabupaten'),
					'provinsi' => $this->input->post('provinsi'),
					'kordinat' => $this->input->post('kordinat'),
					'main' => $this->input->post('main'),
					'active' => $this->input->post('active'),

				);

			$id = $this->input->get('id');
			$tabel = "tbl_address_list";
			$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				redirect('address_list/data_address_list');

			}

		}

		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "ADDRESS LIST";
		$data['address_list'] = $this->m_data->get_data("tbl_address_list");
 		$this->load->view('cetak/cetak_address_list',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_address_list", array('Attachment' => 0));
	}

	function detail(){

		$data['title'] = "Detail Address List";
		$data['sub_title'] = "Detail data address list";
		$id = $this->input->get('id');
		$data['address_list'] = $this->m_data->get_det($tabel='tbl_address_list', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_address', $data);
		$this->load->view('template2/footer');
	}

}