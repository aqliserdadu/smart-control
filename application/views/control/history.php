<div class="content-wrapper">
    <div class="row">
            <div class="col-md-12" style="padding: 10px;">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">History</h4>
                 
                    <hr>
                    <div class="col-md-12">
                    <form action="<?php echo base_url('searchhistory');?>" method="POST" id="formCari">
                        <?php echo $this->session->flashdata('text');?>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Device</span>
                                        </div>
                                        <select require class="form-control" name="boardkey" id="boardkey">
                                            <option value="" disabled selected >Pilih</option>
                                            <?php foreach($boardkey as $dv){;?>
                                                <option value="<?php echo $dv->boardkey.'|'.$dv->tool;?>"><?php if(empty($dv->alias)){echo $dv->boardkey;}else{echo $dv->alias;};?></option>
                                            <?php };?>
                                       
                                        </select>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">From</span>
                                    </div>
                                    <input type="text" class="form-control date" value="<?php echo $dateP ;?>" id="tglP" name="tglP" required placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">TO</span>
                                    </div>
                                    <input type="text" class="form-control date" value="<?php echo $dateK ;?>" id="tglK" name="tglK" required placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">Sensor</span>
                                    </div>
                                    <select require class="form-control" name="sensor" id="sensor">
                                            <option value="" disabled selected >Pilih</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button type="submit" id="cari" class="input-group-text bg-primary text-white btn"><i class="mdi mdi-file-find"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </form>
                    </div>
                    <div id="dataSensor">
                        <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>
                                    NO
                                    </th>
                                    <th>
                                    Date
                                    </th>
                                    <th>
                                    Sensor
                                    </th>
                                    <th>
                                    Data
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php $no=1;?>
                                <?php  foreach($data as $t){;?>
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $t->date;?></td>
                                    <td><?php echo $t->sensor;?></td>
                                    <td><?php echo $t->data;?></td>
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


<script type="text/javascript">
$("#table").DataTable({
    dom: 'Bfrtip',
        buttons: [
            {
                text:'Export To csv',
				extend: 'csv',
				footer: true,
                title: 'Laporan Sensor',
                },
			{
				extend: 'print',
				title : '',
				messageTop : 'Laporan Sensor',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: 0,
            visible: true,
        } ]


});

$(".date").datepicker({
    dateFormat:'yy-mm-dd',
})

$("#boardkey").change(function(){
    var data = $(this).val();
    var pecah = data.split('|');
    var tool = pecah[1].split(',');
    var option = "<option value='all'>Semua</option>";
    for(i=0; i<tool.length; i++){
        option += "<option value='"+tool[i].toLowerCase()+"'>"+tool[i]+"</option>";
    }

    $("#sensor").html(option);

})


</script>