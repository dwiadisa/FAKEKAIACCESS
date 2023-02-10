<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penumpang_model extends CI_Model
{
    public function tampil_penumpang()
    {
        return $this->db->get('data_penumpang');
    }
    public function lihat_penumpang()
    {
    }
    public function tambah_penumpang($data)
    {

        $this->db->insert('data_penumpang', $data);
    }
    public function hapus_penumpang($where)
    {

        $this->db->delete('data_penumpang', $where);
    }

    public function edit_penumpang($where)
    {
        return $this->db->get_where('data_penumpang', $where);
    }

    public function update_penumpang($where, $data)
    {
        $this->db->where($where);
        $this->db->update('data_penumpang', $data);
    }
    public function delete_penumpang()
    {
    }
}


/* End of file Penumpang_model.php and path \application\models\Penumpang_model.php */
