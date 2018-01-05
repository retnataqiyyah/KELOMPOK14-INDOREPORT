<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
	
	function __construct(){
		 parent::__construct();
		 $this->load->model('lap_m');
	}
	public function index()
	{
		$query=$this->lap_m->get();
		//$data['header']='Tampil data';
		//$data['laporan']=$query->result();
		
		$data= array(
				'header' =>'Tampil Data',
				'laporan' => $query->result()
				
		);
		$this->load->view('lap_tampil',$data);


	}
	public function add()
	{
		$data= array(
			'header' =>'Tambah Data'
				
		);
		$this->load->view('lap_tambah',$data);
		
	}
	public function proses()
	{
		if(isset($_POST['add'])){
			$inputan = $this->input->post(null, TRUE);
			$this->lap_m->add($inputan);
			
		}else if(isset($_POST['edit'])){
			$inputan = $this->input->post(null, TRUE);
			$this->lap_m->edit($inputan);
		}
		redirect('laporan');
	}
	public function edit($id=null)
	{
		$query = $this->lap_m->get($id);
		$data = array(
			'header'=>'Edit Laporan',
			'laporan'=>$query->row()
		);
		$this->load->view('lap_edit',$data);
	}
	public function del($id)
	{
		$this->lap_m->del($id);
		redirect('Laporan');
	}
	public function login()
	{
		$data = array(
			'header'=>'Login'
		);
		$this->load->view('log',$data);
	}
}
?>
