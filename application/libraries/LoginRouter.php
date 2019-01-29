<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRouter{

	public function __construct()
	{

		$this->myci =& get_instance();
		$this->myci->load->library('session');
        $this->myci->load->helper('url');

        $isLogin = $this->myci->session->isLogin;
        

        if(!(isset($isLogin) && $isLogin==true) && $this->myci->router->class!='login')
        {
        	redirect(base_url().'login');
        	exit;
        }
	}
}