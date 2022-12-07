<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('css'); 
		$this->load->view('home_view');
		$this->load->view('js'); 
		
	}
	public function adding()
	{
		
		echo '<pre>'; 
		print_r($_POST);
		echo '<pre>'; 
		
	}
	
	public function login()
	{
		$this->load->view('css'); 
		$this->load->view('login_view');
		$this->load->view('js');
		
	}
	public function showlogin()
	{
		
		echo '<pre>'; 
		print_r($_POST);
		echo '<pre>'; 
		
	}

}
