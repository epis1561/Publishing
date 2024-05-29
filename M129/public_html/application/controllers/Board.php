<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
	{
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> model('data_model');
		$this -> load -> library('user_agent');
	}

	function _remap($method) 
	{		
		$data['separator1'] = $this -> uri -> segment('1');
		$data['separator2'] = $this -> uri -> segment('2');
		if ($this -> agent -> is_mobile()) $data['is_mobile'] = true;
		else $data['is_mobile'] = false;
		//$data['url'] = "http://sinnanda.kr";
		//$data['title'] = "신난다 애견 글램핑";
		//$data['keyword'] = "신난다글램핑, 신난다애견글램핑, 애견글램핑, 반려견동반, 청도 신난다애견글램핑, 반려견, 반려동물, 반려견에게 잊지 못할 추억을 만들어 줄 수 있는 신난다애견글램핑, 신축글램핑, 청도, 청도여행";		
		$this -> load -> view('include/header', $data);
		if (method_exists($this, $method)) $this -> {"{$method}"}();
		$this -> load -> view('include/footer', $data);
	}

	public function event() {		
		$section = $this -> uri -> segment('3');
		if (is_numeric($section)) {
			$sql = "UPDATE `event` SET hit = hit + 1 WHERE idx = ".$section;
			$this -> data_model -> execute($sql, 'DB');
			$sql = "SELECT * FROM `event` where idx = ".$section;
			$data['article'] = $this -> data_model -> getInfo($sql, 'DB');
			$sql = "SELECT * FROM `event` WHERE idx > {$section} ORDER BY `idx` ASC LIMIT 1";
			$data['next'] = $this -> data_model -> getInfo($sql, 'DB');
			$sql = "SELECT * FROM `event` WHERE idx < {$section} ORDER BY `idx` DESC LIMIT 1";
			$data['prev'] = $this -> data_model -> getInfo($sql, 'DB');
			$data['page'] = $this -> uri -> segment('5');
			$this -> load -> view('eventView', $data);
		}
		else {
			$this -> load -> library(array('pagination', 'user_agent'));
			$config['base_url'] = "/page/event/page/";
			$sql = "SELECT * FROM `event` ORDER BY `idx` DESC";
			$config['total_rows'] = $this -> data_model -> totCnt($sql, 'DB');			
			$config['per_page'] = 5;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = '<ul class="pagination" style="margin:0;">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = '<<';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = '>>';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = '<';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '>';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$this -> pagination -> initialize($config);
			$data['page'] = ($this -> uri -> segment($config['uri_segment'])) ? $this -> uri -> segment($config['uri_segment']) : 0;
			$sql = "SELECT * FROM `event` ORDER BY `idx` DESC LIMIT {$data['page']}, {$config['per_page']}";
			$data['list'] = $this -> data_model -> getList($sql, 'DB');
			$data['start'] = $config['total_rows'] - $data['page'];
			if ($this -> agent -> is_mobile()) $data['is_mobile'] = true;
			else $data['is_mobile'] = false;
			$this -> load -> view('eventList', $data);
		}
	}
}
