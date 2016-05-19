<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    private $table = "gallery";

    public function all($limit = 5) {
        $this->db->limit($limit);
        $this->db->offset($this->uri->segment(3));
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function count() {
        return $this->db->count_all_results($this->table);
    }

}
