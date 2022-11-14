<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Control extends CI_Controller{
 
	function __construct(){
		parent::__construct();
			$this->load->library('template');
			$this->load->library('upload'); //load library upload
			$this->load->library('form_validation');
			$this->load->library('datatables');
		
            if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
			
 
 
	}

	
public function dashadmin(){
	
	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['boardkey'] = 0;
	$data['device'] = $this->db->where('iduser',$iduser)->get('boardkey')->result();
	$data['statusdevice'] ="";

	
	$this->template->controlData('control/dashadmin',$data);

}

public function akun(){
	
	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
	$data['contact'] = $this->db->get('contact')->row();
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data["data"] = $this->db->get("usercontrol")->result();
	$data['statusdevice'] = "";
	$data['device'] = $this->db->where('iduser',$iduser)->get('boardkey')->result();
	$this->template->controlData('control/akun',$data);

}
public function addAkun(){
		
	$cek = $this->db->where('email',$this->input->post('email',true))->get('usercontrol')->row();

   if(!empty($cek)){
							 echo $this->session->set_flashdata("akun","<div class='alert-danger alert-disissible' align='center'>Gagal!! Email Sudah Terdaftar!!! Coba Kembali!!!</div>");
				 redirect(base_url('akun'));
		   }
   else
		   {
		   
						   $password = $this->input->post('password',true);
						   $cP = $password."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password
						   
							$gender = $this->input->post('gender',true);
							$img = ($gender == 'male' ? 'userL.png':'userP.png');

						   $data = array(	
							   'username' =>$this->input->post('username',true),
							   'email' =>$this->input->post('email',true),
							   'gender' =>$gender,
							   'level' => $this->input->post('level',true),
							   'img' => $img,
							   'password' => password_hash($cP,PASSWORD_DEFAULT,array('cost' => 10)),
							   'status' => $this->input->post('status',true),
						   );
	   
							   
						   $cek = $this->db->insert("usercontrol",$data);
					   if(!empty($cek))
					   {
							 echo $this->session->set_flashdata("akun","<div class='alert-success alert-disissible' align='center'> Akun Berhasil Di Tambah </div>");
							 redirect( base_url('akun'));
				   }else
				   {
						echo $this->session->set_flashdata("akun","<div class='alert-danger alert-disissible' align='center'> Akun Gagal Di Tambah </div>");
						redirect( base_url('akun'));
				   }
						   
		   }	
	   
	   
   
}
public function updateakun(){
	
	if(isset($_POST['update'])){
		$iduser = $this->input->post('iduser',true);
		$email = $this->input->post('email',true);
		$data = $this->db->where('email',$email)->where("iduser !=",$iduser)->get("usercontrol")->row();
		if(empty($data)){

			$data = array(		
								
					'username' => $this->input->post('username',true),
					'email' => $this->input->post('email',true),
					'gender' => $this->input->post('gender',true),
					'level' => $this->input->post('level',true),
					'status' => $this->input->post('status',true),
										
			);
			
				$where = array('iduser' => $this->input->post('iduser',true));
				$cek = $this->db->update("usercontrol",$data,$where);

			

			if(!empty($cek)){
				echo $this->session->set_flashdata("akun","<div class='alert-success alert-disissible' align='center'> Update Berhasil </div>");
					redirect( base_url('akun'));
			}
			else{
					echo $this->session->set_flashdata("akun","<div class='alert-danger alert-disissible' align='center'> Gagal Update Data </div>");
					redirect( base_url('akun'));
			}
		}else{
					echo $this->session->set_flashdata("akun","<div class='alert-danger alert-disissible' align='center'> Gagal Email sudah terdaftar!! </div>");
					redirect( base_url('akun'));
		}
	}
	else
	{
	  redirect( base_url('akun'));
	}

	



}
public function passakun(){

	$iduser = $this->input->post('iduser',true);
	$data = $this->db->where("iduser",$iduser)->get("usercontrol")->row();
	if(!empty($data)){

		$newpassword = $this->input->post('password',true);
		$newcP = $newpassword."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password
		$data = array('password' => password_hash($newcP,PASSWORD_DEFAULT,array('cost' => 10)));
		$cek = $this->db->update('usercontrol',$data,array('iduser' => $iduser));
		if(!empty($cek)){
			echo $this->session->set_flashdata("akun","<div class='alert-success alert-disissible' align='center'> Update Berhasil </div>");
			redirect(base_url('akun'));
		}else{
			echo $this->session->set_flashdata("akun","<div class='alert-danger alert-disissible' align='center'> Gagal diperbaharui terjadi kesalahan!!! </div>");
			redirect(base_url('akun'));
		}
	}else{

		echo $this->session->set_flashdata("akun","<div class='alert-warning alert-disissible' align='center'> Password tidak sesuai! </div>");
		redirect(base_url('akun'));
	}





}


// icon
public function icon(){
	
	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
	$data['contact'] = $this->db->get('contact')->row();
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data["data"] = $this->db->get("mqtt_icon")->result();
	$data['statusdevice'] = "";
	$this->template->controlData('control/icon',$data);

}
public function addIcon(){

	$this->load->library('upload');
	$config['upload_path']          = './galery/icon';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 500;
	$config['max_width']            = 1280;
	$config['max_height']           = 720;
	$config['file_name']           = 'imgB_'.time();

	
	$this->upload->initialize($config);
	
	if ( ! $this->upload->do_upload('imgbefore'))
	{
			$error = $this->upload->display_errors();
			
			echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
			redirect(base_url('icon'));
		
	}

	$dataBefore = $this->upload->data();

	$this->load->library('upload');
	$config['upload_path']          = './galery/icon';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 500;
	$config['max_width']            = 1280;
	$config['max_height']           = 720;
	$config['file_name']           = 'imgF_'.time();

	
	$this->upload->initialize($config);
	
	if ( ! $this->upload->do_upload('imgafter'))
	{
			$error = $this->upload->display_errors();
			
			echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
			redirect(base_url('icon'));
		
	}

	$dataAfter = $this->upload->data();
	if(!empty($dataBefore) &&  !empty($dataAfter)){

		$data = array(
						'nameicon' => $this->input->post('nama',true),
						'iconbefore' => $dataBefore['file_name'],
						'iconafter' => $dataAfter['file_name'],
		);
		
		if($this->db->insert('mqtt_icon',$data))
		{
			echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Success! add icon </div>");
		}else
		{
			echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Failed! add icon </div>");
		}
		redirect(base_url('icon'));
	}else{

		redirect(base_url('icon'));
	}
		
 
   
}
public function updateIcon(){

	
	$this->load->library('upload');
	$config['upload_path']          = './galery/icon';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 500;
	$config['max_width']            = 1280;
	$config['max_height']           = 720;
	$config['file_name']           = 'imgB_'.time();

	
	$this->upload->initialize($config);
	
	if(!empty($_FILES['iconbefore']['name']))
	{
		if ( ! $this->upload->do_upload('iconbefore'))
		{
				$error = $this->upload->display_errors();
				
				echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
				redirect(base_url('icon'));
			
		}

		$dataBefore = $this->upload->data();
	}else{
		$dataBefore ='';
	}


	$this->load->library('upload');
	$config['upload_path']          = './galery/icon';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 500;
	$config['max_width']            = 1280;
	$config['max_height']           = 720;
	$config['file_name']           = 'imgF_'.time();

	
	$this->upload->initialize($config);
	if(!empty($_FILES['iconafter']['name']))
	{
		if ( ! $this->upload->do_upload('iconafter'))
		{
				$error = $this->upload->display_errors();
				
				echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
				redirect(base_url('icon'));
			
		}

		$dataAfter = $this->upload->data();
	}else{
		$dataAfter = '';
	}
	
	$where = array('idicon' => $this->input->post('id',true));
	$iconbeforelama = $this->input->post('iconbeforelama',true);
	$iconafterlama = $this->input->post('iconafterlama',true);
	
	if(empty($dataBefore) &&  empty($dataAfter)){
		echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Filed! Change Icon </div>");
		redirect(base_url('icon'));

	}else if(empty($dataBefore)){

		$data = array(
						'nameicon' => $this->input->post('nama',true),
						'iconafter' => $dataAfter['file_name'],
		);
		$this->db->update('mqtt_icon',$data,$where);
		$target = './galery/icon/'.$iconafterlama;
			if(file_exists($target)){
				unlink($target);
		}
		echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Success! Edit Icon </div>");
		redirect(base_url('icon'));
	}else if(empty($dataAfter)){

		$data = array(
			'nameicon' => $this->input->post('nama',true),
			'iconbefore' => $dataBefore['file_name'],
		);
		$this->db->update('mqtt_icon',$data,$where);
		$target = './galery/icon/'.$iconbeforelama;
			if(file_exists($target)){
				unlink($target);
		}
		echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Success! Edit Icon </div>");
		redirect(base_url('icon'));
	}else{

		redirect(base_url('icon'));
	}
	
	


}
//end icon

// profile
public function profile(){
    
    $iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$data['contact'] = $this->db->get('contact')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['statusdevice'] = "";
	$data['device'] = $this->db->where('iduser',$iduser)->get('boardkey')->result();
	$data['data'] = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
    $this->template->controlData('control/profile',$data);

}
public function simpanprofile(){
	if(isset($_POST['simpan'])){
		$this->load->library('upload');
		$config['upload_path']          = './galery/akun';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;
		$config['max_width']            = 1280;
		$config['max_height']           = 1280;
		$config['file_name']           = 'akun_'.time();

		
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('img'))
		{
				$error = $this->upload->display_errors();
				
				echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
				redirect(base_url('profile'));
			
		}
		else
		{
				$dataImg = $this->upload->data();
				$data = array(
								'username' => $this->input->post('username',true),
								'gender' => $this->input->post('gender',true),
								'img' => $dataImg['file_name'],
				);
				$where = array('email' => $this->session->userdata('email'));
				$db = $this->db->update('usercontrol',$data,$where);	
			
				if(!empty($db)){
					echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Berhasil Di Simpan </div>");
					redirect(base_url('profile'));
				}else{
					echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Gagal Saat Penyimpanan! </div>");
					redirect(base_url('profile'));
				}
		
		}
	}else{

		redirect(base_url('dasboard'));
	}	
	
	
}
public function changepassword(){

		$iduser = $this->session->userdata('iduser',true);
		$old = $this->input->post('old',true);
		$cP = $old."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password


		$data = $this->db->where("iduser",$iduser)->get("usercontrol")->row();
		if(password_verify($cP,$data->password)){

			$newpassword = $this->input->post('new',true);
			$newcP = $newpassword."@ql153Rd@dU";  //kode @ql153Rd@dU adalah tambahan pengaman password
			$data = array('password' => password_hash($newcP,PASSWORD_DEFAULT,array('cost' => 10)));
			$cek = $this->db->update('usercontrol',$data,array('iduser' => $iduser));
			if(!empty($cek)){
				echo $this->session->set_flashdata("changepassword","<div class='alert-success alert-disissible' align='center'> Update Berhasil </div>");
				redirect(base_url('profile'));
			}else{
				echo $this->session->set_flashdata("changepassword","<div class='alert-danger alert-disissible' align='center'> Gagal diperbaharui terjadi kesalahan!!! </div>");
				redirect(base_url('profile'));
			}
		}else{

			echo $this->session->set_flashdata("old","<div class='alert-warning alert-disissible' align='center'> Password tidak sesuai! </div>");
			redirect(base_url('profile'));
		}



	
}
//end profile

