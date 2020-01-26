<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_gejala', 'Mod_penyakit', 'Mod_login', 'Mod_users'));
        
    }

    public function index()
    {
        if(isset($_POST['proses'])) {
            
            //form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
            $this->form_validation->set_error_delimiters('<span class="peringatan">', '</span>');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('formlogin/login_datarev');
            }
            else{
               
                    //cek username database
                $username = $this->input->post('username');

                if($this->Mod_login->check_db($username)->num_rows()==1) {

                    //cek verfied bycrpt menyamakan data yg di input dengan ada yg di database 
                    $db = $this->Mod_login->check_db($username)->row();
        
                     if(hash_verified($this->input->post('password'), $db->password)) {

                        $userdata = array(
                            'id_user'  => $db->id_user,
							'nama_user'   => ucfirst($db->nama_user),
							'usia' => $db->usia,
							'alamat_user' => $db->alamat_user,
							'username'    => $db->username,                            
                            'password'    => $db->password,
                        );

                    // print_r($userdata); die();    

                    $this->session->set_userdata($userdata);

                    redirect('dashboard');
                    }
                    else{
                        $data['pesan'] = "<div class='alert alert-danger'>
                                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                <strong>Maaf</strong> Username dan Password anda salah. </div>";
                        $this->load->view('formlogin/login_data', $data);
                    }

                }
                else{
                    $data['pesan'] = "<div class='alert alert-danger'>
                                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                <strong>Sorry</strong> User Not Found. </div>";
                        $this->load->view('formlogin/login_data', $data); 
                }    

               // } //end cek sql injeqtion
            }
        }
        else{
            $this->load->view('formlogin/login_datarev');
        }

        
    }//end function index

    public function view_siswa()
    {
        $total = $this->Mod_siswa->totalRows('siswa');
        $config['base_url']   = base_url('login/view_siswa/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();
        $data['siswa']    = $this->Mod_siswa->getDataSiswa($limit, $offset);
        $data['title']      = 'Data Siswa';

        // $data['siswa'] = $this->Mod_siswa->getAll()->result();
        $this->load->view('formlogin/view_siswa', $data);
    }

    public function search_siswa()
    {
        $total = $this->Mod_siswa->totalRows('siswa');
        $config['base_url']   = base_url('login/search_siswa/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();

       $cari = $this->input->post('cari_siswa');
       $data['title']   = 'Data Siswa';
       $data['siswa'] = $this->Mod_siswa->searchSiswa($cari, $limit, $offset);
       $this->load->view('formlogin/view_siswa', $data);
    }

    public function search_buku()
    {
        $total = $this->Mod_buku->totalRows('buku');
        $config['base_url']   = base_url('login/search_buku/');
        $config['total_rows'] = $total;
        $config['per_page']   = 5;

        /*config*/
        // tag pagination bootstrap
        $config['full_tag_open']    = "<ul class='pagination pull-left'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = "<li>";
        $config['num_tag_close']    = "</li>";
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        // $config['next_link']        = "Selanjutnya";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        // $config['prev_link']        = "Sebelumnya";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        // $config['first_link']       = "Awal";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        // $config['last_link']        = 'Terakhir';
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";


        //load hasil config
        $this->pagination->initialize($config);

        $limit  = $config['per_page'];
        $offset = (int) $this->uri->segment(3);

        $data['pagination'] = $this->pagination->create_links();

        $cari = $this->input->post('cari_buku');
        $data['title']   = 'Data Buku';
        $data['buku'] = $this->Mod_buku->searchBuku($cari, $limit, $offset);
        $this->load->view('formlogin/view_buku', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Login.php */
