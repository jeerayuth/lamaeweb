<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 5;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Gallery_model', 'gallery');
        $this->load->library('image_CRUD');
    }

    public function index() {
        $query = $this->gallery->all($this->limit, $this->input->get('keyword'), 'created_date', 'desc'); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->gallery->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('gallery/mainpage', compact('query', 'results', 'links'));
    }

    public function newdata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->gallery->save();
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("gallery");
            }
        }

        $this->layout->view("gallery/form");
    }

    public function update($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "ชื่อเรื่อง", "trim|required", array('required' => 'ค่าห้ามว่าง!'));

        if ($this->form_validation->run() == true) {
            $status = $this->gallery->save($id);
            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("gallery");
            }
        }

        $row = $this->gallery->find($id);
        $this->layout->view("gallery/form", compact('row'));
    }

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'gallery',
            'deletelink' => 'gallery/delete/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function delete($id) {
        $status = $this->gallery->delete($id);
        if ($status) {
            $this->session->set_flashdata(
                    array(
                        'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                    )
            );
            redirect("gallery");
        }
    }

    public function manage_photo() {
        $image_crud = new image_CRUD();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('gallery_sub')
                ->set_relation_field('gallery_id')
                ->set_ordering_field('priority')
                ->set_image_path('assets/gallery_sub_uploads');

        $output = $image_crud->render();
        
        $this->load->view('gallery/manage_photo',$output);	
    }

}
