<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
 public function index()
 {
     
 $this->load->model('matakuliah_model', 'matakuliah');
 $this->matakuliah->nama='JK, PPKN, BD, BING, KE, PW, UIUX, ST';
 $this->matakuliah->sks='21';
 $this->matakuliah->kode='21';
 $list_matakuliah = [$this->matakuliah];
 $data['list_matakuliah']=$list_matakuliah;

 //$this->load->view('header');
        $this->load->view('matakuliah/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('matakuliah/footer');
 //$this->load->view('footer');
 }
}
