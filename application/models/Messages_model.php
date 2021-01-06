<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    protected $table = "rv_messages";

    public function get_messages_with_user(){
        $this->db->from($this->table);
        $this->db->select($this->table.'.*,rv_users.fullname');
        $this->db->join('rv_users', $this->table.'.user_id = rv_users.id','left');
        $query = $this->db->get();
        return $query->result();
    }
}