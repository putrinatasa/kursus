<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class userModel extends CI_Model {

  public function view(){
    return $this->db->get('user')->result();
  }
  
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('user')->row();
  }
  
    public function validation($mode){
    $this->load->library('form_validation'); 
    
    if($mode == "save")
    $this->form_validation->set_rules('input_id', 'ID', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('input_telp', 'Telepon', 'required|numeric|max_length[12]');
    $this->form_validation->set_rules('input_email', 'Email', 'required');
      
    if($this->form_validation->run())
	{
		return TRUE;
    }else{ 
		return FALSE;
	}
  }
  
    public function get_latest_id(){
	  $sql=$this->db->query("SELECT Max(id) as id FROM user");
	  return $sql->row_array();
  }

    public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "nama" => $this->input->post('input_nama'),
      "alamat" => $this->input->post('input_alamat'),
      "telepon" => $this->input->post('input_telp'),
      "email" => $this->input->post('input_email')
    );
    $this->db->insert('user', $data);  
  }

  	public function tampil_data(){
		return $this->db->get('matpel');
	}
  
  public function edit($id){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "alamat" => $this->input->post('input_alamat'),
      "telepon" => $this->input->post('input_telp'),
      "email" => $this->input->post('input_email')
    );
    
    $this->db->where('id', $id);
    $this->db->update('user', $data); 
  }
  

  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
