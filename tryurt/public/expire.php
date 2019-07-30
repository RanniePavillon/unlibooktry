<head>
	<style>
		@font-face{
			font-family: Agency FB;
			src: url('<?= URL?>public/fonts/AGENCYB.ttf');
		}
		body{
			margin: 0;
			padding: 0;
			background: url('<?= URL?>public/images/backgroundinner.png') no-repeat center center fixed;
			background-size: cover;
			font: 30px Agency FB;
			color: #398f72;
		}
		.ContentHolder{
			position: absolute;
			width: 950px;
			left: 50%;
			margin-left: -500px;
			
			
			top: 50px;
			background-color: white;
			box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
			padding: 50px 0 100px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="ContentHolder">
	
		<img style="width: 300px" src="<?= URL?>public/images/usv_logo_long.png">
		<br/><br/><br/>
		
		<?php if(isset($type)): ?>

			<?php if($type == "trial"): ?>
				
				Your 7-days free trial has expired. 
				Please <a href="#" class="enterLicense"><b>renew your <br/>subscription</b></a> to continue.
				
			<?php elseif($type == "subscribed"): ?>
			
				Your account has been temporarily disabled. 
				Please <a href="#" class="enterLicense"><b>renew your <br/>subscription</b></a> to continue.
			
			<?php endif; ?>
			

		<?php endif; ?>
	</div>
	<div class="popBack"></div>
	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>	
	<script>
		var URL = '<?=URL?>';
		$(function(){
	
			$('.enterLicense').click(function(){
					
				var email = '<?=Session::getSession('main_email')?>';
				$.post(URL+'user/checkPortal',{'email':email})
					.done(function(result){
						
						if(result == 'client')
						{
							$.post(URL+'user/resellerModal',{'email':email,'login':true})
								.done(function(result){
									$('.popBack').html(result);
									$('.popBack').removeClass('hidden');
								});
							
						}
						else
						{
							// $('.form-submit-button').click();
						}
						
					});
			
				return false;
			});
		});
		
	</script>
</body>