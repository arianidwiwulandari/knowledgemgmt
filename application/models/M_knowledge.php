<?php
class M_knowledge extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('knowledge');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('knowledge', $data);
  }
  public function update($id, $data){
    $this->db->where('knowledgeID',$id)->update('knowledge',$data);
  }
  public function delete($id){
    $this->db->where('knowledgeID',$id)->delete('knowledge');
  }
  public function findDetail($id){
    $hasil = $this->db->where('knowledgeID',$id)->limit(1)->get('knowledge');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
