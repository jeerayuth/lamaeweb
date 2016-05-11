<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->library('pagination');
        $this->load->model('Categorie_model');
        $this->load->model('Document_model');
    }

    public function index() {

        //ดาวน์โหลดไฟล์เรื่องใหม่ล่าสุด
        $data['download1'] = $this->Document_model->fetch_document(7, 0, '', 'created_date', 'desc');
        $data['download2'] = $this->Document_model->fetch_document(10, 0, '', 'stat', 'desc');

        $this->load->view('template/frontheader');
        $this->load->view('site/index', $data);
        $this->load->view('template/frontfooter');
    }

}
