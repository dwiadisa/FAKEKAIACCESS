<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_manifest extends CI_Controller
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
    }

    public function index()
    {
        $data = [
            'title' => "Data Manifest",
            'data_manifest' => $this->Manifest_model->lihat_manifest()->result(),


        ];
        // var_dump($data);

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/manifest/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data_manifest()
    {
        $data = [
            'title' => " Tambah Data Manifest",
            'relasi' => $this->Relasi_model->lihat_relasi()->result(),
            'data_stasiun' => $this->Stasiun_model->lihat_stasiun()->result()

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/manifest/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function cari_relasi()
    {
        //     $awal = $this->form_validation->set_rules('stasiun_awal', 'Stasiun Awal', 'required');
        //     $akhir =  $this->form_validation->set_rules('stasiun_akhir', 'Stasiun Akhir', 'required');

        //     if ($this->form_validation->run() != false) {



        $stasiun_awal = $this->input->get('stasiun_awal');
        $stasiun_akhir =  $this->input->get('stasiun_akhir');
        $data = [
            'title' => "Cari Relasi",
            'relasi' =>   $this->Manifest_model->cari_relasi($stasiun_awal, $stasiun_akhir)->result(),
            'stasiun_awal' => $stasiun_awal,
            'stasiun_akhir' => $stasiun_akhir
        ];
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/manifest/cari', $data);
        $this->load->view('templates/footer');


        // var_dump($data);
        # code...
        // } else {
        //     echo validation_errors();
        //     # code...
        // }





        // $stasiun_awal = $this->input->get('stasiun_awal');
        // $stasiun_akhir =  $this->input->get('stasiun_akhir');
        // $data['relasi'] =  $this->Manifest_model->cari_relasi($stasiun_awal, $stasiun_akhir)->result();
        // var_dump($data);
    }
    public function lihat_relasi($id)
    {
        $where = array(
            'id_relasi' => $id


        );

        $data = [
            'title' => "Data Relasi",
            // 'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
            'relasi' => $this->Manifest_model->lihat_relasi($where)->result(),
            'penumpang' => $this->Penumpang_model->tampil_penumpang()->result()
        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/manifest/lihat_relasi', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_manifest_aksi()
    {

        $this->form_validation->set_rules('penumpang', 'Penumpang', 'required');
        $this->form_validation->set_rules('tanggal_berangkat', 'Tanggal Berangkat', 'required');
        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');
        $this->form_validation->set_rules('checkin', 'Checkin', 'required');
        $this->form_validation->set_rules('print', 'Print', 'required');


        if ($this->form_validation->run() != false) {

            $data = array(
                'kode_reservasi' => strtoupper(random_string('alnum')),
                'relasi' => $this->input->post('relasi'),
                'penumpang' => $this->input->post('penumpang'),
                'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
                'status_paid' => $this->input->post('pembayaran'),
                'status_checkin' => $this->input->post('checkin'),
                'status_print' => $this->input->post('print')
            );
            $this->Manifest_model->tambah_manifest($data);
            redirect('data_manifest');
            # code...
        } else {

            $where = array(
                'id_relasi' => $this->input->post('relasi')


            );

            $data = [
                'title' => "Data Relasi",
                // 'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
                'relasi' => $this->Manifest_model->lihat_relasi($where)->result(),
                'penumpang' => $this->Penumpang_model->tampil_penumpang()->result()
            ];

            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/manifest/lihat_relasi', $data);
            $this->load->view('templates/footer');
        }
    }
}

/* End of file Data_manifest.php and path \application\controllers\Data_manifest.php */
