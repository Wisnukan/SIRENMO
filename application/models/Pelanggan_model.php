<?php

class Pelanggan_model extends CI_Model
{
    public function getAllCustomers()
    {
        return $this->db->select('*')
            ->from('tb_customers')
            ->join('tb_user', 'tb_user.id = tb_customers.user_id')
            ->get()
            ->result_array();
    }
}
