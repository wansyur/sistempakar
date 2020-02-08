<?php 
	class Warna_m extends CI_Model{
	//insert data
	public function insertpenyakit($data){
			$this->db->insert('penyakit',$data);
	}
	//tampil data
	public function tampil_penyakit(){
			return $this->db->get('penyakit')->result();
	}
	}
