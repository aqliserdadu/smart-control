<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		
 
	}
 
	function index(){
		
		$this->load->view('login');
	}
 
	function aksiLogin(){
		$user = $this->input->post('username',true);
		$password = $this->input->post('password',true);
			$cP = $password."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password
								
		$cek= $this->db->where('username',$user)->get("user")->num_rows();
		
	if($cek > 0){
 
			$status = $this->db->where('username',$user)->get("user")->row();
			
			if($status->status == 1)  // status 1 aktif, 0 status off
				{	
			
					$data = $this->db->where("username",$user)->get("user")->row();
						if(password_verify($cP,$data->password))
						{
							$data_session = array(
									
									"iduser" => $data->iduser,
									"username" => $data->username,
									"gender" => $data->gender,
									"level" => $data->level,
									"status" => "login",
							
							);
						
							$this->session->set_userdata($data_session);
							
							redirect(site_url("admin/dashboard"));
								
						}
						else
						{
							echo $this->session->set_flashdata("massage","<div class=alert-danger align='center'> Password Yang Anda Masukan Salah!!! </div>");
						redirect(site_url('Login'));
							
						}
			
				}
			else if($status->stt == 0)
				{
					
					echo $this->session->set_flashdata("massage","<div class=alert-danger align='center'> Maaf Akun Anda Tidak Aktif, Hub Admin!!! </div>");
					redirect(site_url('Login'));
					
				}
				
			
			
 
		}else{
			
			echo $this->session->set_flashdata("massage","<div class=alert-danger align='center'> Username Yang Anda Masukan Salah!!! </div>");
			redirect(site_url('Login'));				
		}
	
	
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
	
	
}