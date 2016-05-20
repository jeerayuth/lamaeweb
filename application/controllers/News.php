<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public $layout_view = 'layout/admin';
    private $limit = 2;

    public function __construct() {
        parent::__construct();
        $this->load->library('layout');
        $this->load->model('News_Categorie_model');
        $this->load->model('News_Model', 'news');
    }

    public function index() {
        $query = $this->news->all($this->limit, $this->input->get('keyword')); //dataset ข้อมูลที่ถูกดึงออกมา
        $results = $this->news->count($this->input->get('keyword')); // จำนวน record ที่นับได้
        $links = pagination($results, $this->limit); // สร้างลิงค์ pagination     
        $this->layout->view('news/mainpage', compact('query', 'results', 'links'));
    }

    public function newdata() {
        $data['results'] = $this->News_Categorie_model->fetch_categorie(0, 0, '');
        $this->layout->view('news/newdata', $data);
    }

    public function postdata() {
        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $config['upload_path'] = './assets/news_uploads/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = TRUE;
            $config['file_name'] = ($this->input->post('datafile') == '') ? uniqid() : $this->input->post('datafile');
            $this->load->library('upload', $config);

            $this->form_validation->set_rules('news_categorie_id', 'หมวดหมู่ข่าวประกาศ', 'required', array('required' => 'ค่าห้ามว่าง!'));
            $this->form_validation->set_rules('topic', 'ชื่อข่าว', 'required', array('required' => 'ค่าห้ามว่าง!'));
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
                $this->news->entry_news($this->input->post('id'), $datafile);
                redirect('news', 'refresh');
            } else {
                $data = array(
                    'err_topic' => form_error('topic'),
                    'err_filename' => form_error('filename'),
                    'err_categorie_id' => form_error('news_categorie_id'),
                    'err_filename' => $this->upload->display_errors(),
                    'topic' => set_value('topic'),
                    'description' => set_value('description'),
                    'created_date' => set_value('created_date'),
                    'modified_date' => set_value('modified_date'),
                    'created_by' => set_value('created_by'),
                    'modified_by' => set_value('modified_by'),
                    'filename' => set_value('filename'),
                    'news_categorie_id' => set_value('news_categorie_id'),
                );
                $this->session->set_flashdata($data);
            }
            if ($this->input->post('id') == NULL) {
                redirect('news/newdata');
            } else {
                redirect('news/edit/' . $this->input->post('id'));
            }
        }
    }

    public function edit($id) {
        $data['results'] = $this->News_Categorie_model->fetch_categorie(0, 0, '');
        $data['doc'] = $this->news->read_news($id);
        $this->layout->view('news/edit', $data);
    }

    /*
      public function read($id) {
      $data['result'] = $this->Document_model->read_document($id);
      $this->load->view('template/frontheader');
      $this->load->view('document/read', $data);
      $this->load->view('template/frontfooter');
      } */

    public function confrm($id) {
        $data = array
            (
            'backlink' => 'news',
            'deletelink' => 'news/remove/' . $id
        );
        $this->layout->view('confrm', $data);
    }

    public function remove($id) {
        $result = $this->news->read_news($id);
        @unlink('./assets/news_uploads/' . $result->filename);
        $this->news->remove_news($id);
        redirect('news', 'refresh');
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
