<?php
defined('BASEPATH') or exit('No direct script access allowed');

class get_insertM extends CI_model
{
    public function addData($values, $table)
    {
        return $this->db->insert($table, $values);
    }
}
