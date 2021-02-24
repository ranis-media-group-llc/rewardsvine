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

    public function add_return_id($input,$table)
    {
        if($this->db->insert($table,$input)){
            return $this->db->insert_id();
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

    public function update_with_key($input, $id,$table,$key)
    {
        //$input['date_modified'] = date('Y-m-d H:i:s');;
        if ($this->db->update($table, $input, array($key => $id))) {
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

    public function get_details_with_join($params = array(),$result=TRUE)
    {
        if(array_key_exists("main_table",$params) && $params['main_table'] != NULL ){
            $this->db->from($params['main_table']);
        }else{
            return FALSE;
        }

        if(array_key_exists("select",$params) && $params['select'] != NULL ){
            $this->db->select($params['select']);
        }else{
            $this->db->select('*');
        }

        if(array_key_exists("join",$params) && $params['join'] != NULL ){
            $this->db->join($params['join']['table'], $params['join']['statement'],$params['join']['join_as']);
        }

        if(array_key_exists("where", $params)){
            foreach($params['where'] as $key => $val){
                $this->db->where($key, $val);
            }
        }
        $query = $this->db->get();
        if($result){
            return $query->result();
        }else{
            return $query->row();
        }
    }

    public function get_all_with_keys($params = array(),$tablename){
        $this->db->select('*');
        $this->db->from($tablename);

        if(array_key_exists("where", $params)){
            foreach($params['where'] as $key => $val){
                $this->db->where($key, $val);
            }
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_with_param($params = array(),$result=TRUE){

        if(array_key_exists("table",$params) && $params['table'] != NULL ){
            $this->db->from($params['table']);
        }else{
            return FALSE;
        }

        if(array_key_exists("select",$params) && $params['select'] != NULL ){
            $this->db->select($params['select']);
        }else{
            $this->db->select('*');
        }

        if(array_key_exists("where", $params)){
            foreach($params['where'] as $key => $val){
                $this->db->where($key, $val);
            }
        }

        if(array_key_exists("order",$params)){
            if(isset($params['order']['ordering'])){
                $this->db->order_by($params['order']['order_by'], $params['order']['ordering']);
            }else{
                $this->db->order_by($params['order']['order_by'], "DESC");
            }
        }

        $query = $this->db->get();
        if($result){
            return $query->result();
        }else{
            return $query->row();
        }
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