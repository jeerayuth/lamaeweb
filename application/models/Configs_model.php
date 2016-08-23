<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Configs_model extends CI_Model {

    private $table = "configs";

    public function save($id = 1) {
        $post['name'] = $this->input->post("name");
        $post['address'] = $this->input->post('address');
        $post['telephone'] = $this->input->post('telephone');
        $post['director_name'] = $this->input->post('director_name');
        $post['director_position'] = $this->input->post('director_position');
        $post['email'] = $this->input->post('email');
        $post['facebook'] = $this->input->post('facebook');

        $config['upload_path'] = "./assets/configs_uploads/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_width'] = "1024";
        $config['max_height'] = "768";
        $this->load->library('upload', $config);

        
        if ($this->upload->do_upload("doctor_photo")) {
            $data = $this->upload->data();
            $post['doctor_photo'] = $data['file_name'];
            
            // create thumbnail
             $config['image_library'] = 'gd2';
             $config['source_image'] = $config['upload_path'] . $data['file_name'];
             $config['create_thumb'] = TRUE;
             $config['maintain_ratio'] = TRUE;
             $config['width'] = 120;
             $config['height'] = 120;
             $this->load->library('image_lib', $config);
             $this->image_lib->resize();
             $post['doctor_photo'] = str_replace($data['file_ext'], "_thumb" . $data['file_ext'], $data['file_name']);
        
        }

        if ($this->upload->do_upload("filename")) {
            $data = $this->upload->data();
            //$post['filename'] = $data['file_name'];           
            // create thumbnail
             $config['image_library'] = 'gd2';
             $config['source_image'] = $config['upload_path'] . $data['file_name'];
             $config['create_thumb'] = TRUE;
             $config['maintain_ratio'] = TRUE;
             $config['width'] = 120;
             $config['height'] = 120;
             $this->load->library('image_lib', $config);
             $this->image_lib->resize();
             $post['filename'] = str_replace($data['file_ext'], "_thumb" . $data['file_ext'], $data['file_name']);
        }

        
          if ($id) {
          $this->db->where("id", $id);
          $this->db->update($this->table, $post);
          return $this->db->affected_rows();
          } else {
          // no action กรณีระบบเกิดมีการ insert ข้อมูลใหม่
          }
         
    }

    public function find($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->num_rows() ? $query->row() : null;
    }



}