//boardkey
public function boardkey(){

	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$data['contact'] = $this->db->get('contact')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['data'] = $this->db->get('mqtt_board')->result();
	$data['statusdevice'] = "";

	$this->template->controlData('control/boardkey',$data);

	
}
public function addboardkey(){
	$cek = $this->db->where('idboard',$this->input->post('idboard',true))->get('mqtt_board')->row();
	
	   if(!empty($cek->board)){
					echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! BoardKey Sudah Terdaftar!!! Coba Kembali!!!</div>");
					redirect(base_url('boardkey'));
			   }
	   elseif(!empty($cek->macaddress)){
					echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! Mac Address Sudah Terdaftar!!! Coba Kembali!!!</div>");
					redirect(base_url('boardkey'));
  		}else
			   {
			   

							   $data = array(	
								   'idboard' =>$this->input->post('idboard',true),
								   'tool' =>$this->input->post('tool',true),
								   'macaddress' => $this->input->post('macaddress',true),
							   );
		   
								   
						   $cek = $this->db->insert('mqtt_board',$data);
						   if(!empty($cek))
							{
									echo $this->session->set_flashdata("boardkey","<div class='alert-success alert-disissible' align='center'> BoardKey Berhasil Di Tambah </div>");
									redirect( base_url('boardkey'));
							}
							else
							{
									echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> BoardKey Gagal Di Tambah </div>");
									redirect( base_url('boardkey'));
							}
							   
			   }	
		   
		   
	   
}
public function updateboardkey(){
	
	$id = $this->input->post('idboard',true);
	$cekboard = $this->db->where('idboard',$id)->get('mqtt_board')->num_rows();
	if($cekboard > 0){
			$cek = $this->db->where('macaddress',$this->input->post('macaddress',true))->where('idboard !=',$id)->get('mqtt_board')->row();
				
			if(!empty($cek->macaddress)){
							echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! Mac Address Sudah Terdaftar!!! Coba Kembali!!!</div>");
							redirect(base_url('boardkey'));
				}else{
					
						$where = array('idboard' =>$this->input->post('idboard',true)); 		   
						$data = array(	
										'tool' =>$this->input->post('tool',true),
										'macaddress' => $this->input->post('macaddress',true),
						);
				
										
								$cek = $this->db->update('mqtt_board',$data,$where);
								if(!empty($cek))
									{
											echo $this->session->set_flashdata("boardkey","<div class='alert-success alert-disissible' align='center'> BoardKey Berhasil Di Updaate </div>");
											redirect( base_url('boardkey'));
									}
									else
									{
											echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> BoardKey Gagal Di Update </div>");
											redirect( base_url('boardkey'));
									}
									
				}	
	}else{
		redirect( base_url('boardkey'));
	}		
	   
}
public function deleteboardkey($id){

	$where= $this->db->where('idboard',$id)->get('mqtt_board')->row();
	
	if(!empty($where)){
		
		$this->db->delete('mqtt_board',array('idboard' => $id));
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Success! Delete </div>");
		redirect(base_url('boardkey'));
	}else{
		redirect(base_url('boardkey'));
	}


}
//end boardkey

