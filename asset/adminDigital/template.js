
$("#viewPenjualan").click(function(){

	
	
				$.ajax({
								
									url		: "<?php echo base_url('admin/Penjualan/viewPenjualan');?>",
									type	: "POST",
									dataType: "html",
									beforeSend: function()
											{
												$("#loading").html("<img src='<?php echo base_url('asset/images/loading.gif');?>'> <p style='text-align:center;margin-top: -130px;'>Harap Tunggu</p>");
												$(".preloader").show();
											},
									
									success	: function(data){	
												
												$("#content").html(data);
												
											},
									complete: function(data){
											$(".preloader").hide();
											
											},		
									error	: function(xhr, textStatus){
									
										var msg ='';
											
												if(xhr.status === 0){
														msg = 'Tidak ada jaringan, Periksa koneksi jaringan';
													}
											else if(xhr.status == 404){
														msg = ' Halaman web tidak ditemukan [404]';
													}
											else if(xhr.status == 505){
														msg = ' Internal Server Error [505]';
													}
											else if(text.status === 'timeout'){
														msg = 'Time Out Error, Ulangi Kembali';
													}
												else{
														msg = ' Uncaughr Error.\n' + xhr.responseText;
													}
											alert(msg);
											
										
										},

								
							
							
							
								})
						
	
})

