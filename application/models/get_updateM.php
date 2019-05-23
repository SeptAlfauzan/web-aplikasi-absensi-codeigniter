<?php
defined('BASEPATH') or exit('No direct script access allowed');

class get_updateM extends CI_model
{
    public function getUpdate($id, $value, $arrCols = 0)
    {
        if ($arrCols != 0) {
            // elemen pertama adalah kolom nama id
            // index kedua adalah kolom nama yang ingin diubah
            // index ke tiga adalah tablenya
            $this->db->where(array($arrCols[0]=>$id))->set($arrCols[1], $value)->update($arrCols[2]);
        }else {
            $this->db->where("id-admin = '$id'")->set('nama-admin', $value['nama-admin'])->set('status-admin', $value['status-admin'])->update('tb-admin');
        }
    }
}
