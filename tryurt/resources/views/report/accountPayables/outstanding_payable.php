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
	border-collapse: collapse;
	margin-top: 30px;
	width: 97%;
	font-family: Verdana;
	font-size: 12px;
	margin-left: 10px;
}
.tblShowReport tr td{
	border:1px solid gray;
	text-align:center;
	padding:5px;
	font-size:11px;
}
.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background:#BE3323;
	padding: 6px;
	color: #fff;
	text-align: left;
	font-family: Verdana;
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

.dateDiv2{
	margin-top:10px;
	font-size: 12px;
	font-family: Verdana;
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
	margin-right:5px;
}

.selectHmo{
	width: 175px;
	height: 27px;
	font-size: 12px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border: 1px solid gray;
	margin-left: 5px;
	margin-right: 5px;
	outline-style:none;
}

.hidden{
	display:none;
}

.clientsTxt{
	margin-top: 10px;
	font-size: 12px;
	font-family: Verdana;
}
@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS{
		display:none !important;
	}
	.reportContainer{
		box-shadow:none !important;
	}
	.reportForm{
		border:none !important;
	}
	.reportHolderOR{
		overflow:hidden !important;
		box-shadow:none !important; 
		border:none !important;
		width:100% !important;
		height:auto !important;
		zoom:140%;
	}
	
	.tblShowReport th{
		color:#000 !important;
	}
	.tdTotal{
		color:#000 !important;
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
					Outstanding Payable Report

				</div>
				<div class="buttonFS">
					<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
					<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
					<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left;">
						<div class="dateDiv2 reportcolor">Date From: <!--<input type="text" class="ButInput" name="startdate" id="di" value="<?=date('m/d/Y') ?>"> -->
								<input type="text" class="ButInput hasDate" name="startdate"
								value="<?= isset($_POST['startdate']) ? $_POST['startdate'] : date('m/d/Y') ?>"> 
							To: 
							<input type="text" class="ButInput hasDate" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('m/d/Y') ?>">
							
						</div>
						<div class="clientsTxt reportcolor">
							Vendor:
							<select name="name" class="selectHmo">
								
							<!--	<option value="">All</option>-->
								<?php
									$suppliers = $this->suppliers;
									if($suppliers){
									
								?>
									<option value="%%">All</option>
								<?php
										foreach($suppliers as $supplier){
								?>
									<option value="<?= $supplier['supplier_id'] ?>" title="<?= $supplier['supplier_account'] ?>">
										<?= $supplier['name'] ?>
									</option>
								<?php
										}
								?>
								<?php
									}
								?>
							</select>
							<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE">
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="lineDivider">
				</div>
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$suppliers){
	?>
		<div class="noOutsanding">
			You don't have Outstanding Payable.
		</div>
	<?php
	}
	?>
</div>
<script>
	$(function(){
		
		//datepicker
		$('.hasDate').prop('readonly', true);
		$('.hasDate').datepicker({
			dateFormat: 'mm/dd/yy'
		});
		$('.hasDate').change(function() {
			dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
			$(this).val(dates);
		});
		
		$('.buttonFS').addClass('hidden');
		$('form').submit(function() {
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			supplierId = $('select[name="name"]').val();
			if(supplierId != ''){
				// $('.reportHolderContainer').html(loading);
				
				$.post(URL + 'report/genOutstandingPayable', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val(),
					'supplier': supplierId
				})											
				.done(function(returnData){
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					
				}).fail(function() {
					alert('Connection Error!');
				});
			} else {
				$('.reportHolderContainer').html('');
			}
			return false;
		});

		$('.exportButton').click(function(){
			location = URL + 'report/exportOutstandingPayable?startdate=' + $('input[name="startdate"]').val()+'&enddate=' + $('input[name="enddate"]').val()+'&supplier=' + $('select[name="name"]').val();
	
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
		/* viewMode codes */
		<?php
		if (isset($_GET['startdate'])) {
			?>
				$('input[name="startdate"]').val('<?= $_GET['startdate'] ?>');
				$('input[name="enddate"]').val('<?= $_GET['enddate'] ?>');
				$('select[name="name"]').val('<?= $_GET['supplierId'] ?>');
				$('.FSGen').click();


		<?php
		}
		?>
		
		$('.viewMode').click(function() {
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			supplierId = ($('select[name="name"]').val());
			
			window.open(URL + 'report/newtab_payable?startdate=' + startdate + '&enddate=' + enddate + '&supplierId=' + supplierId);
			
			return false;
		});
		
		<?php
		if(!$suppliers){
		?>
			 $('.monthlyExpensesCont input').prop('disabled',true);
			 $('.DFs select').prop('disabled',true);
		<?php
		}
		?>
		
	});
	
</script>