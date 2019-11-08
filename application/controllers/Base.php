<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index()
	{
		$this->load->view('login');	
	}

	public function listar(){

		//$dados['email'] = $this->input->post('email');
		//$dados['senha'] = $this->input->post('senha');
		
		$this->load->view('admin');
	}

	public function gravar(){

		$this->load->model('M_login');

		$this->M_login->gravar();
		//$dados['lista'] = $this->M_login->listar();
	}
}
