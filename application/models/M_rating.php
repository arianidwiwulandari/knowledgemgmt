<?php
class M_rating extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('rating');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('rating', $data);
  }
  public function findDetail($id){
    $hasil = $this->db->where('knowledgeID',$id)->limit(1)->get('rating');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