//board tool
public function boardTool(){

	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$data['contact'] = $this->db->get('contact')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['data'] = $this->db->select('*')->from('mqtt_icon')->join('mqtt_pub_sub','mqtt_pub_sub.idicon=mqtt_icon.idicon')->get()->result();
	$data['board'] =  $this->db->where('status !=','On')->get('mqtt_board')->result();
	$data['icon'] = $this->db->get('mqtt_icon')->result();
	$data['statusdevice'] = "";

	$this->template->controlData('control/boardtool',$data);

	
}
public function addboardtool(){
	$pecah = explode('|',$this->input->post('idboard',true));
	$idboard = $pecah[0];
	$tool = explode(',',$pecah[1]);
	$topic_pub = $this->input->post('topic_pub',true);
	$topic_sub = $this->input->post('topic_sub',true);
	$category = ucwords($this->input->post('category',true));
	$cekTopicPub = $this->db->where('idboard',$idboard)->where('topic_pub',$topic_pub)->get('mqtt_pub_sub')->num_rows();
	$cekTopicSub = $this->db->where('idboard',$idboard)->where('topic_sub',$topic_sub)->get('mqtt_pub_sub')->num_rows();
	$cekCategory = $this->db->where('idboard',$idboard)->where('category',$category)->get('mqtt_pub_sub')->num_rows();

	   if($cekTopicPub >= 1){
					echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! Topic Pub Sudah Terdaftar!!! Coba Kembali!!!</div>");
					redirect(base_url('boardtool'));
		}
	   elseif($cekTopicSub >= 1 ){
					echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! Topic Sub Sudah Terdaftar!!! Coba Kembali!!!</div>");
					redirect(base_url('boardtool'));
  		}elseif($cekCategory >= 1){
					echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'>Gagal!! Category Sudah Terdaftar!!! Coba Kembali!!!</div>");
					redirect(base_url('boardtool'));
		}else{
			   
					$cekTool = $this->db->where_in('category',$tool)->get('mqtt_pub_sub')->num_rows();
					$cekTool = empty($cekTool)?1:($cekTool + 1);
					if(count($tool) == $cekTool ){  //jika $cekTool lebih kecil dari tool maka di update mqtt_board status on

							$this->db->update('mqtt_board',array('status' => 'On'),array('idboard' => $idboard));

					}
							   $data = array(	
								   'idboard' =>$idboard,
								   'topic_pub' =>$topic_pub,
								   'topic_sub' =>$topic_sub,
								   'category' => $category,
								   'idicon' => $this->input->post('idicon',true),
							   );
		   
								   
						   $cek = $this->db->insert('mqtt_pub_sub',$data);
						   if(!empty($cek))
							{
									echo $this->session->set_flashdata("boardkey","<div class='alert-success alert-disissible' align='center'> Board Tool Berhasil Di Tambah </div>");
									redirect( base_url('boardtool'));
							}
							else
							{
									echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> Board Tool Gagal Di Tambah </div>");
									redirect( base_url('boardtool'));
							}
							   
			   }	
		   
		   
	   
}
public function deleteboardtool($id){

	$data= $this->db->where('id',$id)->get('mqtt_pub_sub')->row();
	
	if(!empty($data)){
		
		$this->db->update('mqtt_board',array('status' => ''),array('idboard' => $data->idboard));
		$this->db->delete('mqtt_pub_sub',array('id' => $id));
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Success! Delete </div>");
		redirect(base_url('boardtool'));
	}else{
		redirect(base_url('boardtool'));
	}


}
//end board tool


