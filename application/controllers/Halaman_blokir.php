<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_blokir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function blokir_403()
    {
        $this->load->view('block/403');
    }
    public function blokir_404()
    {
        $this->load->view('block/404');
    }
}

/* End of file Halaman_blokir.php and path \application\controllers\Halaman_blokir.php */
