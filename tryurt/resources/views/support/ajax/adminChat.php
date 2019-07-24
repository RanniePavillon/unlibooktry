<style>
.taxexpert{
	background-color:#8cbdde; 
	color:rgb(73, 74, 74);
}
.commentsform{
	white-space:pre-wrap !important;
}
.tr{
	text-align: right;
}
</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/list.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/supportheader.css"/>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>views/support/js/list.js"></script>


<?php
	
	$cl = strtolower(Session::getSession('class'));
	$fc = Session::getSession('function');
	
?>
<div class="listformcontainer">
	<div class="listformsupportlist">
		<div class="bodyask bodytaskChat">
			<?php
			$chat = DAOFactory3::getTblChatDAO()->queryByMedAccountId($_POST['chatTo']);
			if($chat){
				foreach($chat as $each){
					if($each->type == 'tax expert'){
			?>
						<div class="secondcomment chatCov" id="<?= $each->id ?>">
							<div class="tr">
								<span><img class="logoexpert logo_user"  src="<?= URL ?>public/images/expertimg.png"></span>
								<span class="commentsname comment_user"><?= 'You'//$each->type?><span class="datetimes"><?= date('F m, Y h:i a',strtotime($each->date))?></span></span>
							</div>
							<div class="commentsform user_commentForm"><?= $each->message?></div>
							
						</div>
			<?php
					}elseif($each->type == 'user'){
			?>
						<div class="chatCov" id="<?= $each->id ?>">
							<div>
								<span><img class="logoexpert log_taxExpert"  src="<?= URL ?>public/images/expertimg.png"></span>
								<span class="commentsname comment_taxExperts"><?= $each->type?>
									<span class="datetimes"><?= date('F m, Y h:i a',strtotime($each->date))?></span>
								</span>
							</div>
								<div class="commentsform user_commentForm"><?= $each->message?></div>
						</div>
			
			<?php
					}
				}
			}
			?>
		</div>
		<div class="sendcontainer">
			<textarea class="sendlist"></textarea>
			<input type="button" class="buttonsend" id="buttonsend">
			<br><div class="designer">Design by Aktus Global © 2015</div>
		</div>
			
			
	</div>
</div>

<div class="hidden popup"></div>

<script>
	URL = '<?= URL ?>';
	$(function(){
		$('#buttonsend').click(function(){
			/*  var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!

			var yyyy = today.getFullYear();
			if(dd<10){
				dd='0'+dd
			} 
			if(mm<10){
				mm='0'+mm
			} 
			var today = dd+'/'+mm+'/'+yyyy;; */
			value = $('.sendlist').val();
			chatTo = '<?= $_POST['chatTo'] ?>';
			if(value != 0){
				$.post(URL + 'support/sendAdminChat',{'chatTo':chatTo, 'message': $('.sendlist').val()})
					.done(function(returnData){
						// alert(returnData);
					})
				/* 
				content = $('.containerdiv:last').html();
				$('.containerdiv').last().before(content);
				$('.containerdiv:last .commentsform span').html(value);
				$('.sendlist').val('');
				window.scrollTo(0,document.body.scrollHeight);
				$(".bodyask").scrollTop($(".bodyask")[0].scrollHeight);
				
				$('.containerdiv:last .datetimes').html(today); */
			}
			
					$('.sendlist').val('');
				$('.sendlist').focus();
		});
		$('.sendlist').keyup(function(e){
			// alert(e.which);
			if(e.which == '13'){
				$('#buttonsend').click();
				$('.sendlist').val('');
			}
		});
		myVar=setInterval(function () {myTimer()}, 1000);

		
		function myTimer() {
			id = 0;
			chatTo = '<?= $_POST['chatTo'] ?>';
			// alert(chatTo);
			if(typeof $('.chatCov:last').attr('id') != 'undefined'){
				id = $('.chatCov:last').attr('id');
			}
			// alert(id);
			$.post(URL + 'support/getAdminConv',{'id':id, 'chatTo':chatTo})
				.done(function(returnData){
					if(id == 0){
						if(returnData == 0){
							$('.bodyask').html('Ask questions to TAX expert.');
							$(".chatBox").scrollTop($(".chatBox")[0].scrollHeight);
						} else {
							$('.bodyask').html(returnData);
							$(".bodyask").scrollTop($(".bodyask")[0].scrollHeight);
						}
					} else if(returnData != 0){
						$('.chatCov:last').after(returnData);
						$(".bodyask").scrollTop($(".bodyask")[0].scrollHeight);
						// alert('asdf');
					}
				});
		}
		
		$(".bodyask").scrollTop($(".bodyask")[0].scrollHeight);
	})
	
</script>