//board account
public function boardaccount(){

	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$data['contact'] = $this->db->get('contact')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['board'] =  $this->db->select('mqtt_pub_sub.idboard as idboard')->from('mqtt_pub_sub')->join('mqtt_user','mqtt_user.idboard=mqtt_pub_sub.idboard','left')->where('mqtt_user.idboard',null)->group_by('mqtt_pub_sub.idboard')->get()->result();
	$data['user'] = $this->db->get('usercontrol')->result();
	$data['data'] = $this->db->select('usercontrol.username,mqtt_user.idboard,mqtt_user.status')->from('mqtt_user')->join('usercontrol','usercontrol.iduser=mqtt_user.iduser')->get()->result();
	$data['statusdevice'] = "";

	$this->template->controlData('control/boardaccount',$data);
	//echo var_dump($data['board']);
	
}
public function addboardaccount(){
	$idboard = $this->input->post('idboard',true);
	$iduser = $this->input->post('iduser',true);
	$status = $this->input->post('status',true);
	
	$data = array(
					'idboard' => $idboard,
					'iduser' => $iduser,
					'status' => $status,
	);

	$data = $this->db->insert('mqtt_user',$data);
	if(!empty($data))
	{
			echo $this->session->set_flashdata("boardkey","<div class='alert-success alert-disissible' align='center'> Success </div>");
			redirect( base_url('boardaccount'));
	}
	else
	{
			echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> Failed </div>");
			redirect( base_url('boardkeyccount'));
	}
		   
		   
	   
}

