<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	
	public function __construct(){
        parent::__construct();

        // load Library
        $this->load->library('session');
        $this->load->helper('url');
    }

	public function index()
	{
		$data = array();
		$data['error_login'] = $this->session->error_login;
		$this->template->load('main','login',$data);

		// clean session error message
		$this->session->unset_userdata('error_login');
	}	
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

	public function checkLogin()
	{
		$this->load->model('mdlogin');
		$user = $this->mdlogin->isLogin();

		if($user)
		{
			$this->session->set_userdata($user);
			redirect(base_url());
		}
		else
		{
			$this->session->set_userdata('error_login','Invalid username or password.');
			redirect(base_url().'login');
		}
	}
}
