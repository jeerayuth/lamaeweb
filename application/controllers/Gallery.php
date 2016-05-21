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
        $query = $this->gallery->all($this->limit, $this->input->get('keyword'), 'created_at', 'desc'); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->gallery->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('gallery/mainpage', compact('query', 'results', 'links'));
    }

}
