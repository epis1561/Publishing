<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> helper(array('download', 'url', 'date', 'form', 'alert', 'file', 'util'));
		$this -> load -> model('data_model');
		$this -> load -> library(array('session', 'pagination'));	 	
	}
	
	function _remap($method) {
		if (!$this -> session -> userdata('mb_level')) {
			alert('로그인 후 접속 부탁드립니다.', '/login');
			exit;
		}		
		$this -> load -> view('admin/header');
		if (method_exists($this, $method)) $this -> {"{$method}"}();
		$this -> load -> view('admin/footer');
	}
	
	function config() {
		$section = $this -> uri -> segment('2');
		$config['base_url'] = "/admin/".$section."/page/";
		$sql = "SELECT * FROM {$section} ORDER BY `idx` DESC";
		$config['total_rows'] = $this -> data_model -> totCnt($sql, 'DB');			
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="pagination" style="margin:0;">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '<<';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		return $config;
	}
	
	public function index() {
		$this -> load -> view('admin/index');
	}

	public function popup() {
		$idx = $this -> uri -> segment('3');
		if (isset($idx)) {
			$sql = "SELECT * FROM `popup` where idx = ".$idx;
			$data = $this -> data_model -> getInfo($sql, 'DB');
			$this -> load -> view('admin/popup/modify', $data);
		}
		else {
			$sql = "SELECT * FROM `popup` ORDER BY `is_open` DESC, `ordering` ASC, `idx` DESC";
			$data['list'] = $this -> data_model -> getList($sql, 'DB');
			$this -> load -> view('admin/popup/list', $data);
		}
	}	

	public function slide() {
		$idx = $this -> uri -> segment('3');
		if (isset($idx)) {
			$sql = "SELECT * FROM `slide` where idx = ".$idx;
			$data = $this -> data_model -> getInfo($sql, 'DB');
			$this -> load -> view('admin/slide/modify', $data);
		}
		else {
			$sql = "SELECT * FROM `slide` ORDER BY `ordering` ASC, `idx` DESC";
			$data['list'] = $this -> data_model -> getList($sql, 'DB');
			$this -> load -> view('admin/slide/list', $data);
		}
	}

	public function event() {
		$idx = $this -> uri -> segment('3');
		if (is_numeric($idx)) {
			$sql = "SELECT * FROM `event` where idx = ".$idx;
			$data = $this -> data_model -> getInfo($sql, 'DB');
			$this -> load -> view('admin/event/modify', $data);
		}
		else {
			$config = $this -> config();
			$this -> pagination -> initialize($config);
			$page = ($this -> uri -> segment($config['uri_segment'])) ? $this -> uri -> segment($config['uri_segment']) : 0;
			$sql = "SELECT * FROM `event` ORDER BY `idx` DESC LIMIT {$page}, {$config['per_page']}";
			$data['list'] = $this -> data_model -> getList($sql, 'DB');
			$data['start'] = $config['total_rows'] - $page;
			$this -> load -> view('admin/event/list', $data);
		}
	}	
	
	public function regist() {
		$section = $this -> uri -> segment('3');
		switch ($section) {
			case "popup": $this -> load -> view('admin/popup/regist'); break;
			case "slide": $this -> load -> view('admin/slide/regist'); break;
			case "event": $this -> load -> view('admin/event/regist'); break;
		}
	}	
}