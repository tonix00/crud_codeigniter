<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Params{

	private $data=array();
	private $myci = null;

	public function __construct(){
		$this->myci =& get_instance();
	}

	public function set($table){
		$res = $this->myci->db->query("SHOW COLUMNS FROM $table");

		foreach($res->result() as $r){
			$field = (string)$r->Field;
			$type = (string)$r->Type;

			if(isset($_REQUEST[$field])){
				if(preg_match("/int/i",$type )){
					$this->__set( $field, (int)$_REQUEST[$field] );
				}else if($field=='password' && $_REQUEST[$field]){
					$password = $this->myci->db->escape(md5($_REQUEST[$field]));
					$this->__set( $field, $password );
				}else{
					$value = $this->myci->db->escape($_REQUEST[$field]);	
					$this->__set( $field, $value );
				}
			}
		}
	}

	public function __set( $key, $value ){
		if($key && $value){
			$this->data[$key] = $value;
		}
	}

	public function __get( $key ){
		if(isset($this->data[$key]) && $this->data[$key]){
			return $this->data[$key];
		}else{
			return "";
		}
	}
}