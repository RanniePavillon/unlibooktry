<style>

</style>
<?php
    //$report = $this->getMOR_2307;
?>
	<title>
		REPORTS
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<form>
		<div class="monthlyExpensesCont">
			<div class="reportTitle">
				Monitoring of Filed and Unfiled Tax Returns
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
				<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
				<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
			</div>
			<div style="clear:both;"></div>
			<div class="DFs">
				<div style="float:left;">
					<select name="month" style="margin-top:10px;" class="selectMonth">
						<?php
							$currentMonth = date("m");
							for($x = 1; $x <= 12; $x++){
							if ($x == $currentMonth) {
						?>
							<option selected='selected' value="<?= strtolower(date('F', strtotime('2014-'.$x.'-01'))) ?>">
							<?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
							
						<?php
							}else{ 
						?>
						<option value="<?= strtolower(date('F', strtotime('2014-'.$x.'-01'))) ?>">
							<?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
						<?php
							}
							
							}
						?>
					</select>
					<input type="number" name="year" value="<?= date('Y') ?>"  class="selectYear"/>
					<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE" >
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
			
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	<?php
	// if(!$report){
	?>
		<div class="noBilling noclass">
			You don't have Monitoring of Received 2307.
		</div>
	<?php
	// }
	?>
</div>
<script>
<?php
	if (isset($_GET['month'])) {
?>
	$('select[name="month"]').val('<?= $_GET['month'] ?>');
	$('input[name="year"]').val('<?= $_GET['year'] ?>');
	$('.FSGen').click();
<?php
	}
?>
$(function(){
	$('.buttonFS').addClass('hidden');
	$('form').submit(function() {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
		// $('.reportHolderContainer').html(loading);
	 
		$.post(URL + 'report/genfiledUnfiledTaxRet', 
				 {
					'month': $('select[name="month"]').val(),
					'year': $('input[name="year"]').val()
				})
				.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					
				}).fail(function() {
					alertWithoutNotice('Connection Error!');
				});
			return false;
		});
	
	/* viewMode codes */
	$('.viewMode').click(function() {
		
		month = $('select[name="month"]').val();
		year = $('input[name="year"]').val();
		
		window.open(URL + 'report/newtab_genfiledUnfiledTaxRet?month=' + month + '&year=' + year);
		
		return false;
	});
	
	/* $('.exportButton').click(function(){
		location = URL + 'report/exportMor_2307?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
	}); */
	
	$('.printME').click(function(){
		window.print();
	});

});
	
		
	<?php
	// if(!$report){
	?>
		// $('.monthlyExpensesCont input').prop('disabled',true);
		// $('.DFs select').prop('disabled',true);
	<?php
	// }
	?>
</script>