<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct() {
		parent:: __construct();
        $this->load->library('form_validation');
        
	}
	
    public function index()
	{
        if ($this->session->userdata('is_login') == true) {
            redirect('dashboard/listing');
        }
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
		if ($this->form_validation->run() == false) {
            $this->load->view('login');
            
        }else{
            $password = $this->input->post('password',true);
            $cek_user = $this->db->get_where('tb_user',['email' => $this->input->post('email',true)]);
            if ($cek_user->num_rows() > 0) {
                $user = $cek_user->row();
                if (password_verify($password,$user->password)) {
                    $userSession['id_user'] = $user->id_user;
                    $userSession['username'] = $user->username;
                    $userSession['is_login'] = true;

                    $this->session->set_userdata($userSession);

                    redirect('dashboard/listing');
                }else{
                    $this->session->set_flashdata('pesan','LOGIN GAGAL!,email atau password salah');
                    $this->session->set_flashdata('email',$this->input->post('email',true));
                    redirect('auth');
                }
            }else{
                $this->session->set_flashdata('pesan','LOGIN GAGAL!,email atau password salah');
                $this->session->set_flashdata('email',$this->input->post('email',true));
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        if (!$this->session->userdata('is_login') == true) {
            redirect('auth');
        }
        $userSession['id_user'] = 0;
        $userSession['username'] = '';
        $userSession['is_login'] = false;
        $this->session->unset_userdata($userSession);
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan','logout berhasil');
        redirect('auth');
    }
    public function cek_password()
    {
        $password = $this->input->get('password');
        $this->db->update('tb_user',[
            'password' => password_hash($password,PASSWORD_DEFAULT)
        ],['id_user' => 1]);
        redirect(base_url());
    }
}
