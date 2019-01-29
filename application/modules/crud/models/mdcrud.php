<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdcrud extends CI_Model{

  	public function __construct(){
        parent::__construct();
    }
   
    public function getRecords($offset,$limit)
    {
       
      $sql="SELECT * FROM users LIMIT $offset, $limit";
      $res = $this->db->query($sql);
      return $res->result();
    } 

    public function getRecordsCount()
    {
      $sql="SELECT count(*) AS cnt FROM users";
      $res = $this->db->query($sql)->row();
      return $res->cnt;
    }

   	public function add()
    {
      $this->load->library('params');
      $this->params->set("users");

      $name     = $this->params->name;
      $email    = $this->params->email;
      $password = $this->params->password;
      $sql  = "INSERT INTO 
                  users(name,password,email,created_at,updated_at) 
                VALUES($name,$password,$email,now(),now())";
      return $this->db->query($sql);
    }  	

    public function edit()
    {
      $this->load->library('params');
      $this->params->set("users");

      $id      = $this->params->id;
      $name     = $this->params->name;
      $email    = $this->params->email;

      $sql="UPDATE users SET
              name = $name,
              email = $email,
              updated_at = now()";

      $password = $this->params->password;       
      if($password && $password!="''")
      {
        $sql .= ", password=$password";
      }

      $sql .= " WHERE id=$id";
      return $this->db->query($sql);
    }

    public function delete()
    {
      $this->load->library('params');
      $this->params->set("users");
      $id      = $this->params->id;
      $sql="DELETE FROM users WHERE id={$id}";
      return $this->db->query($sql);
    }

    public function getRow($id)
    {
      $id = (int)$id;
      $sql = "SELECT * FROM users WHERE id={$id}";
      $res = $this->db->query($sql);
      return $res->row();
    }
}   
