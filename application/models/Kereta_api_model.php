<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kereta_api_model extends CI_Model
{
    public function lihat_kereta()
    {

        return $this->db->get('data_kereta');
    }


    public function  tambah_kereta($data)
    {

        return $this->db->insert('data_kereta', $data);
    }
    public function edit_kereta($where)
    {
        return $this->db->get_where('data_kereta', $where);
    }

    public function update_kereta($where, $data)
    {
        $this->db->where($where);
        $this->db->update('data_kereta', $data);
    }


    public function hapus_kereta($where)
    {
        $this->db->delete('data_kereta', $where);
    }
}



/* End of file Kereta_api_model.php and path \application\models\Kereta_api_model.php */
