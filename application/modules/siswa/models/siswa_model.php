<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table); //sama aja dengan SELECT * FROM table
    }
}

/* End of file Siswa_model.php */
