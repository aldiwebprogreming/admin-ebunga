<?php 

 /**
  * 
  */
 class Member extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('m_data');
 		$this->load->library('form_validation');

 	}

 	function data_member(){

 		$data['title'] = 'Data member';
 		$data['sub_title'] = "Data Member";


 		$data['member'] = $this->m_data->get_data($tabel='tbl_member');


 		$this->load->view('template2/header', $data);
 		$this->load->view('admin/data_member', $data);
 		$this->load->view('template2/footer');
 	}


 // 	function tambah_member(){


 // 		$this->form_validation->set_rules('username','username','required');
 // 		$this->form_validation->set_rules('full_name','full name','required');
 // 		$this->form_validation->set_rules('email','email','required');
 // 		$this->form_validation->set_rules('phone','phone','required');
 // 		$this->form_validation->set_rules('country','required');
 // 		$this->form_validation->set_rules('postal_code','postal code','required');
 // 		$this->form_validation->set_rules('alamat','alamat','required');
 // 		$this->form_validation->set_rules('kpt','ktp','required');
 // 		$this->form_validation->set_rules('npwp','npwp','required');
 // 		$this->form_validation->set_rules('siup','siup','required');
 // 		$this->form_validation->set_rules('status','status','required');
 // 		$this->form_validation->set_rules('suspend','suspend','required');



 // 		if ($this->form_validation->run() == FALSE) {
 			
 // 		$data['title'] = "Tambah member";
 // 		$data['sub_title'] = "Tambah Member Baru";


 // 		$data['provinsi'] = $this->m_data->get_data($tabel='tbl_provinsi');
 // 		$data['country'] = $this->m_data->get_data($tabel='tbl_country_support');
 // 		$this->load->view('template2/header', $data);
 // 		$this->load->view('admin/tambah_member', $data);
 // 		$this->load->view('template2/footer');

 // 		} else {

 // 			 $data = array(

 // 			 'username' => $this->input->post('username'),
 // 			'full_name' => $this->input->post('full_name'),
 // 			'email' =>$this->input->post('email'),
 // 			'phone' =>$this->input->post('phone'),
 // 			'country' =>$this->input->post('country'),
 // 			'provinsi' =>$this->input->post('provinsi'),
 // 			'kabupaten' =>$this->input->post('kabupaten'),
 // 			'kecamatan' =>$this->input->post('kecamatan'),
 // 			'kelurahan' =>$this->input->post('kelurahan'),
 // 			'postal_code' =>$this->input->post('postal_code'),
 // 			'alamat' =>$this->input->post('alamat'),
 // 			'ktp' =>$this->input->post('ktp'),
 // 			'npwp' =>$this->input->post('npwp'),
 // 			'siup' =>$this->input->post('siup'),
 // 			'status' =>1,
 // 			'suspend' =>$this->input->post('suspend')


 // 			 	 );

 			
 		
 // 			$input = $this->db->insert('tbl_operator',$data);

 // 		$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

 // 		redirect('member/tambah_member');

 	

 // 	}

 // }


 function tambah_member(){


 	$this->form_validation->set_rules('username', 'username', 'trim|required');
 	// $this->form_validation->set_rules('full_name', 'full name', 'trim|required');
 	// $this->form_validation->set_rules('email', 'email', 'trim|required');
 	// $this->form_validation->set_rules('phone', 'phone', 'trim|required');
 	// $this->form_validation->set_rules('postal_code', 'postal code', 'trim|required');
 	// $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
 	// $this->form_validation->set_rules('kpt', 'kpt', 'trim|required');
 	// $this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
 	// $this->form_validation->set_rules('siup', 'siup', 'trim|required');
 	// $this->form_validation->set_rules('suspend', 'suspend', 'trim|required');

			
			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Tambah member";
 		$data['sub_title'] = "Tambah Member Baru";


 		$data['provinsi'] = $this->m_data->get_data($tabel='tbl_provinsi');
 		$data['country'] = $this->m_data->get_data($tabel='tbl_country_support');
 		$this->load->view('template2/header', $data);
 		$this->load->view('admin/tambah_member', $data);
 		$this->load->view('template2/footer');
				
			}
			else {

					
				 $data = array(

 			 'username' => $this->input->post('username'),
 			'full_name' => $this->input->post('full_name'),
 			'email' =>$this->input->post('email'),
 			'phone' =>$this->input->post('phone'),
 			'country' =>$this->input->post('country'),
 			'provinsi' =>$this->input->post('provinsi'),
 			'kabupaten' =>$this->input->post('kabupaten'),
 			'kecamatan' =>$this->input->post('kecamatan'),
 			'kelurahan' =>$this->input->post('kelurahan'),
 			'postal_code' =>$this->input->post('postal_code'),
 			'alamat' =>$this->input->post('alamat'),
 			'ktp' =>$this->input->post('ktp'),
 			'npwp' =>$this->input->post('npwp'),
 			'siup' =>$this->input->post('siup'),
 			'status' =>1,
 			'suspend' =>$this->input->post('suspend')


 			 	 );

					$input = $this->db->insert('tbl_member',$data);
					if ($input) {
						$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambahkan", "success");');

					redirect('member/tambah_member');
					}

			}

 }

 function hapus_member(){

 		$id = $this->input->get('id');
		$this->db->delete('tbl_member', array('id' => $id));
		redirect('member/data_member');
 }



 function detail_member(){

 		$data['title'] = "Detail member";
 		$data['sub_title'] = "Datail Member";

 		$tabel = "tbl_member";
 		$id = $this->input->get('id');
 		$data['member'] = $this->m_data->get_det($tabel, $id);
		
		$this->load->view('template2/header', $data);
		$this->load->view('detail/detail_member', $data);
		$this->load->view('template2/footer');




 }

 	function edit_member(){

 
 		$data['title'] = "Edit member";
 		$data['sub_title'] = "Edit Data Member";

 		$tabel = "tbl_member";
 		$id = $this->input->get('id');
 		$data['member'] = $this->m_data->get_det($tabel, $id);
 		$data['provinsi'] = $this->m_data->get_data($tabel='tbl_provinsi');
 		$data['country'] = $this->m_data->get_data($tabel='tbl_country_support');
 		
 		$this->load->view('template2/header', $data);
 		$this->load->view('admin/edit_member', $data);
 		$this->load->view('template2/footer');


 			if ($this->input->post('edit')) {
					
					$data = array(
							
						'username' => $this->input->post('username'),
			 			'full_name' => $this->input->post('full_name'),
			 			'email' =>$this->input->post('email'),
			 			'phone' =>$this->input->post('phone'),
			 			'country' =>$this->input->post('country'),
			 			'provinsi' =>$this->input->post('provinsi'),
			 			'kabupaten' =>$this->input->post('kabupaten'),
			 			'kecamatan' =>$this->input->post('kecamatan'),
			 			'kelurahan' =>$this->input->post('kelurahan'),
			 			'postal_code' =>$this->input->post('postal_code'),
			 			'alamat' =>$this->input->post('alamat'),
			 			'ktp' =>$this->input->post('ktp'),
			 			'npwp' =>$this->input->post('npwp'),
			 			'siup' =>$this->input->post('siup'),
			 			'status' =>$this->input->post('status'),
			 			'suspend' =>$this->input->post('suspend')

					);


					$id = $this->input->get('id');
					$tabel = "tbl_member";
					$edit =  $this->m_data->proses_edit($id,$tabel,$data);

					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

					redirect('member/data_member');


				}

 	}


 	function cetak_data(){

 		$this->load->library('dompdf_gen');

		$data['judul'] = "MEMBER EBUNGA";
		$data['footer'] = "Laporan data member ebunga  dicetak pada tanggal : ";
		$data['item_order'] = $this->m_data->get_data("tbl_member");
 		$this->load->view('cetak/cetak_member',$data);

 		$paper_size ="LEGAL";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_member", array('Attachment' => 0));
 	}


 	
 }

 ?>