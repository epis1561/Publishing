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
	 public function spList()
	 {
		 $this->load->view('spList');
	 }
	 public function map()
	 {
		 $this->load->view('map');
	 }
	 public function roompre()
	 {
		 $this->load->view('roompre');
	 }
	 public function special()
	 {
		 $this->load->view('special');
	 }
	 public function tour()
	 {
		 $this->load->view('tour');
	 }
	 public function metatag()
	 {
		 $this->load->view('metatag');
	 }
	 public function reserve()
	 {
		 $this->load->view('reserve');
	 }
	} 	 


