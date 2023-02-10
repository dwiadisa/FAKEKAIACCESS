<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manifest_model extends CI_Model
{
    public function lihat_manifest()
    {


        $this->db->select('*');
        $this->db->from('data_manifest');
        $this->db->join('data_relasi_lengkap', 'data_relasi_lengkap.id_relasi = data_manifest.relasi');
        $this->db->join('data_penumpang', 'data_penumpang.id_penumpang = data_manifest.penumpang');
        $query = $this->db->get();
        return $query;


        // $this->db->select('*');
        // $this->db->from('data_manifest');
        // $this->db->join('data_relasi', 'data_relasi.id_relasi = data_manifest.relasi');
        // $this->db->join('data_penumpang', 'data_penumpang.id_penumpang = data_manifest.penumpang');
        // $query = $this->db->get();
        // return $query;
        // $query = $this->db->query('SELECT * FROM `data_manifest`
        //  JOIN data_relasi ON data_relasi.id_relasi = data_manifest.relasi 
        //  JOIN data_penumpang ON data_penumpang.id_penumpang = data_manifest.id_user');
        // return $query;
    }

    public function cari_relasi($stasiun_awal,  $stasiun_akhir)
    {
        $this->db->select('*');
        $this->db->from('data_relasi_lengkap');
        $this->db->where('kode_stasiun', $stasiun_awal);
        $this->db->where('kode_stasiun_akhir', $stasiun_akhir);
        $query = $this->db->get();
        return $query;
    }

    public  function lihat_relasi($where)
    {
        return $this->db->get_where('data_relasi_lengkap', $where);
    }

    public function tambah_manifest($data)
    {
        $this->db->insert('data_manifest', $data);
    }

    public function lihat_manifest_id($where)
    {
        return $this->db->get_where('data_manifest', $where);
    }
}


/* End of file Manifest_model.php and path \application\models\Manifest_model.php */
