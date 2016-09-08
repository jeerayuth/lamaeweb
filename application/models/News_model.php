<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    private $table = "news";

    public function __construct() {
        parent::__construct();
    }

    public function all($limit = 10, $keryword = null, $field = null, $order = 'asc', $cat = null) { /* function query ข้อมูล */
        // param1 = limit, param2 = keyword search
        // param3 = field for order by, param4 = order by type
        $this->db->select('news.*,LEFT(news.description,100) as description,nc.name,us.display_name');
        $this->db->from($this->table);
        $this->db->join('news_categories nc', 'nc.id = news.news_categorie_id', 'left');
        $this->db->join('users us', 'us.id = news.created_by', 'left');
        if ($cat != null) {
            $this->db->where('news.news_categorie_id', $cat);
        }
        $this->db->like('topic', $keryword);
        $this->db->order_by($field, $order);
        $this->db->limit($limit);
        $this->db->offset($this->uri->segment(3));
        return $this->db->get()->result();
    }

    public function count($keyword) { /* function  นับจำนวน record ข้อมูล */
        $this->db->like('topic', $keyword);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function entry_news($id, $filename = '') {
        $data = array(
            'topic' => $this->input->post('topic'),
            'description' => $this->input->post('description'),
            'filename' => $filename,
            'modified_date' => date('Y-m-d H:i:s'),
            'modified_by' => $this->session->userdata('login_id'),
            'news_categorie_id' => $this->input->post('news_categorie_id'),
        );
        if ($id == NULL) {
            $data['created_by'] = $this->session->userdata('login_id');
            $data['created_date'] = date('Y-m-d H:i:s');
            $this->db->insert($this->table, $data);
        } else {
            $this->db->update($this->table, $data, array('id' => $id));
        }
    }

    public function read_new($id) {
        $this->db->select('news.*,nc.name,us.display_name');
        $this->db->from($this->table);
        $this->db->join('news_categories nc', 'nc.id = news.news_categorie_id');
        $this->db->join('users us', 'us.id = news.created_by');
        $this->db->where('news.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            // upate view field
            $this->db->set('view', 'view+1', FALSE);
            $this->db->where('id', $id);
            $this->db->update($this->table);

            return $query->row();
        }

        return FALSE;
    }
    

    public function remove_news($id) {
        $this->db->delete($this->table, array('id' => $id));
    }

}
