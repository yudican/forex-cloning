<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	function __construct() {
		parent:: __construct();
        $this->load->helper('view');
        $this->load->library('form_validation');
	}
	public function index()
	{
        $user_id = $this->session->userdata('id_user');
        
        $users = $this->db->get_where('tb_user',['id_user' => $user_id])->row_array();
        $sosmed = $this->db->get_where('sosmed_table',['sosmed_id' => 1])->row_array();
        
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('new_password', 'Password', 'trim');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'matches[new_password]');

		if ($this->form_validation->run() == false) {
            return view('dashboard.seting',compact('users','sosmed'));
        }else{
            $username = $this->input->post('username',true);
            $email = $this->input->post('email',true);
            $old_password = $this->input->post('old_password',true);
            $new_password = $this->input->post('new_password',true);
            $this->update_user($user_id,$old_password,$new_password,$username,$email);
        }
    }
    public function update_user($user_id,$old_password,$new_password,$username,$email)
	{
        
        $user = $this->db->get_where('tb_user',['id_user' => $user_id])->row();
        if (!empty($old_password) || !empty($new_password)) {
            if (password_verify($old_password,$user->password)) {
                $update = $this->db->update('tb_user',[
                    'email' => $email,
                    'username' => $username,
                    'password' => password_hash($new_password,PASSWORD_DEFAULT)
                ],['id_user' => $user_id]);
        
                if($update){
                    $this->session->set_flashdata('success','success updated password');
                    redirect(base_url('dashboard/setting'));
                }
            }else{
                $this->session->set_flashdata('error','wrong old password');
                redirect(base_url('dashboard/setting'));
            }
        }else{
            
            try {
                $this->db->update('tb_user',[
                    'email' => $email,
                    'username' => $username,
                ],['id_user' => $user_id]);

                $this->session->set_flashdata('success','success updated user data');
                redirect(base_url('dashboard/setting'));
            } catch (Exception $e) {
                $this->session->set_flashdata('error',$e->getMessage());
                redirect(base_url('dashboard/setting'));
            }
        }


        
	}
    public function update_sosmed()
	{
        $update = $this->db->update('sosmed_table',[
            'facebook' => if_empty($this->input->post('facebook',true)),
            'youtube' => if_empty($this->input->post('youtube',true)),
            'twitter' => if_empty($this->input->post('twitter',true)),
        ],['sosmed_id' => 1]);

        if($update){
            $this->session->set_flashdata('success','success updated data');
           redirect(base_url('dashboard/setting'));
        }
	}
}
