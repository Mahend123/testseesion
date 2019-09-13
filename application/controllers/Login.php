<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct(){
			parent::__construct();

			$this->load->helper('url');
			$this->load->model('User_Model','UM');
		}

	public function index()
	{
		$this->load->view('loginview');
	}

	public function userlogin(){

		if ($this->input->post('login')==TRUE) {
			 $email = $this->input->post('email');
			 $password = $this->input->post('password');

			 $data = array('email' => $email, 'password' => $password );

			 $r = $this->UM->Checklogin($data);

          	if ($r) {
          		$_SESSION['email'] = $r[0]['email'];
          		$_SESSION['role'] = $r[0]['role'];
          		if ($_SESSION['role'] == 'manager') {
          			redirect('MainCtr/manager');
          		}
          		if ($_SESSION['role'] == 'admin') {
          			redirect('MainCtr/admin');
          		}
          		if ($_SESSION['role'] == 'user') {
          			redirect('MainCtr/users');
          		}
          	}
          	else{
                  redirect('login');
          	}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}	