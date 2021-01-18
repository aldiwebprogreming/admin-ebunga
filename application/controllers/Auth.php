<?php 

	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();
			$this->load->model('m_data');
			$this->load->library('form_validation');
		
		}


			public function index(){

				$data['title'] = "Login Admin";

				$this->load->view('login/login', $data);		
			}


			public function cek_login(){


				$username = $this->input->post('username');
				$pass = $this->input->post('pass');

				$query = $this->db->get_where('admin', array('username' => $username))->row_array();

				if ($query) {
					
					if ($query['role'] == 'admin') {
						if (md5($pass) == $query['password']) {
							$data = array(
								'username' => $query['username'] ,
								'role' => $query['role']
							);

							$this->session->set_userdata($data);
							$this->session->set_flashdata('pesan_masuk', '<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong> Selamat datang .</strong>
						</div>');
							redirect('Dashbord/index');
						} else{
							
						$this->session->set_flashdata('pesan1', '<label style="color: red">Password anda salah</label>');
						redirect('');
						}
					} else {

						echo "role super admin";
					}
				} else{
					$this->session->set_flashdata('pesan2', '<div class="alert alert-warning alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong> Akun yang anda masukan salah!</strong>
						</div>');
			redirect('');
				}

			}


		public function logout(){

			$this->session->unset_userdata('username');

			$this->session->set_flashdata('pesan_keluar', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong> Anda berhasil keluar.</strong>
			</div>');
			redirect('auth/index');
		}



	}

 ?>
 

