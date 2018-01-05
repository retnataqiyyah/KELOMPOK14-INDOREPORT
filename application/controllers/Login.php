<?php

class Login extends CI_Controller {

	public function index()
	{
		$data = array(
			'header_'=> 'Halaman Login'
			
		);
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
}
