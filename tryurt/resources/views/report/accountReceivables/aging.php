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
}
.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background:#183867;
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
}
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
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<form>
		<div class="monthlyExpensesCont">
				<div class="reportTitle">
					Aging Report
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
							<label class="reportcolor"><input type="radio" name="aging" value="billing"> Billing</label>
							<label class="reportcolor"><input type="radio" name="aging" value="sales"> Sales</label>
						</div>
						<div class="dateDiv2 reportcolor"><!--Date From: 
								<input type="text" class="ButInput hasDate" name="startdate"
								value="<?= isset($_POST['startdate']) ? $_POST['startdate'] : date('m/d/Y') ?>"> -->
							As of: <input type="text" class="ButInput hasDate" name="enddate" value="<?= isset($_POST['enddate']) ? $_POST['enddate'] : date('m/d/Y') ?>">
							
						</div>
						<div class="billingSelect clientsTxt reportcolor hidden">
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
						<div class="salesSelect clientsTxt reportcolor hidden">
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
	if(!$clients){
	?>
		<div class="noOutsanding">
			You don't have Aging Report.
		</div>
	<?php
	}
	?>
</div>
<script>
	$(function(){

		$('input[name="aging"]').change(function(){
			val1 = $('input[name="aging"]:checked').val();
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
			aging = $('input[name="aging"]:checked').val();
			
			if(aging == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}

			if(clientId == null && aging == 'billing'){
				alert('No Available Report in Billing');
				return false;
			}else if(clientId == null && aging == 'sales'){
				alert('No Available Report in Sales');
				return false;
			}
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			if(clientId != ''){
				// $('.reportHolderContainer').html(loading);
				
				$.post(URL + 'report/genAging', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val(),
					'client': clientId,
					'aging': aging
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
			aging = $('input[name="aging"]:checked').val();
			
			if(aging == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}

			location = URL + 'report/export_genAging?startdate=' + $('input[name="startdate"]').val()+'&enddate=' + $('input[name="enddate"]').val()+'&client=' + clientId + '&aging=' + aging;
	
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
				$('input[name="aging"][value="<?= $_GET["aging"] ?>"]').prop('checked',true);
				$('input[name="aging"]').change();
				$('.FSGen').click();


		<?php
		}
		?>
		
		$('.viewMode').click(function() {
			clientId = '';
			aging = $('input[name="aging"]:checked').val();
			
			if(aging == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			
			window.open(URL + 'report/newtab_agingReport?startdate=' + startdate + '&enddate=' + enddate + '&clientId=' + clientId + '&aging=' + aging);
			
			return false;
		});
		
		<?php
		if(!$clients){
		?>
			 $('.monthlyExpensesCont input').prop('disabled',true);
			 $('.DFs select').prop('disabled',true);
		<?php
		}
		?>
		
	});
	
</script>