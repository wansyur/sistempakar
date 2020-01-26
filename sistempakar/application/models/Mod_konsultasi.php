<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_konsultasi extends CI_Model {
	function getKonsultasi()
    {
        return $this->db->get('gejala');
    }

    function getAll()
    {
        // $this->db->order_by('gejala.id_gejala desc');
        return $this->db->get('gejala');
    }

    function insertGejala($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function cekGejala($kode)
    {
        $this->db->where("id_gejala", $kode);
        return $this->db->get("gejala");
    }

    function updateGejala($id_gejala, $data)
    {
        $this->db->where('id_gejala', $id_gejala);
		$this->db->update('gejala', $data);
    }

    function getDataGejala($limit, $offset)
    {
        // return $this->db->get_where('post', array('category_id' => $category_id));
        $this->db->select('*');
        $this->db->from('gejala a');
        // $this->db->where('a.nis', $nis);
        $this->db->limit($limit, $offset);
        $this->db->order_by('a.id_gejala desc');
        return $this->db->get();
    }

    function getGambar($id_gejala)
    {
        $this->db->select('image');
        $this->db->from('gejala');
        $this->db->where('id_gejala', $id_gejala);
        return $this->db->get();
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

   

    
    function searchGejala($cari, $limit, $offset)
    {
        $this->db->like("id_gejala",$cari);
        $this->db->or_like("pertantaan",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get('gejala');
    }

    function deleteGejala($kode, $table)
    {
        $this->db->where('id_Gejala', $kode);
        $this->db->delete($table);
    }

    function cekpertanyaan($id)
    {
        // //query native coba sql injection
        // $login = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password' "; 
        // return $this->db->query($login);

        //menggunakan active record . untuk menghindari sql injection
		$this->db->where("id_gejala", $id);
		$pert = $this->db->get("gejala");    
		if($pert->num_rows() > 0){
			$this->db->where("id_gejala", $id);
			return $this->db->get("gejala");    
		} else {
			$this->db->where("id_penyakit", $id);
			$pert = $this->db->get("penyakit");    
			if($pert->num_rows() > 0){
				$this->db->where("id_penyakit", $id);
				return $this->db->get("penyakit");
			}else{
				return "1";
			}
		}
        
    }

    // function check_db($username)
    // {
    //     return $this->db->get_where('user', array('username' => $username));
    // }

}

/* End of file Mod_login.php */
