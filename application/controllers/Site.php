<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('template/frontheader');
        $this->load->view('site/index');
        $this->load->view('template/frontfooter');
    }

}
