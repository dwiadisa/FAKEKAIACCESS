<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tiket_penumpang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => "Data Tiket Penumpang",


        ];
        $this->load->view('templates/header_sidebar');
        $this->load->view('partials/data_tiket_penumpang/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Data_tiket_penumpang.php and path \application\controllers\Data_tiket_penumpang.php */
