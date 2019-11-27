<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lomba_model extends CI_Model
{
    public function getLombaByUserId($id_user)
    {
        return $this->db->get_where('tb_lomba', ['id_user' => $id_user])->result_array();
    }

    public function getLombaById($id_lomba)
    {
        return $this->db->get_where('tb_lomba', ['id_lomba' => $id_lomba])->row_array();
    }

    public function deleteLomba($id_lomba)
    {
        return $this->db->delete('tb_lomba', ['id_lomba' => $id_lomba]);
    }
}
