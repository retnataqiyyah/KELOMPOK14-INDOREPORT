<?php
class lap_m extends CI_Model{
	
	public function get($id=null){
		$this->db->select('*');
		$this->db->from('tb_laporan');
		if($id!=null){
			$this->db->where('id_lap',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($data){
		$param =array(
			'Nama' => $data['Nama'],
			'Tanggal' => $data['Tanggal'],
			'Laporan' => $data['Laporan'],
		);
			$this->db->insert('tb_laporan',$param);
		
	}
	public function edit($data){
		$param =array(
			'Nama' => $data['Nama'],
			'Tanggal' => $data['Tanggal'],
			'Laporan' => $data['Laporan'],
		);
			$this->db->set($param);
			$this->db->where('id_lap',$data['id']);
			$this->db->update('tb_laporan');
		
	}
	public function del($id){
		$this->db->where('id_lap',$id);
		$this->db->delete('tb_laporan');
	}
}
?>