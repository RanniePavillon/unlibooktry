<style>
.mainformitemsum{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #183867;
}
.sbis{
	font-size:24px;
	font-family: agency fb2;
	color:#183867;
	float: left;
}
.parameteritem{
	padding-top:15px;
	margin-left:20px;
}	
div.scroll {
    height: 463px;
	overflow: scroll;
	margin-left: 4px;
	width: 756px;
	margin-top: 20px;
	overflow-x: hidden;
}
.fromtodate{
	margin-top:15px;
	margin-left:60px;
}
.fromtodatetable{
	margin-top:5px;
	font-size: 12px;
	font-family: verdana;
	font-weight: bold;
	margin-top:20px;
	margin-left:0px;
}
.fromtodatetable input[type="date"]{
	font-size: 12px;
	font-family: verdana;
	width:140px;
	padding:5px;
	height:27px;
}
.tblmainsumlist{
	font-size: 12px;
	font-family: Verdana;
	color: black;
	border-collapse: collapse;
	width:100%;
	margin-top:30px;
}
.tblmainsumlist th{
	text-align: left;
	background-color: #BE3323 !important;
	color: white;
	padding: 6px;
	height: 27px;
	border: 1px solid gray;
}
.tblmainsumlist td{
	text-align:left;
	background-color:white;
	color:black;
	padding:5px;
	height:27px;
	border:solid 1px rgb(197, 196, 196);
	font-size:12px;
}
.searchsalestask{
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
	cursor: pointer;
	margin-top:-2px; */
}

.tblmainsumlist input[type="text"]{
	width:100%;
	border:none;
	background:none;
	font-size: 11px;
	font-family: verdana;
	color: black;
}
.DFstask{
	margin-top:5px;
	font-size:19px;
	font-family: Agency FB;
	border-radius: 10px;
	color:#183867;
}
.dateDivtask{
	margin-top:5px;
}
.dateDiv2task{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
	font-weight:normal;
}
.ButInputtask::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	/* width:8px;*/
	height:24px;
}	
/* .ButInputtask::-webkit-calendar-picker-indicator{
	width:8px;
	height:14px;
} */
.ButInputtask::-webkit-input-date{
	-webkit-appearance: none;
} 

.ButInputtask{
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

.isNumeric{
	text-align: right;
}
.reportHolderOR{
	width: 720px;
	height:1244px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow:scroll;
	float:left;
}

.noSales{
	font-weight: bold;
	color: #183867;
	font-family: Verdana;
	font-size: 14px;
	text-align: center;
}
.itemSelect{
	width: 151px;
    height: 27px;
	font-family:verdana;
	font-size:12px;
	padding:5px;
}

@media print { 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS, .mainformitemsum {
		display:none !important;
	}
	
	.reportForm { 
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
	.tblmainsumlist th{
		color:#000 !important;
	}
	.tdTotal, .tdTotal2{
		color:#000 !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
}
</style>

<?php
    $info = new TblOrganizationInfo();
    $org  = new TblOrganization();
    
    if(Session::getSession('user')){
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
        $org  = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
        Session::setSession('infoid', $info->id);
//        Session::setSession('orgid', $info->orgId);
        
//        print_r($info->emailAddress); exit;
    }
	
	
	$report = $this->checkInventoryAvailability;
?>

<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<form method='post' action='<?php echo URL ?>report/new_salesitem' id='form'>
	<div class="mainformitemsum">
		<div class="sbis reportTitle">Inventory per Item</div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode addsavebuttonreports" style="margin-right:5px;"/>
			<input type="button" class="FSPrintsalestask printSPS addsavebuttonreports" value="PRINT">
			<input type="button" class="FSPrintsalestask2 exportSalesTask exportButton addsavebuttonreports" value="EXPORT">
		</div>
		<div style="clear:both;"></div>
		<div class="DFstask">
			<div style="float:left;">
				<div class="reportcolor">
					Item: 
					<select name="item" class="itemSelect">
						<?php
							if($report){
						?>
								<option value="%%">All</option>
								<?php
									foreach($report as $item){
								?>
										<option value="<?= $item['item_id']?>">
											<?= $item['description']?>
										</option>

						<?php
									}
							}
						?>
					</select>
				</div>
				<div class="reportcolor" style="margin-top:5px;">
					Location: 
					<select name="location" class="itemSelect">
						<?php
							if($report){
						?>
								<option value="%%">All</option>
								<?php
									foreach($report as $location){
								?>
										<option value="<?= $location['warehouse_id']?>">
											<?= $location['warehouse_name']?>
										</option>
						<?php
									}
							}
						?>
					</select>
				</div>
				<div class="dateDivtask txtRadio reportcolor">Date From: <input type="text" class="ButInputtask hasDate"  name="startdate" value="<?= isset($_POST['startdate']) ?  $_POST['startdate'] : date('m/d/Y') ?>"> 
					To: <input type="text" class="ButInputtask hasDate" name="enddate" value="<?= isset($_POST['enddate']) ?  $_POST['enddate'] : date('m/d/Y') ?>">
						<input type="submit" class="FSGentask searchsalestask addsavebuttonreports" value="GENERATE" id="searchsalestask">
				</div>
				
			</div>
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
		</div>
		<!--<div class="hmoDivider"></div>-->
	</div>
</form>
<div class="reportHolderContainer trhidden">
	<?php
	if(!$report){
	?>
		<div class="noSales">
			You don't have Sales per Service.
		</div>
	<?php
	}
	?>
</div>

<script>
	// datepicker
	$('.hasDate').prop('readonly', true);
	$('.hasDate').datepicker({
		dateFormat: 'mm/dd/yy'
	});
	$('.hasDate').change(function(){
		dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
		$(this).val(dates);
	});


	
	$('.buttonFS').addClass('hidden');
	$('form').submit(function() {
		//alert('s');
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
		// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genInventory', 
				{
					startdate: $('input[name="startdate"]').val(), 
					enddate: $('input[name="enddate"]').val(),
					item: $('select[name="item"]').val(),
					location: $('select[name="location"]').val()	
				}
				)
				.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
				}).fail(function() {
					alert('Connection Error!');
			});
			return false;
	});
	
	$('.exportSalesTask').click(function(){
		startdate = $('input[name="startdate"]').val(); 
		enddate = $('input[name="enddate"]').val();
		item = $('select[name="item"]').val();
		locations = $('select[name="location"]').val();

		location = URL + 'report/exportInventory?startdate=' + startdate + '&enddate=' + enddate + '&item=' + item + '&location=' + locations;
	});
	
	$('.printSPS').click(function(){
		window.print();
	});
	
	/* viewMode codes */
		<?php
		 if (isset($_GET['startdate'])) {
			?>
				$('input[name="startdate"]').val('<?= $_GET['startdate'] ?>');
				$('input[name="enddate"]').val('<?= $_GET['enddate'] ?>');
				$('select[name="item"]').val('<?= $_GET['item'] ?>');
				$('select[name="location"]').val('<?= $_GET['location'] ?>');
				$('.FSGentask').click();

		<?php
		} 
		?>
		 $('.viewMode').click(function() {
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			item = $('select[name="item"]').val();
			locations = $('select[name="location"]').val();	
			
			window.open(URL + 'report/newtab_Inventory?startdate=' + startdate + '&enddate=' + enddate + '&item=' + item + '&location=' + locations);
			
			return false;
		});
		 
	<?php
	if(!$report){
	?>
		$('.mainformitemsum input').prop('disabled',true);
		// $('.DFs select').prop('disabled',true);
	<?php
	}
	?>
				
</script>
