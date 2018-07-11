<?php
class M_user extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	function login_authen($username,$password){
		$this->db->select('*');
		$this->db->where('userID', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function authen_user($userid){
		$this->db->select('*');
		$this->db->where('userID', $userid);
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
  }

	public function wrong_password($userid, $value){
		$this->db->set('authentication', $value);
		$this->db->where('userID', $userid);
		$this->db->update('user');
	}

	public function getAll(){
		$hasil = $this->db->order_by("status")->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('user', $data);
  }
  public function update($id, $data){
    $this->db->where('userID',$id)->update('user',$data);
  }
  public function delete($id){
    $this->db->where('userID',$id)->delete('user');
  }
  public function findDetail($id){
    $hasil = $this->db->where('userID',$id)->limit(1)->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
