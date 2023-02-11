<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_relasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Acces_block_model');
        $this->Access_block_model->block_penumpang();
        $this->load->model('Relasi_model');
        $this->load->model('Stasiun_Model');
        $this->load->model('Kereta_api_model');
    }

    public function index()
    {
        $data = [
            'title' => "Data Relasi",
            'data_relasi' => $this->Relasi_model->lihat_relasi()->result(),



        ];
        // echo json_encode($data);
        // var_dump($data);
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_relasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_relasi()
    {
        $this->form_validation->set_rules('kereta_api', 'Kereta Api', 'required');
        $this->form_validation->set_rules('stasiun_awal', 'Stasiun Awal', 'required');
        $this->form_validation->set_rules('stasiun_akhir', 'Stasiun Akhir', 'required');
        $this->form_validation->set_rules('jam_berangkat', ' Jam Berangkat', 'required');
        $this->form_validation->set_rules('jam_tiba', 'Jam Tiba', 'required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'required');

        if ($this->form_validation->run() != false) {


            $data = array(
                'id_ka' => $this->input->post('kereta_api'),
                'stasiun_awal' => $this->input->post('stasiun_awal'),
                'stasiun_akhir' => $this->input->post('stasiun_akhir'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'tarif' => $this->input->post('tarif')
            );

            // var_dump($data);
            $this->Relasi_model->tambah_relasi($data);
            redirect('Data_relasi');
        } else {

            $data = [
                'title' => "Tambah Relasi",
                'data_stasiun' => $this->Stasiun_Model->lihat_stasiun()->result(),
                'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
            ];
            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_relasi/tambah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function update_relasi($id)
    {
        $where = array(
            'id_relasi' => $id


        );

        $data = [
            'title' => "Data Relasi",
            'data_stasiun' => $this->Stasiun_Model->lihat_stasiun()->result(),
            'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
            'relasi' => $this->Relasi_model->edit_relasi($where)->result(),



        ];
        // echo json_encode($data);
        // var_dump($data);
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_relasi/update', $data);
        $this->load->view('templates/footer');
    }
    public function update_relasi_aksi()
    {
        $this->form_validation->set_rules('kereta_api', 'Kereta Api', 'required');
        $this->form_validation->set_rules('stasiun_awal', 'Stasiun Awal', 'required');
        $this->form_validation->set_rules('stasiun_akhir', 'Stasiun Akhir', 'required');
        $this->form_validation->set_rules('jam_berangkat', ' Jam Berangkat', 'required');
        $this->form_validation->set_rules('jam_tiba', 'Jam Tiba', 'required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'id_relasi' => $id =  $this->input->post('id_relasi'),
                'id_ka' => $this->input->post('kereta_api'),
                'stasiun_awal' => $this->input->post('stasiun_awal'),
                'stasiun_akhir' => $this->input->post('stasiun_akhir'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'tarif' => $this->input->post('tarif')

            );

            $where = array(
                'id_relasi' => $id

            );

            $this->Relasi_model->update_relasi($where, $data);
            redirect('Data_relasi');
        } else {
            $where = array(
                'id_relasi' => $this->input->post('id_relasi')
            );

            $data = [
                'title' => "Data Relasi",
                'data_stasiun' => $this->Stasiun_Model->lihat_stasiun()->result(),
                'data_kereta' => $this->Kereta_api_model->lihat_kereta()->result(),
                'relasi' => $this->Relasi_model->edit_relasi($where)->result(),



            ];
            // echo json_encode($data);
            // var_dump($data);
            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_relasi/update', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus_relasi($id)
    {
        $where = array('id_relasi' => $id);

        $this->Relasi_model->hapus_relasi($where);
        redirect('Data_relasi');
    }
}



/* End of file Data_relasi.php and path \application\controllers\Data_relasi.php */
