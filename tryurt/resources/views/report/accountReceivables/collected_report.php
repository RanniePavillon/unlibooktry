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
	padding:5px;
	font-size: 12px;
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
}
.ButInput::-webkit-input-date{
	-webkit-appearance: none;
} 


.dateDiv2{
	padding-top:10px;
	margin-bottom: 10px;
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

.noCollection{
	font-weight: bold;
	color: #183867;
	font-family: Verdana;
	font-size: 14px;
	text-align: center;
}
.selectClient{
	width: 175px;
    height: 27px;
    font-size: 12px;
    font-family: Verdana;
    padding-left: 5px;
    box-shadow: none;
    border: 1px solid gray;
    margin-left: 5px;
    margin-right: 5px;
    outline-style: none;
	
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
				Collection Report
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
				<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
				<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
			</div>
			<div style="clear:both;"></div>
			<div class="DFs">
				<div style="float:left">
					<div class="dateDiv"></div>
					<div>
						<label class="reportcolor"><input type="radio" name="collection" value="billing"> Billing</label>
						<label class="reportcolor"><input type="radio" name="collection" value="sales"> Sales</label>
					</div>
					<div class="dateDiv2 txtRadio reportcolor">Date From: <input type="text" class="ButInput hasDate" name="startdate" value="<?=date('m/d/Y') ?>"> 
						To: 
						<input type="text" class="ButInput hasDate" name="enddate" value="<?= date('m/d/Y') ?>">
					</div>
					<div class="billingSelect hidden">
						<label class="txtRadio reportcolor">Customers:</label>
						<select name="billingClient" class="selectClient">
							<?php
								$clients = $this->clients;
								if($clients){
							?>
								<option value="%%">All</option>
							<?php
									foreach($clients as $client){
							?>
								<option value="<?= $client['id'] ?>" title="<?= $client['client_account'] ?>">
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
					<div class="salesSelect reportcolor hidden">
						<label class="txtRadio reportcolor">Customers:</label>
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
			<div class="lineDivider"></div>
	
			<!--<div class="hmoDivider"></div>-->
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$clients){
	?>
		<div class="noCollection">
			YOU DON'T HAVE COLLECTION REPORT.
		</div>
	<?php
	}
	?>
</div>
<script>
	$(function(){

		$('input[name="collection"]').change(function(){
			val1 = $('input[name="collection"]:checked').val();
			if(val1 == 'billing'){
				$('.billingSelect').removeClass('hidden');
				$('.salesSelect').addClass('hidden');
			}else{
				$('.salesSelect').removeClass('hidden');
				$('.billingSelect').addClass('hidden');
			}
				
		});

		$('.buttonFS').addClass('hidden');
			$('form').submit(function() {

			clientId = '';
			collection = $('input[name="collection"]:checked').val();
			
			if(collection == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}
			
			if(clientId == null && collection == 'billing'){
				alert('No Available Report in Billing');
				return false;
			}else if(clientId == null && collection == 'sales'){
				alert('No Available Report in Sales');
				return false;
			}
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			// $('.reportHolderContainer').html(loading);
			

			if(clientId != ''){
				$.post(URL + 'report/genCollectedReport', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val(),
					'client': clientId,
					'collection': collection
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
			collection = $('input[name="collection"]:checked').val();
			
			if(collection == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}

			location = URL + 'report/exportCollectedReport?startdate=' + $('input[name="startdate"]').val()+'&enddate=' + $('input[name="enddate"]').val()+'&client=' + clientId + '&collection=' + collection;
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
		<?php
		if(!$clients){
		?>
			$('.monthlyExpensesCont input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php
		}
		?>
	
		/* viewMode codes */
		$('.viewMode').click(function() {
			clientId = '';
			collection = $('input[name="collection"]:checked').val();
			
			if(collection == 'billing'){
				clientId = $('select[name="billingClient"]').val();
			}else{
				clientId = $('select[name="salesClient"]').val();
			}
			
			startdate = $('input[name="startdate"]').val();
			enddate = $('input[name="enddate"]').val();
			
			window.open(URL + 'report/newtab_collected?startdate=' + startdate + '&enddate=' + enddate + '&clientId=' + clientId + '&collection=' + collection);
			
			return false;
		});
		
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
		if (isset($_GET['startdate'])) {
			?>
			$('input[name="startdate"]').val('<?= $_GET['startdate']?>');
			$('input[name="enddate"]').val('<?= $_GET['enddate']?>');
			$('select[name="client"]').val('<?= $_GET['clientId']?>');
			$('input[name="collection"][value="<?= $_GET["collection"] ?>"]').prop('checked',true);
			$('input[name="collection"]').change();
			$('.FSGen').click();
		<?php
		}
		?>
		
	});
</script>