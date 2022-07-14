<?php

//Memanggil class dari PhpSpreadsheet dengan namespace
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_edit_role');
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function Role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '
                    New role added!');
            redirect('admin/role');
        }
    }

    public function RoleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id =  $this->input->post('menuId');
        $role_id =  $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', 'Access Changed!');
    }

    // public function editRole($role_id)
    // {
    //     $data['title'] = 'Edit Role';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    //     $this->form_validation->set_rules('id', 'Id', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/edit-role', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $id = $this->input->post('id');
    //         $role = $this->input->post('role');

    //         $this->db->set('role', $role);
    //         $this->db->where('id', $id);
    //         $this->db->update('user_role');

    //         $this->session->set_flashdata('message', '
    //         Your role has been updated!');
    //     }
    // }

    public function editRole($id)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['user_role'] = $this->M_edit_role->getRoleId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-role', $data);
        $this->load->view('templates/footer');
    }

    public function editRoleId($id)
    {
        $this->M_edit_role->editRoleId($id);
        $this->session->set_flashdata('message', '
        Update role success!');
        redirect('admin/role');
    }

    public function deleteRoleId($id)
    {
        $this->M_edit_role->deleteRoleId($id);
        $this->session->set_flashdata('message', '
        Delete role success!');
        redirect('admin/role');
    }

    // help page
    public function help_page_admin()
    {
        $data['title'] = 'Halaman Bantuan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/help-page', $data);
        $this->load->view('templates/footer');
    }

    // data customer
    public function data_customer()
    {
        $data['title'] = 'Import Data Customer';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dt_customer'] = $this->db->get('data_customer')->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_customer', $data);
        $this->load->view('templates/footer');
    }

    // public function search_customer()
    // {
    //     $data['title'] = 'Pencarian Data Customer';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     // $data['dt_customer'] = $this->db->get('data_customer')->result();

    //     //search keyword
    //     $data['keyword'] = $this->input->get('keyword');
    //     if (!empty($this->input->get('keyword'))) {
    //         $data['search_result'] = $this->m_admin->search_keyword($data['keyword']);
    //     } else {
    //         $data['search_result'] = $this->db->get('data_customer')->result_array();
    //     }

    //     if (count($data['search_result']) <= 0) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/search_empty.php', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/search_customer', $data);
    //         $this->load->view('templates/footer');
    //     }
    // }

    public function data_customer_import()
    {

        $file_data = $_FILES['file_data']['name'];
        if (!empty($file_data)) {
            $extension = pathinfo($file_data, PATHINFO_EXTENSION);

            if ($extension == 'csv') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else if ($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }


            if ($extension != 'xlsx') {
                $this->session->set_flashdata('message', 'Format File Data tidak sesuai..!');
                redirect('admin/data_customer', 'refresh');
            }

            $spreadsheet = $reader->load($_FILES['file_data']['tmp_name']);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();
            $countsheetdata = count($sheetdata);
            if ($countsheetdata > 1) {

                $arrayData = array();
                for ($i = 1; $i < $countsheetdata; $i++) {

                    // skip data redudance
                    // $no_customers = $this->m_admin->checkdata($sheetdata[$i][1]);
                    // if ($sheetdata[$i][1] == $no_customers['no_customer']) {
                    //     continue;
                    // }


                    $no_customer = $sheetdata[$i][1];
                    $Name = $sheetdata[$i][2];
                    $Address = $sheetdata[$i][3];
                    $Status = $sheetdata[$i][4];
                    $Date = $sheetdata[$i][5];

                    $arrayData[] = array(
                        'no_customer' => $no_customer,
                        'Name' => $Name,
                        'Address' => $Address,
                        'Status' => $Status,
                        'Date' => $Date,
                    );
                }
                $insert_data = $this->m_admin->insert_batch($arrayData);
                if ($insert_data) {
                    $this->session->set_flashdata('message', 'Import data success..!');
                    redirect('admin/data_customer', 'refresh');
                } else {
                    $this->session->set_flashdata('message', 'Please try again to import data..!');
                    redirect('admin/data_customer', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('message', 'File Data tidak boleh kosong..!');
            redirect('admin/data_customer', 'refresh');
        }
    }
}
