
<style>
.auditTrialCont{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #183867;
}
.reportTitle {
	font-size:24px;
	font-family: agency fb2;
	color: #183867;
	float:left;
}
.buttonFS{
	float: right;
	margin-top: 4px;
	margin-right:5px;
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
	outline-style: none;
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
	outline-style: none;
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
	margin-left: 5px;
	cursor: pointer;
}
.DFs{
	margin-top:5px;
	font-size:19px;
	font-family: Agency FB;
	border-radius: 10px;
	color:#183867;
}
.dateDiv2{
	padding-top: 5px;
}
.txtRadio{
	font-size: 12px;
	font-family: Verdana;
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
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	/* position: absolute; */
	margin-top:4px;
	outline-style: none;
}
.lineDivider{
	height: 3px;
	width: 737px;
	background: #183867;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
}
.tblShowReport_div{
	margin-left:45px;
}
.reportHolderOR{
	width: 720px;
	height:640px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow: scroll;
	float:left;
}
.fromReg{
	font-family: Agency FB;
	width:675px;
	margin-left: 15;
	text-align: center;
	height:auto!important;
	padding-top:20px;
}.nameText{
	font-size: 14px;
	font-family: Verdana;
	text-transform: uppercase;
	font-weight: bold;
}
.ORCompanyInfo{
	font-size: 12px;
	font-family: Verdana;
	font-weight: bold;
}
.noAuditTrail{
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
<!--<?php
    $report = $this->summaryJournal;
?>-->
<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<form>
	<div class="auditTrialCont">
		<div class="reportTitle">
			Audit Trail
		</div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode"/>
			<input type="button" class="FSPrint printME" value="">
			<input type="button" class="FSPrint2 exportButton" value="">
		</div>
		<div style="clear:both;"></div>
		<div class="DFs">
			<div style="float:left;">
				<div class="dateDiv"></div>
				<div class="dateDiv2 txtRadio">Date From: <input type="date" class="ButInput" name="startdate" value="<?= 
					isset($_POST['startdate']) ? $_POST['startdate'] : date('Y-m-d') ?>" disabled> 
					To: 
					<input type="date" class="ButInput" name="enddate" value="<?= 
					isset($_POST['enddate']) ? $_POST['enddate'] : date('Y-m-d') ?>" disabled>
				</div>
			</div>
			<div style="float:right;margin-right:5px;">
				<input type="submit" class="FSGen" value="" disabled>
			</div>
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
		</div>
		<div class="tblShowReport_div">
		</div>
	</div>
</form>

<div class="reportHolderContainer trhidden">
	<?php
	if(!$report){
	?>
		<div class="noAuditTrail">
			YOU DON'T HAVE AUDIT TRAIL.
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
			
			$('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genAuditTrial', 
				{
					'startdate': $('input[name="startdate"]').val(), 
					'enddate': $('input[name="enddate"]').val()
				})										
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
		
		
		$('.exportButton').click(function(){
			location = URL + 'report/exportSummaryJournal?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
		});
		
		$('.printME').click(function(){
			window.print();
		});
		
			
		<!--<?php
		if(!$report){
		?>
			$('.monthlyExpensesCont input').prop('disabled',true);
			$('.DFs select').prop('disabled',true);
		<?php
		}
		?>-->
	});
</script>














