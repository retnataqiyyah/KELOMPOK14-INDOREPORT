<?php

class Menu extends CI_Controller {

	function __construct(){
		 parent::__construct();
		 $this->load->model('model_web');
	}
	public function index()
	{
		$query=$this->model_web->get();
		//$data['header']='Tampil data';
		//$data['laporan']=$query->result();
		
		$data= array(
				'header' =>'Berita',
				'berita' => $query->result()
				
		);
		$this->load->helper('text');
		$this->load->view('header1',$data);
		$this->load->view('menu');
		$this->load->view('sidebar');
		$this->load->view('footer1');


	}
}
