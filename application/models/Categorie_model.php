<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model {

    private $table = "categories";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->count_all_results();
    }

    public function all($keyword = null) { /* function query ข้อมูล */
        $this->db->select('categories.*');
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->get()->result();
    }

    public function entry_categorie($id) {
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        if ($id == NULL) {
            $this->db->insert('categories', $this);
        } else {
            $this->db->update('categories', $this, array('id' => $id));
        }
    }

    public function read_categorie($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('categories');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_categorie($id) {
        $this->db->delete('categories', array('id' => $id));
    }

}
