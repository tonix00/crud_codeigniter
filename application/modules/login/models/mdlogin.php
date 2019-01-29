<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlogin extends CI_Model{

  	public function __construct(){
        parent::__construct();
    }
   
   	public function isLogin(){

      
   		$this->load->library('params');
		  $this->params->set("users");

		  $email     = $this->params->email;
		  $password  = $this->params->password;
		  $sql  = "SELECT id,email,name 
               FROM users 
               WHERE 
                email=$email AND 
                password=$password";
    
      $record = $this->db->query($sql)->row();
      if($record){
        $obj = array();
        $obj['id'] = $record->id;
        $obj['email']= $record->email;
        $obj['name']= $record->name;
        $obj['isLogin'] = true;
        return $obj;
      }else{
        return false;
      }
   	}   	
}   