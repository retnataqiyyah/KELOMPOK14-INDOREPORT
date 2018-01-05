<?php

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'header_'=> 'Halaman Utama'
			
		);
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
}
