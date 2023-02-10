<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket_KA_Penumpang_model extends CI_Model
{
    public function lihat_semua()
    {
        $this->db->select('*');
        $this->db->from('data_manifest');
        $this->db->join('data_relasi_lengkap', 'data_relasi_lengkap.id_relasi = data_manifest.relasi');
        $this->db->join('data_penumpang', 'data_penumpang.id_penumpang = data_manifest.penumpang');
        $query = $this->db->get();
        return $query;
    }
    public function load_data_penumpang()
    {
        $where = array(
            '
        id_penumpang' => $this->session->userdata('id_user'),
        );

        return $this->db->get_where('data_penumpang', $where);
    }

    public function load_tiket_penumpang()
    {
        $session_penump = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('data_manifest_lengkap');
        $this->db->where('penumpang', $session_penump);
        $this->db->order_by("id_relasi", "desc");

        $query = $this->db->get();
        return $query;
    }

    public function lihat_tiket_penumpang($where)
    {
        return $this->db->get_where('data_manifest_lengkap', $where);
    }
}


/* End of file Tiket_KA_Penumpang_model.php and path \application\models\Tiket_KA_Penumpang_model.php */
