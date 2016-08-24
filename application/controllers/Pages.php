<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public $layout_view = 'layout/admin';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Pages_model', 'pages');
    }

    public function index() {
        $query = $this->pages->all($this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->pages->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $this->layout->view('pages/mainpage', compact('query', 'results'));
    }

    
    public function newdata() {
        $this->layout->view('pages/newdata');
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $this->form_validation->set_rules('name', 'ชื่อเพจ', 'required', array('required' => 'ค่าห้ามว่าง!'));
            if ($this->form_validation->run() == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                $this->pages->entry_page($this->input->post('id'));
                redirect('pages', 'refresh');
            } else {
                $data = array(
                    'error_name' => form_error('name'),
                    'name' => set_value('name'),
                    'details' => set_value('details')
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('pages/newdata');
            } else {
                redirect('pages/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['result'] = $this->pages->read_page($id);
        $this->layout->view('pages/edit', $data);
    }
    

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'pages',
            'deletelink' => 'pages/remove/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function remove($id) {
        $this->pages->remove_page($id);
        redirect('pages', 'refresh');
    }

}
