<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {


    public function getbuku()
    {
        return $this->db->get('tb_buku');
    }
    
    public function getanggota()
    {
        return $this->db->get('tb_anggota');
    }

}

/* End of file M_data.php */