<style>
.form1601eHolder{
	margin-left: -264px;
	width: 1241px;
	transform: scale(0.58);
	margin-top: -492px;
	image-rendering: -webkit-optimize-contrast;
}
input[type="text"]{
	font-weight: bold;
	text-align: right;
	font-size: 20px;
}
input[type="text"]:disabled{
	background-color:transparent!important;
}
.BSForm{
	
}
.BSText{
	padding-left:15px;
	padding-top:10px;
	font-size:24px;
	font-family:agency fb2;
	color: #183867;
	float: left;
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
	float:right;
	margin-top:13px;
}
.DFs{
	padding-left:15px;
	border-radius: 10px;
	height:65px;
}
.ButInput{
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
.dateDiv{
	padding-top: 5px;
}
.dateDiv2{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
}
.FSGen{
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

.yearname{
	width:120px;
	height:26px;
}
.generate{
	cursor: pointer;
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style: none;
}	
.hmoDivider{
        width: 100%;
		height: 2px;
		border-radius: 2px;
		background: rgb(37, 181, 239);
		margin-top: -6px;
    }
.generatediv{
		float: right;
		margin-top: 8px;
		margin-right:5px;
	}
.itrbutton{
	margin-right:8px;
}
.gen101Holder{
	width:720px;
	height:1163px;
	box-shadow:2px 2px 15px #000;
	margin-left:9px;
	overflow: scroll;
	margin-top:20px;
}
.gen101{
	padding-top:77px;
}
.buttonbelow{
	float: right;
	margin-right:8px;
	margin-top: 14px;
}
.selectMonth {
	width: 133px;
	height: 25px;
	font-size: 11px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border: 1px solid gray;
	margin-right: 5px;
	border-radius: 5px;
	outline-style:none;
}
.selectYear::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	height:21px; 
}	
.selectYear{
	width: 69px;
	height: 25px;
	font-family: Verdana;
	font-size: 11px;
	padding-left: 5px;
	border: 1px solid gray;
	border-radius: 5px;
	outline-style:none;
}
.buttonstyles{
	width: 100px;
	height: 28px;
	border:none;
	border-radius:5px;
	background-image: url('<?=URL?>public/images/s.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style:none;
	margin-left:5px;
}
.buttonstyles2{
	width: 100px;
	height: 28px;
	border:none;
	border-radius:5px;
	background-image: url('<?=URL?>public/images/post_payment.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style:none;
}
.lineDivider{
	height: 3px;
	width: 737px;
	background: #183867;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
}
.buttonFS{
	float:right;
	margin-right:5px;
}
.fileAndPayOnline{
	width: 150px;
	height: 28px;
	background: rgb(173, 172, 172);
	border: none;
	border-radius: 5px;
	color: rgb(250, 250, 250);
	font-family:agency fb2;
	font-size: 17px;
	font-weight: bold;
	letter-spacing: 1;
	cursor:pointer;
	outline-style:none;
}
.addsavebutton{
	cursor:pointer;
}
.viewMode{
	width: 133px;
	height: 28px;
	background: rgb(21, 67, 136);
	color:#EDEAEA;
	font-family: agency fb2;
	font-size: 18px;
	border: none;
	border-radius: 5px;
	float:left;
}
.txtMOnthYear{
	font-family:Verdana;
	font-size:12px;
	color:#183867;
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
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div>

		<div class="linereport"> 
			<div class="BSForm">
				<div class="BSText">Form 1601E</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden" value="Export">
					<input type="button" class="FSPrint printPdf hidden" value="" onClick="window.print()">
				</div>
				<div style="clear:both;"></div>
				<div class="DFs">
					<div style="float:left">
						<label class="txtMOnthYear">Month: </label>
						<select name="month" style="margin-top:10px;" class="yearname selectMonth">
							<?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date('F', strtotime('2014-'.$x.'-01'))) ?>"
								<?= $x == date('m') ? ' selected ' : '' ?>>
								<?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
							<?php
								}
							?>
						</select>
						<label class="txtMOnthYear">Year:</label> 
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname selectYear"/>
					</div>
					<div class="generatediv">
						<input type="button" value="" class="generate reportgenerate"/>
					</div>
					<div style="clear:both;"></div>
					<div class="lineDivider">
					</div>
				</div>
			</div>
			<!--<div class="hmoDivider"></div>-->
		</div>

	<form class="hidden form1601eHolderForm">
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode"/>
			<input type="submit" value="" class="addsavebutton buttonstyles"/>
			<input type="button" value="" class="postform1601e addsavebutton buttonstyles2"/>
		</div>
		<div style="clear:both;"></div>
		<!--<div class="zoomDiv">
			<input type="button" id="zoomOut" value="-">
			<input type="button" id="zoomIn" value="+">
		</div>-->
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form1601eHolder divClass" id="divelement">
					
				</div>
			</div>
		</div>
		
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="" class="addsavebutton buttonstyles"/>
			<input type="button" value="" class="postform1601e addsavebutton buttonstyles2"/>
		</div>
	</form>
	<div class="formLoading hidden"></div>
</div>

<script>
	$(function(){
		// $('.formLoading').html(loading);
		$('#zoomIn').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.7 }, 400);
		});
    
		$('#zoomOut').click(
		function() {
			$("#divelement").animate({ 'zoom': 0.4 }, 400);
		});
		
		$('.generate').click(function(){
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$('.formLoading').removeClass('hidden');
			$('.form1601eHolderForm').addClass('hidden');
			$.post( URL + 'report/form1601e/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					$('.form1601eHolder').html(returnData);
					$('form').removeClass('hidden');
					$('.formLoading').addClass('hidden');
					$('.isNumeric').each(function(){
						$(this).val($.number($(this).val(), 2));
					});
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
					
					
				})
		});
		
		$('form').submit(function(){
			$.post(URL + 'report/form1601e/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				});
			return false;
		});
		
		$('.postform1601e').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1601e/setReport?status=post',$('form').serialize())
					.done(function(returnData){
						if(returnData == 0){
							$('.generate').click();
						} else {
							alert(returnData);
						}
					});
			}
		});
		
		
		/* viewMode codes */
		$('.viewMode').click(function() {
		
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			window.open(URL + 'report/newtab_form1601e?month=' + month + '&year=' + year);
			
			return false;
		});
	
	
		<?php
		if (isset($_GET['month'])) {
			?>
			$('select[name="month"]').val('<?= $_GET['month']?>');
			$('input[name="year"]').val('<?= $_GET['year']?>');
			$('.generate').click();
		<?php
		}
		?>
		
	});
</script>