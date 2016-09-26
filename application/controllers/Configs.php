<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Configs extends CI_Controller {

    public $layout_view = 'layout/admin';

    //private $limit = 5;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Configs_model', 'configs');

        // Check Login all method in controller
        $userData = $this->session->all_userdata();
        if (!isset($userData["username"])) {
            redirect('/user/login', 'refresh');
        }
    }

    public function index() {
        echo 'index';
    }

    /* public function index() {
      $query = $this->gallery->all($this->limit, $this->input->get('keyword'), 'created_date', 'desc'); //dataset ข้อมูลที่ถูกดึงออกมา
      $results = $this->gallery->count($this->input->get('keyword')); // จำนวน record ที่นับได้
      $links = pagination($results, $this->limit); // สร้างลิงค์ pagination
      $this->layout->view('gallery/mainpage', compact('query', 'results', 'links'));
      } */


    /*
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
      } */

    public function update($id = 1) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "ชื่อหน่วยงาน", "trim|required", array('required' => 'ค่าห้ามว่าง!'));
        $this->form_validation->set_rules('email', 'อีเมล์', "trim|required|valid_email", array('required' => 'ค่าห้ามว่าง'));

        if ($this->form_validation->run() == true) {
            $status = $this->configs->save($id);

            if ($status) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );
                redirect("configs/update");
            }
        }

        $row = $this->configs->find($id);
        $this->layout->view("configs/form", compact('row'));
    }

    /*
      public function confrm($id) {
      $data = array
      (
      'backlink' => 'gallery',
      'deletelink' => 'gallery/delete/' . $id
      );
      $this->layout->view('confrm', $data);
      }/*

      /* public function delete($id) {
      $status = $this->gallery->delete($id);
      if ($status) {
      $this->session->set_flashdata(
      array(
      'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
      )
      );
      redirect("gallery");
      }
      } */

    /*
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
      } */
}
