<style>
.tr{
	text-align: right !important;
}

.tblExpense{
	margin-left:20px;
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport{
	border-collapse:collapse;
	margin-top:30px;
	width:95%;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReport tr td{
	border:1px solid #000;
	text-align:center;
	padding:5px;
}
.tblShowReport th{
	border:1px solid #fff;
	font-size:14px;
	font-weight:bold;
	background:rgb(63, 176, 63);
	padding:3px;
	color:#fff;
	text-align:left;
}
.dateReport{
	width:173px;
}
.tblShowReport_div{
	margin-left:45px;
}

.dateDiv{
	padding-top: 5px;
}
.dateDiv2{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
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
.buttonFS{
	float: right;
	margin-top: 4px;
	margin-right:6px;
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
		width:100% !important;
		overflow:hidden !important;
		box-shadow:none !important;
		border:none !important;
		zoom:128%;
		height:auto !important;
	}
	.reportContainer{
		box-shadow:none !important;
	}
	
	.balanceTable{
		width:100% !important; 
	}
	.balanceTable, tr, td{
		width:98%  !important;
		font-size: 16px;
	}
	.tb_table_holder th{
		color:#000 !important;
		
	}
	.fromReg{
		width:98% !important;
		margin-left:5px !important;
	}
	.tb_table_holder{
		margin-left:0px !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
} 
</style>
	<title>
		REPORTS
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<form>
		<div class="monthlyExpensesCont">
			<div class="reportTitle">
				Trial Balance
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
				<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
				<input type="button" class="FSExport exportButton addsavebuttonreports" value="EXPORT">
			</div>
			<div style="clear:both;"></div>
			<div style="margin-top:5px;">
				<input type="radio" name="type" id="monthly" value="monthly" style="margin:0;"/>
				<label for="monthly" class="txtRadio reportcolor">Monthly</label>
				<input type="radio" name="type" id="annual" value="annual"/>
				<label for="annual" class="txtRadio reportcolor">Annual</label>
			</div>
			<div class="DFs hidden">
				<div style="float:left;margin-top:3px;">
					<span class="monthHolder hidden txtRadio reportcolor">
						Month :
						<select name="month" class="selectMonth">
							<?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date('m', strtotime('2014-'.$x.'-01'))) ?>"
									<?= intval(Date('m')) == $x ? ' selected ' : ''?>
								><?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
							<?php
								}
							?>
						</select>
					</span>
					<span class="yearHolder txtRadio reportcolor">
						Year : 
							<input type="number" class="selectYear" name="year" value="<?= date('Y') ?>" required />
							<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE">
					</span>
				</div>
				
				<div style="clear:both;"></div>	
			</div>
			<div style="clear:both;"></div>	
				<div class="lineDivider"></div>
					
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	
</div>
<script>
	$(function(){
		$('.buttonFS').addClass('hidden');
		$('input[name="type"]').click(function(){
			type = $(this).val();
			
			$('.DFs').removeClass('hidden');
			$('.monthHolder').removeClass('hidden');
			if(type == 'annual'){
				$('.monthHolder').addClass('hidden');
				var currentYear = (new Date).getFullYear();
				$('input[name="year"]').val(currentYear)
			}
			
		});
		
		$('form').submit(function() {
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			type = $('input[name="type"]:checked').val();
			month = parseInt($('select[name="month"]').val());
			year = $('input[name="year"]').val();
			$('.reportHolderContainer').html();
			$.post(URL + 'report/genTrialBalance', 
				{
					'type': type, 
					'month': month,
					'year': year
				}).done(function(returnData){
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					
				}).fail(function() {
					alert('Connection Error!');
				});
			return false;
		});
		
		
		$('.exportButton').click(function(){
			location = URL + 'report/exportTrialBalance?month=' + parseInt($('select[name="month"]').val())+'&year=' + $('input[name="year"]').val()+'&type=' + $('input[name="type"]:checked').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
		/* viewMode codes */
		<?php
		if (isset($_GET['type'])) {
			?>
				$('input[name="type"][value="<?= $_GET['type'] ?>"]').prop('checked', true);
				$('select[name="month"]').val('<?= $_GET['month']?>');
				$('.selectYear').val('<?= $_GET['year']?>');
				$('input[name="type"][value="<?= $_GET['type'] ?>"]').click();
				$('.FSGen').click();


		<?php
		}
		?>
		$('.viewMode').click(function() {
			
			type = $('input[name="type"]:checked').val();
			month = ($('select[name="month"]').val());
			year = $('.selectYear').val();
			
			window.open(URL + 'report/newtab_trialBalance?type=' + type + '&month=' + month + '&year=' + year);
			
			return false;
		});

		
	});
</script>