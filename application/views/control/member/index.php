
<div class="content-wrapper">
	<div class="row">
		<?php foreach($imgCategory as $t){; ?>
			<div class="col-md-3 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<a href="<?php echo base_url('device-category/').$t["category"];?>"> 
						<h4 class="card-title" align="center"><?php echo str_replace('-',' ',$t["category"]) ?> </h4>
						<p class="card-description">
								<img src="<?php echo base_url('galery/category/') . $t["img"]; ?>" style="width:100%;cursor:pointer">
						</p>
						</a>
					</div>
				</div>
			</div>
		<?php }; ?>
	</div>

</div>

