<?php
class M_discussion extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('discussion');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('discussion', $data);
  }
  public function update($id, $data){
    $this->db->where('discussionID',$id)->update('discussion',$data);
  }
  public function delete($id){
    $this->db->where('discussionID',$id)->delete('discussion');
  }
  public function findDetail($id){
    $hasil = $this->db->where('discussionID',$id)->limit(1)->get('discussion');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
