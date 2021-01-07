<?php 

	
	class Branch_seller extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

			$this->load->model('m_data');
		}


		function data_branch_seller(){


			$data['title'] = "Data Branch Seller";
			$data['sub_title'] = "Data branch seller";

			$data['branch'] = $this->m_data->get_data($tabel='tbl_branch_seller');

			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_branch_seller', $data);
			$this->load->view('template2/footer');




		}


		function status_branch_seller(){

				$id = $this->input->get('id');
				
				$tabel = $this->m_data->get_det('tbl_branch_seller', $id);

				foreach ($tabel as $row) {
					
				}

				$email = $row['email'];
				$status = $row['status_branch'];

					
		if ($row['status_branch'] === 'active') {
	
				$data = array(
					'status_branch' => 'disable'
				);

				$id =  $this->input->get('id');
				$tabel = "tbl_branch_seller";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				$this-> _kirimEmail($email, $status);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Branch seller berhasil disable", "success");');
				 redirect('Branch_seller/data_branch_seller');

				 	

		} else{

			$data = array(
					'status_branch' => 'active'
				);

				$id =  $this->input->get('id');
				$tabel = "tbl_branch_seller";
				$edit =  $this->m_data->proses_edit($id,$tabel,$data);

				$this-> _kirimEmail($email, $status);

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Branch seller berhasil active", "success");');
				 redirect('Branch_seller/data_branch_seller');


		}


		}

		private function _kirimEmail($email, $status){


			$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'alldii1956@gmail.com',
			'smtp_pass' => 'aldimantap123',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n",
		];



		$this->load->library('email', $config);
		$this->email->initialize($config);

	      $this->email->from('alldii1956@gmail.com', 'Ebunga');
	      $this->email->to($email);
	      $this->email->subject('Info ebunga');


	      if ($status == 'disable') {
	  	$this->email->message('Permintaan anda untuk menjadi Branch Seller berhasil di persetujui.');
	      } else {
	  	$this->email->message('Mohon maaf Branch Seller anda untuk saat ini di Non-Active kan.');
	      }

       


        if ($this->email->send()) {
        	
        	echo "berhasil";
        } else {


        	  echo 'Email tidak berhasil dikirim';
               echo '<br />';
               echo $this->email->print_debugger();
        }


		}

	function edit_branch(){

		$data['title'] = 'Edit Branch Seller';
		$data['sub_title'] = "Edit branch seller";	
		$id = $this->input->get('id');
		$data['branch'] = $this->m_data->get_det($tabel='tbl_branch_seller', $id);
		$data['provinsi'] = $this->m_data->get_data('tbl_provinsi');
		$this->load->view('template2/header', $data);
		$this->load->view('admin/edit_branch', $data);
		$this->load->view('template2/footer');

		$alamat = $this->input->post('kelurahan').'-'.$this->input->post('kecamatan').'-'.$this->input->post('kabupaten').'-'.$this->input->post('prov');

		if ($this->input->post('edit')) {
			$data = [

				'kd_branch' => $this->input->post('kd_branch'),
				'nama_branch' => $this->input->post('nama_branch'),
				'id_seller' => $this->input->post('id_seller'),
				'alamat' => $alamat,
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'waktu_pengajuan' => $this->input->post('waktu_pengajuan'),
				'waktu_approve' => $this->input->post('waktu_approve'),
				'active' => $this->input->post('active')

			];


			$id = $this->input->get('id');
			$tabel ="tbl_branch_seller";
			$this->m_data->proses_edit($id, $tabel, $data);

			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

			redirect('branch_seller/data_branch_seller');
		}
	}



	function hapus_branch(){

		$id = $this->input->get('id');
		$this->db->delete('tbl_branch_seller', array('id' => $id));
		redirect('Branch_seller/data_branch_seller');
	}


	function tambah_branch(){



		$data['title'] = "Tambah Branch Seller";
		$data['sub_title']= "Tambah branch seller";

		$data['prov'] = $this->m_data->get_data($tabel='tbl_provinsi');

		$this->load->view('template2/header', $data);
		$this->load->view('admin/tambah_branch', $data);
		$this->load->view('template2/footer', $data);
		


		if ($this->input->post('kirim')) {


			$alamat = $this->input->post('kelurahan').'-'.$this->input->post('kecamatan').'-'.$this->input->post('kabupaten').'-'.$this->input->post('prov');


		
			$data = array(

				'kd_branch' => $this->input->post('kd_branch'),
				'nama_branch' => $this->input->post('nama_branch'),
				'id_seller' => $this->input->post('id_seller') ,
				'alamat' => $alamat,
				'phone' => $this->input->post('phone') ,
				'email' => $this->input->post('email') ,
				'waktu_approve' => $this->input->post('waktu_approve'),
				'status_branch' =>'active' ,
				'active' => 1

				 );


				$input = $this->db->insert('tbl_branch_seller', $data);
				

				 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
				 redirect('Branch_seller/tambah_branch');



			}	
	}


	function select_daerah(){



		$id = $this->input->get('id');

		echo $id;
	}


		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = " BRANCH SELLER EBUNGA";
		$data['branch_seller'] = $this->m_data->get_data("tbl_branch_seller");
 		$this->load->view('cetak/cetak_branch_seller',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_branch_seller", array('Attachment' => 0));
	}


	function detail(){

		$data['title'] = "Detail Branch Seller";
		$data['sub_title'] = "Detail branch seller";
		$id = $this->input->get('id');
		$data['branch'] = $this->m_data->get_det($tabel='tbl_branch_seller', $id);


		$this->load->view('template2/header', $data);
		$this->load->view('detail/det_branch', $data);
		$this->load->view('template2/footer');
	}




	}

 ?>