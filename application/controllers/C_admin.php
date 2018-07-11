<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url_helper');
	}
	public function index($page='V_admin'){
		if(!file_exists(APPPATH."views/admin/".$page.'.php')){show_404();}

    $this->load->view('admin/V_header_admin');
    $this->load->view('admin/'.$page);
    $this->load->view('admin/V_footer');
	}
}
?>
