<?php
class Sales_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->order_by('id','DESC')
            ->get('sales')
            ->result();
    }

    public function get_by_id($id)
    {
        return $this->db
            ->get_where('sales',['id'=>$id])
            ->row();
    }
}