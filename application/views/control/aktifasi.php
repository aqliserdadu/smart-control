
    <div class="content-wrapper">
		
		<div class="row">
			
			<div class="col-12 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Aktifasi</h4>
						<p class="card-description">
							akfikasi elements
						</p>
							
											<div class="table-responsive" id="list">
												<div style="margin:10px">
													<?php echo $this->session->flashdata('aktifasi');?>
												</div>	
												<table class="table table-striped table-bordered">
													<thead>
													<tr>
														<th> No </th>
                                                        <th> User </th>
                                                        <th> Email </th>
														<th> Start</th>
														<th> End</th>
														<th> <i class="mdi mdi-vector-circle"></i> </th>
													</tr>
													</thead>
													<?php $no = 1;?>
													<?php foreach($data as $tampil) {?>	
													<tbody>
													<tr>
														<td><?php echo $no++;?></td>
														<td><?php echo $tampil->username;?></td>
                                                        <td><?php echo $tampil->email;?></td>
                                                        <td><?php echo $tampil->aktifasi;?></td>
														<td><?php echo $tampil->endaktifasi;?></td>
														<td>
															<a href="#" onclick="edit('<?php echo $tampil->iduser;?>','<?php echo $tampil->username;?>','<?php echo $tampil->aktifasi;?>','<?php echo $tampil->endaktifasi;?>')" class="btn btn-success btn-xs"><i class="mdi mdi-lead-pencil"></i></a>
														</td>
													</tr>
													</tbody>
													<?php  }?>	
												</table>
						
											</div>	
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
					<h4 class="card-title">Update Aktifasi</h4>
					<p class="card-description">
						form Edit
					</p>
					<form method="POST"  action="<?php echo base_url('updateaktifasi');?>">
                    <input type="hidden" class="form-control" name="iduser" id="iduser" placeholder="Boardkey" require>
					
                    <div class="form-group">
						<label>Username</label>
                        <input type="text" class="form-control"  id="username" readonly require>
					
					</div>

					
					<div class="form-group">
						<label>Start</label>
						<input type="text" class="form-control date" require name="start" id="start" placeholder="Start" require>
					</div>
					

					<div class="form-group">
						<label>End</label>
						<input type="text" class="form-control date" require name="end" id="end" placeholder="End" require>
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

$(".date").datepicker({
    dateFormat:'yy-mm-dd',
})


$(".close").click(function(e){
	e.preventDefault();
	$('#modalTambah').modal('hide');
	$('#modalEdit').modal('hide');

})

function edit(iduser,username,start,end){
			 $('#iduser').val(iduser);
			$('#username').val(username);
			$('#start').val(start);
			$('#end').html(end);
			$('#modalEdit').modal('show');
			
}


</script>
