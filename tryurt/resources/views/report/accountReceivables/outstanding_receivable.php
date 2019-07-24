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
	font-size:12px;
	font-family:verdana;
}

.dateReport{
	width:173px;
}
.tblShowReport_div{
	margin-left:45px;
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


.dateDiv2{
	margin-top:10px;
	font-size: 12px;
	font-family: Verdana;
	margin-left:5px;
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
.reportHolderOR{
	width: 720px;
	height:1212px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow:scroll;
	float:left;
}

.clientsTxt{
	margin-top: 10px;
	font-size: 12px;
	font-family: Verdana;
}

.noOutsanding{
	font-weight: bold;
	color: #183867;
	font-family: Verdana;
	font-size: 14px;
	text-align: center;
}
@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS{
		display:none !important;
	}
	
	.reportForm{
		border:none !important;
	}
	.reportContainer{
		box-shadow:none !important;
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
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<form>
		<div class="monthlyExpensesCont">
				<div class="reportTitle">
					Outstanding Receivable Report
				</div>
				<div class="buttonFS">
					<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
					<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
					<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left;">
						<div>
							<label class="reportcolor"><input type="radio" name="outstandingReceivable" value="billing"> Billing</label>
							<label class="reportcolor"><input type="radio" name="outstandingReceivable" value="sales"> Sales</label>
						</div>
						<div class="dateDiv2 reportcolor">Date From: <!--<input type="text" class="ButInput" name="startdate" id="di" value="<?=date('m/d/Y') ?>"> -->
								<input type="text" class="ButInput hasDate" name="startdate"
								value="<?= isset($_POST['startdate']) ? $_POST['startdate'] : date('m/d/Y') ?>"> 
							To: 
							<input type="text" class="ButInput hasDate" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('m/d/Y') ?>">
							
						</div>
						<div class="billingSelect reportcolor hidden" style="margin-top:10px;">
							Customers:
							<select name="billingClient" class="selectHmo">
								
							<!--	<option value="">All</option>-->
								<?php
									$clients = $this->clients;
									if($clients){
									
								?>
									<option value="%%">All</option>
								<?php
										foreach($clients as $client){
								?>
									<option value="<?= $client['client_id'] ?>" title="<?= $client['client_account'] ?>">
										<?= $client['client_name'] ?>
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
						<div class="salesSelect reportcolor hidden" style="margin-top:10px;">
							Customers:
							<select name="salesClient" class="selectHmo">
								
							<!--	<option value="">All</option>-->
								<?php
									$salesClients = $this->salesClients;
									if($salesClients){
									
								?>
									<option value="%%">All</option>
								<?php
										foreach($salesClients as $sales){
								?>
									<option value="<?= $sales['client_id'] ?>">
										<?= $sales['client_name'] ?>
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
	if(!$clients AND !$salesClients){
	?>
		<div class="noOutsanding">
			You don't have Outstanding Receivable.
		</div>
	<?php
	}
	?>
</div>
<script>
	$(function(){

		$('input[name="outstandingReceivable"]').change(function(){
			val1 = $('input[name="outstandingReceivable"]:checked').val();
			if(val1 == 'billing'){
				$('.billingSelect').removeClass('hidden');
				$('.salesSelect').addClass('hidden');
			}else{
				$('.salesSelect').removeClass('hidden');
				$('.billingSelect').addClass('hidden');
			}
				
		});

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

			clientId = '';
			outStanding = $('input[name="outstandingReceivable"]:checked').val();
			if(outStanding == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}

			if(clientId == null && outStanding == 'billing'){
				alert('No Available Report in Billing');
				return false;
			}else if(clientId == null && outStanding == 'sales'){
				alert('No Available Report in Sales');
				return false;
			}
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');

			if(clientId != ''){
				// $('.reportHolderContainer').html(loading);
				
				$.post(URL + 'report/genOutstandingReceivable', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val(),
					'client': clientId,
					'outStanding': outStanding
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
			clientId = '';

			outStanding = $('input[name="outstandingReceivable"]:checked').val();
			if(outStanding == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}

			location = URL + 'report/exportOutstandingReceivable?startdate=' + $('input[name="startdate"]').val()+'&enddate=' + $('input[name="enddate"]').val()+'&client=' + clientId + '&outStanding=' + outStanding;
	
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
				$('select[name="client"]').val('<?= $_GET['clientId'] ?>');
				$('input[name="outstandingReceivable"][value="<?= $_GET["outStanding"] ?>"]').prop('checked',true);
				$('input[name="outstandingReceivable"]').change();
				$('.FSGen').click();


		<?php
		}
		?>
		
		$('.viewMode').click(function() {
			clientId = '';

			outStanding = $('input[name="outstandingReceivable"]:checked').val();
			if(outStanding == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());

			window.open(URL + 'report/newtab_outstanding?startdate=' + startdate + '&enddate=' + enddate + '&clientId=' + clientId  + '&outStanding=' + outStanding);
			
			return false;
		});
		
		<?php
		if(!$clients AND !$salesClients){
		?>
			 $('.monthlyExpensesCont input').prop('disabled',true);
			 $('.DFs select').prop('disabled',true);
		<?php
		}
		?>
		
	});
	
</script>