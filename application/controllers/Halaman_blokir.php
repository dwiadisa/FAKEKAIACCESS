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
        $this->load->view('blokir/403');
    }
    public function blokir_404()
    {
        $this->load->view('blokir/404');
    }
}

/* End of file Halaman_blokir.php and path \application\controllers\Halaman_blokir.php */
