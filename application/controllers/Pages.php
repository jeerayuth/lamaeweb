<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public $layout_view = 'layout/admin';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->load->model('Pages_model', 'pages');

        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['toolbar'] = array(
            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
        );
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = '800px';
        $this->ckeditor->config['height'] = '300px';
        
        //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 
    }

    public function index() {
        $query = $this->pages->all($this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->pages->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $this->layout->view('pages/mainpage', compact('query', 'results'));
    }

    public function newdata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->pages->save();
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("pages");
            }
        }

        $this->layout->view("pages/form");
    }

    public function update($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->pages->save($id);
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("pages");
            }
        }

        $row = $this->pages->find($id);
        $this->layout->view("pages/form", compact('row'));
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
