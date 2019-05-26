<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller {
	function __construct() {
		parent:: __construct();
        // $this->load->helper('view');
        $this->load->library('Datatables');
        if (!$this->session->userdata('is_login') == true) {
            redirect('auth');
        }
	}
	
	public function index()
	{
        return view('dashboard.index');
    }
    public function getListData()
    {
        // if (!$this->input->is_ajax_request()) {
    	// 	exit('No direct script access allowed');
    	// }	
        $this->datatables->select('id_list,list_nama,list_min_depo,list_rating,list_bonus,list_web_link,list_gambar')
                ->unset_column('id_list')
                ->from('list_table')
                ->edit_column('list_gambar','$1','getFoto(list_gambar)')
                ->add_column('nomor','1')
                ->add_column('actions', '<a href="'.site_url('dashboard/listing/edit/').'$1" class="edit_record btn btn-success btn-sm" data-id="$1"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','id_list,list_nama,list_min_depo,list_rating,list_bonus,list_web_link,list_gambar,nomor,actions');

        echo $this->datatables->generate('json','');
    }
    //form
    public function form()
	{
		return view('dashboard.form');
    }
    //store
    public function store()
	{
        $fileName = time();
        $config['upload_path']          = './uploads';
        $config['file_name']            =  $fileName;
        $config['allowed_types']        = 'gif|jpg|png|svg';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('list_gambar'))
        {
                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error',$error);
                redirect(base_url('dashboard/listing/new'));
        }
        else
        {
                $data = $this->upload->data();

                $insert = $this->db->insert('list_table',[
                    'list_nama' => if_empty($this->input->post('list_nama',true)),
                    'list_rating' => if_empty($this->input->post('list_rating',true)),
                    'list_gambar' => $fileName.$data['file_ext'],
                    'list_min_depo' => if_empty($this->input->post('list_min_depo',true)),
                    'list_regulation' => if_empty($this->input->post('list_regulation',true)),
                    'list_bonus' => if_empty($this->input->post('list_bonus',true)),
                    'list_max_leverage' => if_empty($this->input->post('list_max_le)verage',true)),
                    'list_year_found' => if_empty($this->input->post('list_year_found',true)),
                    'list_trading_platform' => if_empty($this->input->post('list_trading_plat)form',true)),
                    'list_web_link' => if_empty($this->input->post('list_web_link',true))
                ]);
        
                if($insert){
                    $this->session->set_flashdata('success','success add new list');
                   redirect(base_url('dashboard/listing'));
                }
        }
    }
    //edit
    public function edit()
	{
        $id = $this->uri->segment(4);
        $lists = $this->db->get_where('list_table',['id_list' => $id])->row();
		return view('dashboard.form_edit',compact('lists'));
    }
    public function update()
	{
        $id = $this->uri->segment(4);

        $row = $this->db->get_where('list_table',['id_list' => $id])->row();

        $fileName = time();
        $config['upload_path']          = './uploads';
        $config['file_name']            =  $fileName;
        $config['allowed_types']        = 'gif|jpg|png|svg';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('list_gambar'))
        {
            $data = $this->upload->data();
            
            $update = $this->db->update('list_table',[
                'list_nama' => if_empty($this->input->post('list_nama',true)),
                'list_rating' => if_empty($this->input->post('list_rating',true)),
                'list_min_depo' => if_empty($this->input->post('list_min_depo',true)),
                'list_regulation' => if_empty($this->input->post('list_regulation',true)),
                'list_bonus' => if_empty($this->input->post('list_bonus',true)),
                'list_max_leverage' => if_empty($this->input->post('list_max_le)verage',true)),
                'list_year_found' => if_empty($this->input->post('list_year_found',true)),
                'list_trading_platform' => if_empty($this->input->post('list_trading_plat)form',true)),
                'list_web_link' => if_empty($this->input->post('list_web_link',true))
            ],['id_list' => $id]);
    
            if($update){
                $this->session->set_flashdata('success','success updated list');
               redirect(base_url('dashboard/listing'));
            }
        }
        else
        {
                $data = $this->upload->data();
                unlink('uploads/'.$row->list_gambar);
                $insert = $this->db->update('list_table',[
                    'list_nama' => if_empty($this->input->post('list_nama',true)),
                    'list_rating' => if_empty($this->input->post('list_rating',true)),
                    'list_gambar' => $fileName.$data['file_ext'],
                    'list_min_depo' => if_empty($this->input->post('list_min_depo',true)),
                    'list_regulation' => if_empty($this->input->post('list_regulation',true)),
                    'list_bonus' => if_empty($this->input->post('list_bonus',true)),
                    'list_max_leverage' => if_empty($this->input->post('list_max_le)verage',true)),
                    'list_year_found' => if_empty($this->input->post('list_year_found',true)),
                    'list_trading_platform' => if_empty($this->input->post('list_trading_plat)form',true)),
                    'list_web_link' => if_empty($this->input->post('list_web_link',true))
                ],['id_list' => $id]);
        
                if($insert){
                    $this->session->set_flashdata('success','success updated list');
                   redirect(base_url('dashboard/listing'));
                }
        }
    }
    //delete
    public function delete()
	{
        $id = $this->uri->segment(4);
        $row = $this->db->get_where('list_table',['id_list' => $id])->row();
        unlink('uploads/'.$row->list_gambar);
		$hapus = $this->db->delete('list_table',['id_list' => $id]);

        if($hapus){
            $this->session->set_flashdata('success','success deleted list');
           redirect(base_url('dashboard/listing'));
        }
	}
}
