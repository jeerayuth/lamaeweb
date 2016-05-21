<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->library('pagination');
        $this->load->model('Categorie_model');
        $this->load->model('Document_model', 'document');
    }

    public function index() {

        //doc
        $data = array();
        // param1 = limit, param2 = keyword search, param3 = field for order by, param4 = order by type
        $data['doc_new'] = $this->document->all(10,'','created_date', 'desc');
        $data['doc_hit'] = $this->document->all(10,'','download','desc');

        $this->load->view('template/frontheader');
        $this->load->view('site/index', $data);
        $this->load->view('template/frontfooter');
    }

}
