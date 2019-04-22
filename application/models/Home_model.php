<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    protected $table = "users";

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }


}