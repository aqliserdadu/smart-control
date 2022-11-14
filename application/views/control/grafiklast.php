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
                     	
                      <div class="col-md-12 col-lg-12 stretch-card" style="margin-bottom:10px;">
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
                     <!--- 
                      <div class="col-lg-3 d-flex flex-column">
                          <div class="col-md-6 col-lg-12 grid-margin ">
                            <div class="card bg-white card-rounded">
                              <div class="card-body">
                                <h4 align="center">Your Sensor In Device</h4>  
                                <hr>
                                <div class="row">
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
                     --->
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
        ticks: {
          beginAtZero: true,
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
                    
                },
       
      }
    }
  }
});

function getTickLimit(){

        return window.innerWidth<600? 2:6
}

</script>