<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_con extends CI_Controller {
    

	

	public function index(){
		
		$this->load->view('headers/header');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');

	}
	public function schwimmkurse(){

		$this->load->view('headers/header_swimm');
		$this->load->view('navbar');
		$this->load->view('schwimmkurse');
		$this->load->view('footer');
	}

	public function kursorte(){
	
		$this->load->view('headers/header_kurs');
		$this->load->view('navbar');
		$this->load->view('kursorte');
		$this->load->view('footer');

	}

	public function about_us(){

		$this->load->view('headers/header_about');
		$this->load->view('navbar');
		$this->load->view('about_us');
		$this->load->view('footer');
	}
	public function contact(){

		$this->load->view('headers/header_contact');
		$this->load->view('navbar');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function aquababy(){

		$this->load->view('headers/header_aquababy');
		$this->load->view('navbar');
		$this->load->view('aquababy');
		$this->load->view('footer');
	}
}

/*public function view($page = 'home')
	{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}
	
			$data['title'] = ucfirst($page); // Capitalize the first letter
	
			$this->load->view('header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('footer', $data);
	}
*/