<?php

class Links_model extends CI_Model {
    public $name;
    public $link;
    private $table = "links";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->count_all_results();
    }

    public function all($keyword = null) { /* function query ข้อมูล */
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->get()->result();
    }
    
    public function entry_link($id) {
        $this->name = $this->input->post('name');
        $this->link = $this->input->post('link');
        if ($id == NULL) {
            $this->db->insert($this->table, $this);
        } else {
            $this->db->update($this->table, $this, array('id' => $id));
        }
    }

    public function read_link($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return FALSE;
    }

    
    public function remove_link($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

}
