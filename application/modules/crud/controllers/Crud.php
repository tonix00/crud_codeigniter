<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends MX_Controller {

	public function __construct(){
        parent::__construct();

        // load helper
        $this->load->helper('url');
        $this->load->helper('form');
        
        // load Library
        $this->load->library('session');
		$this->load->library('form_validation');
    }
	
	public function index()
	{

		$data = array();
		$data['success'] = $this->session->success;
		$this->load->model('mdcrud');
		$total = $this->mdcrud->getRecordsCount();
		$per_page = 5;
		
		$this->load->library('pagination');
		$config['base_url'] = '/';
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
		$config['page_query_string'] = true;

		$offset = 0;
		if(isset($_GET['per_page']))
		{
			$offset = (int)$_GET['per_page'];
		}

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['users'] = $this->mdcrud->getRecords($offset , $per_page);

		$this->template->load('main','list',$data);
		// clean session message
		$this->session->unset_userdata('success');
	}	
	
	public function add()
	{

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		$data = array();
		$data['error'] = "";
		if ($this->form_validation->run() == false && $_POST)
		{
			$data['error'] = "Error";
		}
		else if ($this->form_validation->run() == true)
		{
			$this->load->model('mdcrud');
			$this->mdcrud->add();

			$this->session->set_userdata('success','Record is added.');
			redirect(base_url());
			exit;
		}

		$this->template->load('main','add',$data);
	}
	
	public function edit()
	{
		$this->load->model('mdcrud');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		$data = array();
		$data['error'] = "";
		if ($this->form_validation->run() == false && $_POST)
		{
			$data['error'] = "Error";
		}
		else if ($this->form_validation->run() == true)
		{
			
			$this->mdcrud->edit();
			$this->session->set_userdata('success','Record is updated.');
			redirect(base_url());
			exit;
		}

		$this->load->library('params');
        $this->params->set("users");
        $id = $this->params->id;
        $data['user'] = $this->mdcrud->getRow($id);
		$this->template->load('main','edit',$data);
	}

	public function delete()
	{
		$this->load->model('mdcrud');
		$this->mdcrud->delete();
		$this->session->set_userdata('success','Record is deleted.');
		redirect(base_url());
		exit;
	}
}
