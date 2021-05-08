<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->form_validation->set_rules('role', 'Role', 'required');
        $data['role'] = $this->db->get('user_role')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Role added!
          </div>');
            redirect('admin/role');
        }
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['role'] = $this->db->get_where('user', ['role_id' => $role_id])
            ->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed!
        </div>');
    }

    public function usermanagement()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['usr'] = $this->db->get('user')->result_array();
        $data['role'] = $this->db->get('user_role')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-management', $data);
        $this->load->view('templates/footer');
    }
    // public function usermanageedit()
    // {
    //     $data['title'] = 'Change Password';
    //     $data['user'] = $this->db->get_where('user', [
    //         'email' => $this->session->userdata('email')
    //     ])->row_array();

    //     $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    //     $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[4]|matches[new_password2]');
    //     $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[4]|matches[new_password1]');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('/user-edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $current_password = $this->input->post('current_password');
    //         $new_password = $this->input->post('new_password1');
    //         if (!password_verify($current_password, $data['user']['password'])) {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //         Wrong current password!
    //       </div>');
    //             redirect('user/changepassword');
    //         } else {
    //             if ($current_password == $new_password) {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //                 New password cannot be the same as current password!
    //               </div>');
    //                 redirect('user/changepassword');
    //             } else {

    //                 $this->db->set('password', $password_hash);
    //                 $this->db->where('email', $this->session->userdata('email'));
    //                 $this->db->update('user');

    //                 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //                 Password changed!            
    //                 </div>');
    //                 redirect('user/changepassword');
    //             }
    //         }
    //     }
    // }
    public function userdelete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
     User has been deleted!            
    </div>');
        redirect('admin/usermanagement');
    }

    public function search()
    {
        $keyword = $this->input->post("keyword");
        $data["user"] = $this->User_model->get_keyword($keyword);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-management', $data);
        $this->load->view('templates/footer');
    }
}
