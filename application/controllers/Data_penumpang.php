<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_penumpang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth?alert=belum_login');
        $this->load->model('Penumpang_model');
        $this->load->model('Acces_block_model');
        $this->Access_block_model->block_penumpang();
    }

    public function index()
    {
        $data = [
            'title' => "Data Penumpang",
            'penumpang' => $this->Penumpang_model->tampil_penumpang()->result(),

        ];

        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_penumpang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_penumpang()
    {
        $data = [
            'title' => "Tambah Penumpang",
        ];
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_penumpang/tambah');
        $this->load->view('templates/footer');
    }
    public function tambah_penumpang_aksi()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array(
            'required' => "nama Wajib diisi!"
        ));
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tipe_id', 'Tipe ID', 'required');
        $this->form_validation->set_rules('no_id', 'No ID', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[data_penumpang.email]');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        // password validation
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[data_penumpang.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Password', 'required|matches[password]');

        if ($this->form_validation->run() != false) {

            $data = array(
                'username' => $this->input->post('username'),
                'password' =>  md5($this->input->post('password')),
                'email' => $this->input->post('email'),
                'tipe_identitas' => $this->input->post('tipe_id'),
                'nama_penumpang' => $this->input->post('nama_lengkap'),
                'no_identitas' => $this->input->post('no_id'),
                'no_hp' => $this->input->post('no_hp'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'akun_dibuat' =>   date("Y-m-d"),
                'hak_akses' => 'penumpang',
                'status' => $this->input->post('status')
            );

            $this->Penumpang_model->tambah_penumpang($data);
            redirect('Data_penumpang');
            # code...
        } else {
            // echo validation_errors();
            $data = [
                'title' => "Tambah Penumpang",
            ];
            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_penumpang/tambah');
            $this->load->view('templates/footer');
        }
    }

    public function update_penumpang($id)
    {
        $where = array('id_penumpang' => $id,);


        $data = [
            'title' => "Tambah Penumpang",
            'penumpang' => $this->Penumpang_model->edit_penumpang($where)->result(),
        ];
        $this->load->view('templates/header_sidebar', $data);
        $this->load->view('partials/data_penumpang/update', $data);
        $this->load->view('templates/footer');
    }

    public function update_penumpang_aksi()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tipe_id', 'Tipe ID', 'required');
        $this->form_validation->set_rules('no_id', 'No ID', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        // password validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->form_validation->run() != false) {
            // jika password kosong

            if ($this->input->post('password') == "") {

                $data = array(
                    'id_penumpang' =>  $id = $this->input->post('id_penumpang'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'tipe_identitas' => $this->input->post('tipe_id'),
                    'nama_penumpang' => $this->input->post('nama_lengkap'),
                    'no_identitas' => $this->input->post('no_id'),
                    'no_hp' => $this->input->post('no_hp'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'hak_akses' => 'penumpang',
                    'status' => $this->input->post('status')
                );
                // jika password terisi
            } else {
                $data = array(
                    'id_penumpang' => $id = $this->input->post('id_penumpang'),
                    'username' => $this->input->post('username'),
                    'password' =>  md5($this->input->post('password')),
                    'email' => $this->input->post('email'),
                    'tipe_identitas' => $this->input->post('tipe_id'),
                    'nama_penumpang' => $this->input->post('nama_lengkap'),
                    'no_identitas' => $this->input->post('no_id'),
                    'no_hp' => $this->input->post('no_hp'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'hak_akses' => 'penumpang',
                    'status' => $this->input->post('status')
                );
            }


            $where = array('id_penumpang' => $id,);
            // echo validation_errors();
            // var_dump($where, $data);
            // // die();
            $this->Penumpang_model->update_penumpang($where, $data);
            redirect('Data_penumpang');
        } else {
            // echo validation_errors();

            $id = $this->input->post('id');
            $where = array('id_penumpang' => $id,);


            $data = [
                'title' => "Tambah Penumpang",
                'penumpang' => $this->Penumpang_model->edit_penumpang($where)->result(),
            ];
            $this->load->view('templates/header_sidebar', $data);
            $this->load->view('partials/data_penumpang/update', $data);
            $this->load->view('templates/footer');
        }
    }
    public function hapus_penumpang($id)
    {
        $where = array('id_penumpang' => $id,);

        $this->Penumpang_model->hapus_penumpang($where);
        redirect('data_penumpang');
    }
}

/* End of file Data_penumpang.php and path \application\controllers\Data_penumpang.php */
