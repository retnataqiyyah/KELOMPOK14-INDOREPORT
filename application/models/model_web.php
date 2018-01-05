<?php
class model_web extends CI_Model{
	
		public function get($id=null){
		$this->db->select('*');
		$this->db->from('tb_berita');
		if($id!=null){
			$this->db->where('id_berita',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	
}