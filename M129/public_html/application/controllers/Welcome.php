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
		
		
		
		if($method != 'index')
		{	
			  $this -> load -> view('include/header', $data);
			  if (method_exists($this, $method)) $this -> {"{$method}"}(); 
			  $this -> load -> view('include/footer', $data);
			 
		}
		
		if($method == 'index')
		{
			 
			if (method_exists($this, $method)) $this -> {"{$method}"}(); 
			 
		}
	}

	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	public function tour()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/tour/m/01_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/tour/01_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('tour', $data);
	}	
	public function about()
	{
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/01_*.jpg";
			$data['is_mobile'] = true;
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/01_*.jpg";
			$data['is_mobile'] = false;
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('about', $data);
	}
	
	public function special1()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/01_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/01_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('special1', $data);
	}	
	public function special2()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/02_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/02_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('special2', $data);
	}
	
	public function special3()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/03_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/03_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('special3', $data);
	}	

	public function special4()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/04_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/04_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('special4', $data);
	}	

	public function room()
	{
		$roomNum = $this -> uri -> segment('2');
		$data['roomNum'] = sprintf('%02d', $roomNum);
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$data['roomNum']."/m/01_*.jpg";
			$data['is_mobile'] = true;
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$data['roomNum']."/01_*.jpg";
			$data['is_mobile'] = false;
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('room', $data);
	}

	public function reserv()
	{
		$this->load->view('reservation');
	}
	public function reserve()
	{
		$this->load->view('reserve');
	}

	public function map()
	{
		$this->load->view('map');
	}
	public function intro()
	{
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/m/01_*.jpg";
			$data['is_mobile'] = true;
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/01_*.jpg";
			$data['is_mobile'] = false;
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$file = $_SERVER['DOCUMENT_ROOT']."/images/main/img01_*.jpg";
		$files = glob($file);
    	if ($files !== false) $data['mImgCount'] = count($files);
		$this->load->view('intro', $data);
	}
}
