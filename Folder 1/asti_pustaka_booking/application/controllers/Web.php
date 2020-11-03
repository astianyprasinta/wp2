<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller {
    function __construct(){ 
       parent::__construct(); 
        $this->load->helper('url'); 
        $this->load->library('form_validation');
        $this->load->model('ModelUser', 'ModelBuku');

}
public function index(){ 
    

    $data['judul'] = "Halaman Depan" ;    
    $this->load->view('v_header',$data);  
    $this->load->view('v_index',$data);    
    $this->load->view('v_footer',$data); 

}

public function simpan()
 {
     
  $nim = $this->input->post('nim');
  $nama = $this->input->post('nama');
  $jurusan = $this->input->post('jurusan');
  $alamat = $this->input->post('alamat');
  $this->db->query("insert into tbl_mahasiswa values('$nim','$nama','$jurusan','$alamat')");
  redirect('','refresh');
 }

public function about() { 
    $data['judul'] = "Halaman About"; 
    $this->load->view('v_header', $data);  
    $this->load->view('v_about', $data);  
    $this->load->view('v_footer', $data); 

} 
public function tampil()
{
 $d['data'] = $this->db->query("select* from tbl_mahasiswa");
 $this->load->view('tampil',$d);
}
}
    
     