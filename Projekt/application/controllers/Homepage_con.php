<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_con extends CI_Controller {
    
	public function index(){
		

		$data['title'] = 'Homepage';
		/*view wird hier geladen*/
		$this->load->view('header',$data);
		$this->load->view('navbar');
		
		$this->load->view('home');
		$this->load->view('footer');

	}
	public function kursorte(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('kursorte');
		$this->load->view('footer');
	}
	public function about_us(){
		$this->load->view('abaout_us');
	}
	public function schwimmkurse(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('schwimmkurse');
		$this->load->view('footer');
	}

	/*
	public function sites(){

	if(array_key_exists('page',$_GET) {
		$current_page = $_GET['page'];
	
	}
	switch ($current_page) {
	
		case 'homepage':
			include 'home.php';
			break;
		
		case 'Kursorte':
			include 'Kursorte.php';
			break;
	
		case 'about_us':
			include 'about_us.php';
			break;
	
		case 'contact':
			include 'contact.php';
			break;
	
		default:
			include 'home.php';
	}
	*/
}