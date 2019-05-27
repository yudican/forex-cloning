<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent:: __construct();
		// $this->load->helper('view');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$lists = $this->db->get('list_table')->result_array();
		$sosmed = $this->db->get('sosmed_table')->row_array();
		$logo = $this->db->get_where('logo',['id_logo' => 1])->row_array();
		return view('home',compact('lists','sosmed','logo'));
	}
}
