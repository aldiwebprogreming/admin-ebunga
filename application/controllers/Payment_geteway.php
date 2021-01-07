<?php 

	class Payment_geteway extends CI_Controller{


			function __construct(){

				parent:: __construct();

				$this->load->model('m_data');
				$this->load->library('form_validation');

			}


			function data_payment(){

				$data['title'] = "Data Payment Geteway";
				$data['sub_title'] = "Data payment geteway";

				$data['payment'] = $this->m_data->get_data($tabel='tbl_payment_gateway');
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_payment', $data);
				$this->load->view('template2/footer');

			}


			function tambah_payment(){

				$this->form_validation->set_rules('kd_payment','kode payment','trim|is_unique[tbl_payment_gateway.kd_payment]');
				$this->form_validation->set_rules('name_payment','name payment','trim|is_unique[tbl_payment_gateway.nama_payment]');



				if ($this->form_validation->run() == FALSE) {
					
					$data['title'] = "Tambah Payment";
					$data['sub_title'] = "Tambah payment";


					$this->load->view('template2/header', $data);
					$this->load->view('admin/tambah_payment', $data);
					$this->load->view('template2/footer');
				} else {



					$data = [

						'kd_payment'=> $this->input->post('kd_payment'),
						'nama_payment' => $this->input->post('name_payment'),
						'scope' => $this->input->post('scope')
					];


					$this->db->insert('tbl_payment_gateway', $data);

					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');

				 	redirect('Payment_geteway/tambah_payment');

				}




			}



			function edit_payment(){

				$data['title'] = 'Edit payment';
				$data['sub_title'] = "Edit payment";
				$id = $this->input->get('id');
				$data['payment'] = $this->m_data->get_det($tabel='tbl_payment_gateway', $id);

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_payment', $data);
				$this->load->view('template2/footer');



				if ($this->input->post('edit')) {
					

					$data = [

						'kd_payment'=> $this->input->post('kd_payment'),
						'nama_payment' => $this->input->post('name_payment'),
						'scope' => $this->input->post('scope')
					];

					$tabel= "tbl_payment_gateway";

					$this->m_data->proses_edit($id,$tabel,$data);

					$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diedit", "success");');

				 	redirect('Payment_geteway/data_payment');

				}


			}


			function hapus_payment(){

					$id = $this->input->get('id');
						$this->db->delete('tbl_payment_gateway', array('id' => $id));
						redirect('Payment_geteway/data_payment');
			}




		function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = " PAYMENT GETEWAY";
		$data['payment'] = $this->m_data->get_data("tbl_payment_gateway");
 		$this->load->view('cetak/cetak_payment',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_payment", array('Attachment' => 0));
	}




	


	}


 ?>