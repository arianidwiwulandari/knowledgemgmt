<?php
class M_division extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->order_by('divisionName')->get('division');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('division', $data);
  }
  public function update($id, $data){
    $this->db->where('divisionID',$id)->update('division',$data);
  }
  public function delete($id){
    $this->db->where('divisionID',$id)->delete('division');
  }
  public function findDetail($id){
    $hasil = $this->db->where('divisionID',$id)->limit(1)->get('division');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
