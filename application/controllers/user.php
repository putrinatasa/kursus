<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('UserModel'); 
	$this->load->helper('url');
  }
  
  public function index(){
    $data['user'] = $this->UserModel->view();
    $this->load->view('user/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){
      if($this->UserModel->validation("save")){
        $this->UserModel->save();
        redirect('user');
      }
    }
	 $this->load->view('user/form_tambah');
  }
  
   public function tambahmatpel(){
    if($this->input->post('submit')){ 
      if($this->DataModel->validation("save")){ 
        $this->DataModel->save(); 
        redirect('matpel');
      }
    }
    
    $this->load->view('matpel/form_matpel');
  }
  
      public function tambahdata(){
    $data = array(
      "id_user" => $this->input->post('input_id_user'),
      "pelajaran" => $this->input->post('input_pelajaran'),
      "tingkat" => $this->input->post('input_tingkat'),
      "kelas" => $this->input->post('input_kelas'),
      "dari_tgl" => $this->input->post('input_datgl'),
      "sampai_tgl" => $this->input->post('input_satgl')
    );
    
    $this->db->insert('matpel', $data); 
	redirect ('user');
  }
  
  public function tampil(){
    $data['matpel'] = $this->UserModel->tampil_data()->result();
    $this->load->view('matpel/v_tampil', $data);
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ 
      if($this->UserModel->validation("update")){ 
        $this->UserModel->edit($id); 
        redirect('user');
      }
    }
    
    $data['user'] = $this->UserModel->view_by($id);
    $this->load->view('user/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->UserModel->delete($id); 
    redirect('user');
  }
}
