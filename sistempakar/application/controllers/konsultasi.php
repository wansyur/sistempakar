<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class konsultasi extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Mod_konsultasi');
		$this->load->model('Mod_penyakit');
    }


    public function index()
    {
		$data['konsultasi']      = $this->Mod_konsultasi->getAll();
		$data['num'] = "1";
		$data['pen'] = $this->Mod_konsultasi->getAll();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'konsultasi/konsultasi_data', $data); 
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
            $this->template->load('layoutbackend', 'konsultasi/konsultasi_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'konsultasi/konsultasi_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'konsultasi/konsultasi_data', $data);
        }
        
    }

    public function create()
    {
        $this->template->load('layoutbackend', 'konsultasi/konsultasi_create');
    }

    public function insert()
    {
        if(isset($_POST['submit'])) {
			$data['penyakit']      = $this->Mod_penyakit->getAll();
			//function validas
			$this->template->load('layoutbackend', 'konsultasi/data',$data);
		}
		// 	$nom=1;
		// 	$ins=0;
		// 	while($nom==1){
		// 		$dat[$ins]=$this->input->post('cekbox');
		// 		$ins=$ins+1;
		// 		if($ins==11){
		// 			$nom=0;
		// 		}
		// 	}
		// 	echo $dat[4];

						

        //     //apabila user mengkosongkan form input
        //     if($this->form_validation->run()==true){
		// 	// echo "masuk"; die();
		// 		// echo "berhasil"; die();
		// 		$kond =$this->input->post('iff');
				
		// 		if($kond == "ifyes"){
		// 			$this->db->where("ifyes", $kond);
		// 			$id_gej=$this->db->get("gejala");
		// 		}else if ($kond == "ifno"){
		// 			$this->db->where("ifno", $kond);
		// 			$id_gej=$this->db->get("gejala");
		// 		}
		// 		$pertny = $this->Mod_konsultasi->cekpertanyaan($id_gej["id_gejala"]);
		// 		if($pertny->num_rows() > 0){
					
		// 			$this->template->load('layoutbackend', 'konsultasi/konsultasi_create', $pertny); 
		// 		}
		// 		else{

		// 		}
						
				
		// 		redirect('Dashboard');

		// 	}
        //             //apabila tidak ada gambar yg diupload
		// 	else{
		// 		$data['message'] = "<div class='alert alert-block alert-danger'>
		// 		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		// 		<p><strong><i class='icon-ok'></i>Gambar</strong> Masih Kosong...!</p></div>"; 
		// 		$this->template->load('layoutbackend', 'konsultasi/konsultasi_create', $data);
		// 	} 
        // }
            
            
        //     //jika tidak mengkosongkan form
        //     // else{
        //     //     $data['message'] = "";
        //     //     $this->template->load('layoutbackend', 'konsultasi/konsultasi_create', $data);
        //     // }

		
         

		


    }


    //function global buat validasi input
    // public function _set_rules()
    // {
    //     $this->form_validation->set_rules('kode_buku','Kode Buku','required|max_length[5]');
    //     $this->form_validation->set_rules('judul','Judul Buku','required|max_length[100]');
    //     $this->form_validation->set_rules('pengarang','Pengarang','required|max_length[50]');
    //     $this->form_validation->set_rules('klasifikasi','Klasifikasi','required|max_length[200]'); 
    //     $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
    //     $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    // }

}

/* End of file Buku.php */
