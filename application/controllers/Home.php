<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');

	}
	public function buku()
	{
		$data ['buku']= $this->m_data->getbuku()->result();
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	}
}
