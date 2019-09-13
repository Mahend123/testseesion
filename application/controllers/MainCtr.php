<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainCtr extends CI_Controller {

		public function __construct(){
			parent::__construct();

			$this->load->helper('url');
			$this->load->model('User_Model','UM');
			
			if(!isset($_SESSION['email']))
			{
				redirect('login');
			}
		}


	public function manager(){
		if($_SESSION['role'] == 'manager')
			{
				$this->load->view('managerview');	
			}else
			redirect('login');



	}

	public function admin(){
		if($_SESSION['role'] == 'admin')
			{
				$this->load->view('adminview');
			}else
			redirect('login');

			
	}

	public function users(){
		if($_SESSION['role'] == 'user')
			{
				$this->load->view('usersview');	
			}else
			redirect('login');

	}
	

}

