<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    
    function __construct(){
		parent::__construct();
			$this->load->library('template');
			
	}

	public function index()
	{

		if($_SERVER['HTTP_HOST'] == 'smartcontrol.tech'){

			$this->smartcontrol();
		}




		
	}

	
	public function smartcontrol(){

		redirect(base_url('login'));

	}

	




}