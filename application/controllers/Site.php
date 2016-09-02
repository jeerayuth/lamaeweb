<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $layout_view = 'layout/home';

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Document_model', 'document');
        $this->load->model('News_model', 'news');
        $this->load->model('Gallery_model', 'gallery');
        $this->load->model('Slideshow_model', 'slideshow');
        $this->load->model('Pages_model', 'pages');
    }

    public function index() {

        // param1 = limit, param2 = keyword search, param3 = field for order by, param4 = order by type
        // ดาวน์โหลดมาใหม่
        $data['doc_new'] = $this->document->all(10, '', 'created_date', 'desc');
        // ดาวน์โหลดยอดนิยม
        $data['doc_hit'] = $this->document->all(10, '', 'download', 'desc');
        //ข่าวสารทั่วไป
        $data['news_general'] = $this->news->all(5, '', 'modified_date', 'desc', 1);
        //จัดซื้อจัดจ้าง
        $data['news_budget'] = $this->news->all(5, '', 'modified_date', 'desc', 2);
        //แกลอรี่กิจกรรม
        $data['gallery'] = $this->gallery->all(5, '', 'modified_date', 'desc');
        // Slideshow
        $data['slideshow'] = $this->slideshow->all(30, '', 'order', 'asc');

        $this->layout->view('site/index', $data);
    }

    public function read_page($id) { //อ่านรายละเอียดหน้าเพจเว็บไซต์
        $result = $this->pages->read_page($id);
        $this->layout->view('site/page', compact('result'));
    }

    public function news($cat_id) { //อ่านหน้าเพจข่าวตามประเภทที่เลือก
        $results = $this->news->all(15, '', 'modified_date', 'desc', $cat_id);
        $this->layout->view('site/news', compact('results'));
    }

    public function read_new($id) { //อ่านหน้ารายละเอียดข่าวสาร
        $result = $this->news->read_new($id);
        $this->layout->view('site/new', compact('result'));
    }

    public function docs() { //อ่านหน้าไฟล์เอกสารตามประเภทที่เลือก
        $results = $this->document->all(10, '', 'modified_date', 'desc');
        // $this->layout->view('site/docs', compact('results'));
        print_r($results);
    }

    public function read_doc($id) { //อ่านหน้ารายละเอียดเอกสารดาวน์โหลด
        $result = $this->document->read_document($id);
        $this->layout->view('site/doc', compact('result'));
    }

    public function gallery() { //อ่านหน้า gallery ทั้งหมด
        $results = $this->gallery->all(15, '', 'modified_date', 'desc');
        $this->layout->view('site/gallerys', compact('results'));
    }

    public function read_gallery($id) { //อ่านหน้ารายละเอียดเอกสารดาวน์โหลด
        $result = $this->gallery->read_gallery($id);
        $this->layout->view('site/gallery', compact('result'));
    }

}