public function editstatusboardaccount(){

	$idboard = $this->input->post('idboard',true);
	$value = $this->input->post('value',true);
	
	$data = $this->db->update('mqtt_user',array('status' => ($value == 'true')?'On':'Off'),array('idboard' => $idboard));
	if(!empty($data)){
		echo json_encode(array('status' => true));
	}else{
		echo json_encode(array('status' => false));
	}

}
public function deleteboardaccount($id){

	$data= $this->db->where('idboard',$id)->get('mqtt_user')->row();
	
	if(!empty($data)){
		
		$this->db->delete('mqtt_user',array('idboard' => $id));
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Success! Delete </div>");
		redirect(base_url('boardaccount'));
	}else{
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Failed! Delete </div>");
		redirect(base_url('boardaccount'));
	}


}



//------------------------member function ------------------//

public function dashboard(){
	
	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['boardkey'] = 0;
	$deviceGet = $this->db->where('iduser',$iduser)->group_by('category')->get('mqtt_user')->result();
	$dT = array();
	
	foreach ($deviceGet as $t) {

		$ambil = $this->db->where('iduser',$iduser)->where('category',$t->category)->get('mqtt_category_img')->row(); 
		
		$dT[] = array(
			'img' => empty($ambil->img)?'default.jpg':$ambil->img,
			'category' => empty($ambil->category)?'No-Category': $ambil->category,
		);
		
	}

	$data['imgCategory'] = $dT;

	//echo var_dump($data['img']);
	$this->template->controlData('control/member/index',$data);



}


