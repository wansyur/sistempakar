<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_penyakit extends CI_Model {

    function getPenyakit()
    {
        return $this->db->get('penyakit');
    }

    function getAll()
    {
        // $this->db->order_by('penyakit.id_penyakit desc');
        return $this->db->get('penyakit');
    }

    function insertPenyakit($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function cekPenyakit($kode)
    {
        $this->db->where("id_penyakit", $kode);
        return $this->db->get("penyakit");
    }

    function updatePenyakit($id_penyakit, $data)
    {
        $this->db->where('id_penyakit', $id_penyakit);
		$this->db->update('penyakit', $data);
    }

    function getDataPenyakit($limit, $offset)
    {
        // return $this->db->get_where('post', array('category_id' => $category_id));
        $this->db->select('*');
        $this->db->from('penyakit a');
        // $this->db->where('a.nis', $nis);
        $this->db->limit($limit, $offset);
        $this->db->order_by('a.id_penyakit desc');
        return $this->db->get();
    }

    function getGambar($id_penyakit)
    {
        $this->db->select('image');
        $this->db->from('penyakit');
        $this->db->where('id_penyakit', $id_penyakit);
        return $this->db->get();
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

   

    
    function searchPenyakit($cari, $limit, $offset)
    {
        $this->db->like("id_penyakit",$cari);
        $this->db->or_like("nama_penyakit",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get('penyakit');
    }

    function deletePenyakit($kode, $table)
    {
        $this->db->where('id_penyakit', $kode);
        $this->db->delete($table);
    }

}

/* End of file ModelName.php */
