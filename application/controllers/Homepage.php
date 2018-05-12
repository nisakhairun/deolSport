<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

  public function __construct()
   {
       parent::__construct();
       $this->load->helper('url');
       $this->load->helper('form');
       $this->load->library('upload');
       $this->load->helper('email');
   }

	public function index()
	{
		$this->load->view('Homepage/home');
	}

  public function profil(){
	  $data['aa'] = "Adit";
    echo "Ini halaman profil";
  }

  public function hitung($angka1,$angka2){
    echo $angka1*$angka2;
    echo " Ini fungsi hitung";
  }

}
