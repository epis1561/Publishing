<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminFunc extends CI_Controller {

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
		$this -> load -> library(array('session', 'upload'));	 	
	}
	
	function _remap($method) {
		if (!$this -> session -> userdata('mb_level')) {
			alert('로그인해 주세요', '/login');
			exit;
		}
		if (method_exists($this, $method)) $this -> {"{$method}"}();
	}
	
	public function popup() {
		$idx = $this -> uri -> segment('3');				
		$subject = $this -> input -> post('subject', TRUE);
		$content = $this -> input -> post('content', TRUE);
		$arr = array(			
			'subject' => $subject,
			'content' => $content			
		);
		if (isset($idx)) {			
			$this -> data_model -> update('popup', $arr, 'idx ='.$idx, 'DB');
			alert('수정했습니다.', '/admin/popup/'.$idx);
		}		
		else {			
			$this -> data_model -> insData('popup', $arr, 'DB');			
			alert('등록했습니다.', '/admin/popup');			
		}
	}

	public function slide() {
		$idx = $this -> uri -> segment('3');
		$subject = $this -> input -> post('subject', TRUE);
		$url = $this -> input -> post('url', TRUE);		
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/file/slide/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '512000';
        $config['max_width'] = '350';
        $config['max_height'] = '350';
        $config['encrypt_name'] = TRUE;
        $this -> upload -> initialize($config);
		if (isset($idx)) {
			if ($this -> upload -> do_upload('thumbnail')) {
				$sql = "SELECT thumbnail FROM `slide` where idx = ".$idx;
				$data = $this -> data_model -> getInfo($sql, 'DB');
				if (is_file($config['upload_path'].$data -> thumbnail)) unlink($config['upload_path'].$data -> thumbnail);
				$arr = array(
					'subject' => $subject,
					'thumbnail' => $this -> upload -> data('file_name')
				);
			}
			else {
				$arr = array(
					'subject' => $subject
				);
			}
			$this -> data_model -> update('slide', $arr, 'idx ='.$idx, 'DB');
			alert('수정했습니다.', '/admin/slide/'.$idx);
		}
		else {
			$this -> upload -> do_upload('thumbnail');
			$arr = array(
				'subject' => $subject,
				'thumbnail' => $this -> upload -> data('file_name')
			);
			$this -> data_model -> insData('slide', $arr, 'DB');			
			alert('등록했습니다.', '/admin/slide');
		}
	}

	public function event() {
		$idx = $this -> uri -> segment('3');
		$subject = $this -> input -> post('subject', TRUE);
		$content = $this -> input -> post('content', TRUE);
		
		$arr = array(
			'subject' => $subject,
			'content' => $content
		);
		if (isset($idx)) {		
			$this -> data_model -> update('event', $arr, 'idx ='.$idx, 'DB');		
			alert('수정했습니다.', '/admin/event/'.$idx);
		}
		else {
			$this -> data_model -> insData('event', $arr, 'DB');			
			alert('등록했습니다.', '/admin/event');
		}
	}	

	public function delete() {
		$section = $this -> uri -> segment('3');
		$idx = $this -> uri -> segment('4');
		if (is_numeric($idx)) {
			switch ($section) {
				case "popup": case "event":
					$this -> data_model -> delete($section, 'idx ='.$idx, 'DB');
					alert('삭제했습니다.', '/admin/'.$section);
				break;
				case "slide":
					$sql = "SELECT thumbnail FROM `slide` where `idx` = ".$idx;
					$article = $this -> data_model -> getInfo($sql, 'DB');
					if (is_file($_SERVER['DOCUMENT_ROOT'].'/file/slide/'.$article -> thumbnail)) unlink($_SERVER['DOCUMENT_ROOT'].'/file/slide/'.$article -> thumbnail);
					$this -> data_model -> delete('slide', 'idx ='.$idx, 'DB');
					alert('삭제했습니다.', '/admin/'.$section);
				break;
				default:
					alert('잘못 접근하셨습니다', '/admin/index');
			}
		}
		else {
			alert('잘못 접근하셨습니다', '/admin/index');
		}
	}

	public function allPopup() {
		$idx = $this -> input -> post('idx', TRUE);
		$ordering = $this -> input -> post('ordering', TRUE);
		$is_open = $this -> input -> post('is_open', TRUE);
		for ($i = 0; $i < count($idx); $i++) {			
			$arr = array(
				'ordering' => $ordering[$i],
				'is_open' => $is_open[$idx[$i]]
			);
			$this -> data_model -> update('popup', $arr, 'idx ='.$idx[$i], 'DB');
		}		
		alert('수정했습니다.', '/admin/popup');
	}
	
	public function allSlide() {
		$idx = $this -> input -> post('idx', TRUE);
		$ordering = $this -> input -> post('ordering', TRUE);
		$is_open = $this -> input -> post('is_open', TRUE);
		for ($i = 0; $i < count($idx); $i++) {			
			$arr = array(
				'ordering' => $ordering[$i],
				'is_open' => $is_open[$idx[$i]]
			);
			$this -> data_model -> update('slide', $arr, 'idx ='.$idx[$i], 'DB');
		}		
		alert('수정했습니다.', '/admin/slide');
	}
}