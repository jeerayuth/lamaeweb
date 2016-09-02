<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document_model extends CI_Model {

    private $table = "documents";

    public function __construct() {
        parent::__construct();
    }

    public function count($keyword = null) { /* function  นับจำนวน record ข้อมูล */
        $this->db->like('topic', $keyword);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function all($limit = 10, $keryword = null, $field = null, $order = 'asc') { /* function query ข้อมูล */
        // param1 = limit, param2 = keyword search
        // param3 = field for order by, param4 = order by type
        $this->db->select('documents.*,c.name,u.display_name');
        $this->db->from($this->table);
        $this->db->join('categories c', 'c.id=documents.categorie_id');
        $this->db->join('users u', 'u.id=documents.created_by');
       //  if ($cat != null) {
            $this->db->where('documents.categorie_id', 1);
       // }
        $this->db->like('topic', $keryword);
        $this->db->order_by($field, $order);
        $this->db->limit($limit);
        $this->db->offset($this->uri->segment(3));
        return $this->db->get()->result();
    }
    

    

    public function entry_document($id, $filename = '') {
        $data = array(
            'document_code' => $this->input->post('document_code'),
            'register_date' => $this->input->post('register_date'),
            'reference' => $this->input->post('reference'),
            'topic' => $this->input->post('topic'),
            'store' => $this->input->post('store'),
            'filename' => $filename,
            'modified_date' => date('Y-m-d H:i:s'),
            'modified_by' => $this->session->userdata('login_id'),
            'categorie_id' => $this->input->post('categorie_id'),
            'description' => $this->input->post('description')
        );
        if ($id == NULL) {
            $data['created_by'] = $this->session->userdata('login_id');
            $data['created_date'] = date('Y-m-d H:i:s');
            $this->db->insert($this->table, $data);
        } else {
            $this->db->update($this->table, $data, array('id' => $id));
        }
    }

    public function read_document($id) {
        $this->db->select('documents.*,c.name');
        $this->db->from($this->table);
        $this->db->join('categories c', 'c.id=documents.categorie_id');
        $this->db->where('documents.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return FALSE;
    }

    public function remove_document($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

}
