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
.birform0605 {
    transform: scale(0.61) !important;
    width: auto !important;
    margin-top: -185px !important;
    margin-left: -413px !important;
    image-rendering: optimizeSpeed;
    /* image-rendering: -moz-crisp-edges; */
    image-rendering: -o-crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: optimize-contrast;
    -ms-interpolation-mode: nearest-neighbor;
}
.gen101{
	width: 720px !important;
	height:1178px !important;
	box-shadow: 2px 2px 15px #000;
	margin-left:-7px !important;
	overflow: scroll;
	margin-top: 20px;
	font-family:Arial !important;
}
.buttonbelow{
	float: right;
	  padding-right: 25px;
	  margin-top: 15px;
}
.monLabel{
	color: rgb(37, 181, 239);
	font-size: 12px!important;
	font-family:Verdana;
	padding-left: 5px !important;
}
.form0605Holder{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
}
.BSText{
	font-size:24px;
	font-family:agency fb2;
	color: #c51400;
	float: left;
	padding:0px!important;
}
.DFs{
	padding-left:0px!important;
	margin-top:0px!important;
	width:720px!important
}
.buttonFS{
	float:right;
	margin-right:5px;
}

.generatediv{
	float: right;
	margin-right:5px;
	margin-top: 8px;
}

.txtMOnthYear {
    font-family: Verdana;
    font-size: 12px;
    color: #c51400;
}
.monthname{
	width: 133px !important;
	height: 25px !important;
	font-size: 12px;
	font-family: Verdana;
	padding-left: 5px !important;
	box-shadow: none;
	border: 1px solid gray;
	margin-right: 5px;
	border-radius: 2px;
	outline-style: none;
}
.yearname{
	width: 69px !important;
	height: 27px !important;
	font-family: Verdana;
	font-size: 12px;
	padding-left: 5px !important;
	border: 1px solid gray;
	border-radius: 2px;
	outline-style: none;
}
.hmoDivider {
    height: 2px;
    border-radius: 2px;
    background: #BE3323!important;
    margin-top: 10px;
    margin-left: -16px!important;
	width: 739px!important;
}
.container{
	width: 100% !important;
}
.topright1{
	width: calc(100% - 853px) !important;
	margin-right:0px !important;
}

.itrbutton{
	margin-right:8px;
}
.addsavebutton{
	cursor:pointer;
}


.buttonbelow{
	float: right;
	margin-right:8px;
	margin-top: 14px;
}

.generate{
	margin-left:10px;
}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<script src="<?php echo URL; ?>views/report/forms/form0605/index.js"></script>
<link href="<?php echo URL; ?>views/report/forms/form0605/index.css" rel="stylesheet" />
<div class="form0605Holder">
    <div class="linereport2"> 
        <div class="BSForm">
            <div class="BSText">Form 0605</div>
            <div class="buttonFS">
				<input type="button" class="FSPrint hidden addsavebuttonreports" value="EXPORT">
				<input type="button" class="FSPrint printPdf hidden addsavebuttonreports" value="PRINT" onClick="window.print()">
			</div>
			<div style="clear:both;"></div>
            <div class="DFs">
				<div style="float:left;">	
					<label class="txtMOnthYear">Month:</label>
					<select name="month" style="margin-top:10px;" class="monthname">
						<?php
						$currentMonth = date("m");
						for ($x = 1; $x <= 12; $x++) {
							if ($x == $currentMonth) {
								?>
								<option selected='selected' value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>">
									<?= date('F', strtotime('2014-' . $x . '-01')) ?></option>

								<?php
							} else {
								
								?>
							<option value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>">
								<?= date('F', strtotime('2014-' . $x . '-01')) ?></option>
							<?php
							}
						}
						?>
					</select>
					<label class="txtMOnthYear">Year:</label>
					<input type="number" name="year" value="<?= date('Y') ?>"  class="yearname" style="margin-left:5px;"/>
					<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports"/>
				</div>
				
				<div style="clear:both;"></div>
            </div>
        </div>
        <div class="hmoDivider"></div>	
    </div>

    <form class="hidden">
        <div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline hidden" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;margin-right:6px!important;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform2307 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		<div style="clear:both;"></div>
		
		<div class="gen101">
			<div class="generatedReports2  birform0605 divClass " id="divelement">

			</div>
        </div>
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline hidden" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow" style="padding-right:0px!important;margin-right:6px!important;">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform2307 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
    </form>
</div>

<script>
    $(function() {
		
		<?php
			if(isset($_GET['month'])){
		?>
				$('select[name="month"]').val('<?= $_GET['month'] ?>');
				$('input[name="year"]').val('<?= $_GET['year'] ?>');
				
				$('.reportgenerate').click();
		<?php
			}
		?>

    })
</script>