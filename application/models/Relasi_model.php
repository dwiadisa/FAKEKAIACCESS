<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relasi_model extends CI_Model
{
    public function lihat_relasi()
    {
        $this->db->select('*');
        $this->db->from('data_relasi', 'data_stasiun', 'data_stasiun_akhir_');
        $this->db->join('data_kereta', 'data_relasi.id_ka = data_kereta.id_kereta');
        $this->db->join('data_stasiun as data_stasiun_awal ', 'data_relasi.stasiun_awal  = data_stasiun_awal.id');
        $this->db->join('data_stasiun_akhir_', 'data_relasi.stasiun_akhir  = data_stasiun_akhir_.id_stasiun_akhir', 'left');
        return $this->db->get();

        // $this->db->select('data_kereta.''*', 'data_stasiun.','*' );


        // $this->db->select('*');
        // $this->db->from('blogs');
        // $this->db->join('comments', 'comments.id = blogs.id');
        // $query = $this->db->get();



        //     return $this->db->query('SELECT 
        //     dr.*,
        //     dk.*,
        //     dsawal.*,
        //     dsakhir.*
        // FROM
        //     data_relasi dr
        // JOIN
        //     data_kereta dk
        // ON 
        //     dk.id_kereta = dr.id_ka
        // JOIN
        //     data_stasiun dsawal
        // ON
        //     dsawal.id = dr.stasiun_awal
        // JOIN
        //     data_stasiun dsakhir
        // ON
        //     dsakhir.id = dr.stasiun_akhir');
    }

    public function edit_relasi($where)
    {
        return $this->db->get_where('data_relasi', $where);
    }

    public function update_relasi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('data_relasi', $data);
    }


    public function tambah_relasi($data)
    {
        $this->db->insert('data_relasi', $data);
    }


    public function hapus_relasi($where)
    {
        $this->db->delete('data_relasi', $where);
    }
}


/* End of file Relasi_model.php and path \application\models\Relasi_model.php */
