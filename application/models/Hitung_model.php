<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung_model extends CI_Model
{
    public function hitung_ka()
    {
        return $this->db->get('data_kereta');
    }
    public function hitung_relasi()
    {
        return $this->db->get('data_relasi');
    }
    public function hitung_stasiun()
    {
        return $this->db->get('data_stasiun');
    }

    public function hitung_manifest()
    {
        return $this->db->get('data_manifest');
    }
    public function hitung_manifest_lunas()
    {
        $this->db->select('*');
        $this->db->from('data_manifest');
        $this->db->where('status_paid', 1);
        $query = $this->db->get();
        return $query;
    }
    public function hitung_manifest_belum_lunas()
    {
        $this->db->select('*');
        $this->db->from('data_manifest');
        $this->db->where('status_paid', 0);
        $query = $this->db->get();
        return $query;
    }
    public function hitung_manifest_batal()
    {
        $this->db->select('*');
        $this->db->from('data_manifest');
        $this->db->where('status_paid', 3);
        $query = $this->db->get();
        return $query;
    }

    public function hitung_penumpang()
    {
        return $this->db->get('data_penumpang');
    }
    public function hitung_admin()
    {
        return $this->db->get('data_user');
    }
}


/* End of file Hitung_model.php and path \application\models\Hitung_model.php */
