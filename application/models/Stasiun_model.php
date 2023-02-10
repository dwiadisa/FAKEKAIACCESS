<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stasiun_model extends CI_Model
{
    public function lihat_stasiun()
    {

        return $this->db->get('data_stasiun');
    }
}


/* End of file Stasiun_model.php and path \application\models\Stasiun_model.php */
