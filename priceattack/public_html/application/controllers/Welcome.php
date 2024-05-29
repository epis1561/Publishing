<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct() 
	{
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> model('data_model');
		$this -> load -> library('user_agent');
	}
	
	 public function index()
	 {
		 $this->load->view('welcome_message');
	 }
	 public function sub_all()
	 {
		 $this->load->view('sub_all');
	 }
	 public function sub_all2()
	 {
		 $this->load->view('sub_all2');
	 }
	 public function sub_all2_bk()
	 {
		 $this->load->view('sub_all2_bk');
	 }
	 public function home2()
	 {
		 $this->load->view('home2');
	 }
	public function Login()
	 {
		 $this->load->view('Login');
	 }
	
	public function price()
	 {
		 $this->load->view('price');
	 }
	public function find()
	 {
		 $this->load->view('find');
	 }
	public function find2()
	 {
		 $this->load->view('find2');
	 }

	 public function account()
	 {
		 $this->load->view('account');
	 }
	 public function terms()
	 {
		 $this->load->view('terms');
	 }
	 public function confirm()
	 {
		 $this->load->view('confirm');
	 }
	 public function payment()
	 {
		 $this->load->view('payment');
	 }
	 public function reser_check()
	 {
		 $this->load->view('reser_check');
	 }
	 public function mypage()
	 {
		 $this->load->view('mypage');
	 }
	 public function review()
	 {
		 $this->load->view('review');
	 }
	 public function like()
	 {
		 $this->load->view('like');
	 }

	} 	 


