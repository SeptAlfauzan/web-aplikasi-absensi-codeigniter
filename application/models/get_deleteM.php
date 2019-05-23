<?php
defined('BASEPATH') or exit('No direct script access allowed');

class get_deleteM extends CI_model
{
    public function getDelete($id, $idCol, $table)
    {
        $this->db->where(array($idCol => $id))->delete($table);
    }
}
