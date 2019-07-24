<style>
.tr{
	text-align: right !important;
}
.monthlyExpensesCont{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #183867;
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
.hmoDivider{
	width:100%;
	height:6px;
	border-radius:2px;
	background:gray;
	margin-top:10px;
}
.fromReg{
	font-family: Agency FB;
	width:688px;
	margin-left: 15;
	text-align: center;
	height:auto!important;
	margin-top:20px;
}
.exportButton{
	/* width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color: rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 5px;
	cursor: pointer; */
}
.monthlyGenerate{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Agency FB;
	background-color: rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 5px;
	cursor: pointer;
}
.DFs{
	margin-top: 10px;
	font-size: 19px;
	font-family: Agency FB;
	border-radius: 10px;
	float: left;
}
.ButInput{
	width: 133px;
	height: 28px;
	font-size: 12px;
	font-family: verdana;
	padding-left: 5px;
	border-radius: 5px;
	box-shadow: none;
	border: 1px solid rgba(128, 128, 128, 0.58);
	margin-left: 5px;
	margin-right: 5px;
}
.dateDiv{
	padding-top: 5px;
}
.dateDiv2{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
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
	float:right;
	margin-top: 4px;
	margin-right:5px;
}
.FSPrint{
	/* width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/printNew.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	margin-left:10px; */
}
.FSExport{
	/* width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/exportNew2.png');
	background-repeat: no-repeat;
	background-size: 100% 100%; */
}
.reportTitle {
	font-size:24px;
	font-family:agency fb2!important;
	color: #183867;
	float:left;
}
.selectMonth{
	width: 133px;
	height: 25px;
	font-size: 11px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border: 1px solid gray;
	margin-left: 5px;
	margin-right: 5px;
	border-radius: 5px;
	outline-style:none;
}
.selectYear::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	height:21px; 
}	
.selectYear{
	
}
.reportHolderOR{
	width: 720px;
	height:1133px;
	box-shadow: 2px 2px 15px #3A3434;
	padding-top: 10px;
	margin-left:9px;
	overflow: scroll;
	padding-bottom:20px;
	float:left;
}
.balanceTitle{
	font-family: Verdana;
	font-size: 12px;
}
.nameText{
	font-size:14px;
	font-family:Verdana;
	text-transform: uppercase;
	font-weight: bold;
}
.ORCompanyInfo{
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana;
}
.balanceTable, tr,td{
	width:90%;
	margin-left:30px;
	margin-top:20px;
	font-family: Verdana;
	font-size: 12px;
}
.bsInput{
	width: 130px;
	border: none;
	text-align: right;
}
.bsInput2{
	width:130px;
	margin-left:1px;
	padding-left:5px;
	border:none;
}
.tdPaddingLeft{
	padding-left:25px;
}
.tdPaddingLeft2{
	padding-left:45px;
}
.parentchildbalance{
	padding-left:10px;
}
.txtRadio{
	font-size: 12px;
	font-family: Verdana;
}
.lineDivider{
	height: 3px;
	width: 737px;
	background: #183867;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
}
.viewMode{
	width: 100px;
	height: 28px;
	background: rgb(21, 67, 136);
	color:#EDEAEA;
	font-family: agency fb2;
	font-size: 18px;
	border: none;
	border-radius: 5px;
	float:left;
}
.loadingHolder{
	margin-top:300px;
	margin-left:220px;
}
.loadingimg{
	width:140px;
	height:140px;
}
.trialtable1{
	width: 97%;
    margin: auto;
    margin-top: 30px;
	font-family:verdana;
	font-size:12px;
}
@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS{
		display:none !important;
	}
	
	.reportForm{
		border:none !important;
	}
	.trialcontainer{
		width:100%;
		overflow:hidden !important;
		box-shadow:none !important;
		border:none !important;
		zoom:138%;
	}
	.reportContainer{
		box-shadow:none !important;
	}
	.fromReg{
		width:100% !important;
	}
	
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
} 
</style>
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/print_report.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<title>
		Report | Cash Flow
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<form>

		<div class="monthlyExpensesCont">
			<div class="reportTitle"> <!--style="font-size:16px;font-weight:bold;padding-top:10px;font-family:Verdana;margin-left:20px;"-->
				Cash Flow
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
				<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
				<input type="button" class="FSExport exportButton addsavebuttonreports" value="EXPORT">
			</div>
			<div style="clear:both;"></div>
			<div style="margin-top:5px;" class="periodSelection">
				<input type="radio" name="type" id="monthly" value="monthly" style="margin:0;"/>
				<label for="monthly" class="txtRadio">Monthly</label>
				<input type="radio" name="type" id="annual" value="annual"/>
				<label for="annual" class="txtRadio">Annual</label>
			</div>
			<div class="DFs hidden">
				<table>
					<tr>
						<td style="width:28%;">
							<span class="yearHolder txtRadio">
								Year : 
									<input type="number" class="selectYear" name="year" value="<?= date('Y') ?>" required />
							</span>
						</td>
						<td>
							<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE">
						</td>
					<tr>
				</table>
				<span class="monthHolder hidden txtRadio">
					Month :
					<select name="month" class="selectMonth">
						<?php
							for($x = 1; $x <= 12; $x++){
						?>
							<option value="<?= strtolower(date('m', strtotime('2014-'.$x.'-01'))) ?>"
								<?= intval(Date('m')) == $x ? ' selected ' : ''?>><?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
						<?php
							}
						?>
					</select>
				</span>
				
				<div style="clear:both;"></div>	
				<div class="lineDivider">
				</div>
			</div>
			
					<!--<div class="hmoDivider"></div>-->	
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
			// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genCashFlow', 
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
			location = URL + 'report/export_cashflow?month=' + parseInt($('select[name="month"]').val())+'&year=' + $('input[name="year"]').val()+'&type=' + $('input[name="type"]:checked').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
		// alert('asdf');
		/* viewMode codes */
		$('.viewMode').click(function() {
			$('.DFS').removeClass('');
			type = $('input[name="type"]:checked').val();
			month = ($('select[name="month"]').val());
			year = $('.selectYear').val();
			
			window.open(URL + 'report/cashFlow_newtab?type=' + type + '&month=' + month + '&year=' + year);
			
			return false;
		});

		$('#annual').click();
		$('.periodSelection').addClass('hidden');
		
		<?php
		if (isset($_GET['year'])) {
			?>
				
				$('input[name="type"][value="<?= $_GET['type'] ?>"]').prop('checked', true);
				$('select[name="month"]').val('<?= $_GET['month']?>');
				$('.selectYear').val('<?= $_GET['year']?>');
				// alert('<?= $_GET['year']?>');
				// $('input[name="type"][value="<?= $_GET['type'] ?>"]').click();
				$('.buttonFS').remove();
				$('.FSGen').click();
				$('.selectYear').val('<?= $_GET['year']?>');
		<?php
		}
		?>
	});
</script>