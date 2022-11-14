<div class="content-wrapper">
    <div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('massage');?>
			</div>
  	</div>
    <div class="row">
            <div class="col-md-12" style="padding: 10px;">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Icon</h4>
                    <hr>
                    <div id="dataSensor">
                        <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>
                                    NO
                                    </th>
                                    <th>
                                    Category
                                    </th>
                                    <th>
                                    Icon
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1;?>
                                <?php foreach($data as $t){;?>
                                    
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo ucwords(str_replace('-',' ',$t->category));?></td>
                                        <td><img src="<?php echo empty($t->img)? base_url('galery/category/default.jpg') : base_url('galery/category/').$t->img;?>" style="width:35px;height:auto"></td>
                                        <td><button class="btn btn-info" onclick="editIcon('<?php echo $t->id ;?>','<?php echo $t->img;?>')"><i class="mdi mdi-lead-pencil"></i> Icon</button></td>
                                    </tr>
                                <?php };?>
                             
                            </tbody>
                        </table>
                        </div>
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
					<h4 class="card-title">Edit Img</h4>
					<form method="POST"  action="<?php echo base_url('addIconCategory');?>" enctype="multipart/form-data">
                        <input id="id" name="id" type="hidden">
					<div class="form-group">
						<input type="file" class="form-control" name="img" id="img" placeholder="IMG" required>
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




<script type="text/javascript">
$("#table").DataTable({});

$(".date").datepicker({
    dateFormat:'yy-mm-dd',
})



function editIcon(id,img){

    $("#id").val(id);
    $("#modal").modal('show');




}

$(".close").click(function(e){
    e.preventDefault();
    $("#modal").modal('hide');
})

</script>