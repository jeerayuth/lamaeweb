<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $layout_view = 'layout/home';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Document_model', 'document');
    }

    public function index() {

        // param1 = limit, param2 = keyword search, param3 = field for order by, param4 = order by type
        $data['doc_new'] = $this->document->all(10, '', 'created_date', 'desc');
        $data['doc_hit'] = $this->document->all(10, '', 'download', 'desc');

        $this->layout->view('site/index', $data);
    }

}
