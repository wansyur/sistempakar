<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_analisa extends CI_Model {

    function getAnalisa()
    {
        return $this->db->get('hasil');
    }

    function getAll()
    {
        // $this->db->order_by('hasil.id_hasil desc');
        return $this->db->get('hasil');
    }

    function insertHasil($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function cekHasil($id_hasil)
    {
        $this->db->where("id_hasil", $id_hasil);
        return $this->db->get("hasil");
    }

    function updateHasil($id_hasil, $data)
    {
        $this->db->where('id_hasil', $id_hasil);
		$this->db->update('hasil', $data);
    }

    function getDataHasil($limit, $offset)
    {
        // return $this->db->get_where('post', array('category_id' => $category_id));
        $this->db->select('*');
        $this->db->from('hasil a');
        // $this->db->where('a.nis', $nis);
        $this->db->limit($limit, $offset);
        $this->db->order_by('a.id_hasil desc');
        return $this->db->get();
    }

    // function getGambar($nis)
    // {
    //     $this->db->select('image');
    //     $this->db->from('siswa');
    //     $this->db->where('nis', $nis);
    //     return $this->db->get();
    // }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

   

    
    function searchHasil($cari, $limit, $offset)
    {
        $this->db->like("id_hasil",$cari);
        $this->db->or_like("id_penyakit",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get('hasil');
    }

    function deleteSiswa($kode, $table)
    {
        $this->db->where('id_hasil', $kode);
        $this->db->delete($table);
    }

}

/* End of file ModelName.php */
