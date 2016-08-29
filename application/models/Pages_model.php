<?php

class Pages_model extends CI_Model {

    public $name;
    public $details;
    private $table = "pages";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        return $this->db->count_all_results();
    }

    public function all($keyword = null, $config = null) { /* function query ข้อมูล */
        $this->db->select('*');
        $this->db->from($this->table);
        if ($config != NULL) {
            $this->db->where("visible", $config);
        }
        $this->db->like('name', $keyword);
        return $this->db->get()->result();
    }

    public function entry_page($id) {
        $this->name = $this->input->post('name');
        $this->details = $this->input->post('details');
        if ($id == NULL) {
            $this->db->insert($this->table, $this);
        } else {
            $this->db->update($this->table, $this, array('id' => $id));
        }
    }

    public function save($id = null) {
        $post['name'] = $this->input->post("name");
        $post['details'] = $this->input->post('details');
        $post['visible'] = $this->input->post('visible');

        if ($id) {
            $this->db->where("id", $id);
            $this->db->update($this->table, $post);
            return $this->db->affected_rows();
        } else {
            $this->db->insert($this->table, $post);
            return $this->db->insert_id();
        }
    }

    public function read_page($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return FALSE;
    }

    public function remove_page($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

    public function find($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->num_rows() ? $query->row() : null;
    }

}
