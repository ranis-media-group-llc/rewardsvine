<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

    protected $table = "settings";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('name, value');
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function get_all_admin()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function get_details($key)
    {
        //$query = $this->db->get($this->table);    
        $query = $this->db->get_where($this->table, array('id' => $key), 1);
        return $query->row();
    }
    
    public function update($data)
    {
        foreach($data as $key => $value) {
            // Initialize input array.
            $input = array('name' => $key, 'value' => $value);
            // Check first if settings already exist, then add if not.
            if(!$this->is_settings_exist($key))
                $this->add($input); // Execute Add to database function.
            // Update existing settings to new value.
            $this->db->update($this->table, array('value' => $value), array('name' => $key));
        }
        return true;
    }
    
    /**
    *   Add new settings for new fields.
    *   @return bool
    */
    public function add($input) {
        if ($this->db->insert($this->table,$input)){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    
    /**
    *   Edit settings.
    *   @return bool
    */
    public function edit($input) {
        $this->db->where('id', $input['id']);
        unset($input['id']);
        
        if ($this->db->update($this->table, $input)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
    *   Check table if Settings name already exist.
    *   @return bool
    */
    public function is_settings_exist($key) {
        $query = $this->db->get_where($this->table, array('name' => $key), 1);
        $result = $query->row();
        
        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function val($key, $is_id=null)
    {
        // Check if current key is an ID.
        if($is_id) {
            // Get the row id.
            $query = $this->db->get_where($this->table, array('id' => $key), 1);
            $result = $query->row();
            // Return the entire row of the ID.
            return ($result) ? $result : FALSE;
        }
        else
            $query = $this->db->get_where($this->table, array('name' => $key), 1);
        
        $result = $query->row();
        
        return ($result) ? $result->value : FALSE;
    }
}
