<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // memuat hitung dalam database
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('hitung_model');
    }

    public function index()
    {

        $data = [
            'title' => "Dashboard",
            'hitung_stasiun' => $this->hitung_model->hitung_stasiun()->num_rows(),
            'hitung_ka' => $this->hitung_model->hitung_ka()->num_rows(),
            'hitung_penumpang' => $this->hitung_model->hitung_penumpang()->num_rows(),
            'hitung_manifest' => $this->hitung_model->hitung_manifest()->num_rows(),
            'hitung_manifest_lunas' => $this->hitung_model->hitung_manifest_lunas()->num_rows(),
            'hitung_manifest_belum_lunas' => $this->hitung_model->hitung_manifest_belum_lunas()->num_rows(),
            'hitung_manifest_batal' => $this->hitung_model->hitung_manifest_batal()->num_rows(),
            'hitung_relasi' => $this->hitung_model->hitung_relasi()->num_rows()

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/dashboard', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
