<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 8;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('Articles_Categorie_model', 'articles_cat');
        $this->load->model('Articles_Model', 'articles');

        // Check Login all method in controller
        $userData = $this->session->all_userdata();
        if(!isset($userData["username"])){
           redirect('/user/login', 'refresh');
        }
       
        
    }

    public function index() {
        $query = $this->articles->all($this->limit, $this->input->get('keyword'), 'modified_date', 'desc'); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->articles->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('articles/mainpage', compact('query', 'results', 'links'));
    }

    public function newdata() {
        $data['results'] = $this->articles_cat->all();
        $this->layout->view('articles/newdata', $data);
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $config['upload_path'] = './assets/articles_uploads/';
            $config['allowed_types'] = 'jpg|jpeg|doc|docx|xls|xlsx|ppt|pptx|pdf|zip|rar';
            $config['max_size'] = 1024 * 60;
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');
            $this->load->library('upload', $config);

            $this->form_validation->set_rules('articles_categorie_id', 'หมวดหมู่บทความ', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('topic', 'ชื่อบทความ', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $no_file_error = "<p>You did not select a file to upload.</p>";

            if (!$this->upload->do_upload('userfile') && $this->upload->display_errors() != $no_file_error) {
                $checkfile = FALSE;
            } else {
                $checkfile = TRUE;
            }

            if ($this->form_validation->run() == TRUE && $checkfile == TRUE) {
                $this->session->set_flashdata(
                        array(
                            'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
                        )
                );

                $data = $this->upload->data();
                $datafile = ($this->input->post('datafile') == '') ? $data['file_name'] : $this->input->post('datafile');
                $this->articles->entry_articles($this->input->post('id'), $datafile);
                redirect('articles', 'refresh');
            } else {
                $data = array(
                    'err_topic' => form_error('topic'),
                    'err_filename' => form_error('filename'),
                    'err_categorie_id' => form_error('articles_categorie_id'),
                    'err_filename' => $this->upload->display_errors(),
                    'topic' => set_value('topic'), // set_value ทำให้ค่าที่อยู่ในฟอร์มยังค้างอยู่
                    'description' => set_value('description'),
                    'created_date' => set_value('created_date'),
                    'modified_date' => set_value('modified_date'),
                    'created_by' => set_value('created_by'),
                    'modified_by' => set_value('modified_by'),
                    'filename' => set_value('filename'),
                    'articles_categorie_id' => set_value('articles_categorie_id'),
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('articles/newdata');
            } else {
                redirect('articles/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['results'] = $this->articles_cat->all();
        $data['article'] = $this->articles->read_article($id);
        $this->layout->view('articles/edit', $data);
    }

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'articles',
            'deletelink' => 'articles/remove/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function remove($id) {
        $result = $this->articles->read_article($id);
        @unlink('./assets/articles_uploads/' . $result->filename);
        $this->articles->remove_articles($id);
        redirect('articles', 'refresh');
    }

    /*
      public function listview() {
      $config = array();
      $config['base_url'] = base_url('categorie/index');
      $config['total_rows'] = $this->Document_model->record_count($this->input->get('keyword'));
      $config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
      $config['uri_segment'] = 3;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data['results'] = $this->Document_model->fetch_document($config['per_page'], $page, $this->input->get('keyword'));
      $data['link'] = $this->pagination->create_links();
      $data['total_rows'] = $config['total_rows'];
      $this->load->view('template/frontheader');
      $this->load->view('document/listview', $data);
      $this->load->view('template/frontfooter');
      }
     */
}
