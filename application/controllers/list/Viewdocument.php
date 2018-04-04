<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewdocument extends CI_Controller {

  function __construct(){
    parent::__construct();      
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }   
    $this->load->model("dokumen/M_dokumen");
    $this->load->model("login/M_login");
  }

	public function index($id=""){
		
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
    //panggil fungsi listAll dari User_model
        $query = $this->M_dokumen->listDetail($id);     
        //$judul_standar['natalo']= $id;  
        $judul_standar = array(
          'natalo' =>  $id
        );
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          'nama_admin'=>$usan
        );
              
   	$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/daftarfile/entry_file_view',$judul_standar);
		$this->load->view('dashboard/v_footer');
	}
	public function dokudoku($id=""){
    $this->load->model("dokumen/M_dokumen");
    $this->load->model("login/M_login");
      $usan = $this->session->userdata('nama');
      $kue = $this->M_login->hak_ak($usan);
    //panggil fungsi listAll dari User_model
        $query = $this->M_dokumen->listDetail($id);     
        $judul_standar = array(
          'natalo' =>  $id
        ); 
        $dataHalaman = array( 
          'query' => $query,
          'da' => $kue,
          'nama_admin'=>$usan
        );
              
    $this->load->view('dashboard/v_header',$dataHalaman);
    $this->load->view('dashboard/daftarfile/entry_doku_view',$judul_standar);
    $this->load->view('dashboard/v_footer');
  }
  
}
