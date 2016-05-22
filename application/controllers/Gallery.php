<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 5;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Gallery_model', 'gallery');
    }

    public function index() {
        $query = $this->gallery->all($this->limit, $this->input->get('keyword'), 'created_date', 'desc'); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->gallery->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('gallery/mainpage', compact('query', 'results', 'links'));
    }

    public function newdata() {
        $this->layout->view('gallery/newdata');
    }
    
    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $config['upload_path'] = './assets/gallery_uploads/';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');
            $this->load->library('upload', $config);
         
            $this->form_validation->set_rules('title', 'ชื่อเรื่อง', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $no_file_error = "<p>You did not select a file to upload.</p>";
            if (!$this->upload->do_upload('userfile') && $this->upload->display_errors() != $no_file_error) {
                $checkfile = FALSE;
            } else {
                $checkfile = TRUE;
            }
            if ($this->form_validation->run() == TRUE && $checkfile == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );

                $data = $this->upload->data();
                $datafile = ($this->input->post('datafile') == '') ? $data['file_name'] : $this->input->post('datafile');
                $this->gallery->entry_gallery($this->input->post('id'), $datafile);
                redirect('gallery', 'refresh');
            } else {
                $data = array(
                    'err_title' => form_error('title'),
                    'err_filename' => form_error('filename'),               
                    'err_filename' => $this->upload->display_errors(),
                    'title' => set_value('title'),
                    'description' => set_value('description'),
                    'created_date' => set_value('created_date'),
                    'modified_date' => set_value('modified_date'),
                    'created_by' => set_value('created_by'),
                    'modified_by' => set_value('modified_by'),
                    'filename' => set_value('filename'),
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('gallery/newdata');
            } else {
                redirect('gallery/edit/' . $this->input->post('id'));
            }
        }
    }
    
    
    
}
