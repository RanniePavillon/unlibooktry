<style>

</style>
<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/forms.css"/>
<div>

		<div class="linereport"> 
			<div class="BSForm">
				<div class="BSText">Form 1601E</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden addsavebuttonreports" value="EXPORT">
					<input type="button" class="FSPrint printPdf2 hidden addsavebuttonreports" value="PRINT">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left">
						<label class="txtMOnthYear">Month: </label>
						<select name="month" style="margin-top:10px;" class="yearname selectMonth">
							<?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date('F', strtotime('2014-'.$x.'-01'))) ?>"
								<?= $x == date('m') ? ' selected ' : '' ?>>
								<?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
							<?php
								}
							?>
						</select>
						<label class="txtMOnthYear">Year:</label> 
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname selectYear"/>
						<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports"/>
					</div>
					
					<div style="clear:both;"></div>
					<div class="lineDivider">
					</div>
				</div>
			</div>
			<!--<div class="hmoDivider"></div>-->
		</div>

	<form class="hidden form1601eHolderForm">
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform1601e addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		<div style="clear:both;"></div>
		<!--<div class="zoomDiv">
			<input type="button" id="zoomOut" value="-">
			<input type="button" id="zoomIn" value="+">
		</div>-->
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form1601eHolder divClass" id="divelement">
					
				</div>
			</div>
		</div>
		
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform1601e addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
	</form>
	<div class="formLoading hidden"></div>
</div>

<script>
	$(function(){
		// $('.formLoading').html(loading);
		$('#zoomIn').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.7 }, 400);
		});
    
		$('#zoomOut').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.4 }, 400);
		});
		
		$('.generate').click(function(){
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$('.formLoading').removeClass('hidden');
			$('.form1601eHolderForm').addClass('hidden');
			$.post( URL + 'report/form1601e/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					$('.form1601eHolder').html(returnData);
					$('form').removeClass('hidden');
					$('.formLoading').addClass('hidden');
					$('.isNumeric').each(function(){
						$(this).val($.number($(this).val(), 2));
					});
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					
					
				})
		});
		
		$('form').submit(function(){
			$.post(URL + 'report/form1601e/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				});
			return false;
		});
		
		$('.postform1601e').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1601e/setReport?status=post',$('form').serialize())
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
			
			window.open(URL + 'report/newtab_form1601e?month=' + month + '&year=' + year);
			
			return false;
		});
		
		$('.printPdf2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();

			window.open(URL + 'report/form1601e/printReport?month=' + month + '&year=' + year);
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