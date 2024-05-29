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
	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> model('data_model');
		$this -> load -> library('user_agent');
	}

	function _remap($method) {		
		$data['separator1'] = $this -> uri -> segment('1');
		$data['separator2'] = $this -> uri -> segment('2');
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
		}
		else {
			$data['is_mobile'] = false;
		}

		// if($method != 'check'){
		// 	if($method != 'check2'){
		// 		$this -> load -> view('/nav', $data);

		// 		$this -> load -> view('include/footer', $data);
		// 	}
		// }
		
		if (method_exists($this, $method)) $this -> {"{$method}"}();
		
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function header()
	{
		$this->load->view('header');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function room()
	{
		$this->load->view('room');
	}
	public function room2()
	{
		$this->load->view('room2');
	}
	public function program()
	{
		$this->load->view('program');
	}
	public function program2()
	{
		$this->load->view('program2');
	}
	public function facility()
	{
		$this->load->view('facility');
	} 
	public function facility2()
	{
		$this->load->view('facility2');
	} 
	public function p_info()
	{
		$this->load->view('p_info');
	} 
	public function reser01()
	{
		$this->load->view('reser01');
	} 
	public function kakao()
	{
		$this->load->view('kakao');
	} 
	public function BBQ()
	{
		$this->load->view('BBQ');
	} 
	public function BBQ2()
	{
		$this->load->view('BBQ2');
	} 
	public function reservation01()
	{
		$this->load->view('reservation01');
	} 
	public function reservation01_01()
	{
		$this->load->view('reservation01_01');
	} 
	public function reservation02()
	{
		$this->load->view('reservation02');
	} 
	public function check()
	{
		$this->load->view('check');
	} 
	public function check2()
	{
		$this->load->view('check2');
	} 
	public function check3()
	{
		$this->load->view('check3');
	} 
	public function home()
	{
		$this->load->view('home');
	} 
	public function special1()
	{
		$this->load->view('special1');
	} 
	public function special2()
	{
		$this->load->view('special2');
	} 
	public function special3()
	{
		$this->load->view('special3');
	} 
	public function special4()
	{
		$this->load->view('special4');
	} 
	public function special5()
	{
		$this->load->view('special5');
	} 
	public function special6()
	{
		$this->load->view('special6');
	} 
	public function special7()
	{
		$this->load->view('special7');
	} 
	public function special8()
	{
		$this->load->view('special8');
	} 
	} 	 


