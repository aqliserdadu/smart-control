
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
						<h4 class="card-title">Board Tool</h4>
						<p class="card-description">
							Board Tool elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="add"><i class="mdi mdi-database-plus"> </i> Add Board Tool</button></div>
								
											<div class="table-responsive" id="list">
												
												<table class="table table-striped table-bordered">
													<thead>
													<tr>
														<th> No </th>
														<th> Board</th>
														<th> Topic Pub</th>
														<th> Topic Sub</th>
														<th> Category</th>
														<th> Icon</th>
														<th> <i class="mdi mdi-vector-circle"></i> </th>
													</tr>
													</thead>
													<?php $no = 1;?>
													<tbody>
													<?php foreach($data as $tampil) {?>	
													<tr>
														<td><?php echo $no++;?></td>
                                                        <td><?php echo $tampil->idboard;?></td>
														<td><?php echo $tampil->topic_pub;?></td>
														<td><?php echo $tampil->topic_sub;?></td>
														<td><?php echo $tampil->category;?></td>
														<td><?php echo $tampil->nameicon;?></td>
														<td align="center">
															<a href="<?php echo base_url('deleteboardtool/').$tampil->id;?>" class="btn btn-danger btn btn-sm" onclick="return confirm('Delete this data?')"><i class="mdi mdi-delete-forever"></i></a>
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
					<h4 class="card-title">Add Tool</h4>
					<p class="card-description">
						form Add
					</p>
					<form method="POST"  action="<?php echo base_url('addboardtool');?>">
					<div class="form-group">
						<label>Change Board</label>
						<select name="idboard"  class="form-control" id="idboard" style="background-color: white;color:black" required>
							<option value="" selected >Change</option>
							<?php foreach($board as $d){;?>
								<option value="<?php echo $d->idboard."|".$d->tool;?>"><?php echo $d->idboard;?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Topic Pub</label>
						<input type="text" class="form-control" name="topic_pub" placeholder="Topic Pub" required>
					</div>
					<div class="form-group">
						<label>Topic Sub</label>
						<input type="text" class="form-control" name="topic_sub" placeholder="Topic Sub" required>
					</div>
					<div class="form-group">
						<label>Change Category</label>
						<select name="category"  class="form-control" id="category" style="background-color: white;color:black" required>
							<option value="" disabled selected>Change</option>
						</select>
					</div>
					<div class="form-group">
						<label>Change Icon</label>
						<select name="idicon"  class="form-control" style="background-color: white;color:black" required>
							<option value="" disabled selected>Change</option>
							<?php foreach($icon as $d){;?>
								<option value="<?php echo $d->idicon;?>"><?php echo $d->nameicon;?></option>
							<?php } ?>
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


function edit(idboard,macaddress,tool){
		
			$('.idboard').val(idboard);
			$("#macaddress").val(macaddress);
			$('#tool').val(tool);
			$('#modalEdit').modal('show');
			
}


</script>
