<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 12;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Member_model', 'member');
    }

    public function index() {
        $query = $this->member->all($this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->member->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination  
        $this->layout->view('member/mainpage', compact('query', 'results', 'links'));
    }

    public function newdata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("display_name", "ชื่อ-สกุล", "trim|required", array('required' => 'ค่าห้ามว่าง!'));
        $this->form_validation->set_rules("username", "ชื่อล็อกอิน", "trim|required", array('required' => 'ค่าห้ามว่าง!'));
        $this->form_validation->set_rules("password", "รหัสผ่าน", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->member->save();
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("member");
            }
        }

        $this->layout->view("member/form");
    }
    
    
    
    
    public function update($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("display_name", "ชื่อ-สกุล", "trim|required", array('required' => 'ค่าห้ามว่าง!'));
        $this->form_validation->set_rules("username", "ชื่อล็อกอิน", "trim|required", array('required' => 'ค่าห้ามว่าง!'));
        $this->form_validation->set_rules("password", "รหัสผ่าน", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->member->save($id);
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("member");
            }
        }

        $row = $this->member->find($id);
        $this->layout->view("member/form", compact('row'));
    }
    
    
    

}
