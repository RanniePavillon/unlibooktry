<style>
.mainformitemsum{
	padding-top:10px;
	padding-left:5px;
	font-size: 12px;
	font-family: verdana;
	font-weight: bold;
}
.sbis{
	margin-left:20px;
	font-size:16px;
}
.parameteritem{
	padding-top:15px;
	margin-left:20px;
}	
div.scroll {
    height: 651px;
	overflow: scroll;
	margin-left: 4px;
	width: 756px;
	margin-top: 20px;
	
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
	
}

.tblmainsumlist{
		font-size: 12px;
		font-family: verdana;
		color: black;
		border-collapse: collapse;
		/* margin-top: 20px;
		margin-left: 8px; */
		width: 731px;
}
.tblmainsumlist th{
		text-align:left;
		background-color:rgb(63, 176, 63);
		color:white;
		padding:3px;
		height:27px;
		border:1px solid #fff;
}
.tblmainsumlist td{
		text-align:left;
		background-color:white;
		color:black;
		padding:5px;
		height:27px;
		border:solid 1px rgb(197, 196, 196);
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
.hmoDivider{
	width:100%;
	height:6px;
	border-radius:2px;
	background:gray;
	margin-top:10px;
}
.fromReg{
	text-align:center;
	font-weight:bold;
	margin-top:20px;
}
.tblmainsumlist input[type="text"]{
	width:100%;
	border:none;
	background:none;
	font-size: 12px;
	font-family: verdana;
	color: black;
}
.FSPrintsalestask{
	width: 100px;
	height: 28px;
	color: white;
	font-size: 14px;
	font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
	background-color:rgba(135, 194, 15, 0.87);
	font-weight: bold;
	border: none;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	margin-left: 5px;
	cursor: pointer;
}
.buttonFS{
	margin-left: 532px;
	margin-top: -22px;
}

.DFstask{
	background-color: rgba(128, 128, 128, 0.12);
	margin-top: 15px;
	padding-left: 10px;
	font-size: 12px;
	font-family: verdana;
	border-radius: 10px;
}
.dateDivtask{
	padding-top: 5px;
}
.dateDiv2task{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
	font-weight:normal;
}
.ButInputtask{
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
.FSGentask{
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
	margin-left: 637px;
	float: left;
	margin-top: -56px;
	cursor: pointer;
}
.isNumeric{
	text-align: right;
}
@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS, .mainformitemsum{
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
	$report = $this->checkSalesPerItem;
print_r($report);
exit;
?>
<script>
		$('.buttonFS').addClass('hidden');
	$('form').submit(function() {
			$('.reportHolderContainer').html(loading);
		$.post(URL + 'report/genSalesPerItem', 
			{
				startdate: $('input[name="startdate"]').val(), 
				enddate: $('input[name="enddate"]').val()}
			)
			.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
				$('.reportHolderContainer').html(returnData);
			}).fail(function() {
				alert('Connection Error!');
			});
		return false;
	});
	
	$('.exportSalesTask').click(function(){
		location = URL + 'report/exportTask?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
	});
	
	$('.printSPS').click(function(){
		window.print();
	});

</script>


<form>
	<div class="mainformitemsum">
		<div class="sbis">Sales per Item</div>
		<div class="buttonFS">
			<input type="button" class="FSPrintsalestask printSPS" value="Print">
			<input type="button" class="FSPrintsalestask exportSalesTask" value="Export">
		</div>
		<div class="DFstask">
			<div class="dateDivtask"><b>Date:</b></div>
			<div class="dateDiv2task">From <input type="date" class="ButInputtask" name="startdate" value="<?= isset($_POST['startdate']) ?  $_POST['startdate'] : date('Y-m-d') ?>"> To <input type="date" class="ButInputtask" name="enddate" value="<?= isset($_POST['enddate']) ?  $_POST['enddate'] : date('Y-m-d') ?>"></div>
			<input type="submit" class="FSGentask searchsalestask" value="Generate" id="searchsalestask">
		</div>
		<div class="hmoDivider"></div>
	</div>
</form>
<div class="reportHolderContainer trhidden">
	
</div>