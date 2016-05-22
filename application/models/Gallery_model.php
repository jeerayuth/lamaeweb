<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    private $table = "gallery";

    public function all($limit = 5, $keryword, $field = null, $order = 'asc') {
        // param1 = limit, param2 = keyword search
        // param3 = field for order by, param4 = order by type
        $this->db->select('gallery.*');
        $this->db->from($this->table);
        $this->db->like('title', $keryword);
        $this->db->order_by($field, $order);
        $this->db->limit($limit);
        $this->db->offset($this->uri->segment(3));
        return $this->db->get()->result();
    }

    public function count($keyword) { /* function  นับจำนวน record ข้อมูล */
        $this->db->like('title', $keyword);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function entry_gallery($id, $filename = '') {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'filename' => $filename,
            'modified_date' => date('Y-m-d H:i:s'),
            'modified_by' => $this->session->userdata('login_id'),
        );
        if ($id == NULL) {
            $data['created_by'] = $this->session->userdata('login_id');
            $data['created_date'] = date('Y-m-d H:i:s');
            $this->db->insert($this->table, $data);
        } else {
            $this->db->update($this->table, $data, array('id' => $id));
        }
    }

}
