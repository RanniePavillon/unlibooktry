<style>

.tblExpense{
	margin-left:20px;
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport{
	border-collapse: collapse;
	margin-top: 30px;
	width: 99%;
	font-family: Verdana;
	font-size: 12px;
	left: 50%;
}
.tblShowReport tr td{
	border:1px solid gray;
	text-align:center;
	padding:5px;
}
.tblShowReport th{
	border:1px solid #000;
	font-size:12px;
	font-weight:bold;
	background:#183867;
	padding:6px;
	color:#fff;
	text-align:left;
}
.dateReport{
	width:173px;
}
.tblShowReport_div{
	margin-left:45px;
}

.ButInput::-webkit-inner-spin-button{
	background-color:#c8c8c8;
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
.dateDiv{
}
.dateDiv2{
	padding-top: 5px;
}
.blHeader{
	font-size: 20px;
	font-family: verdana;
	/* padding-left: 234px; */
	margin-top: 10px;
	font-weight: bold;
	color: rgba(0, 0, 0, 0.67);
	text-align:center;
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
		width:755px !important;
		overflow:hidden !important;
		box-shadow:none !important;
		border:none !important;
		margin-left:-12px !important;
		zoom:140%
		
	}
	.reportContainer{
		box-shadow:none !important;
	}
	
	.tblCRB th{
		color:#000 !important;
	}
	.fromReg{
		width:755px !important;
		/* margin-left:-5px !important; */
	}
	.tblCRB{
		width:95% !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
}
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
				1601E - Map
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
				<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
				<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
			</div>
			<div style="clear:both;"></div>
			<div class="DFs">
				<div style="float:left;" class="reportcolor">
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
			You don't have 1601E - Map.
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
	//$('.FSGen').click(); 
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
	 
		$.post(URL + 'report/gen1601eMap', 
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
		//alert('s');
		
		month = $('select[name="month"]').val();
		year = $('input[name="year"]').val();
		
		window.open(URL + 'report/newtab_gen1601eMap?month=' + month + '&year=' + year);
		
		return false;
	});
	
	$('.exportButton').click(function(){
		location = URL + 'report/exportMor_2307?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
	});
	
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