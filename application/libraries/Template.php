<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
	
	protected $data = array(
              'title'   => 'Codeigniter - Crud Application',
              'contents' => '',
              'module_path' => '../application/modules/'
            );
			
	public function __construct(){}

	public function load($template,$page='',$data=array())
	{
		$that =& get_instance();
		$this->data['contents'] = $that->load->view($page,$data,true);
		$that->parser->parse('/layouts/'.$template, $this->data);
	}
}