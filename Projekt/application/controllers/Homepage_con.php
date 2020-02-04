<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_con extends CI_Controller {
    
	public function home(){
		

		$data['title'] = 'Homepage';
		
		/*view wird hier geladen*/
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');

	}
   
}
