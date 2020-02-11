<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_con extends CI_Controller {
    

	

	public function index(){
		
		$data['title'] = 'Homepage';
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