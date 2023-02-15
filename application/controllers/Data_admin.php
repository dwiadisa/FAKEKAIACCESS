<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Access_block_model');
        $this->Access_block_model->block_penumpang();
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Data_admin_model');
    }

    public function index()
    {
        $data = [
            'title' => "Data Admin",
            'data_admin' => $this->Data_admin_model->lihat_admin()->result()

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_admin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if ($this->form_validation->run() != false) {

            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'hak_akses' => "admin",
                'status' => "1"

            );


            $this->Data_admin_model->tambah_admin($data);
            redirect('Data_admin');
            // var_dump($data);
            # code...
        } else {
            $data = [
                'title' => "Tambah Data Admin",


            ];

            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_admin/tambah', $data);
            $this->load->view('templates/footer');
        }
    }
    public function update_admin($id)
    {

        $where = array('id_user' => $id,);
        $data = [
            'title' => "Update Data Admin",
            'data_admin' => $this->Data_admin_model->update_admin($where)->result()
        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_admin/update', $data);
        $this->load->view('templates/footer');
    }
    public function update_admin_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if ($this->form_validation->run() != false) {

            if ($this->input->post('password') == "") {


                $data = array(
                    'id_user' => $id = $this->input->post('id_user'),
                    'nama' => $this->input->post('nama'),
                );
                # code...
            } else {

                $data = array(
                    'id_user' => $id = $this->input->post('id_user'),
                    'nama' => $this->input->post('nama'),
                    'password' => md5($this->input->post('password'))
                );
                # code...
            }
            $where = array('id_user' => $id,);

            $this->Data_admin_model->update_admin_aksi($where, $data);
            redirect('Data_admin');
        } else {
            $where = array('id_user' => $this->input->post('id_user'),);
            $data = [
                'title' => "Update Data Admin",
                'data_admin' => $this->Data_admin_model->update_admin($where)->result()
            ];

            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_admin/update', $data);
            $this->load->view('templates/footer');
        }
    }
    public function hapus_admin($id)
    {
        $where = array('id_user' => $id,);
        $this->Data_admin_model->hapus_admin($where);
        redirect('Data_admin');
    }
}

/* End of file Data_admin.php and path \application\controllers\Data_admin.php */
