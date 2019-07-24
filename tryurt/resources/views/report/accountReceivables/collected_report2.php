<style>
.tr{
	text-align: right !important;
}
.monthlyExpensesCont{
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
	font-size: 11px;
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
.hmoDivider{
	width:100%;
	height:6px;
	border-radius:2px;
	background:gray;
	margin-top:10px;
}
.fromReg{
	font-family: Agency FB;
	width: 688px;
	text-align: center;
	padding-top: 20px;
	height: auto!important;
}
.nameText{
	font-size:14px;
	font-family:Verdana;
	text-transform: uppercase;
	font-weight: bold;
}
.ORCompanyInfo{
	font-size:12px;
	font-family:Verdana;
	font-weight: bold;
}
.exportButton{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color: rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 7px;
	cursor: pointer;
}
.monthlyGenerate{
	width: 100px;
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
	cursor: pointer;
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
	outline-style:none;
}
.dateDiv{
}
.dateDiv2{
	padding-top:10px;
	margin-bottom: 10px;
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
	margin-top:45px;
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
.DFs{
	font-size: 19px;
	font-family: Agency FB;
	border-radius: 10px;
	color:#183867;
}
.FSPrint{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/printNew.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.FSPrint2{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/exportNew2.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.reportTitle {
	font-size:24px;
	font-family:agency fb2;
	color: #183867;
	float: left;
}
.selectClient{
	width: 175px;
	height: 25px;
	font-size: 11px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border: 1px solid gray;
	margin-left: 5px;
	margin-right: 5px;
	outline-style:none;
}
.reportHolderOR{
	width: 720px;
	height:777px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow:scroll;
	float:left;
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
.noCollection{
	text-align: center;
	font-size: 14px;
	font-family: Verdana;
	color: rgb(0, 93, 156);
	font-weight: bold;
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
	margin-right:10px;
}
.loadingHolder{
	margin-top:300px;
	margin-left:220px;
}
.loadingimg{
	width:140px;
	height:140px;
}
</style>
	
	<title>
		REPORTS
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
	<form>
		<div class="monthlyExpensesCont">
			<div class="reportTitle">
				Collection Report
			</div>
			<div class="buttonFS">
				<input type="button" value="VIEW" class="viewMode"/>
				<input type="button" class="FSPrint printME" value="">
				<input type="button" class="FSPrint2 exportButton" value="">
			</div>
			<div style="clear:both;"></div>
			<div class="DFs">
				<div style="float:left">
					<div class="dateDiv"></div>
					<div class="dateDiv2 txtRadio">Date From: <input type="date" class="ButInput" id="di" name="startdate" value="<?=date('Y-m-d') ?>"> 
						To: 
						<input type="date" class="ButInput" id="di" name="enddate" value="<?= date('Y-m-d') ?>">
					</div>
					<div class="">
						<label class="txtRadio">Clients :</label>
						<select name="client" class="selectClient">
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
					</div>
				</div>
			</div>
			<div style="float:right;margin-right:5px;">
				<input type="submit" class="FSGen" value="">
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
		$('.buttonFS').addClass('hidden');
		$('form').submit(function() {
			
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			// $('.reportHolderContainer').html(loading);
			clientId = $('select[name="client"]').val();
			if(clientId != ''){
				$.post(URL + 'report/genCollectedReport', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val(),
					'client': clientId
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
			location = URL + 'report/exportCollectedReport?startdate=' + $('input[name="startdate"]').val()+'&enddate=' + $('input[name="enddate"]').val()+'&client=' + $('select[name="client"]').val();
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
		
		startdate = $('input[name="startdate"]').val();
		enddate = $('input[name="enddate"]').val();
		clientId = $('select[name="client"]').val();
		
		window.open(URL + 'report/newtab_collected?startdate=' + startdate + '&enddate=' + enddate + '&clientId=' + clientId);
		
		return false;
	});
	
	
	<?php
	if (isset($_GET['startdate'])) {
		?>
		$('input[name="startdate"]').val('<?= $_GET['startdate']?>');
		$('input[name="enddate"]').val('<?= $_GET['enddate']?>');
		$('select[name="client"]').val('<?= $_GET['clientId']?>');
		$('.FSGen').click();
	<?php
	}
	?>
	
	});
</script>