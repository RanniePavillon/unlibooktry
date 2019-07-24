<style>


</style>
<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/forms.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div>
	<div class="linereport"> 
			<div class="BSForm">
				<div class="BSText">Form 1701Q</div> 
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden" value="Export">
					<input type="button" class="FSPrint printPdf2 hidden" value="">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left;">
						<label class="txtMOnthYear">Period:</label>
						<select name="month" style="margin-top:10px;" class="yearname selectMonth" >
							<option value="march">First Quarter</option>
							<option value="june">Second Quarter</option>
							<option value="september">Third Quarter</option>
							<option value="december">Fourth Quarter</option>
						</select>
						<label class="txtMOnthYear">Year:</label>
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname selectYear" />
						<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports" />
					</div>
					<div style="clear:both;"></div>
					<div class="lineDivider">
					</div>
				</div>
			</div>
			<!--<div class="hmoDivider"></div>-->
		</div>
	
<!--	<div>
		<select name="month">
			<?php
				for($x = 1; $x <= 12; $x++){
			?>
				<option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
					<?= date("F", mktime(null, null, null, $x)); ?>
				</option>
			<?php
				}
			?>
		</select>
		<input type="number" name="year" value="<?= date('Y') ?>"/>
		<input type="button" value="GENERATE" class="generate"/>
	</div>-->
	<form class="hidden form1701HolderForm">
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform1701q addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		<div style="clear:both;"></div>
		
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form1701qHolder">
					
				</div>
			</div>
		</div>
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform1701q addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
	</form>
	<div class="formLoading hidden"></div>
</div>

<script>
	$(function(){
		// $('.formLoading').html(loading);
		$('.generate').click(function(){
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$('.formLoading').removeClass('hidden');
			$('.form1701HolderForm').addClass('hidden');
			$.post( URL + 'report/form1701q/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					$('.formLoading').addClass('hidden');
					$('.form1701qHolder').html(returnData);
					$('form').removeClass('hidden');
					
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
				})
		});
		
		
		$('form').submit(function(){
			$.post(URL + 'report/form1701q/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				});
			return false;
		});
		
		$('.postform1701q').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1701q/setReport?status=post',$('form').serialize())
					.done(function(returnData){
						if(returnData == 0){
							$('.generate').click();
						} else {
							alert(returnData);
						}
					});
			}
		});
		
		/* viewMode codes */
		$('.viewMode').click(function() {
		
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			window.open(URL + 'report/newtab_form1701q?month=' + month + '&year=' + year);
			
			return false;
		});
		
		$('.printPdf2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();

			window.open(URL + 'report/form1701q/printReport?month=' + month + '&year=' + year);
			return false;
		});
	
	
	
		<?php
		if (isset($_GET['month'])) {
			?>
			$('select[name="month"]').val('<?= $_GET['month']?>');
			$('input[name="year"]').val('<?= $_GET['year']?>');
			$('.generate').click();
		<?php
		}
		?>
		
	});
</script>