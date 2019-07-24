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
	background-color: #183867;
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
	font-size:11px;
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
	font-family: Agency FB;
	width:688px;
	margin-left: 15;
	text-align: center;
	height:auto!important;
	margin-top: 20px;
}
.tblmainsumlist input[type="text"]{
	width:100%;
	border:none;
	background:none;
	font-size: 11px;
	font-family: verdana;
	color: black;
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
.FSPrintsalestask{
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
.FSPrintsalestask2{
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
.buttonFS{
	float:right;
	margin-top:4px;
	margin-right:5px;
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
.FSGentask{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	/* position: absolute; */
	outline-style: none;
	/* margin-top: 49px; */
}
.isNumeric{
	text-align: right;
}
.reportHolderOR{
	width: 720px;
	height:808px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow:scroll;
	float:left;
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
.noSales{
	text-align: center;
	font-family: Verdana;
	font-size: 14px;
	color: #183867;
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
	
	
	$report = $this->salesView;
?>

<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<form method='post' action='<?php echo URL ?>report/new_salestask' id='form'>
	<div class="mainformitemsum">
		<div class="sbis">Sales per Service</div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode"/>
			<input type="button" class="FSPrintsalestask printSPS" value="">
			<input type="button" class="FSPrintsalestask2 exportSalesTask exportButton" value="">
		</div>
		<div style="clear:both;"></div>
		<div class="DFstask">
			<div style="float:left;">
				<div class="dateDivtask txtRadio">Date From: <input type="date" class="ButInputtask" name="startdate" value="<?= isset($_POST['startdate']) ?  $_POST['startdate'] : date('Y-m-d') ?>"> 
					To: <input type="date" class="ButInputtask" name="enddate" value="<?= isset($_POST['enddate']) ?  $_POST['enddate'] : date('Y-m-d') ?>">
					
				</div>
			</div>
			<div style="float:right;margin-top:4px;margin-right:5px;">
				<input type="submit" class="FSGentask searchsalestask" value="" id="searchsalestask">
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
			YOU DON'T HAVE SALES PER SERVICE.
		</div>
	<?php
	}
	?>
</div>

<script>

	$('.buttonFS').addClass('hidden');
	$('form').submit(function() {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
		// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genSalesPerService', 
				{
					startdate: $('input[name="startdate"]').val(), 
					enddate: $('input[name="enddate"]').val()}
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
		location = URL + 'report/exportSalesPerService?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
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
				$('.FSGentask').click();

		<?php
		}
		?>
		$('.viewMode').click(function() {
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			
			window.open(URL + 'report/newtab_salesPerService?startdate=' + startdate + '&enddate=' + enddate);
			
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
