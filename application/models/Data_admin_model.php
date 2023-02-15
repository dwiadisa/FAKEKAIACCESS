<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin_model extends CI_Model
{
    public function lihat_admin()
    {
        return $this->db->get('data_user');
    }

    public function tambah_admin($data)
    {
        $this->db->insert('data_user', $data);
    }

    public function update_admin($where)
    {
        return $this->db->get_where('data_user', $where);
    }
    public function update_admin_aksi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('data_user', $data);
    }

    public function hapus_admin($where)
    {
        $this->db->delete('data_user', $where);
    }
}



/* End of file Data_admin_model.php and path \application\models\Data_admin_model.php */
