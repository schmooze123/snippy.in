<?php
class Logout extends CI_Controller
{
	public function index(){
		$this->load->view('logout');
	}

	public function logout_user(){
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}