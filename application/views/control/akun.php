
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('massage');?>
			</div>
  		</div>
		<div class="row">
			
			<div class="col-12 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Account</h4>
						<p class="card-description">
							account elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="addakun"><i class="mdi mdi-database-plus"> </i> Add Account</button></div>
								
											<div class="table-responsive" id="list">
												<div style="margin:10px">
													<?php echo $this->session->flashdata('akun');?>
												</div>	
												<table class="table table-striped table-bordered" id="akun">
													<thead>
													<tr>
														<th> No </th>
														<th> Img </th>
														<th> Username</th>
														<th> Email</th>
														<th> Gender</th>
														<th> Lavel</th>
														<th> Status</th>
														<th> Opsi </th>
													</tr>
													</thead>
													<?php $no = 1;?>
													<tbody>
													<?php foreach($data as $tampil) {?>	
													<tr>
														<td><?php echo $no++;?></td>
														<td><img src="<?php echo base_url('galery/akun/').$tampil->img;?>" class="img-circle" alt="User Image" style="width:35px;height:35px"></td>
														<td><?php echo ucwords($tampil->username);?></td>
														<td><?php echo $tampil->email;?></td>
														<td><?php echo ucwords($tampil->gender);?></td>
														<td><?php echo  ucfirst($tampil->level);?></td>
														<?php if($tampil->status == 1){$status='On';}else{$status='Off';}?>
														<td><?php echo $status;?></td>
														<td>
															<a href="#" onclick="edit('<?php echo $tampil->iduser;?>','<?php echo $tampil->username;?>','<?php echo $tampil->email;?>','<?php echo $tampil->gender;?>','<?php echo $tampil->level;?>','<?php echo $tampil->status;?>')" class="btn btn-success btn-sm">Ed Data</a>
															<a href="#" onclick="pass('<?php echo $tampil->iduser;?>','<?php echo $tampil->email;?>')" class="btn btn-info btn-sm">Ed Pass</a>
														</td>
													</tr>
													<?php  }?>
													</tbody>	
												</table>
						
											</div>	
					</div>
				</div>
			</div>
		</div>
		
	</div>






<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#87CEFA">
     		<div class="card">
				<div class="card-body" style="background-color:lightgray;">
					<h4 class="card-title">Add Account</h4>
					<p class="card-description">
						form Add
					</p>
					<form method="POST"  action="<?php echo base_url('addakun');?>">
					
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" require>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Email" require>
					</div>
					
					<div class="form-group">
						<label>Gender</label>
						<select class="form-control" name="gender" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="male" style="color:black">Male</option>
							<option velue="female" style="color:black">Female</option> 
						</select>
					</div>
					<div class="form-group">
						<label>Level</label>
						<select class="form-control" name="level" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="admin" style="color:black">Admin</option>
							<option velue="member" style="color:black">Member</option> 
						</select>
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control" name="status" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="1" style="color:black">On</option>
							<option velue="0" style="color:black">Off</option> 
						</select>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password" require>
					</div>
				
					
					<div align="right">
							<button type="submit" class="btn btn-info btn-rounded" name="save">Save</button>
							<button type="submit" class="btn btn-danger btn-rounded close">Close</button>
					</div>
						
					</form>
				</div>
			</div>
	</div>
  </div>
</div>	


<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#87CEFA">
     		<div class="card">
				<div class="card-body" style="background-color:lightgray;">
					<h4 class="card-title">Edit Account</h4>
					<p class="card-description">
						form Edit
					</p>
					<form method="POST"  id="editAkun" action="<?php echo base_url('updateakun');?>">
						<input type="hidden" class="form-control" name="iduser" id="iduser" require>
						
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" require>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email" require>
					</div>
					
					<div class="form-group">
						<label>Gender</label>
						<select class="form-control" id="gender" name="gender" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="male" style="color:black">Male</option>
							<option velue="female" style="color:black">Female</option> 
						</select>
					</div>
					<div class="form-group">
						<label>Level</label>
						<select class="form-control" id="level" name="level" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="admin" style="color:black">Admin</option>
							<option velue="member" style="color:black">Member</option> 
						</select>
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control" id="status" name="status" style="background-color:white;" require>
							<option value="" selected>Change</option>
							<option value="1" style="color:black">On</option>
							<option velue="0" style="color:black">Off</option> 
						</select>
					</div>
					
				
					<div align="right">
							<input type="submit" class="btn btn-info btn-rounded" name="update" value="update"/>
							<button type="submit" class="btn btn-danger btn-rounded close">Close</button>
					</div>
						
					</form>
				</div>
			</div>
	</div>
  </div>
</div>	


<div class="modal fade" id="modalPass" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#87CEFA">
     		<div class="card">
				<div class="card-body" style="background-color:lightgray;">
					<h4 class="card-title">Edit Password</h4>
					<p class="card-description">
						form password
					</p>
					<form method="POST"  id="editPassword" action="<?php echo base_url('passakun');?>">
						<input type="hidden" class="form-control" name="iduser" id="iduserPass" require>
						
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="email" id="emailPass" placeholder="email" readonly require>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" id="passwordPass" placeholder="New Password" require>
					</div>
					
				
					<div align="right">
							<input type="submit" class="btn btn-info btn-rounded" name="update" value="update"/>
							<button type="submit" class="btn btn-danger btn-rounded close">Close</button>
					</div>
						
					</form>
				</div>
			</div>
	</div>
  </div>
</div>	




<script type="text/javascript">


$("#akun").DataTable();


//tambah akun
$('#addakun').click(function(){
	
	$('#modalTambah').modal('show');
	$('#labelst').html('Tambah Akun');
			
	
})

$(".close").click(function(e){
	e.preventDefault();
	$('#modalTambah').modal('hide');
	$('#modalEdit').modal('hide');
	$('#modalPass').modal('hide');

})

function edit(iduser, username,email,gender,level,status){
			
			
			if(gender == 'male')
			{
				var gn = "<option value=''>Change</option><option value='male' selected>Male</option><option value='female'>Female</option>"; 
			}
			else
			{
				var gn = "<option value=''>Change</option><option value='male'>Male</option><option value='female'  selected>Female</option>"; 
			}
			
			
			if(status == 1)
			{
				var st = "<option value=''>Change</option><option value='1' selected>On</option><option value='0'>Off</option>"; 
			}
			else
			{
				var st = "<option value=''>Change</option><option value='1'>On</option><option value='0'selected>Off</option>"; 
			}

			if(level == 'admin')
			{
				var lv = "<option value=''>Change</option><option value='admin' selected>Admin</option><option value='member'>Member</option>"; 
			}
			else
			{
				var lv = "<option value=''>Change</option><option value='admin' >Admin</option><option value='member' selected>Member</option>"; 
			}
			
			$('#iduser').val(iduser);
			$('#username').val(username);
			$('#email').val(email);
			$('#gender').html(gn);
			$('#level').html(lv);
			$('#status').html(st);
			$('#modalEdit').modal('show');
			
}

function pass(iduser,email){
			
			
			$("#iduserPass").val(iduser);
			$("#emailPass").val(email);
			$('#modalPass').modal('show');
			
}


</script>
