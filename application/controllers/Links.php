<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {
    public $layout_view = 'layout/admin';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Links_model', 'links');
    }

    public function index() {
        $query = $this->links->all($this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->links->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $this->layout->view('links/mainpage', compact('query', 'results'));
    }

    
    public function newdata() {
        $this->layout->view('links/newdata');
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $this->form_validation->set_rules('name', 'ชื่อหน่วยงาน', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('link', 'ลิงค์เว็บไซต์', 'required', array('required' => 'ค่าห้ามว่าง!'));
            
            if ($this->form_validation->run() == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                $this->links->entry_link($this->input->post('id'));
                redirect('links', 'refresh');
            } else {
                $data = array(
                    'error_name' => form_error('name'),
                    'name' => set_value('name'),
                    'link' => set_value('link')
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('links/newdata');
            } else {
                redirect('links/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['result'] = $this->links->read_link($id);
        $this->layout->view('links/edit', $data);
    }

    
    public function confrm($id) {
        $data = array
            (
            'backlink' => 'links',
            'deletelink' => 'links/remove/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function remove($id) {
        $this->links->remove_link($id);
        redirect('links', 'refresh');
    }

}
