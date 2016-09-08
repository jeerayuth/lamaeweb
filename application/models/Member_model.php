<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

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

    public function save($id = null) {
        $post['display_name'] = $this->input->post("display_name");
        $post['email'] = $this->input->post("email");
        $post['username'] = $this->input->post('username');
        $post['visible'] = $this->input->post('visible');

        if ($id) {
            // query data limit 1
            $row = $this->member->find($id);
            if ($row->password == $this->input->post('password')) {
                $post['password'] = $this->input->post('password');
            } else {
                $post['password'] = md5($this->input->post('password'));
            }

            $this->db->where("id", $id);
            $this->db->update($this->table, $post);
            return $this->db->affected_rows();
        } else {
            $post['password'] = md5($this->input->post('password'));
            $this->db->insert($this->table, $post);
            return $this->db->insert_id();
        }
    }

    public function find($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->num_rows() ? $query->row() : null;
    }

}
