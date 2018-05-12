<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->view('Homepage/allproduct');
	}

  public function list($id)
  {
    $data['idProduk'] = $id;
    $data['title'] = "Deol Sport";
    $this->load->view('Homepage/detailProduk',$data);
  }

}
