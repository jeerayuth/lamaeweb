<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('topic', $keyword);
		$this->db->from('news');
		return $this->db->count_all_results();
	}

	public function fetch_news($limit, $start, $keryword, $sort = null, $type=null)
	{
		$this->db->select('news.*,news_categories.name,users.display_name');
		$this->db->from('news');
		$this->db->join('news_categories','news_categories.id=news.news_categorie_id');
		$this->db->join('users','users.id=news.created_by');
		$this->db->like('topic', $keryword);
                $this->db->order_by($sort, $type);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

        
	public function entry_news($id,$filename = '')
	{
		$data = array(			
			'topic'        => $this->input->post('topic'),
                        'description'        => $this->input->post('description'),
			'filename'     => $filename,
			'modified_date'=> date('Y-m-d H:i:s'),
			'modified_by'  => $this->session->userdata('login_id'),
			'news_categorie_id' => $this->input->post('news_categorie_id'),		
		);
		if($id == NULL)
		{
			$data['created_by'] = $this->session->userdata('login_id');
			$data['created_date'] = date('Y-m-d H:i:s');
			$this->db->insert('news', $data);
		}
		else
		{
			$this->db->update('news', $data, array('id'=> $id));
		}
	}

	public function read_news($id)
	{
		$this->db->select('news.*,news_categories.name');
		$this->db->from('news');
		$this->db->join('news_categories','news_categories.id = news.news_categorie_id');
		$this->db->where('news.id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function remove_news($id)
	{
		$this->db->delete('news', array('id'=> $id));
	}

}
