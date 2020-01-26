<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class penyakit extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_penyakit');
    }


    public function index()
    {
        $data['penyakit']      = $this->Mod_penyakit->getAll();
        // print_r($data['countsiswa']); die();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'penyakit/penyakit_data', $data); 
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
            $this->template->load('layoutbackend', 'penyakit/penyakit_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'penyakit/penyakit_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'penyakit/penyakit_data', $data);
        }
        
    }
}
?>
