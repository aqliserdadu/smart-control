
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
						<h4 class="card-title">Your Device</h4>
						<p class="card-description">
							Device elements
						</p>
						<div align="right" style="margin:10px"><button class="btn btn-success btn-rounded" id="add"><i class="mdi mdi-database-plus"> </i> Add Device</button></div>
								
											<div class="table-responsive" id="list">
												
												<table class="table table-striped table-bordered">
													<thead>
													<tr>
														<th> No </th>
														<th> Device</th>
														<th> Name Device </th>
														<th> Mac Address</th>
														<th> Tool </th>
														<th>Category</th>
														<th> Status</th>
														<th> <i class="mdi mdi-vector-circle"></i> </th>
													</tr>
													</thead>
													<tbody>
													<?php $no = 1;?>
													<?php $angka = 0;?>
													<?php foreach($data as $tampil) {?>	
													<?php $angka = $angka+1;?>
													<tr>
														<td><?php echo $no++;?></td>
                                                        <td><?php echo $tampil->idboard;?></td>
														<td align="center" onclick="tampilname('<?php echo $angka;?>')">
															<div style="display:none" id="tampilname<?php echo $angka;?>" class="allhide">
																<input type="text" value="<?php echo $tampil->nameboard;?>"  class="form-control mouseleave" maxlength="50" name="nameboard" id="nameboard<?php echo $angka;?>" onkeyup="nameboard('<?php echo $angka;?>','<?php echo $tampil->idboard;?>')" >
															</div>
															<label id="ketname<?php echo $angka;?>" class="allshow"><?php echo (empty($tampil->nameboard)?'Click to change':$tampil->nameboard);?></label>
													    </td>
                                                        <td><?php echo $tampil->macaddress;?></td>
														<td><?php echo $tampil->tool;?></td>
														<td align="center" onclick="tampilcategory('<?php echo $angka;?>')">
															<div style="display:none" id="tampilcategory<?php echo $angka;?>" class="allhide">
																<input type="text" value="<?php echo str_replace('-',' ',$tampil->category);?>"  class="form-control mouseleave" maxlength="50" name="category" id="category<?php echo $angka;?>" onkeyup="category('<?php echo $angka;?>','<?php echo $tampil->idboard;?>')" >
															</div>
															<label id="ketcategory<?php echo $angka;?>" class="allshow"><?php echo (empty($tampil->category)?'Click to change':str_replace('-',' ',$tampil->category));?></label>
													    </td>
														<td align="center" ><input type="checkbox" value="<?php echo $tampil->idboard;?>" class="check" <?php echo ($tampil->status =='On'? 'checked':'');?> data-toggle="toggle" data-size="sm"  data-style="ios"></i></td>
														<td align="center">
															<a href="<?php echo base_url('deletedevice/').$tampil->idboard;?>" class="btn btn-danger" onclick="return confirm('Delete this device?')"><i class="mdi mdi-delete-forever"></i></a>
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
					<h4 class="card-title">Add New Device</h4>
					
					<form method="POST"  action="<?php echo base_url('newdevice');?>">
					<div class="form-group">
						<input type="text" name="newdevice" class="form-control" required placeholder="Device Code">
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





function tampilname(angka){

	$("#ketname"+angka).hide();
	$("#tampilname"+angka).show();
	$("#nameboard"+angka).focus();


}
function nameboard(angka,idboard){
	var idboard = idboard;
	var isi =  $("#nameboard"+angka).val();

	if(event.keyCode === 13){
		
		$.ajax({
				url :'<?php echo base_url('nameboard');?>',
				type: 'POST',
				data:{idboard:idboard,nameboard:isi},
				dataType : 'JSON',
				success : function(data){

						alert(data.ket);
						if(data.status == true){
							$("#tampilname"+angka).hide();
							$("#ketname"+angka).html(isi);
						}
				},
		})

	}

}



function tampilcategory(angka){

	$("#ketcategory"+angka).hide();
	$("#tampilcategory"+angka).show();
	$("#category"+angka).focus();


}
function category(angka,idboard){
	var idboard = idboard;
	var isi =  $("#category"+angka).val();

	if(event.keyCode === 13){
		
		$.ajax({
				url :'<?php echo base_url('category');?>',
				type: 'POST',
				data:{idboard:idboard,category:isi},
				dataType : 'JSON',
				success : function(data){

						alert(data.ket);
						if(data.status == true){
							$("#tampilcategory"+angka).hide();
							$("#ketcategory"+angka).html(isi);
						}
				},
		})

	}

}

$(".mouseleave").mouseleave(function(){

	$(".allhide").hide();
	$(".allshow").show();

})



//edit status
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
