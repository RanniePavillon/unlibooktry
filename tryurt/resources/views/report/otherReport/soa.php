<style>
.tr{
	text-align: right !important;
}
.monthlyExpensesContsoa{
	font-family: Agency FB;
	font-size: 12px;
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
}

.tblExpense{
	margin-left:20px;
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.tblShowReportsoa{
	border-collapse: collapse;
	margin-top: 30px;
	width: 97%;
	font-family: Verdana;
	font-size: 12px;
	zoom:87%;
}
.tblShowReportsoa tr td{
	border:1px solid gray;
	text-align:center;
	padding:5px;
	font-size:12px;
}
.tblShowReportsoa th{
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
.hmoDivider{
	width:100%;
	height:6px;
	border-radius:2px;
	background:gray;
	margin-top:10px;
}
.fromRegsoa{
	font-family: Agency FB;
	width:688px;
	margin-left: auto;
	text-align: center;
	height: auto!important;
	margin-top:20px;
}
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
.reportTitle{
	font-size:24px;
	font-family:agency fb2;
	color:#183867;
	float: left;
}
.hidden{
	display:none;
}
.reportHolderORsoa{
	width: 720px;
	height:1425px;
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
.lineDividersoa{
	height: 3px;
	width: 737px;
	background: #BE3323;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
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
		border:none!important;
	}
	.reportHolderORsoa{
		overflow:hidden !important;
		box-shadow:none !important; 
		border:none !important;
		height:auto !important;
		zoom:145% !important;
		margin-left:-15px;
	}
	.reportContainer{
		box-shadow:none !important;
	}
	.reportTitle{
		display:none;
	}
	.tblShowReportsoa{
		width:100% !important;
		margin-left:-15px;
	}
	.tblShowReportsoa th{
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
<?php
 $soaClients = $this->checkClient_soa;
 
 // print_r($soaClients);
?>
	<title>
		REPORTS
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
	<form>
		<div class="monthlyExpensesContsoa">
				<div class="reportTitle">
					Statement of Account
				</div>
				<div class="buttonFS">
					<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
					<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
					<input type="button" class="FSPrint2 exportButton addsavebuttonreports" value="EXPORT">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left;">
						<div class="dateDiv2 reportcolor">Date From: <input type="text" class="ButInput hasDate" name="startdate" value="<?=date('m/d/Y') ?>"> 
							To: 
							<input type="text" class="ButInput hasDate" name="enddate" value="<?= date('m/d/Y') ?>">
							
						</div>
						<div class="clientsTxt reportcolor">
							Clients:
							<select name="client" class="selectHmo">
								
							<!--	<option value="">All</option>-->
								<?php
									if($soaClients){
									
								?>
									<option value="%%">All</option>
								<?php
										foreach($soaClients as $client){
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
					</div>
					
				</div>
				<div style="clear:both;"></div>
				<div class="lineDividersoa">
				</div>
			<div class="tblShowReport_div">
				
			</div>
		</div>
	</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$soaClients){
	?>
	<div class="noOutsanding">
		You don't have Statement of Account.
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
			
			clientId = $('select[name="client"]').val();
			if(clientId != ''){
				// $('.reportHolderContainer').html(loading);
				
				$.post(URL + 'report/gensoa', 
				{
					'from': $('input[name="startdate"]').val(), 
					'to': $('input[name="enddate"]').val(),
					'clientId': clientId
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
			from = $('input[name="startdate"]').val(), 
			to = $('input[name="enddate"]').val(),
			clientId = $('select[name="client"]').val();
			
			location = URL + 'report/exportsoa?clientId=' +clientId+ '&from=' +from+ '&to=' +to;
	
		});
		
		$('.printME').click(function(){
			window.print();
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
		
		/* viewMode codes */
		<?php
		if (isset($_GET['startdate'])) {
			?>
				$('input[name="startdate"]').val('<?= $_GET['startdate'] ?>');
				$('input[name="enddate"]').val('<?= $_GET['enddate'] ?>');
				$('select[name="client"]').val('<?= $_GET['clientId'] ?>');
				$('.FSGen').click();


		<?php
		}
		?>
		$('.viewMode').click(function() {
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			clientId = ($('select[name="client"]').val());
			
			window.open(URL + 'report/newtab_gensoa?startdate=' + startdate + '&enddate=' + enddate + '&clientId=' + clientId);
			
			return false;
		});
		
		
	});
	 
	<?php
	if(!$soaClients){
	?>
		 $('.monthlyExpensesContsoa input').prop('disabled',true);
		 $('.DFs select').prop('disabled',true);
	<?php
	}
	?> 
</script>