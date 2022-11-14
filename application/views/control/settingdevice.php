
    <div class="content-wrapper">
		
		<div class="row">
			
			<div class="col-12 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Settings</h4>
						<p class="card-description">
							Setting elements
						</p>
							
											<div class="table-responsive" id="list">
												<div style="margin:10px">
													<?php echo $this->session->flashdata('aktifasi');?>
												</div>	
												<table class="table table-striped table-bordered">
													<thead>
													<tr style="text-align:center">
														<th> No </th>
                                                        <th> Device </th>
                                                        <th> Other Name </th>
														<th>Dashboard</th>
													</tr>
													</thead>
                                                    <tbody>
													<?php $no = 1;?>
                                                    <?php $angka = 0;?>
													<?php foreach($data as $tampil) {?>	
                                                    <?php $angka = $angka + 1;?>
													<tr style="text-align:center">
														<td><?php echo $no++;?></td>
														<td><?php echo $tampil->boardkey;?></td>
                                                        <td onclick="tampil('<?php echo $angka;?>')"><div style="display:none" id="input<?php echo $angka;?>"><input type="text" value="<?php echo $tampil->alias;?>"  class="form-control" name="alias" id="alias<?php echo $angka;?>" onkeyup="alias('<?php echo $angka;?>','<?php echo $tampil->boardkey;?>')" ></div><label id="ket<?php echo $angka;?>"><?php if(empty($tampil->alias)){ echo 'Klik Untuk Merubah';}else{ echo $tampil->alias;};?></label></td>
                                                        <td>
															
																<input type="radio" name="dashboard" class="form-check-input form-check-primary" <?php if($tampil->dashboard == 1){echo 'checked';};?> onclick="editDash('<?php echo $tampil->boardkey;?>')">
															
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




<script type="text/javascript">


function tampil(angka){

    $("#ket"+angka).html('');
    $("#input"+angka).show();
    $("#alias"+angka).focus();


}
function alias(angka,boardkey){
    var boardkey = boardkey;
    var isi =  $("#alias"+angka).val();

    if(event.keyCode === 13){
        
        $.ajax({
                url :'<?php echo base_url('editAlias');?>',
                type: 'POST',
                data:{id:boardkey,alias:isi},
                dataType : 'JSON',
                success : function(data){

                        alert(data.ket);
                        if(data.status == true){
                            $("#input"+angka).hide();
                            $("#ket"+angka).html(isi);
                        }
                },
        })

	}

}

function editDash(dash){
		
		$.ajax({
                url :'<?php echo base_url('editDash');?>',
                type: 'POST',
                data:{id:dash},
                dataType : 'JSON',
                success : function(data){
                        
						alert(data.ket); 

                },
        })
	
	
}




</script>
