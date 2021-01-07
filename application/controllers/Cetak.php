<?php 

	class Cetak extends CI_Controller{


		function __construct(){



			parent:: __construct();

			$this->load->model('m_data');
		}



		function user(){

			echo "hello";

		}



	}

 ?>