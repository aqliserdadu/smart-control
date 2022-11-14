
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
						<h4 class="card-title">BoardKey</h4>
						<p class="card-description">
							boardkey elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="add"><i class="mdi mdi-database-plus"> </i> Add BoardKey</button></div>
								
											<div class="table-responsive" id="list">
												
												<table class="table table-striped table-bordered">
													<thead>
													<tr>
														<th> No </th>
														<th> Board</th>
														<th> Mac Address</th>
														<th> Tool</th>
														<th> <i class="mdi mdi-vector-circle"></i> </th>
													</tr>
													</thead>
													<?php $no = 1;?>
													<tbody>
													<?php foreach($data as $tampil) {?>	
													<tr>
														<td><?php echo $no++;?></td>
                                                        <td><?php echo $tampil->idboard;?></td>
														<td><?php echo $tampil->macaddress;?></td>
														<td><?php echo $tampil->tool;?></td>
														<td align="center">
															<a href="#" onclick="edit('<?php echo $tampil->idboard;?>','<?php echo $tampil->macaddress;?>','<?php echo $tampil->tool;?>')" class="btn btn-success btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
															<a href="<?php echo base_url('deleteboardkey/').$tampil->idboard;?>" class="btn btn-danger btn btn-sm" onclick="return confirm('Delete this data?')"><i class="mdi mdi-delete-forever"></i></a>
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
					<h4 class="card-title">Add Board</h4>
					<p class="card-description">
						form Add
					</p>
					<form method="POST"  action="<?php echo base_url('addboardkey');?>">
					<div class="form-group">
						<label>BoardKey</label>
						<input type="text" class="form-control" name="idboard" placeholder="Id Board" require>
					</div>
					<div class="form-group">
						<label>Mac Address</label>
						<input type="text" class="form-control" name="macaddress" placeholder="Mac Address" require>
					</div>
					<div class="form-group">
						<label>Tool</label>
						<input type="text" class="form-control" name="tool" placeholder="Tool" require>
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
					<h4 class="card-title">Edit Board</h4>
					<p class="card-description">
						form Edit
					</p>
					<form method="POST"  action="<?php echo base_url('updateboardkey');?>">
                    <div class="form-group">
						<label>BoardKey</label>
						<input type="text" class="form-control idboard" name="idboard" id="board" placeholder="Boardkey" require readonly>
					</div>
					<div class="form-group">
						<label>Tool</label>
						<input type="text" class="form-control" name="macaddress" id="macaddress" placeholder="Tool" require>
					</div>
					<div class="form-group">
						<label>Tool</label>
						<input type="text" class="form-control" name="tool" id="tool" placeholder="Tool" require>
					</div>
					
					<div align="right">
							<button type="submit" class="btn btn-info btn-rounded" name="update">Update</button>
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

function edit(idboard,macaddress,tool){
		
			$('.idboard').val(idboard);
			$("#macaddress").val(macaddress);
			$('#tool').val(tool);
			$('#modalEdit').modal('show');
			
}


</script>
