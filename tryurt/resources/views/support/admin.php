<style>
.chatTo{
	border: 1px solid #777;
	float: left;
	margin: 20px;
	padding: 5px;
	font-family: calibri;
	cursor: pointer;
	background: #999;
}
.chatWith:HOVER{
	background: #eee;
}
.chatWith{
	padding: 5px;
	border: 1px solid #444;
	margin-top: 5px;
	background: #fff;
	
}
.dateChatWithHolder{
	font-size: 10px;
}

.commentsform{
	white-space:pre-wrap !important;
	  word-wrap: break-word !important;
}
</style>
<div>
	<div class="chatTo">
		<?php
			if($this->chatTo){
				foreach($this->chatTo as $each){
		?>
			<div id="<?= $each->medAccountId ?>" class="chatWith">
				<div>
					<b><?= $each->type == 'user' ? 'User:' : 'You:' ?></b>
				</div>
				<div>
					
					<p class="chatWidthMsg"><b><?= $each->type == 'user' ? 'User:' : 'You:' ?></b><?= substr($each->message, 0, 20); ?></p>
					<div class="dateChatWithHolder"><?= date('F m, Y - H:i:s',strtotime($each->date)) ?></div>
				</div>
			</div>
		<?php
				}
			}
		?>
	</div>
	<div class="conversation">
		
	</div>
</div>
<script>
	var myVar = false;
$(function(){
	
	$('.chatWith').click(function(){
		id = this.id;
		clearInterval(myVar);
		$.post(URL + 'support/getAdminChat',{'chatTo':id})
			.done(function(returnData){
				$('.conversation').html(returnData);
			});
	});
		myVar2=setInterval(function () {myTimer2()}, 5000);

		
		function myTimer2() {
			// alert('asdf');
			$.post(URL + 'support/chatUsers')
				.done(function(returnData){
					// alert(returnData);
					$('.chatTo').html(returnData);
					$('.chatWith').unbind();
					$('.chatWith').click(function(){
						id = this.id;
						clearInterval(myVar);
						$.post(URL + 'support/getAdminChat',{'chatTo':id})
							.done(function(returnData){
								$('.conversation').html(returnData);
							});
					});
				});
		}
})
</script>