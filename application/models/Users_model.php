<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    protected $table = "users";

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function get_details($key)
    {
        //$query = $this->db->get($this->table);    
        $query = $this->db->get_where($this->table, array('email' => $key), 1);
        return $query->row();
    }
    
    public function register($input)
    {
        if($this->db->insert($this->table,$input)) {
           return true;
            
        } else {
            return false;
        }
    }
     public function delete($key)
    {
        $this->db->where('id', $key);
        // Execute delete.
        if ($this->db->delete($this->table))
            return true;    
        else
            return false;
    }
    
    public function testing(){
       
    }
}