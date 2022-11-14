<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('massage'); ?>
		</div>
	</div>
	<div class="row">

		<div class="col-12 stretch-card" style="padding:10px;">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Device Icon</h4>
					<p class="card-description">
						Icon elements
					</p>

					<div class="table-responsive" id="list">


						<table class="table table-striped table-bordered">
							<thead>
								<tr style="text-align:center">
									<th> No </th>
									<th> Idboard</th>
									<th> Name Icon </th>
									<th> Opsi </th>
								</tr>
							</thead>
							<?php $no = 1; ?>

							<tbody>
								<?php foreach ($data as $tampil) { ?>
									<tr style="text-align:center">
										<td><?php echo $no++; ?></td>
										<td> <?php echo $tampil->idboard; ?></td>
										<td> <?php echo $tampil->nameicon; ?></td>
										<td>
											<a href="#" onclick="edit('<?php echo $tampil->id; ?>')" class="btn btn-success btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
										</td>
									</tr>
								<?php  } ?>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>






<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="background-color:#87CEFA">
			<div class="card">
				<div class="card-body" style="background-color:lightgray;">
					<h4 class="card-title">Update Icon Device</h4>
					
					<form method="POST" action="<?php echo base_url('updatedeviceicon'); ?>" enctype="multipart/form-data">
						<input type="hidden" id="id" name="id">
						<div id="data" style="overflow: auto;height:230px">
								<table class="table table-striped table-bordered">
									<thead>
										<tr style="text-align:center">
											<th> Pilih </th>
											<th> Name</th>
											<th> Img Before </th>
											<th> Img After</th>
										</tr>
									</thead>
									<?php $no = 1; ?>

									<tbody>
										<?php foreach ($dataicon as $t) { ?>
											<tr style="text-align:center">
												<td><input type="radio" name="idicon" required value="<?php echo $t->idicon;?>"></td>
												<td> <?php echo $t->nameicon; ?></td>
												<td><img src="<?php echo base_url('galery/icon/').$t->iconbefore;?>" class="img-circle" alt="User Image" style="width:35px;height:35px"></td>
												<td><img src="<?php echo base_url('galery/icon/').$t->iconafter;?>" class="img-circle" alt="User Image" style="width:35px;height:35px"></td>
														
											</tr>
										<?php  } ?>

									</tbody>
								</table>
						</div>

						<br>
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

	$(".table").DataTable({
		"searching": false,
		"info": false,
		"bPaginate": false,
	});


	//tambah akun
	$('#addicon').click(function() {

		$('#modalTambah').modal('show');
		$('#labelst').html('Tambah Akun');


	})

	$(".close").click(function(e) {
		e.preventDefault();
		$('#modal').modal('hide');

	})

	function edit(id) {

		$('#id').val(id);
		$('#modal').modal('show');

	}
</script>