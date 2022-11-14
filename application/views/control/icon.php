
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
						<h4 class="card-title">Icon</h4>
						<p class="card-description">
							Icon elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="addicon"><i class="mdi mdi-database-plus"> </i> Add Icon</button></div>
								
											<div class="table-responsive" id="list">
												
												<table class="table table-striped table-bordered" id="akun">
													<thead>
													<tr style="text-align:center">
														<th> No </th>
                                                        <th> Name </th>
														<th> Before </th>
														<th> After </th>
														<th> Opsi </th>
													</tr>
													</thead>
													<?php $no = 1;?>

													<tbody>
													<?php foreach($data as $tampil) {?>	
													<tr style="text-align:center">
														<td><?php echo $no++;?></td>
                                                        <td> <?php echo $tampil->nameicon;?></td>
														<td><img src="<?php echo base_url('galery/icon/').$tampil->iconbefore;?>" class="img-circle" alt="User Image" style="width:35px;height:35px"></td>
														<td><img src="<?php echo base_url('galery/icon/').$tampil->iconafter;?>" class="img-circle" alt="User Image" style="width:35px;height:35px"></td>
														<td>
															<a href="#" onclick="edit('<?php echo $tampil->idicon;?>','<?php echo $tampil->nameicon;?>','<?php echo $tampil->iconbefore;?>','<?php echo $tampil->iconafter;?>')" class="btn btn-success btn-sm">Ed Data</a>
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
					<h4 class="card-title">Add Icon</h4>
					<p class="card-description">
						Form Add
					</p>
					<form method="POST"  action="<?php echo base_url('addIcon');?>" enctype="multipart/form-data">
					
					<div class="form-group">
						<label>Name Icon</label>
						<input type="text" class="form-control" name="nama" placeholder="Name icon" required>
					</div>
					<div class="form-group">
						<label>Icon Before</label>
						<input type="file" class="form-control" name="imgbefore" placeholder="IMG" required>
					</div>
					<div class="form-group">
						<label>Icon After</label>
						<input type="file" class="form-control" name="imgafter" placeholder="IMG" required>
					</div>
					<hr>
					<p> Note : </p>
					<p> Type : gif|jpg|png,  Max Size : 500 Kb, Max Width : 1280,  Max Hight : 700</p>
					
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
					<h4 class="card-title">Edit Icon</h4>
					<p class="card-description">
						Form Edit
					</p>
					<form method="POST"  id="editSensor" action="<?php echo base_url('updateIcon');?>"  enctype="multipart/form-data">
						<input type="hidden" class="form-control" name="id" id="id" required>
						
					<div class="form-group">
						<label>Name Sensor</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Name Sensor" required>
					</div>
					<div class="form-group">
						<label>Icon Before</label>
						<input type="file" class="form-control" name="iconbefore" placeholder="IMG">
						<input type="hidden" class="form-control" name="iconbeforelama" id="iconbeforelama" placeholder="IMG" required>
				
					</div>
					<div class="form-group">
						<label>Icon After</label>
						<input type="file" class="form-control" name="iconafter" placeholder="IMG">
						<input type="hidden" class="form-control" name="iconafterlama" id="iconafterlama" placeholder="IMG" required>
				
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
$('#addicon').click(function(){
	
	$('#modalTambah').modal('show');
	$('#labelst').html('Tambah Akun');
			
	
})

$(".close").click(function(e){
	e.preventDefault();
	$('#modalTambah').modal('hide');
	$('#modalEdit').modal('hide');
	$('#modalPass').modal('hide');

})

function edit(id,nama,iconbefore,iconafter){
			
			$('#id').val(id);
			$('#nama').val(nama);
			$('#iconbeforelama').val(iconbefore);
			$('#iconafterlama').val(iconafter);
			$('#modalEdit').modal('show');
			
}


</script>
