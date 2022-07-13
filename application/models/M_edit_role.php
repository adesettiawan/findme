<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_edit_role extends CI_Model
{
    public function getRoleId($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function editRoleId()
    {
        $data = [
            "role" => $this->input->post('role')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function deleteRoleid($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }
}
