<?php 
	class olahpenyakit extends CI_Controller{
		public function index(){
			$data['tampil_penyakit']= $this->option->tampil_penyakit();
			$this->template->load('layoutbackend', 'konsultasi/konsultasi_data', $data);
		}

		public function insert(){
			$check=$this->input->post('check_list');
				foreach($check as $object){
					$this->option->insertpenyakit(array(
						'option' => $object
					));
				}
				redirect('');
		}

	}
?>
