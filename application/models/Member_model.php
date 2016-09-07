<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {
   // public $name;
  //  public $description;
    private $table = "users";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->from($this->table);
        $this->db->like('display_name', $keyword);
        return $this->db->count_all_results();
    }

    public function all($keyword = null) { /* function query ข้อมูล */
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like('display_name', $keyword);
        return $this->db->get()->result();
    }

    
    
    
    
    
    
    
    
    
    
    
    public function entry_categorie($id) {
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        if ($id == NULL) {
            $this->db->insert($this->table, $this);
        } else {
            $this->db->update($this->table, $this, array('id' => $id));
        }
    }

    public function read_categorie($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return FALSE;
    }

    public function remove_categorie($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

}