public function dashboardCategory($device){
	
	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['boardkey'] = 0;
	$device = ($device == 'No-Category' ? '' : $device);
	$deviceGet = $this->db->select('mqtt_user.nameboard,mqtt_icon.iconbefore,mqtt_icon.iconafter,mqtt_pub_sub.topic_pub,mqtt_pub_sub.topic_sub,mqtt_pub_sub.idboard')
					->from('mqtt_pub_sub')
					->join('mqtt_icon','mqtt_icon.idicon=mqtt_pub_sub.idicon','left')
					->join('mqtt_user','mqtt_user.idboard=mqtt_pub_sub.idboard','left')
					->join('mqtt_category_img','mqtt_category_img.idboard=mqtt_pub_sub.idboard','left')
					->where('mqtt_user.iduser',$iduser)
					->where('mqtt_user.status','On')
					->like('mqtt_user.category',$device)
					->group_by('mqtt_pub_sub.idboard')
					->get()->result();

					
				

	
	$device = array();
	foreach($deviceGet as $d){
			$device[] = array(
						'idboard' => $d->idboard,
						'nameboard' => $d->nameboard,
						'topic_pub' => $d->topic_pub,
						'topic_sub' => $d->topic_sub,
						'iconbefore' => $d->iconbefore,
						'iconafter' => $d->iconafter,
						'status' => $this->getStatusHistory($d->idboard),
			);
	}
					

	$topic_sub ="";
	foreach($deviceGet as $t){
		$topic_sub .= (string)$t->topic_sub.',';
	}



	
	$data['device'] = $device;
	$data['topic_sub'] = $topic_sub;
	$data['statusdevice'] ="";

	//echo var_dump($device);
	
	$this->template->controlData('control/member/home',$data);

}

public function deviceForDash(){

	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['boardkey'] = 0;
	$deviceGet = $this->db->select('mqtt_user.nameboard,mqtt_icon.iconbefore,mqtt_icon.iconafter,mqtt_pub_sub.topic_pub,mqtt_pub_sub.topic_sub,mqtt_pub_sub.idboard')
					->from('mqtt_pub_sub')
					->join('mqtt_icon','mqtt_icon.idicon=mqtt_pub_sub.idicon')
					->join('mqtt_user','mqtt_user.idboard=mqtt_pub_sub.idboard')
					->where('mqtt_user.iduser',$iduser)
					->group_by('mqtt_pub_sub.idboard')
					->get()->result();
	
	$device = array();
	foreach($deviceGet as $d){
			$device[] = array(
						'idboard' => $d->idboard,
						'nameboard' => $d->nameboard,
						'topic_pub' => $d->topic_pub,
						'topic_sub' => $d->topic_sub,
						'iconbefore' => $d->iconbefore,
						'iconafter' => $d->iconafter,
						'status' => $this->getStatusHistory($d->idboard),
			);
	}
					


	$topic_sub ="";
	foreach($deviceGet as $t){
		$topic_sub .= (string)$t->topic_sub.',';
	}



	
	$data['device'] = $device;
	$data['topic_sub'] = $topic_sub;
	$data['statusdevice'] ="";

	//echo var_dump($device);
	
	$this->template->controlData('control/member/home',$data);



}








//device
public function device(){

	$iduser = $this->session->userdata('iduser',true);
    $ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$data['contact'] = $this->db->get('contact')->row();
	$expired = $ambil->endaktifasi;
	$data['expired'] = $expired;
    $data['email'] = $ambil->email;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['board'] =  $this->db->select('mqtt_pub_sub.idboard as idboard')->from('mqtt_pub_sub')->join('mqtt_user','mqtt_user.idboard=mqtt_pub_sub.idboard','left')->where('mqtt_user.idboard',null)->group_by('mqtt_pub_sub.idboard')->get()->result();
	$data['user'] = $this->db->get('usercontrol')->result();
	$data['data'] = $this->db->select('mqtt_user.nameboard,mqtt_user.category,mqtt_user.idboard,mqtt_user.status,mqtt_board.tool,mqtt_board.macaddress')->from('mqtt_user')->join('mqtt_board','mqtt_board.idboard=mqtt_user.idboard')->where('mqtt_user.iduser',$iduser)->get()->result();
	$data['statusdevice'] = "";

	$this->template->controlData('control/member/device',$data);
	//echo var_dump($data['board']);
	
}
public function newdevice(){
	
	$iduser = $this->session->userdata('iduser',true);
	$idboard = $this->input->post('newdevice',true);

	$cekboard = $this->db->where('idboard',$idboard)->get('mqtt_board')->num_rows();
	if(!empty($cekboard)){

		$mqtt_user = $this->db->where('idboard',$idboard)->get('mqtt_user')->num_rows();
		if(empty($mqtt_user)){ //jika tidak ada yg digunakan maka di tambahkan

					$data = array(
						'idboard' => $idboard,
						'iduser' => $iduser,
						'status' => 'On',
					);
					$data = $this->db->insert('mqtt_user',$data);
					if(!empty($data)){
						echo $this->session->set_flashdata("boardkey","<div class='alert-success alert-disissible' align='center'> Success Add New Device</div>");
						redirect( base_url('device'));
					}else{
						echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> Failed Add New Device, Try Again!!!</div>");
						redirect( base_url('device'));
					}

		}else{
			echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> Sorry Device Has Been Used!!!</div>");
			redirect( base_url('device'));
		}

	}else{
		
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center'> Sorry Device Unknow!!! Please Try Again </div>");
		redirect( base_url('device'));
	}

		   
		   
	   
}

