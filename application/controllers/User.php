
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

		public function __construct(){
			parent::__construct();

			$this->load->helper('url');
			$this->load->model('User_Model','UM');
			
		}

	public function index()
	{
		
        
		if ($this->input->post('submit')==TRUE) {
		 $value['name']	= $this->input->post('name');
		 $value['phone']	= $this->input->post('phone');
		 $value['email']	= $this->input->post('email');
		 $value['password']	= $this->input->post('password');
		  $value['role']	= $this->input->post('role');


		  $this->load->library('upload');
          $image = array();
           $ImageCount = $_FILES['userfile']['name'];

       // for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['userfile']['name'];
            $_FILES['file']['type']       = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['userfile']['error'];
            $_FILES['file']['size']       = $_FILES['userfile']['size'];
            // File upload configuration
            $uploadPath = './uploads/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $value['userfile'] = $imageData['file_name'];
            }
            
             $result = $this->UM->insert($value);
		 	if ($result>0) {
		 		echo "<script>alert('Record Saved')</script>";
		 	}else{
		 		echo "<script>alert('Record Not Saved')</script>";
		 	}
		}
		$this->load->view('regview');
	}
}
