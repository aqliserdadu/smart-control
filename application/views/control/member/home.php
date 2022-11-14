<style>
	.online_on {
		content: '';
		background: green;
		width: 10px;
		height: 10px;
		border-radius: 50%;
		position: relative;

	}

	.online_off {
		content: '';
		background: red;
		width: 10px;
		height: 10px;
		border-radius: 50%;
		position: relative;

	}
</style>

<div class="content-wrapper">
	<div class="row">
		<?php $angka = 0; ?>
		<?php foreach ($device as $t) {; ?>
			<?php $angka = $angka + 1; ?>
			<div class="col-md-3 stretch-card" style="padding:10px;">
				<div class="card">
					<div class="card-body">
						<div id="T<?php echo str_replace('/', '', $t["topic_sub"]); ?>" align="center"><label class="online_off"></label></div>
						<input type="hidden" value='0' id="checkonoff">
						<h4 class="card-title" align="center"><?php echo empty($t["nameboard"]) ? 'No Name Device' : $t["nameboard"]; ?> </h4>
						<p class="card-description" align="center">
							<?php if ($t["status"] == 'off') {; ?>
								<img src="<?php echo base_url('galery/icon/') . $t["iconbefore"]; ?>" style="width:auto;max-height:150px;cursor:pointer" id="B<?php echo str_replace('/', '', $t["topic_sub"]); ?>" onclick="pubMqtt('<?php echo $t['topic_pub']; ?>','on','<?php echo $t['nameboard']; ?>')">
								<img src="<?php echo base_url('galery/icon/') . $t["iconafter"]; ?>" style="display:none;width:auto;max-height:150px;cursor:pointer" id="A<?php echo str_replace('/', '', $t["topic_sub"]); ?>" onclick="pubMqtt('<?php echo $t['topic_pub']; ?>','off','<?php echo $t['nameboard']; ?>')">
							<?php } else {; ?>
								<img src="<?php echo base_url('galery/icon/') . $t["iconbefore"]; ?>" style="display:none; width:auto;max-height:150px;cursor:pointer" id="B<?php echo str_replace('/', '', $t["topic_sub"]); ?>" onclick="pubMqtt('<?php echo $t['topic_pub']; ?>','on','<?php echo $t['nameboard']; ?>')">
								<img src="<?php echo base_url('galery/icon/') . $t["iconafter"]; ?>" style="width:auto;max-height:150px;cursor:pointer" id="A<?php echo str_replace('/', '', $t["topic_sub"]); ?>" onclick="pubMqtt('<?php echo $t['topic_pub']; ?>','off','<?php echo $t['nameboard']; ?>')">
							<?php }; ?>
						</p>
					</div>
				</div>
			</div>
		<?php }; ?>
	</div>

</div>





<script type="text/javascript">
	var connected_flag = 0
	var mqtt;
	var reconnectTimeout = 2000;
	var host = "mqtt-dashboard.com";
	var port = 8000;
	var sub_topic = "<?php echo $topic_sub; ?>";

	function onConnectionLost() { //ketika koneksi tidak tersambung
		console.log("connection lost");
		$("#mqttInfo").html("<h3 class='welcome-sub-text' style='color:red'>Mqtt Connection Lost</h3>");
		connected_flag = 0;
		setTimeout(MQTTconnect, reconnectTimeout);
	}

	function onFailure(message) { //sedang menyambungkan koneksi
		console.log("Failed");
		$("#mqttInfo").html("<h3 class='welcome-sub-text' style='color:red'>Mqtt Connection Failed- Retrying</h3>");
		setTimeout(MQTTconnect, reconnectTimeout);
	}

	function onMessageArrived(r_message) { //menerima pesan
		//out_msg="Message received "+r_message.payloadString+"<br>";
		//out_msg=out_msg+"Message received Topic "+r_message.destinationName;
		//console.log("Message received ", r_message.payloadString);
		//console.log(out_msg);
		//document.getElementById("messages").innerHTML =out_msg;
		var topic = r_message.destinationName;
		var msg = r_message.payloadString;

		messageMqtt(topic, msg);

	}

	function onConnected(recon, url) {
		console.log(" in onConnected " + reconn);
	}

	function onConnect() {
		// Once a connection has been made, make a subscription and send a message.
		$("#mqttInfo").html("<h3 class='welcome-sub-text' style='color:green'>Mqtt Server Connection</h3>");

		connected_flag = 1
		//$("#").html("<div class='alert alert-success'>Connected</div>");
		console.log("on Connect " + connected_flag);
		var pecah = sub_topic.split(',');
		for (i = 0; i < pecah.length; i++) {

			if (pecah[i] != "") {
				mqtt.subscribe(pecah[i]);
			}

		}

	}

	function MQTTconnect() {

		console.log("connecting to " + host + ":" + port);

		var x = Math.floor(Math.random() * 10000);
		var cname = "HrdyControl" + x;
		mqtt = new Paho.MQTT.Client(host, port, cname);
		//document.write("connecting to "+ host);
		var options = {
			timeout: 3,
			onSuccess: onConnect,
			onFailure: onFailure,

		};

		mqtt.onConnectionLost = onConnectionLost;
		mqtt.onMessageArrived = onMessageArrived;
		//mqtt.onConnected = onConnected;

		mqtt.connect(options);
		return false;


	}
	//kirim pesan
	function pubMqtt(topic, msg, device) {

		var checkonoff = $("#checkonoff").val();
		if (checkonoff == '0') {

			alert("Device " + device + " Offline");
		} else {

			$("#loading").html("<img src='<?php echo base_url('asset/images/loading.gif'); ?>'> <p style='text-align:center;margin-top: -130px;'>Harap Tunggu</p>");
			$(".preloader").show();

			if (connected_flag == 0) {

				$(".preloader").hide();

				out_msg = "Not Connected so can't send";
				console.log(out_msg);
				alert(out_msg);
				return false;
			}



			//console.log("msg = " + msg);
			//console.log("topic= "+topic);
			message = new Paho.MQTT.Message(msg);
			message.destinationName = topic;

			mqtt.send(message);

			return false;
		}
	}


	MQTTconnect();


	function messageMqtt(topic, msg, angka) {

		var topic = topic.replace('/', '');
		var pecahmsg = msg.split('|');
		var message = pecahmsg[0];
		var idboard = pecahmsg[1];

		if (idboard != null) {


			history(topic, idboard, message);

			$("#checkonoff").val('1');

		} else {

			$("#checkonoff").val('1');
	
			$("#T" + topic).html("<label class='online_on'></label>")
		}

	}

	function history(topic, idboard, msg) {

		$.ajax({
			url: "<?php echo base_url('addhistory'); ?>",
			type: "POST",
			data: {
				idboard: idboard,
				history: msg
			},
			dataType: "JSON",
			success: function(data) {

				if (data.status == true && data.msg == msg) {

					

					if (data.msg == 'on') {
						$("#B" + topic).hide();
						$("#A" + topic).show();
						$(".preloader").hide();
					}
					if (data.msg == "off") {

						$("#B" + topic).show();
						$("#A" + topic).hide();
						$(".preloader").hide();

					}

				}
			},

		})



	}

	function offline() {

		$(".preloader").hide();
		$("#checkonoff").val('0');

		var pecah = sub_topic.split(',');
		for (i = 0; i < pecah.length; i++) {

			filter = pecah[i].replace('/', '');
			if (filter != "") {

				$("#T" + filter).html("<label class='online_off'></label>")

			}

		}

	}

	setInterval(offline, 5000);
</script>