public function deletedevice($id){

	$data= $this->db->where('idboard',$id)->get('mqtt_user')->row();
	
	if(!empty($data)){
		
		$this->db->delete('mqtt_user',array('idboard' => $id));
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Success! Delete </div>");
		redirect(base_url('device'));
	}else{
		echo $this->session->set_flashdata("boardkey","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Failed! Delete </div>");
		redirect(base_url('device'));
	}


}

public function categoryicon(){

	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;

	$data['data'] = $this->db->where('iduser',$iduser)->group_by('category')->get('mqtt_category_img')->result();
	$this->template->controlData('control/member/categoryicon',$data);



}

public function addIconCategory(){

	$this->load->library('upload');
	$config['upload_path']          = './galery/category';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 500;
	$config['max_width']            = 1280;
	$config['max_height']           = 720;
	$config['file_name']           = 'img_'.time();

	
	$this->upload->initialize($config);
	
	if ( ! $this->upload->do_upload('img'))
	{
			$error = $this->upload->display_errors();
			echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> $error </div>");
			redirect(base_url('category-icon'));

	}else{

		$imgLama = $this->db->where('id',$this->input->post('id',true))->get('mqtt_category_img')->row();
		$imgLama = $imgLama->img;

		$img = $this->upload->data();

		$data = array('img' => $img['file_name']);
		$where = array('id' => $this->input->post('id',true));

		if($this->db->update('mqtt_category_img',$data,$where))
		{
			//hapus img lama
			if(!empty($imgLama)){
				$target = "./galery/category/".$imgLama;
		        unlink($target);
			}


			echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Success! Add Icon </div>");
			redirect(base_url('category-icon'));
		}else
		{
			echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Failed! Add Icon </div>");
			redirect(base_url('category-icon'));

		}
		
	}	
 
   
}

public function deviceicon(){

	$iduser = $this->session->userdata('iduser',true);
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['data'] = $this->db->select('mqtt_pub_sub.id,mqtt_pub_sub.idboard,mqtt_icon.nameicon')->from('mqtt_pub_sub')->join('mqtt_icon','mqtt_icon.idicon=mqtt_pub_sub.idicon')->join('mqtt_user','mqtt_user.idboard=mqtt_pub_sub.idboard')->where('mqtt_user.iduser',$iduser)->get()->result();
	$data['dataicon'] = $this->db->get('mqtt_icon')->result();
	$this->template->controlData('control/member/deviceicon',$data);



}

public function updatedeviceicon(){
	
	$id = $this->input->post('id',true);
	$idicon =  $this->input->post('idicon',true);
	if(!empty($id) and !empty($idicon)){

		if($this->db->update('mqtt_pub_sub',array('idicon' => $idicon),array('id' => $id))){
			
				echo $this->session->set_flashdata("massage","<div class='alert-success alert-disissible' align='center' style='margin-bottom:5px'> Success! Update Icon </div>");
				redirect(base_url('device-icon'));

		}else{

				echo $this->session->set_flashdata("massage","<div class='alert-danger alert-disissible' align='center' style='margin-bottom:5px'> Failed! Update Icon </div>");
				redirect(base_url('device-icon'));

		}

	}else{
		redirect(base_url('device-icon'));
	}

}





