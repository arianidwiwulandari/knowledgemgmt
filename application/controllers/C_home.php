<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function view($page='home'){
		if(!file_exists(APPPATH."views/pages/".$page.'.php')){show_404();}
		
		$data['judul'] = $page;
		
		$this->load->view('pages/header', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('pages/footer');
	}
}
?>