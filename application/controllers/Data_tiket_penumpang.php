<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tiket_penumpang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tiket_KA_Penumpang_model');
        if (!is_login()) redirect('auth?alert=belum_login');
    }

    public function index()
    {
        $data = [
            'title' => "Data Tiket Penumpang",
            'tiket' => $this->Tiket_KA_Penumpang_model->load_tiket_penumpang()->result()


        ];


        // var_dump($cek);
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_tiket_penumpang/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_tiket($id)
    {
        $where = array('kode_reservasi' =>  $id,);
        $data = [
            'title' => "Data Tiket Penumpang" . " " .  $id,
            'tiket' => $this->Tiket_KA_Penumpang_model->lihat_tiket_penumpang($where)->result()
        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_tiket_penumpang/lihat', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Data_tiket_penumpang.php and path \application\controllers\Data_tiket_penumpang.php */
