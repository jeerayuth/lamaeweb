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
        $query = $this->gallery->all($this->limit);
        $total_rows = $this->gallery->count();
        $links = pagination($total_rows, $this->limit);            
        $this->layout->view("gallery/mainpage", compact('query', 'total_rows', 'links'));

    }

}
