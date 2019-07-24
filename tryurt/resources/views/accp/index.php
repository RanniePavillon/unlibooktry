<?php
	/*print_r($_SESSION['user']->lastName);
	exit;*/
?>
<script type="text/javascript" src="<?= URL; ?>views/accp/js/timer.js"></script>

<div style="display: none; width: 82%; border: 1px solid red; border-radius: 10px; padding: 1%; background: #FBF9B1; margin: 0 0 -8% 7.5%; font: 17px agency fb;" id="connAlert">
	<legend>Notice</legend>
	<i>Chat support is not available at the moment. You can send an email to umd@unlibooks.com about your issue or try again after a few minutes. Thank you, <?=ucfirst($_SESSION['user']->lastName);?></i>
	<!-- <p>Hi, <?=ucfirst($_SESSION['user']->lastName);?></p>
	<p>Thank you for contacting Customer Happiness Team!</p>	
	<p>Our office hours is from 8:00 AM to 5:00 PM, Mondays thru Fridays only. We will look into your concern and update you as soon as possible.</p>	
	<p>Regards,</p>
	<p>CH Team</p> -->
</div>

<div style="display: none; width: 82%; border: 1px solid red; border-radius: 10px; padding: 1%; background: #FBF9B1; margin: 0 0 -8% 7.5%; font: 17px agency fb;" id="conn2Alert">
	<!-- <legend>Notice</legend>
	<i>Chat support is not available at the moment. You can send an email to umd@unlibooks.com about your issue or try again after a few minutes. Thank you</i> -->
	<p>Hi, <?=ucfirst($_SESSION['user']->lastName);?></p>
	<p>Thank you for contacting Customer Happiness Team!</p>	
	<p>Our office hours is from 8:00 AM to 5:00 PM, Mondays thru Fridays only. We will look into your concern and update you as soon as possible.</p>	
	<p>Regards,</p>
	<p>CH Team</p>
</div>

<div id="accpIndexPage">
	<form action="javascript:void(0)" method="POST">
		<div style="text-align: center;">
			<input type="text" name="topic" class="topic" placeholder="What is your concern?" style="width: 78%; margin-top: 40px; margin-bottom: 10px; font-size: 15px;"><br/>
			<textarea name="description" class="description" rows="10" placeholder="Describe your issue..." style="margin-bottom: 10px; font-size: 15px; width: 77%;"></textarea>
			<center><span style="color: blue;"><i class="glyphicon glyphicon-info-sign"></i>Subject and Description cannot be empty...</span></center>
			<center><input type="button" id="accpIndexSubmit" class="btn btn-default btn-lg" value="Request Chat" style="font: 25px agency fb; margin-top: 10px; box-shadow: 0px 6px 15px #505050;"></center>
		</div>
	</form>
</div>

<div id="accpWaitPage" class="hidden" style="text-align: center;">
	<img src="<?= URL; ?>views/accp/img/load.gif" style="width: 40%; margin: 15% 0 10% 0;"><br/>
	<i style="font-size: 20px;">Please wait for a Chat Support Agent...</i>
	<div style="background: rgba(51, 51, 51, 0.3); width: 60%; height: 20%; margin: 7% 0 0 17.5%; position: absolute; z-index: 100; border-radius: 10px;">
		<div class="tc" style="background: rgba(255, 255, 255, 0.73); height: 89%; width: 95%; margin: -7.5% 0 0 2.5%; border-radius: 10px; font: 20px agency fb;">
			<input type="hidden" value="900" id="cd_seconds" />
			<h3 style="padding-top: 8px;">Estimated Time:</h3>
			<span id="cd_h">00</span>:
			<span id="cd_m">00</span>:
			<span id="cd_s">00</span>:
			<span id="cd_ms">00</span>
		</div>
	</div>
</div>

<script>

$(function() {

	if(accpChatIdSession!=0) {
		$("#accpIndexPage").addClass('hidden');
		$("#accpWaitPage").removeClass('hidden');
		
		checkSales = setInterval(function() {salesCheck(accpChatIdSession)}, 1000);
	}

		date = new Date();
		day = date.getDay();
		hours = date.getHours();
		mins = date.getMinutes();
		sec = date.getSeconds();
		/*now = dateformat(day, 'HH:mm:ss');
		time = [hours,mins,sec].join(':');
		time = hours + ":" + mins + ":" + sec;*/
		// alert(date);
		if(hours >= '17' || hours < '8' || day == 6||0){
			$("#conn2Alert").css('display', 'block');
			$("#accpIndexPage").addClass('hidden');
			// $("#accpWaitPage").addClass('hidden');
		}
	
	$("#accpIndexSubmit").click(function() {
		$("#connAlert").css('display', 'none');
		$("#accpIndexPage").addClass('hidden');
		$("#accpWaitPage").removeClass('hidden');

		topic = $('input[name="topic"]').val();
		description = $('textarea[name="description"]').val();
		$.post('<?= URL; ?>accp/accpWait', {'topic':topic, 'description':description})
		.done(function(result) {
			/*alert(result);
			return false;*/
			if(result != 'decline') {
				$("#connAlert").css('display', 'none');
				accpChatIdSession = result;
				checkSales = setInterval(function() {salesCheck(result)}, 1000);
			} else if(result == 'decline') {
				$("#connAlert").css('display', 'block');
				$("#accpWaitPage").addClass('hidden');
				// $("#accpIndexPage").removeClass('hidden');
				return false;
			}
		});
	});

	function salesCheck(result) {
		$.post('<?= URL; ?>accp/salesChat', {'salesChatId':result},
		function(result) {
			status = result['status'];
			salesChatId = result['id'];
			if(status == 'ongoing') {
				clearInterval(checkSales);
				$.post('<?= URL; ?>accp/accpChatPage', {'salesChatId':salesChatId, 'status':status})
				.done(function(result) {
					$("#accpLiveChatContentBody").html(result);
				});
			}
		},"json");
	};
});

$(function() {
var timer = 899;
function countdownCheck() {
	if(timer == 899) {
		$.APP.startTimer('cd');
		timer = 0;
	} else {
		timer++;
	}
}

var checkCountdown = setInterval(function() {countdownCheck()}, 1000);
});

</script>