<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bakery extends CI_Controller {

	function __construct()
    {
        parent::__construct(); 
    }
	
	public function index()
	{
		$data['nav'] = "Home";
		
		$this->load->view('includes/header', $data);
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	
	public function about_us()
	{
		$data['nav'] = "About Us";
		
		$this->load->view('includes/header', $data);
		$this->load->view('about_us');
		$this->load->view('includes/footer');
	}
	
	public function typography()
	{
		$data['nav'] = "Typography";
		
		$this->load->view('includes/header', $data);
		$this->load->view('typography');
		$this->load->view('includes/footer');
	}
	
	public function contacts()
	{
		$data['nav'] = "Contacts";
		
		$this->load->view('includes/header', $data);
		$this->load->view('contacts');
		$this->load->view('includes/footer');
	}
	
}