<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('template/backheader');
        $this->load->view('manager/index');
        $this->load->view('template/backfooter');
    }

}
