<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        is_login('dashboard');
        $this->load->view('Auth/index');
    }


    public function login_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() != false) {

            $where = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'status' => 1
            );

            $cek_admin = $this->Auth_model->cek_login('data_user', $where)->num_rows();
            $cek_penumpang = $this->Auth_model->cek_login('data_penumpang', $where)->num_rows();


            if ($cek_admin > 0) {
                $data =  $this->Auth_model->cek_login('data_user', $where)->row();
                // array session

                $data_session = array(
                    'id_user' => $data->id_user,
                    'username' => $data->username,
                    'nama' => $data->nama,
                    'hak_akses' => $data->hak_akses,
                    'status' => 'telah_login'
                );

                $this->session->set_userdata($data_session);

                redirect('dashboard');

                # code...
            } elseif ($cek_penumpang > 0) {
                $data =  $this->Auth_model->cek_login('data_penumpang', $where)->row();
                // array session

                $data_session = array(
                    'id_user' => $data->id_penumpang,
                    'username' => $data->username,
                    'nama' => $data->nama_penumpang,
                    'hak_akses' => $data->hak_akses,
                    'status' => 'telah_login'
                );

                $this->session->set_userdata($data_session);

                redirect('dashboard');
                # code...
            } else {

                echo "login gagal";
            }
        } else {
            redirect('Auth');
        }
    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('auth');
    }
    public function register()
    {
        is_login('dashboard');
        $this->load->view('Auth/register');
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
