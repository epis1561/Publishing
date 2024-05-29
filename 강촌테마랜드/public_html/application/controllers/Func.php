<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Func extends CI_Controller {

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
		$this -> load -> library('session');	 	
	}
		
	public function login() {
		$id = $this -> DB -> escape($this -> input -> post('adminid', TRUE));
		$pw = $this -> DB -> escape($this -> input -> post('adminpw', TRUE));
		$pw = hash("sha256", $pw);		
		$sql = "SELECT mb_password, mb_name, mb_level FROM member WHERE mb_userid = $id";
		$res = $this -> data_model -> getInfo($sql, 'DB');
		if ($res) {
			if($pw == $res -> mb_password) {				
				$sql = "UPDATE member SET mb_logintime = now(), mb_cnt = mb_cnt + 1 WHERE mb_userid = $id";
				$this -> data_model -> execute($sql, 'DB');
				$newdata = array(
					'mb_userid' => $id,
					'mb_name' => $res->mb_name,
					'mb_level'  => $res->mb_level,
					'logged_in' => TRUE
				);
				$this -> session -> set_userdata($newdata); 
				alert('로그인 되었습니다.', '/adminSetting');
			}
			else {
				alert('아이디와 비밀번호를 확인해주세요.', '/adminLogin');
			}
		}
		else {
			alert('아이디와 비밀번호를 확인해주세요.', '/adminLogin');
		}
	}
	
	function logout() {
		$this -> session -> sess_destroy();
		alert('로그아웃되었습니다.', '/adminLogin');
	}	
}