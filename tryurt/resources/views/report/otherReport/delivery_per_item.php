
<style>

.dateDiv2{
	padding-top: 5px;
}

.ButInput::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	/* width:8px; */
	height:24px;
}	

.ButInput::-webkit-input-date{
	-webkit-appearance: none;
} 

.ButInput{
	width: 125px;
	height: 25px;
	font-size: 11px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border-radius: 5px;
	border: 1px solid gray;
	margin-left: 5px;
	margin-right: 5px;
}

.tblShowReport_div{
	margin-left:45px;
}
.reportHolderOR{
	width: 720px;
	height:1244px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow: scroll;
	float:left;
}

@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS{
		display:none !important;
	}
	
	.reportForm{
		border:none !important;
	}
	.reportHolderOR{
		width:100%;
		overflow:hidden !important;
		box-shadow:none !important;
		border:none !important;
		zoom:140%;
		margin-left:1px !important;
	}
	.reportContainer{
		box-shadow:none !important;
	}
	
	.tblCRB th{
		color:#000 !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
}
</style>
<!--<?php
    $report = $this->auditTrial;
?>-->
<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<form>
	<div class="auditTrialCont monthlyExpensesCont">
		<div class="reportTitle">
			Delivery per Item
		</div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
			<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
			<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
		</div>
		<div style="clear:both;"></div>
		<div class="DFs">
			<!-- <div style="float:left;">
				<div class="dateDiv"></div>
				<div class="dateDiv2 txtRadio reportcolor">Date From: <input type="text" class="ButInput hasDate" name="startdate" value="<?= 
					isset($_POST['startdate']) ? $_POST['startdate'] : date('m/d/Y') ?>"> 
					To: 
					<input type="text" class="ButInput hasDate" name="enddate" value="<?= 
					isset($_POST['enddate']) ? $_POST['enddate'] : date('m/d/Y') ?>">
					<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE">
				</div>
			</div> -->
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
		</div>
		<div class="tblShowReport_div">
		</div>
	</div>
</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$report){
	?>
		<div class="noOutsanding">
			<!-- You don't have transaction. -->
			COMING SOON...
		</div>
	<?php
	}
	?>
</div>

<script>
	$(function(){
		$('.buttonFS').addClass('hidden');
		$('form').submit(function() {
				
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genAuditTrial', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val()
				})										
				.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					
				$('body').css('overflow', 'auto');
				$('.popBack').addClass('hidden');
					
				}).fail(function() {
					alert('Connection Error!');
				});
			
			return false;
		});
		
		$('.viewMode').click(function() {
			
			startdate = $('input[name="startdate"]').val();
			enddate = $('input[name="enddate"]').val();
			
			window.open(URL + 'report/newtab_auditTrail?startdate=' + startdate + '&enddate=' + enddate);
			
			return false;
		});
		
		$('.exportButton').click(function(){
			location = URL + 'report/export_genAuditTrial?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
			
		<?php
		if(!$report){
		?>
			$('.auditTrialCont input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php
		}
		?>
		
		// datepicker
		$('.hasDate').prop('readonly', true);
		$('.hasDate').datepicker({
			dateFormat: 'mm/dd/yy'
		});
		$('.hasDate').change(function() {
			dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
			$(this).val(dates);
		});
	<?php
		if(isset($_GET['startdate'])){
	?>
		$('input[name="startdate"]').val('<?= $_GET['startdate']?>');
		$('input[name="enddate"]').val('<?= $_GET['enddate']?>');
		$('.FSGen').click();
		<?php } ?>
	});
</script>














