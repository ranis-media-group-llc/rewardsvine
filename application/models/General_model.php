<?php defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model
{

    public function add($input,$table)
    {
        if($this->db->insert($table,$input)){
            return true;
        }else{
            return false;
        }
    }

    public function update($input, $id,$table)
    {
        //$input['date_modified'] = date('Y-m-d H:i:s');;
        if ($this->db->update($table, $input, array('id' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    public function get_details($key,$field,$table)
    {
        $query = $this->db->get_where($table, array($field => $key), 1);
        return $query->row();
    }

    public function get_all_with_key($key,$table,$sort=null,$sort_key=null)
    {
        $this->db->order_by($sort_key, $sort);
        $query = $this->db->get_where($table,array('user_id' => $key));
        return $query->result();
    }

    public function get_all($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_row_count($table, $key, $value)
    {
        $this->db->where($key, $value);
        $this->db->from($table);
        $query = $this->db->count_all_results();
        //$query = $this->db->get($this->table);
        return $query;
    }
}