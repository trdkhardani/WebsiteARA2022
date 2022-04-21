<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class Model_custom
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getall_where($table, $status)
    {
        $builder = $this->db->table($table);
        $builder->where($table.'_status', $status);
        return $builder->get()->getResult();
    }

    public function count_where($table, $status)
    {
        $builder = $this->db->table($table);
        $builder->where($table.'_status', $status);
        return $builder->countAllResults();
    }

    public function get_where($table, $id, $column)
    {
        $builder = $this->db->table($table);
        $builder->where($table.$column, $id);
        return $builder->get()->getResult();
    }
    public function count_column_where($table, $id, $column)
    {
        $builder = $this->db->table($table);
        $builder->where($table.$column, $id);
        return $builder->countAllResults();
    }

    public function delete_where($table, $id)
    {
        $builder = $this->db->table($table);
        $builder->where($table.'_id', $id);
        $builder->delete();
    }

    public function updatestatus_where($table, $id)
    {
        $builder = $this->db->table($table);
        $builder->set($table.'_status', 1);
        $builder->where($table.'_id', $id);
        $builder->update();
    }

    public function is_pass_same($pass)
    {
        $builder = $this->db->table('account');
        $builder->where('account_password', $pass);
        return !empty($builder->get()->getResult());
    }

    public function count_where_iot($table, $status)
    {
        $builder = $this->db->table($table);
        $builder->where($table.'_status', $status);
        $builder->where($table.'_event', "IoT");
        return $builder->countAllResults();
    }
}
