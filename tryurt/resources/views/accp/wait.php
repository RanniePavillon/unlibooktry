<?php

$data = $this->liveWait;

?>



<script>
var checkSales = setInterval(function() {salesCheck()}, 1000);

function  salesCheck() {
	$.post('<?= URL;?>accp/salesCheck', {'id':salesChatId})
	.done(function(returnData) {
		// alert(returnData);
		if(returnData == 'ongoing') {
			clearInterval(checkSales);
			$.ajax({
				url: "<?= URL?>home/chatter",
				success: function(result){
					$("#chatSupport").css({"height":"675px", "width":"80%", "left":"35%"});
					$(".chatContent").css("height", "90.5%");
					$(".chatContent").html(result);
				}
			});
		}
	});
}

</script>