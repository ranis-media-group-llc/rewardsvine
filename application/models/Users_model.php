<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    protected $table = "rv_users";

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function get_details($key,$field)
    {
        //$query = $this->db->get($this->table);    
        $query = $this->db->get_where($this->table, array($field => $key), 1);
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

    public function checkUser($data = array()){
        $this->db->select('id');
        $this->db->from($this->table);

        $con = array(
            'oauth_provider' => $data['oauth_provider'],
            'oauth_uid' => $data['oauth_uid']
        );
        $this->db->where($con);
        $query = $this->db->get();

        $check = $query->num_rows();
        if($check > 0){
            // Get prev user data
            $result = $query->row_array();

            // Update user data
            $data['date_modified'] = date("Y-m-d H:i:s");
            $update = $this->db->update($this->tableName, $data, array('id' => $result['id']));

            // Get user ID
            $userID = $result['id'];
        }else{
            // Insert user data
            $data['date_created'] = date("Y-m-d H:i:s");
            $data['date_modified'] = date("Y-m-d H:i:s");
            $insert = $this->db->insert($this->tableName, $data);

            // Get user ID
            $userID = $this->db->insert_id();
        }

        // Return user ID
        return $userID?$userID:false;
    }
}