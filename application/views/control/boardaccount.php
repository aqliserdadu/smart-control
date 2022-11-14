
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('boardkey');?>
			</div>
  		</div>
		<div class="row">
			
			<div class="col-12 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Board Account</h4>
						<p class="card-description">
							Board Account elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="add"><i class="mdi mdi-database-plus"> </i> Add Board Account</button></div>
								
											<div class="table-responsive" id="list">
												
												<table class="table table-striped table-bordered">
													<thead>
													<tr>
														<th> No </th>
														<th> BoardKey</th>
														<th> Name User</th>
														<th> Status</th>
														<th> <i class="mdi mdi-vector-circle"></i> </th>
													</tr>
													</thead>
													<tbody>
													<?php $no = 1;?>
													<?php $i = 0;?>
													<?php foreach($data as $tampil) {?>	
													<?php $i = $i+1;?>
													<tr>
														<td><?php echo $no++;?></td>
                                                        <td><?php echo $tampil->idboard;?></td>
														<td><?php echo $tampil->username;?></td>
														<td align="center" ><input type="checkbox" value="<?php echo $tampil->idboard;?>" class="check" <?php echo ($tampil->status =='On'? 'checked':'');?> data-toggle="toggle" data-size="sm"  data-style="ios"></i></td>
														<td align="center">
															<a href="<?php echo base_url('deleteboardaccount/').$tampil->idboard;?>" class="btn btn-danger" onclick="return confirm('Delete this data?')"><i class="mdi mdi-delete-forever"></i></a>
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
					<h4 class="card-title">Add Board Account</h4>
					<p class="card-description">
						form Add
					</p>
					<form method="POST"  action="<?php echo base_url('addboardaccount');?>">
					<div class="form-group">
						<label>Change Board</label>
						<select name="idboard"  class="form-control" id="idboard" style="background-color: white;color:black" required>
							<option value="" selected >Change</option>
							<?php foreach($board as $d){;?>
								<option value="<?php echo $d->idboard?>"><?php echo $d->idboard;?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>User Account</label>
						<select name="iduser"  class="form-control" id="iduser" style="background-color: white;color:black" required>
							<option value="" selected >Change</option>
							<?php foreach($user as $d){;?>
								<option value="<?php echo $d->iduser;?>"><?php echo $d->username;?></option>
							<?php } ?>
						</select>
					</div>
					
					<div class="form-group">
						<label>Status</label>
						<select name="status"  class="form-control" id="status" style="background-color: white;color:black" required>
							<option value="On" selected>On</option>
							<option value="Off">Off</option>
						</select>
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

<script type="text/javascript">


$(".table").DataTable();


//tambah akun
$('#add').click(function(){
	
	$('#modalTambah').modal('show');
	
			
	
})

$(".close").click(function(e){
	e.preventDefault();
	$('#modalTambah').modal('hide');
	$('#modalEdit').modal('hide');

})

$("#idboard").change(function(){

	var data = $(this).val();
	var pisah = data.split('|');
	var pecah = pisah[1].split(',');
	var option ="<option value='' disabled selected>Change Category</option>";
	for(i=0; i<pecah.length; i++){
		option = option + "<option value='"+pecah[i]+"'>"+pecah[i]+"</option>";
	}
	$("#category").html(option);


})

$(function() {
$(".check").change(function(){
	
	var check = $(this).prop('checked');
    var id = $(this).val();
	$.ajax({
			url:"<?php echo base_url('editstatusboardaccount');?>",
			data:{idboard:id,value: check},
			type:'POST',
			success : function(data){
					if(data.status == 'false'){
						
						alert('Failed');

						if(check == false){
							$(this).bootstrapToggle('on');
						}
						if(check == true){
							$(this).bootstrapToggle('off');
						}


					}
			}

	})

			
})
})


</script>
