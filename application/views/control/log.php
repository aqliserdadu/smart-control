
    <div class="content-wrapper">
		
		<div class="row">
			
			<div class="col-12 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Log Aktifasi</h4>
						<p class="card-description">
							log elements
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




<script type="text/javascript">


$(".table").DataTable();



</script>
