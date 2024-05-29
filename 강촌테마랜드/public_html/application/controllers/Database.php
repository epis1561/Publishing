<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> helper(array('download', 'url', 'date', 'form', 'alert', 'file', 'util'));
		$this -> load -> model('data_model');
		$this -> load -> library(array('session', 'upload'));	 	
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

	public function save_reserve() {
		$res_no = $this -> input -> post('res_no', TRUE);
		$name = $this -> input -> post('name', TRUE);
		$phone = $this -> input -> post('phone', TRUE);
		$goods = $this -> input -> post('goods', TRUE);
		$leisure_time = $this -> input -> post('leisure_time', TRUE);
		$headcount = $this -> input -> post('headcount', TRUE);
		$price = $this -> input -> post('price', TRUE);
		$arr = array(
			'res_no' => $res_no,
			'name' => "$name",
			'phone' => "$phone",
			'res_date' => date("Y-m-d H:i:s"),
			'goods' => $goods,
			'leisure_time' => "$leisure_time",
			'atv_time' => 0,
			'rac_time' => 0,
			'sur_time' => 0,
			'bbq_time' => 0,
			'headcount' => $headcount,
			'price' => $price,
			'status' => 1,
			'temp2'	 => 0
		);
		$this -> data_model -> insData('reserve', $arr, 'DB');	
		//alert('수정했습니다.', '/reserve');
		
	}
 
	

	public function check_cancle() {
		$res_no = $this -> input -> post('res_no', TRUE);

		$arr = array(			
			'status' => 2	
		);
		if (isset($res_no)) {			
			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
		}	
				
	}	

	public function check_reserve() {
		$res_no = $this -> input -> post('res_no', TRUE);
		$name = $this -> input -> post('name', TRUE);

		$sql = "SELECT * FROM `reserve` WHERE `res_no` = '$res_no' and `name` = '$name' ";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_plist = 'none';
		foreach ($data['slist'] as $row)
		{
			$str_plist = $row['res_no'];
		}
	
		$result['data'] = $str_plist;

		echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);		
		
	}	
	
	public function login() {
		 $user_id = $this -> input -> post('user_id', TRUE);
		 $user_pass = $this -> input -> post('user_pass', TRUE);

		 $user_id = "admin";
		 $user_pass = "77880go";


		$sql = "SELECT `user_id`, `name`  FROM `user` WHERE `user_id` = '$user_id' and CAST( AES_DECRYPT( UNHEX( `user_pass` ) , 'kkk123' ) AS CHAR( 127 ) CHARACTER SET utf8 ) =  '$user_pass' ";

		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_plist = 'none';
		foreach ($data['slist'] as $row)
		{
			$str_plist = $row['user_id'];
		}

		$result['data'] = $str_plist;

		echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);		
				
	}
	
	public function leisure_set() {
		//$idx = $this -> input -> post('idx', TRUE);
		$idx = $_REQUEST['idx'];
		$price = $_REQUEST['price'];
		$use_yn = $_REQUEST['use_yn'];
		$name = $_REQUEST['gname'];
		
		$category = $_REQUEST['category'];
		$order = $_REQUEST['order'];

		for ($i = 0; $i < count($idx); $i++) {		
			$arr = array(
				'price' => "$price[$i]",
				'use_yn' => "$use_yn[$i]",
				'name' => "$name[$i]",
				'category' => "$category[$i]",
				'order' => "$order[$i]"
			);
			$this -> data_model -> update('goods', $arr, 'seq ='.$idx[$i], 'DB');
		}	
		
		alert('수정했습니다.', '/adminSetting');
	}
	
	public function leisure_date_set() {
		//$idx = $this -> input -> post('idx', TRUE);
		$start_dt = $this -> input -> post('start_dt', TRUE);
		$end_dt = $this -> input -> post('end_dt', TRUE);
		$arr = array(
			'c1' => "$start_dt",
			'c2' => "$end_dt"
			
		);
		$this -> data_model -> update('config', $arr, '1 = 1', 'DB');
		
	}	

	public function leisure_refund() {
		//$idx = $this -> input -> post('idx', TRUE);
		$res_no = $_REQUEST['res_no'];

			$arr = array(
				'status' => 0
			);

			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
	}

}