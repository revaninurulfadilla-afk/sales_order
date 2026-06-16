<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('pelanggan')
            ->result();
    }
}