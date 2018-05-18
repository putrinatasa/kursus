<?php 
class userModel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	public function tampil(){
	  $this->db->select('matpel.*, user.id, user.nama');
	  $this->db->from('matpel');
	  $this->db->join('user', 'user.id = matpel.id_user', 'left');
	  $data = $this->db->get();
	  return $data>result();
	}
?>