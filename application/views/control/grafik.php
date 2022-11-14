<style type="text/css">
	#imgSuhu{
		position: relative;
		z-index: 1;
		top: 0px;
	}
	#suhu{
		position: absolute;
		top: 50px;
    left: 90px;
		z-index: 2;
		color: black;
    font-size: 20px;
	}
	</style>
  <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" href="<?php echo base_url('device/').$boardkey;?>">Home</a>
                    </li>
                    <?php for($i=0; $i < count($listsensor['sensor']); $i++){;?>
                    <li class="nav-item">
                      <a class="nav-link <?php if($sensor == strtolower($listsensor['sensor'][$i])){echo "active";};?>" href="<?php echo base_url('grafik/').$boardkey.'/'.strtolower($listsensor['sensor'][$i]);?>"><?php echo ucwords($listsensor['sensor'][$i]);?></a>
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
                     	
                      <div class="col-md-9 col-lg-9 stretch-card" style="margin-bottom:10px;">
                        <div class="card">
                          <div class="card-body">
                          <!--- 
                            <div class="card-tools" align="right">
                                Real time
                                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                    <button type="button" class="btn btn-success btn-sm active" data-toggle="on">On</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="off">Off</button>
                                </div>
                                <hr>
                            </div>
                            --->
                              <h5 style="text-align:right;">Date : <small id="dateGrafik"><?php echo $date_grafik;?></small></h5>
                             
                              <input type="hidden" id="idsensor" value="<?php echo $idsensor;?>">
                              <div style="height:300px;width:auto">
                                <canvas id="mycanvas"></canvas>
                              </div>
                              <div class="row">
                                <div class="col-md-12 col-lg-12" style="text-align:center">
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor);?>" class="btn btn-xs" <?php if($btnactive==''){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>Live</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/15m');?>" class="btn btn-xs" <?php if($btnactive=='15m'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>15 m</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/30m');?>" class="btn btn-xs" <?php if($btnactive=='30m'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>30 m</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/1h');?>" class="btn btn-xs" <?php if($btnactive=='1h'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>1 h</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/6h');?>" class="btn btn-xs" <?php if($btnactive=='6h'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>6 h</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/12h');?>" class="btn btn-xs" <?php if($btnactive=='12h'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>12 h</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/1d');?>" class="btn btn-xs" <?php if($btnactive=='1d'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>1 d</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/3d');?>" class="btn btn-xs" <?php if($btnactive=='3d'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>3 d</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/1w');?>" class="btn btn-xs" <?php if($btnactive=='1w'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>1 w</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/2w');?>" class="btn btn-xs" <?php if($btnactive=='2w'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>2 w</a>
                                 <a href="<?php echo base_url('grafik/'.$boardkey.'/'.$sensor.'/1mo');?>" class="btn btn-xs" <?php if($btnactive=='1mo'){ echo "style='background:#9dff6b'"; }else{echo "style='background: #d9dbdf'";};?>>1 mo</a>
                                </div>
                              </div>
                          </div>    
                        </div>      
                      </div>
                      <div class="col-md-3 col-lg-3 d-flex flex-column">
                          <div class="col-md-12 col-lg-12 grid-margin ">
                            <div class="card bg-white card-rounded">
                              <div class="card-body">
                                <h4 align="center">Your Sensor In Device</h4>  
                                <hr>
                                <div class="table-responsive">
                                  <table class="table" style="font-weight:bold">
                                    <tr>
                                      <th>NO</th>
                                      <th>Sensor</th>
                                      <th>Data</th>
                                    </tr>
                                    <?php $no=1;?>
                                    <?php for($i=0; $i<count($listsensor['sensor']); $i++){;?>
                                    <tr  <?php if($sensor == strtolower($listsensor['sensor'][$i])){ echo "style='background-color:#00c0ef'";};?>>
                                      <td><?php echo $no++;?></td>
                                      <td id="sensor<?php echo $listsensor['sensor'][$i];?>"><?php echo $listsensor['sensor'][$i];?></td>
                                      <td id="data<?php echo $listsensor['sensor'][$i];?>"><?php echo $listsensor['data'][$i];?></td>
                                    </tr>
                                    <?php };?>
                                  </table>
                                </div>
                              </div> 
                            </div>
                          </div>
                      </div>
                     
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<script type="text/javascript">
// create initial empty chart

var ctx_live = document.getElementById("mycanvas");

var myChart = new Chart(ctx_live, {
  type: 'line',
  data: {
    labels: <?php echo $label;?>,
    datasets: [{
      data: <?php echo $data;?>,
      borderWidth:1,
      borderColor:'#00c0ef',
      label: '<?php echo $sensor;?>',
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio:false,
    plugins: {
            subtitle: {
                display: true,
                text: "Data Grafik <?php echo ucwords($sensor);?>",
                font :{
                        size:17,
                        weight: 'bold'
                      },
                padding : {
                    bottom:30,
                },
                   
              },
              legend :{
                display:false,
            },
    },
    scales: {
      y: {
        grid: {
          display: false,
        },
        min:10,
        max:200,
        ticks: {
          // forces step size to be 50 units
          stepSize: 10.50
        }
      },
      x: {
        grid: {
          display: false,
        },
        ticks: {
          
                    autoSkip: true,
                    maxRotation: 0,
                    minRotation: 0,
                    maxTicksLimit: getTickLimit(),
                    //fontColor: "black",
                }
      }
    }
  }
});


function getTickLimit(){
return window.innerWidth<600? 2:6
}


var time =1000;
setInterval(
function update() {
                      
      $.ajax({
          url: '<?php echo base_url('sensorGrafik');?>',
          type: "POST",
          data: {boardkey:'<?php echo $boardkey;?>',sensor:'<?php echo $sensor;?>'},
          dataType : "JSON",
          success: function(data) {
                // process your data to pull out what you plan to use to update the chart
                // e.g. new label and a new data point
                  // add new label and data point to chart's underlying data structures
                  
                  $("#statusdevice").html(data.statusdevice);
                  if(data.status == true){
                        //sensor grafik
                        if(data.date_now >= data.date_grafik){
                             
                            if(data.idsensor > $("#idsensor").val())
                            { 
                             
                              myChart.data.datasets[0].data.shift(); //pop() menghapus array pertama
                              myChart.data.labels.shift(); ////pop() menghapus array pertama
    
                                $("#dateGrafik").html(data.date_grafik);
                                myChart.data.labels.push(data.label);  
                                myChart.data.datasets[0].data.push(data.data);
                                //end sensor     
                                
                                for(i=0; i<data.listsensor.sensor.length; i++){
                                  $("#data"+data.listsensor.sensor[i]).html(data.listsensor.data[i])
                                }

                              $("#idsensor").val(data.idsensor);
                               myChart.update();
                            }

                        }
                  }       
                          // re-render the chart
             }
          
          
          });
  
        
},time);





</script>