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

	public function leisure()
	{
		$this->load->view('leisure');
	}

	public function leisure2()
	{
		$this->load->view('leisure2');
	}

	public function leisure3()
	{
		$this->load->view('leisure3');
	}

	public function leisure4()
	{
		$this->load->view('leisure4');
	}

	public function package2()
	{
		$this->load->view('package2');
	}

	public function package3()
	{
		$this->load->view('package3');
	}

	public function package4()
	{
		$this->load->view('package4');
	}

	public function reserve()
	{
		$this->load->view('reserve');
	}

	public function check()
	{
		$this->load->view('check');
	}
	public function check2()
	{
		$this->load->view('check2');
	}
	public function sms()
	{
		$this->load->view('payment/sms');
	}

	public function inistdpay_return()
	{
		$this->load->view('payment/INIstdpay_pc_return');
	}

	public function inistdpay_close()
	{
		$this->load->view('payment/close');
	}
	public function inimobile_mo_return()
	{
		$this->load->view('payment/INImobile_mo_return');
	}


	public function adminSetting()
	{
		$this->load->view('admin/admin_setting');
	}
	public function adminReserve()
	{
		$this->load->view('admin/admin_reserve');
	}
	public function adminLogin()
	{
		$this->load->view('admin/admin_login');
	}
	public function p_info()
	{
		$this->load->view('p_info');
	}
	public function test()
	{
		$this->load->view('test');
	}

	public function INIpayStdMakeSignature()
	{
		$this->load->view('payment/libs/INIpayStdMakeSignature');
	}
}
