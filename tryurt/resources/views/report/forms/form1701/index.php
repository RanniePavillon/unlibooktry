<style>
.addsavebuttonreports{
	font-family: agency fb2;
	font-size: 15px;
	font-weight: bold;
	border-radius: 5px;
	color: rgb(230, 230, 230);
	-moz-border-radius: 30px;
	background: rgb(28, 181, 239);
	background: -moz-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
	background: -webkit-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
	background: -o-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
	background: -ms-linear-gradient(90deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
	background: linear-gradient(0deg, rgb(172, 42, 27) 30%, rgb(197, 56, 40) 78%);
	-moz-box-shadow: 0px 2px 1px rgba(50, 50, 50, 0.75);
	border:none;
	width: 100px;
	height: 28px;
}
.form1701Holder{
	margin-left: -149px;
	width: 100%;
	transform: scale(0.56);
	margin-top: -9561px;
	image-rendering: -webkit-optimize-contrast;
}
input[type="text"]{
	font-weight: bold;
	text-align: right;
	font-size: 20px;
}

.BSText{
	padding-left:15px;
	padding-top:10px;
	font-size:23.4px;
	font-family: agency fb2;
	color: #c51400;
	/* float: left; */
}

.buttonFS{
	float: right;
	margin-right: 15px;
	margin-top: -22px;
}
.DFs{
	padding-left:15px;
	height:51px;
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

.yearname{
	width:120px;
	height:26px;
}

.hmoDivider{
	width: 100%;
	height: 2px;
	border-radius: 2px;
	background: rgb(37, 181, 239);
	margin-top: 9px;
}
.generatediv{
	float: right;
	margin-top:8px;
	margin-right:8px;
}

.buttonbelow{
	float: right;
	margin-right:8px;
	margin-top: 14px;
}
.selectYear::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	height:21px; 
}	
.selectYear{
	width: 69px;
	height: 27px;
	font-family: Verdana;
	font-size: 12px;
	padding-left: 5px;
	border: 1px solid gray;
	border-radius: 2px;
	outline-style:none;
}

.lineDivider{
	height: 3px;
	width: 737px;
	background: #BE3323;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
}
.gen101Holder{
	width:720px;
	height:1157px;
	box-shadow:2px 2px 15px #000;
	margin-left:9px;
	overflow: scroll;
	margin-top:20px;
}
.gen101{
	padding-top:47px;
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

.txtMOnthYear{
	font-family:Verdana;
	font-size:12px;
	color:#c51400;
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
				<div class="BSText">Form 1701</div>
				<div class="buttonFS">
					<input type="button" class="FSPrint hidden addsavebuttonreports" value="EXPORT">
					<input type="button" class="FSPrint printPdf hidden addsavebuttonreports" value="PRINT">
				</div>
				<div class="DFs" >
					<div style="float:left;">
						
						<select name="month" style="margin-top:10px;" class="yearname hidden">
							<option value="december">December</option>
							<?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
									<?= date("F", mktime(null, null, null, $x)); ?>
								</option>
							<?php
								}
							?>
						</select>
						<label class="txtMonthYear">Year:</label>
						<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname selectYear" style="margin-top:10px;margin-left:10px;"/>
						<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports" style="margin-left:10px;"/>
					</div>
					<div style="clear:both;"></div>
					<div class="lineDivider">
					</div>
				</div>
			</div>
			<!--<div class="hmoDivider"></div>-->	
		</div>
	
<!--	<div>
		<select name="month">
			<?php
				for($x = 1; $x <= 12; $x++){
			?>
				<option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
					<?= date("F", mktime(null, null, null, $x)); ?>
				</option>
			<?php
				}
			?>
		</select>
		<input type="number" name="year" value="<?= date('Y') ?>"/>
		<input type="button" value="GENERATE" class="generate"/>
	</div>-->
	<form class="hidden form1701HolderForm">
		<div style="float:left;margin-top:20px;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/> 
			<input type="button" value="POST" class="postform1701 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		<div style="clear:both;"></div>
		
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form1701Holder">
					
				</div>
			</div>
		</div>
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/> 
			<input type="button" value="POST" class="postform1701 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
	</form>
	<div class="formLoading hidden"></div>
</div>


<?php
	function setData($array,$data,$index=''){
		if (!empty($array)) {
			if($index == ''){
				if(!empty($array->$data)){
					return $array->$data;
				} elseif(!empty($array[$data])) {
					return $array[$data];
				}
			} else {
				if(!empty($array[$index]->$data)){
					return $array[$index]->$data;
				}
			}
		}
	}
?>

<script>
	$(function(){
		// $('.formLoading').html(loading);
		$('.generate').click(function(){
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			$('.form1701Holder').html('');
			$('.buttonHolder').removeClass('hidden');
			$('.formLoading').removeClass('hidden');
			$('.form1701HolderForm').addClass('hidden');
			$.post( URL + 'report/form1701/getReport',{'month':month, 'year':year})
				.done(function(returnData){
					$('.formLoading').addClass('hidden');
					$('.form1701Holder').html(returnData);
					$('form').removeClass('hidden');
					
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
				})
		});
		
		$('form').submit(function(){
			$.post(URL + 'report/form1701/setReport',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
				})
				
				return false;
		});
		
		$('.postform1701').click(function(){
			confirmPost = confirm('Are you sure you want to post?');
			if(confirmPost){
				$.post(URL + 'report/form1701/setReport?status=post',$('form').serialize())
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
			
			window.open(URL + 'report/newtab_form1701?month=' + month + '&year=' + year);
			
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