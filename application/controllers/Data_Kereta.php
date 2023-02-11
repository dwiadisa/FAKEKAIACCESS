<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Kereta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Acces_block_model');
        $this->Access_block_model->block_penumpang();
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Kereta_api_model');
    }

    public function index()
    {


        // var_dump($this->Kereta_api_model->lihat_kereta()->result());


        $data = [
            'title' => "Data Kereta Api",
            'kereta_api' => $this->Kereta_api_model->lihat_kereta()->result(),

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_kereta_api/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_kereta()
    {

        $this->form_validation->set_rules('kode_kereta', 'Kode Kereta', 'required');
        $this->form_validation->set_rules('nama_kereta', 'Nama Kereta', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas Kereta', 'required');

        if ($this->form_validation->run() != false) {


            $data = array(
                'kode_kereta' => $this->input->post('kode_kereta'),
                'nama_kereta' => $this->input->post('nama_kereta'),
                'kelas' => $this->input->post('kelas')


            );

            $this->Kereta_api_model->tambah_kereta($data);
            redirect('Data_kereta');
        } else {
            $data = [
                'title' => "Tambah Kereta Api",
            ];

            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_kereta_api/tambah');
            $this->load->view('templates/footer');
        }
    }







    public function tambah_kereta_aksi()
    {
    }
    public function update_kereta($id)
    {
        $where = array('id_kereta' => $id,);

        $data = [
            'title' => "Edit Kereta Api",
            'kereta_api' => $this->Kereta_api_model->edit_kereta($where)->result(),

        ];



        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_kereta_api/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_kereta_aksi()
    {
        $this->form_validation->set_rules('kode_kereta', 'Kode Kereta', 'required');
        $this->form_validation->set_rules('nama_kereta', 'Nama Kereta', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas Kereta', 'required');

        if ($this->form_validation->run() != false) {

            $data = array(
                'id_kereta' => $id =  $this->input->post('id_kereta'),
                'kode_kereta' => $this->input->post('kode_kereta'),
                'nama_kereta' => $this->input->post('nama_kereta'),
                'kelas' => $this->input->post('kelas')
            );


            $where = array(
                'id_kereta' => $id,

            );



            $this->Kereta_api_model->update_kereta($where, $data);
            redirect('Data_kereta');
        } else {
            $where = array('id_kereta' => $id = $this->input->post('id_kereta'),);

            $data = [
                'title' => "Edit Kereta Api",
                'kereta_api' => $this->Kereta_api_model->edit_kereta($where)->result(),

            ];



            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_kereta_api/edit', $data);
            $this->load->view('templates/footer');
        }
    }
    public function hapus_kereta($id)
    {

        $where = array('id_kereta' => $id,);

        $this->Kereta_api_model->hapus_kereta($where);
        redirect('data_kereta');
    }
}
/* End of file Data_Kereta.php and path \application\controllers\Data_Kereta.php */
