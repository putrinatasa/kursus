<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DataModel extends CI_Model {
	
  public function view(){
    return $this->db->get('matpel')->result();
  }
  

  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('matpel')->row();
  }
  
  public function validation($mode){
    $this->load->library('form_validation');
    
    if($mode == "save")
    $this->form_validation->set_rules('input_id', 'ID', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_pelajaran', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_tingkat', 'Tinggat', 'required');
    $this->form_validation->set_rules('input_kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('input_datgl', 'Dari Tanggal', 'required');
    $this->form_validation->set_rules('input_satgl', 'Sampai Tanggal', 'required');      

    if($this->form_validation->run()) 
      return TRUE; 
    else 
      return FALSE; 
  }
  
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "pelajaran" => $this->input->post('input_pelajaran'),
      "tingkat" => $this->input->post('input_tingkat'),
      "kelas" => $this->input->post('input_kelas'),
      "dari_tgl" => $this->input->post('input_datgl'),
      "sampai_tgl" => $this->input->post('input_satgl')
    );
    
    $this->db->insert('matpel', $data); 
  }
  
  public function edit($id){
    $data = array(
      "pelajaran" => $this->input->post('input_pelajaran'),
      "tingkat" => $this->input->post('input_tingkat'),
      "kelas" => $this->input->post('input_kelas'),
      "dari_tgl" => $this->input->post('input_datgl'),
      "sampai_tgl" => $this->input->post('input_satgl')
    );
    
    $this->db->where('id', $id);
    $this->db->update('matpel', $data); 
  }
  
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('matpel'); 
  }
}
?>