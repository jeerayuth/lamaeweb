<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_Categorie extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('News_Categorie_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('news_categorie/index');
		$config['total_rows'] = $this->News_Categorie_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->News_Categorie_model->fetch_categorie($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('news_categorie/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$this->load->view('template/backheader');
		$this->load->view('news_categorie/newdata');
		$this->load->view('template/backfooter');
	}

	public function postdata()
	{
		if($this->input->server('REQUEST_METHOD') == TRUE){
			$this->form_validation->set_rules('name', 'ชื่อหมวดหมู่', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			if($this->form_validation->run() == TRUE){
				$this->session->set_flashdata(
					array(
						'msginfo'=>'<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);
				$this->News_Categorie_model->entry_categorie($this->input->post('id'));
				redirect('news_categorie', 'refresh');
			}
			else
			{
				$data = array(
					'error_name' => form_error('name'),
					'name'       => set_value('name'),
					'description'=> set_value('description')
				);
				$this->session->set_flashdata($data);
			}
			if($this->input->post('id') == NULL){
				redirect('news_categorie/newdata');
			}
			else
			{
				redirect('news_categorie/edit/'.$this->input->post('id'));
			}
		}
	}
	public function edit($id)
	{
		$data['result'] = $this->News_Categorie_model->read_categorie($id);
		$this->load->view('template/backheader');
		$this->load->view('news_categorie/edit',$data);
		$this->load->view('template/backfooter');
	}

	public function confrm($id)
	{
		$data = array
		(
			'backlink'  => 'news_categorie',
			'deletelink'=> 'news_categorie/remove/' . $id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}

	public function remove($id)
	{
		$this->News_Categorie_model->remove_categorie($id);
		redirect('news_categorie','refresh');
	}


}
