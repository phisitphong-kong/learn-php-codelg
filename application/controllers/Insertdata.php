<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdata extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
           $this->load->model('member_model');
    }
	
	public function index()
	{
		$data['query'] = $this->member_model->showdata6();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        // exit;
		$this->load->view('css');  
		$this->load->view('insert_view2'); 
		$this->load->view('member_view', $data); 
		$this->load->view('js'); 
		
	}
	public function edit($m_id)
	{
		$data['query'] = $this->member_model->read($m_id);
      
        // print_r($data);
        // exit();

		$this->load->view('css'); 
		$this->load->view('edit_view',$data); 
		 
		$this->load->view('js'); 
		
	}
	public function delete($m_id)
	{
		
       $this->member_model->deldata($m_id);
       redirect('','refesh');
		
	}
    public function adding()
	{
     
        $this->member_model->addmember();
		
	}
    public function adding2()
	{
     
        $this->member_model->addmember2();
        redirect('','refesh');
		
	}
    public function editdata()
	{
     
        // print_r($_POST);
        $this->member_model->editmember();
        redirect('','refesh');
		
	}

}
