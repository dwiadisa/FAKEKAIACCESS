<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access_block_model extends CI_Model
{
    public function block_admin()
    {
        if ($this->session->userdata('hak_akses') !== "admin") {
            redirect('halaman_blokir/halaman_403');
        }
    }
    public function block_penumpang()
    {
        if ($this->session->userdata('hak_akses') == "penumpang") {
            redirect('halaman_blokir/halaman_403');
        }
    }
}


/* End of file Access_block_model.php and path \application\models\Access_block_model.php */
