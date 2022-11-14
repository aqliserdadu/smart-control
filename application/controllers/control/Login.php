<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		
 
	}
 
	function index(){
		
		$this->load->view('control/login');
	}
 
	function signin(){
		$user = $this->input->post('username',true);
		$password = $this->input->post('password',true);
			$cP = $password."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password
								
		$cek= $this->db->where('username',$user)->get('usercontrol')->num_rows();
		
	if($cek > 0){
 
			$status = $this->db->where('username',$user)->get('usercontrol')->row();
			
			if($status->status == 1)  // status 1 aktif, 0 status off
				{	
			
					$data = $this->db->where("username",$user)->get('usercontrol')->row();
						if(password_verify($cP,$data->password))
						{
							$data_session = array(
									
									"iduser" => $data->iduser,
									"username" => $data->username,
									"gender" => $data->gender,
									"level" => $data->level,
									"email" => $data->email,
									"img" => $data->img,
									"status" => "login",
							
							);
						
							$this->session->set_userdata($data_session);
							if($data->level == 'admin'){
								redirect(base_url("dashadmin"));
							}else{
								redirect(base_url("dashboard"));
							}
								
						}
						else
						{
							echo $this->session->set_flashdata("massage","<div align='center' style='background-color:#fff000;color:black'> Password Yang Anda Masukan Salah!!! </div>");
						redirect(base_url('login'));
							
						}
			
				}
			else if($status->stt == 0)
				{
					
					echo $this->session->set_flashdata("massage","<div style='background-color:#fff000;color:black' align='center'> Maaf Akun Anda Tidak Aktif, Hub Admin!!! </div>");
					redirect(base_url('login'));
					
				}
				
			
			
 
		}else{
			
			echo $this->session->set_flashdata("massage","<div style='background-color:#fff000;color:black' align='center'> Username Yang Anda Masukan Salah!!! </div>");
			redirect(base_url('login'));				
		}
	
	
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
	
}