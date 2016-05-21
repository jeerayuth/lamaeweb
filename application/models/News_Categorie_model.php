<?php

class News_Categorie_model extends CI_Model {

    private $table = "news_categories";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->count_all_results();
    }

    public function all($keyword = null) { /* function query ข้อมูล */
        $this->db->select('news_categories.*');
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->get()->result();
    }

    public function entry_categorie($id) {
        $this->name = $this->input->post('name');
        $this->description = $this->input->post('description');
        if ($id == NULL) {
            $this->db->insert('news_categories', $this);
        } else {
            $this->db->update('news_categories', $this, array('id' => $id));
        }
    }

    public function read_categorie($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news_categories');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function remove_categorie($id) {
        $this->db->delete('news_categories', array('id' => $id));
    }

}