public function nameboard(){

	$idboard = $this->input->post('idboard',true);
	$nameboard = $this->input->post('nameboard',true);
	$cek = $this->db->update('mqtt_user',array('nameboard' => $nameboard),array('idboard' => $idboard));

	if(!empty($cek)){

		echo json_encode(array('status' => true, 'ket' => 'Succes Change Name Board!!!'));

	}else{

		echo json_encode(array('status' => false, 'ket' => 'Failed Change Name Board!!!'));

	}


}

public function category(){

	$iduser = $this->session->userdata('iduser',true);
	$idboard = $this->input->post('idboard',true);
	$category = str_replace(array(" ",".",",","_"),"-",$this->input->post('category',true)) ;
	$cek = $this->db->update('mqtt_user',array('category' => $category),array('idboard' => $idboard));

	if(!empty($category)){
		
		$cek_cat = $this->db->where('idboard',$idboard)->get('mqtt_category_img')->num_rows();
		if($cek_cat > 0){
			
			$this->db->update('mqtt_category_img',array('category' => $category),array('idboard' => $idboard));
		
		}else{
			
			$this->db->insert('mqtt_category_img',array('iduser' => $iduser,'idboard' => $idboard, 'category' => $category));
		
		}
	}else{
		$this->db->delete('mqtt_category_img',array('idboard' => $idboard));
	}

	if(!empty($cek)){

		echo json_encode(array('status' => true, 'ket' => 'Succes Change Category!!!'));

	}else{

		echo json_encode(array('status' => false, 'ket' => 'Failed Change Category!!!'));

	}


}





public function history(){

	$iduser =  $this->session->userdata('iduser',true);
	$data['boardkey'] = $this->db->where('iduser',$iduser)->get('mqtt_user')->result();
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;
	$data['dateP'] = date('Y-m-d');
	$data['dateK'] =date('Y-m-d');
	$data['data'] = array();
	$data['idboard'] = '';
	$this->template->controlData('control/member/history',$data);

}

public function searchhistory(){

	$iduser =  $this->session->userdata('iduser',true);
	$data['boardkey'] = $this->db->where('iduser',$iduser)->get('mqtt_user')->result();
	$ambil = $this->db->where('iduser',$iduser)->get('usercontrol')->row();
	$expired = $ambil->endaktifasi;
	$data['contact'] = $this->db->get('contact')->row();
	$data['email'] = $ambil->email;
	$data['expired'] = $expired;
    $data['img'] = $ambil->img;
    $data['username'] = $ambil->username;

	

		$dateP = $this->input->post('dateP',true);
		$dateK = $this->input->post('dateK',true);
		$idboard = $this->input->post('idboard',true);
		$dataHistory = $this->db->query("SELECT * FROM mqtt_history WHERE idboard='".$idboard."' AND DATE(`date`) >='".$dateP."' AND DATE(`date`) <= '".$dateK."' Order BY `date` DESC")->result();
	
	
	$data['dateP'] = empty($dateP)?date('Y-m-d'):$dateP;
	$data['dateK'] = empty($dateK)?date('Y-m-d'):$dateK;
	$data['data'] = empty($dataHistory)?array():$dataHistory;
	$data['idboard'] = $idboard;
	$this->template->controlData('control/member/history',$data);
}



public function addhistory(){
	$iduser =  $this->session->userdata('iduser',true);
	$idboard = $this->input->post('idboard',true);
	$history = $this->input->post('history',true);
	$cek = $this->db->where('idboard',$idboard)->get('mqtt_user')->row();
	if(!empty($cek)){

		if($iduser == $cek->iduser){
			$data = array (
							'idboard' => $idboard,
							'data' => $history,
							'ket' => 'Member',
			);
		}else{
			$data = array (
				'idboard' => $idboard,
				'data' => $history,
				'ket' => 'Unknow',
			);
		}

		if($this->db->insert('mqtt_history',$data)){
			echo json_encode(array('status' => true, 'msg' => $history));
		}else{
			echo json_encode(array('status' => false, 'msg' => null));
		}

	}else{
		echo json_encode(array('status' => false, 'msg' => null));
	}

}

public function getStatusHistory($idboard){

	$data = $this->db->where('idboard',$idboard)->order_by('idhistory','desc')->limit(1)->get('mqtt_history')->row();
	$data = (empty($data->data) ? 'off' : $data->data);
	return $data;

}

//device





  
}