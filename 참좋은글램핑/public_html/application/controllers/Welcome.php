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
	 public function roommap()
	 {
		 $this->load->view('roommap');
	 }
	 public function map()
	 {
		 $this->load->view('map');
	 }
	 public function room01()
	 {
		 $this->load->view('room01');
	 }
	 public function room02()
	 {
		 $this->load->view('room02');
	 }
	 public function room03()
	 {
		 $this->load->view('room03');
	 }
	 public function room04()
	 {
		 $this->load->view('room04');
	 }
	 public function special01()
	 {
		 $this->load->view('special01');
	 }
	 public function special02()
	 {
		 $this->load->view('special02');
	 }
	 public function special03()
	 {
		 $this->load->view('special03');
	 }
	 public function special04()
	 {
		 $this->load->view('special04');
	 }
	 public function special05()
	 {
		 $this->load->view('special05');
	 }
	 public function special06()
	 {
		 $this->load->view('special06');
	 }
	 public function reserve()
	 {
		 $this->load->view('reserve');
	 }
	 public function reservation()
	 {
		 $this->load->view('reservation');
	 }
	 public function roompreview()
	 {
		 $this->load->view('roompreview');
	 }
	 public function home()
	 {
		 $this->load->view('home');
	 }
	 public function intro()
	 {
		 $this->load->view('intro');
	 }
	} 	 


