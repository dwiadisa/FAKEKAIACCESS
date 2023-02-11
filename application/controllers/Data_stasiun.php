<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_stasiun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stasiun_model');
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Acces_block_model');
        $this->Access_block_model->block_penumpang();
    }

    public function index()
    {

        $data = [
            'title' => "Data Stasiun",
            'stasiun' => $this->Stasiun_model->lihat_stasiun()->result()

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_stasiun/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Data_stasiun.php and path \application\controllers\Data_stasiun.php */
