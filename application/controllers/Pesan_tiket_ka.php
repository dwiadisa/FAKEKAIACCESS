<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_tiket_ka extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Manifest_model');
        $this->load->model('Relasi_model');
        $this->load->model('Kereta_api_model');
        $this->load->model('Stasiun_model');
        $this->load->model('Penumpang_model');
        $this->load->model('Tiket_KA_Penumpang_model');
    }


    public function index()
    {


        $data = [
            'title' => "Pesan Tiket KA",
            'relasi' => $this->Relasi_model->lihat_relasi()->result(),
            'data_stasiun' => $this->Stasiun_model->lihat_stasiun()->result()

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/pemesanan_tiket/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function cari_relasi()
    {

        $stasiun_awal = $this->input->get('stasiun_awal');
        $stasiun_akhir =  $this->input->get('stasiun_akhir');
        $data = [
            'title' => "Cari Relasi",
            'relasi' =>   $this->Manifest_model->cari_relasi($stasiun_awal, $stasiun_akhir)->result(),
            'stasiun_awal' => $stasiun_awal,
            'stasiun_akhir' => $stasiun_akhir
        ];
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/pemesanan_tiket/cari', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $where = array(
            'id_relasi' => $id
        );
        $data = [
            'title' => "Data Relasi",
            // 'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
            'relasi' => $this->Manifest_model->lihat_relasi($where)->result(),
            'data_penumpang' => $this->Tiket_KA_Penumpang_model->load_data_penumpang()->result()
        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/pemesanan_tiket/detail', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data_pemesanan()
    {
        // load session penumpang

        $id_penumpang  = $this->session->userdata('id_user');

        $this->form_validation->set_rules('tanggal_berangkat', 'Tanggal_berangkat', 'required');
        if ($this->form_validation->run() != false) {

            $data = array(
                'kode_reservasi' => strtoupper(random_string('alnum')),
                'relasi' => $this->input->post('relasi'),
                'penumpang' => $id_penumpang,
                'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),



            );

            $this->Manifest_model->tambah_manifest($data);
            redirect('Data_tiket_penumpang');
        } else {
            $where = array(
                'id_relasi' =>  $this->input->post('relasi')
            );
            $data = [
                'title' => "Data Relasi",
                // 'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
                'relasi' => $this->Manifest_model->lihat_relasi($where)->result(),
                'data_penumpang' => $this->Tiket_KA_Penumpang_model->load_data_penumpang()->result()
            ];

            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/pemesanan_tiket/detail', $data);
            $this->load->view('templates/footer');
        }
    }
    public function test_penump()
    {
        $cok =  $this->Tiket_KA_Penumpang_model->load_data_penumpang()->result();
        var_dump($cok);
    }
}

/* End of file Pesan_tiket_ka.php and path \application\controllers\Pesan_tiket_ka.php */
