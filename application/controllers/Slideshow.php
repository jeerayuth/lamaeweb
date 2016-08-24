<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 5;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Slideshow_model', 'slideshow');
        $this->load->library('image_CRUD');
    }

    public function index() {
        $query = $this->slideshow->all($this->limit, $this->input->get('keyword'), 'order', 'asc'); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->slideshow->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('slideshow/mainpage', compact('query', 'results', 'links'));    
    }

    
    
    public function newdata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->slideshow->save();
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("slideshow");
            }
        }

        $this->layout->view("slideshow/form");
    }

    
    public function update($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->slideshow->save($id);
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("slideshow");
            }
        }

        $row = $this->slideshow->find($id);
        $this->layout->view("slideshow/form", compact('row'));
    }

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'slideshow',
            'deletelink' => 'slideshow/delete/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function delete($id) {
        $status = $this->slideshow->delete($id);
        if ($status) {
            $this->session->set_flashdata(
                    array(
                        'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                    )
            );
            redirect("slideshow");
        }
    }

   

}
