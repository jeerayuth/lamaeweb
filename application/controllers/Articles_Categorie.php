<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_Categorie extends CI_Controller {
    public $layout_view = 'layout/admin';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Articles_Categorie_model', 'articles_cat');
    }

    public function index() {
        $query = $this->articles_cat->all($this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->articles_cat->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $this->layout->view('articles_categorie/mainpage', compact('query', 'results'));
    }

    
    
    public function newdata() {
        $this->layout->view('articles_categorie/newdata');
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $this->form_validation->set_rules('name', 'ชื่อหมวดหมู่', 'required', array('required' => 'ค่าห้ามว่าง!'));
            if ($this->form_validation->run() == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                $this->articles_cat->entry_categorie($this->input->post('id'));
                redirect('articles_categorie', 'refresh');
            } else {
                $data = array(
                    'error_name' => form_error('name'),
                    'name' => set_value('name'),
                    'description' => set_value('description')
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('articles_categorie/newdata');
            } else {
                redirect('articles_categorie/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['result'] = $this->articles_cat->read_categorie($id);
        $this->layout->view('articles_categorie/edit', $data);
    }

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'articles_categorie',
            'deletelink' => 'articles_categorie/remove/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function remove($id) {
        $this->articles_cat->remove_categorie($id);
        redirect('articles_categorie', 'refresh');
    }

}
