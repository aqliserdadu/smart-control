
  <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" href="<?php echo base_url('device/').$boardkey;?>">Home</a>
                    </li>
                    <?php for($i=0; $i < count($listsensor['sensor']); $i++){;?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('grafik/').$boardkey.'/'.strtolower($listsensor['sensor'][$i]);?>"><?php echo ucwords($listsensor['sensor'][$i]);?></a>
                    </li>
                    <?php };?>
                   
                  </ul>
                  <div>
                    <!--
                      <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                      </div>
                    -->
                  </div>
                </div>
                <div class="tab-content tab-content-basic" id="showData">
                  <div class="tab-pane fade show active" id="overview grafik" role="tabpanel" aria-labelledby="overview"> 
                    
                    <div class="row">
                      <?php for($i=0; $i<count($listsensor['sensor']); $i++){;?>
                         <div class="col-md-4 col-lg-4" style="padding:5px">
                            <div class="card bg-white card-rounded"   style="height:250px;width:auto">
                             <div class="card-body" align="center">
                                <p align="right" style="margin-top:-20px" id="<?php echo "date".strtolower($listsensor['sensor'][$i]);?>"><?php echo date('d-M-Y',strtotime($listsensor['date'][$i]));?></p>
                                <a  style="color:black" href="<?php echo base_url('grafik/').$boardkey.'/'.strtolower($listsensor['sensor'][$i]);?>"><h3><?php echo $listsensor['sensor'][$i];?></h3></a>
                                <a href="<?php echo base_url('grafik/').$boardkey.'/'.strtolower($listsensor['sensor'][$i]);?>"><img src="<?php echo base_url('galery/sensor/').$listsensor['img'][$i];?>" class="img-circle" style="max-height:40%;max-width:40%;margin:10px"></a>
                                <h4 id="<?php echo "data".strtolower($listsensor['sensor'][$i]);?>" style="padding:10px"><?php echo $listsensor['data'][$i];?></h4>
                              </div> 
                            </div>
                          </div>
                      <?php };?>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





<script type="text/javascript">
setInterval(
function sensor() {
   $.ajax({
          url: '<?php echo base_url('sensorIndex');?>',
          dataType : "JSON",
          type : "POST",
          data :{boardkey:<?php echo $boardkey;?>},
          success: function(data) {
              
              $("#statusdevice").html(data.statusdevice);
              if(data.status == true){
                for(i=0; i<data.data.sensor.length; i++){
                    
                    $("#date"+data.data.sensor[i]).html(data.data.date[i]);
                    $("#data"+data.data.sensor[i]).html(data.data.data[i]);
                }
              }
          }
          
   });

},60000) //reload selama 1 menit;



</script>