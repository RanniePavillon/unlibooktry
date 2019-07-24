<style>
.taxexpert{
	/* background-color:#8cbdde;  */
	color:rgb(21, 21, 21) !important;
}
.commentsform{
	white-space:pre-wrap !important;
	  word-wrap: break-word !important;
}
.tr{
	text-align: right;
	margin-right: 16px;
}
.listformsupportlist{
	padding-bottom:0px !important;
}
.datetimes{
	font-size: 8px !important;
}
</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/list.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/supportheader.css"/>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>views/support/js/list.js"></script>


<?php
	
	/* $cl = strtolower(Session::getSession('class'));
	$fc = Session::getSession('function');
	
	
    $orgId = Session::getSession('medorgid');
	
	$orgInfo = DAOFactory::getTblOrganizationInfoDAO()->queryByOrgId($orgId);
	 
	$medAccount = DAOFactory2::getMedAccountsDAO()->queryByEmail($orgInfo[0]->emailAddress);
	
	$conversations = DAOFactory3::getTblChatConDAO()->queryByUserId($medAccount[0]->id);
	$chat = DAOFactory3::getTblChatDAO()->queryByChatConId($medAccount[0]->id); */
?>
<div class="listformcontainer">
	<div class="listformsupportlist">
		<div style="float:left;"><img class="logosupportimg"  src="<?= URL ?>public/images/servicelogonew.png"></div>
		<div class="linkformsupport hidden">
				 <a href="<?= URL ?>support/lists" style="padding: 5px 9px;" class="mainHeaderLink supportlink taxexpert">ASK TAX EXPERT </a>
		</div>
		<div style="clear:both;"></div>
		<div class="mainmenuform">
			<!--ASK TAX EXPERT-->
			<a href="<?= URL ?>Dashboard"><input type="button" class="mainmenu"></a>
			<div class="spandate" style="display: none;"><span class="colorful">Show message from <br> Yesterday &nbsp 7 Days &nbsp 30 Days &nbsp 3 Months &nbsp 6 Months &nbsp 1 Year</span></div>
		</div>
		<div class="bodyask bodytaskChat">
		</div>
		<div class="sendcontainer">
			<textarea class="sendlist"></textarea>
			<input type="button" class="buttonsend" id="buttonsend">
			<br><div class="designer">Designed by Aktus Global &#169; 2015</div>
		</div>
			
			
	</div>
</div>

<div class="hidden popup"></div>

<script>
	URL = '<?= URL ?>';
	$(function(){
		$('#buttonsend').click(function(){
			/* var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!

			var yyyy = today.getFullYear();
			if(dd<10){
				dd='0'+dd
			} 
			if(mm<10){
				mm='0'+mm
			} 
			var today = dd+'/'+mm+'/'+yyyy;;
			 */
			value = $('.sendlist').val();
			if(value != 0){
				$.post(URL + 'support/sendChat',{'message': $('.sendlist').val()})
					.done(function(returnData){
						if(returnData != 0){
							alert(returnData);
						}
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
		var myVar=setInterval(function () {myTimer()}, 1000);

		function myTimer() {
			id = 0;
			if(typeof $('.chatCov:last').attr('id') != 'undefined'){
				id = $('.chatCov:last').attr('id');
			}
			// alert(id);
			$.post(URL + 'support/getChat',{'id':id})
				.done(function(returnData){
					if(id == 0){
						if(returnData == 0){
							$('.bodyask').html('Ask questions to TAX expert.');
							// $(".chatBox").scrollTop($(".chatBox")[0].scrollHeight);
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