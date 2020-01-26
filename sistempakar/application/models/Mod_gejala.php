<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_gejala extends CI_Model {

    private $table   = "gejala";
    private $primary = "id_gejala";

    function searchGejala($cari, $limit, $offset)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_gejala",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table);
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

    
    function getAll()
    {
        $this->db->order_by('gejala.id_gejala desc');
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

    function getGambar($id_gejala)
    {
        $this->db->select('image');
        $this->db->from('gejala');
        $this->db->where('id_gejala', $id_gejala);
        return $this->db->get();
    }

    function deleteGejala($kode, $table)
    {
        $this->db->where('id_gejala', $kode);
        $this->db->delete($table);
    }

    function GejalaSearch($nama_gejala)
    {
        $this->db->like($this->primary,$nama_gejala);
        $this->db->or_like("judul",$nama_gejala);
        $this->db->limit(10);
        return $this->db->get($this->table);
    }



}

/* End of file ModelName.php */
