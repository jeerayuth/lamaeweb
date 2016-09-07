<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    private $table = "gallery";

    public function all($limit = 5, $keryword, $field = null, $order = 'asc') {
        // param1 = limit, param2 = keyword search
        // param3 = field for order by, param4 = order by type
        $this->db->select('gallery.*,LEFT(gallery.description,100) as description, us.display_name');
        $this->db->from($this->table);
        $this->db->join('users us', 'us.id = gallery.created_by', 'left');
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

    public function save($id = null) {
        $post['title'] = $this->input->post("title");
        $post['visible'] = $this->input->post('visible');
        $post['description'] = $this->input->post('description');

        $config['upload_path'] = "./assets/gallery_uploads/";
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
        $config['max_width'] = "1024";
        $config['max_height'] = "768";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("filename")) {
            $data = $this->upload->data();
            $post['filename'] = $data['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $data['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 100;
            $config['height'] = 60;
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $post['thumbnail'] = str_replace($data['file_ext'], "_thumb" . $data['file_ext'], $data['file_name']);
        }

        if ($id) {
            $this->db->where("id", $id);
            $this->db->update($this->table, $post);
            return $this->db->affected_rows();
        } else {
            $this->db->insert($this->table, $post);
            return $this->db->insert_id();
        }
    }

    public function delete($id) {
        $row = $this->find($id);
        if (!empty($row)) {
            if (file_exists("./assets/gallery_uploads/" . $row->filename))
                unlink("./assets/gallery_uploads/" . $row->filename);
            if (file_exists("./assets/gallery_uploads/" . $row->thumbnail))
                unlink("./assets/gallery_uploads/" . $row->thumbnail);
        }

        $this->db->where("id", $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function find($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->num_rows() ? $query->row() : null;
    }

    public function read_gallery($id) {
        $this->db->select('gallery.*,us.display_name');
        $this->db->from($this->table);
        $this->db->join('users us', 'us.id = gallery.created_by');
        $this->db->where('gallery.id', $id);
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

}
