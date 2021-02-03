<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model {

    protected $table = "offers";

    public function get_all()
    {
        $this->db->order_by('id', "DESC");
        //$this->db->where('is_active', TRUE);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function get_all_active()
    {
        $this->db->order_by('id', "DESC");
        $this->db->where('is_active', 1);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function get_details($key)
    {
        //$query = $this->db->get($this->table);    
        $query = $this->db->get_where($this->table, array('id' => $key), 1);
        return $query->row();
    }
    
    public function add($input)
    {
        if($this->db->insert($this->table,$input)){
            return true;
        }else{
            return false;
        }
	}
    
    public function update($input, $id) 
    {
        //$input['date_modified'] = date('Y-m-d H:i:s');
        if ($this->db->update($this->table, $input, array('id' => $id))) {
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
    
    public function deleteall()
    {
        if ($this->db->empty_table($this->table))
            return true;    
        else
            return false;
    }
}