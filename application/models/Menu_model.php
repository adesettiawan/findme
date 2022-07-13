<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function getMenuId($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function editMenuId()
    {
        $data = [
            "menu" => $this->input->post('menu')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function hapusDataMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getSubmenuId($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }

    public function editSubmenuId()
    {
        $is_active = (isset($_POST['is_active']) == 1 ? 1 : 0);

        if ($is_active == 1) {
            $data = [
                "menu_id" => $this->input->post('menu_id'),
                "title" => $this->input->post('title'),
                "url" => $this->input->post('url'),
                "icon" => $this->input->post('icon'),
                "is_active" => 1
            ];
        } else {
            $data = [
                "menu_id" => $this->input->post('menu_id'),
                "title" => $this->input->post('title'),
                "url" => $this->input->post('url'),
                "icon" => $this->input->post('icon'),
                "is_active" => 0
            ];
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }

    public function hapusDataSubMenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }
}
