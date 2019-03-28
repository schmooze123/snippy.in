<?php
class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('login');
		$this->load->helper(array('form', 'url'));

	}


	public function userlogin()
	{
		
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','password', 'required');

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->validate_login($username, $password);
			if( $login_id ){
				$this->load->library('session');

				$this->session->set_userdata('user_id', $login_id);
				return redirect('');
			}else{
echo 'Do Not Match';
			}

		}else{
			$this->load->view('login');
			
		}
	}
}