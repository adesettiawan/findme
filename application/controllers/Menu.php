<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '
                    New menu added!');
            redirect('menu');
        }
    }

    public function delete_menu($id)
    {
        $this->menu_model->hapusDataMenu($id);
        $this->session->set_flashdata('message', '
        Delete menu success!');
        redirect('menu');
    }

    public function editMenu($id)
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['user_menu'] = $this->menu_model->getMenuId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit-menu', $data);
        $this->load->view('templates/footer');
    }

    public function editMenuId($id)
    {
        $this->menu_model->editMenuId($id);
        $this->session->set_flashdata('message', '
        Update menu success!');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {

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
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '
                    New sub menu added!');
            redirect('menu/submenu');
        }
    }

    public function editSubmenu($id)
    {
        $data['title'] = 'Edit Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu_model->getSubmenuId($id);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit-submenu', $data);
        $this->load->view('templates/footer');
    }

    public function editSubmenuId($id)
    {
        $this->menu_model->editSubmenuId($id);
        $this->session->set_flashdata('message', '
        Update submenu success!');
        redirect('menu/submenu');
    }

    public function delete_submenu($id)
    {
        $this->menu_model->hapusDataSubMenu($id);
        $this->session->set_flashdata('message', '
        Delete sub menu success!');
        redirect('menu/submenu');
    }
}
