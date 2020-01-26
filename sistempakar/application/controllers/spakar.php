<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class spakar extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $data=1;
        $this->template->load('layoutbackend', 'tentang/spakar', $data);
    }
        
    


}
/* End of file Controllername.php */
 