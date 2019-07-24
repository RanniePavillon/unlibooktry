
<style>
.auditTrialCont{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #183867;
}
.dateDiv2{
	padding-top:10px;
}

.ButInput::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	/* width:8px; */
	height:24px;
}	
/* .ButInput::-webkit-calendar-picker-indicator{
	width:8px;
	height:14px;
} */
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

.fromReg{
	font-family: Agency FB;
	width:900px;
	margin-left:15px;
	text-align: center;
	height:auto!important;
	padding-top:20px;
	padding-bottom:20px;
}

.balanceTitle{
	font-family: Verdana;
	font-size: 12px;
}
.balanceTable{
	width:98%;
	margin-left:15px;
	margin-top:30px;
}
.balanceTable tr,td{
	margin-left:30px;
	font-family: Verdana;
	font-size: 12px;
}
.parentchildbalance{
	padding-left:10px;
}
.tdPaddingLeft{
	padding-left:25px;
}
.bsInput{
	width: 145px;
	border: none;
	text-align: right;
	padding-right:16px;
}
.tdPaddingLeft2{
	padding-left:45px;
}

/* css for income statement */

.isTextHead{
	text-align:center;
	font-family:Verdana;
	font-size:12px;
}
.tblIncomeStatement{
	width:100%;
	margin-top: 50px;
}
.tblIncomeStatement, tr td {
	padding-top: 5px;
	font-family: Verdana;
	font-size: 12px;
}
.isInputRight{
	width: 160px;
	text-align: right;
	padding-right:64px;
}
.BS_IS{
	height:27px;
	padding:5px;
	font-family: Verdana;
	font-size: 12px;
}

.asofYear{
	padding-left: 72px;
	text-align: left;
}
.borderBottom{
	border-bottom:1px solid #000;
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
		zoom:135%;
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
	.reportTitle{
		display:none;
	}
	.fromReg{
		width:100% !important;
		margin-top:0px !important;
	}
	.tblIncomeStatement, tr td{
		padding-top:4px !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
} 



</style>
<!--<?php
    $report = $this->summaryJournal;
?>-->
<title>
	REPORTS
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<form>
	<div class="auditTrialCont">
		<div class="reportTitle">
			Comparative Report
		</div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
			<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
			<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
		</div>
		<div style="clear:both;"></div>
	
		<div class="DFs">
			<div style="float:left;margin-top:5px;">
				<div style="float:left;font-family:Verdana;font-size:12px;" class="reportcolor">
					Type: 
					<select class="BS_IS">
						<option value="bs">Balance Sheet</option>
						<option value="is">Income Statement</option>
					</select>
				</div>
				<div style="float:left;margin-left:10px;">
					<input type="radio" name="type" id="monthly" value="monthly" style="margin:0;"/>
					<label for="monthly" class="txtRadio reportcolor">Monthly</label>
					<input type="radio" name="type" id="annual" value="annual"/>
					<label for="annual" class="txtRadio reportcolor">Annual</label>
				</div>
				<div style="clear:both"></div>
				<div class="dateDiv2 txtRadio">
					<label class="monthLabel hidden reportcolor">Month:</label> 
					<select name="month" class="selectMonth hidden">
						<?php
							for($x = 1; $x <= 12; $x++){
						?>
							<option value="<?= strtolower(date('m', strtotime('2014-'.$x.'-01'))) ?>"
								<?= intval(Date('m')) == $x ? ' selected ' : ''?>><?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
						<?php
							}
						?>
					</select>
					<label class="yearLabel hidden reportcolor">Year:</label><input type="number" class="selectYear hidden" name="year" value="<?= date('Y') ?>" required />
					<input type="submit" class="FSGen hidden addsavebuttonreports" value="GENERATE" >
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
		</div>
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
			
			$('.FSGen').removeClass('hidden');
			$('.selectMonth').removeClass('hidden');
			$('.monthLabel').removeClass('hidden');
			$('.yearLabel').removeClass('hidden');
			$('.selectYear').removeClass('hidden');
			if(type == 'annual'){
				$('.selectMonth').addClass('hidden');
				$('.monthLabel').addClass('hidden');
				var currentYear = (new Date).getFullYear();
				$('input[name="year"]').val(currentYear)
			}
			
		});
		
		$('form').submit(function() {
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			is_bs = $('.BS_IS').val();
			type = $('input[name="type"]:checked').val();
			month = parseInt($('select[name="month"]').val());
			year = $('input[name="year"]').val();
			// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genComparativeReport', 
				{
					'type': type, 
					'is_bs': is_bs, 
					'month': month,
					'year': year
				}).done(function(returnData){
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					if(type == 'bs'){
						$('.balanceTable').removeClass('hidden');
						$('.tblIncomeStatement').addClass('hidden');
					} else if(type == 'is'){
						$('.balanceTable').addClass('hidden');
						$('.tblIncomeStatement').removeClass('hidden');
					}
					
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					// alert(returnData);
				}).fail(function() {
					alert('Connection Error!');
				});
			return false;
		});
		
		
		$('.exportButton').click(function(){
			is_bs = $('.BS_IS').val();
			type = $('input[name="type"]:checked').val();
			month = parseInt($('select[name="month"]').val());
			year = $('input[name="year"]').val();
			
			location = URL + 'report/export_genComparativeReport?month='+month+'&year='+year+'&type='+type+'&is_bs='+is_bs;
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
		
		/* viewMode codes */
		<?php
		if (isset($_GET['type'])) {
			?>
				$('input[name="type"][value="<?= $_GET['type'] ?>"]').prop('checked', true);
				$('.BS_IS').val('<?= $_GET['is_bs']?>');
				$('select[name="month"]').val('<?= $_GET['month']?>');
				$('.selectYear').val('<?= $_GET['year']?>');
				$('input[name="type"][value="<?= $_GET['type'] ?>"]').click();
				$('.FSGen').click();


		<?php
		}
		?>
		$('.viewMode').click(function() {
			
			type = $('input[name="type"]:checked').val();
			is_bs = $('.BS_IS').val();
			month = ($('select[name="month"]').val());
			year = $('.selectYear').val();
			
			window.open(URL + 'report/newtab_comparative?type=' + type + '&is_bs=' + is_bs + '&month=' + month + '&year=' + year );
			
			return false;
		});
		
	});
</script>














