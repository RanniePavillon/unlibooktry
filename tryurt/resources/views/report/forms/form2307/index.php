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
.birform2307{
	transform: scale(0.70);
	width: auto;
	margin-top: -553px;
	margin-left: -295px;
	image-rendering: optimizeSpeed;
	image-rendering: -o-crisp-edges;
	image-rendering: -webkit-optimize-contrast;
	image-rendering: optimize-contrast;
	-ms-interpolation-mode: nearest-neighbor;
}
.gen101{
	width: 720px !important;
	height:1132px;
	box-shadow: 2px 2px 15px #000;
	margin-left:-7px;
	overflow: scroll;
	margin-top:10px !important;
}
.BSText{
	font-size:24px;
	font-family:agency fb2;
	color: #c51400;
	float: left; 
}
.buttonFS{
	float:right;
	margin-right:5px;
}

.DFs{
	margin-top: 0px;
	height: 65px;
}
.transDate{
	font-family:Verdana;
	font-size:12px;
	color:#c51400;
}
.generatediv{
	float: right;
	margin-right:5px;
}

.lineDivider{
	height: 3px;
	width: 737px;
	background: #BE3323;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: -15px;
}
.form2307Holder{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
}
.yearname2 {
	width: 150px;
	height: 28px;
	padding-left: 5px;
	box-shadow:none!important;
}
.selectVendorName{
	width: 150px;
	height: 25px;
	box-shadow:none!important;
}
.containers{
	font-family:Arial !important;
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
.topright {
    width: calc(100% - 869px) !important;
    margin-right: 20px;
}
</style>
<title>Form 2307</title>

<link rel="shortcut icon" href="<?php echo URL; ?>public/images/title_logo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/report/forms/form2307/indexs.css"/>
<script src="<?php echo URL; ?>views/report/forms/form2307/index.js"></script>
<?php
$currentMonth = date("F");
?>
<div class="form2307Holder">
    <div class="linereport"> 
        <div class="BSForm">
            <div class="BSText">Form 2307</div>
           <div class="buttonFS">
				<input type="button" class="FSPrint hidden" value="Export">
				<input type="button" class="FSPrint printPdf hidden" value="" onClick="window.print()">
			</div>
            <div style="clear:both;"></div>
            <div class="DFs">
                <div style="margin-top:10px;">
					<label class="transDate">Transaction Date:</label>
					<input type="text" class="yearname2 hasDate" name="enddate" value="<?= date('m/d/Y') ?>">
                    <div style="margin-top:10px;font-family:Verdana;font-size:12px;color:rgb(37, 181, 239);">
                        <div style="float:left;margin-left:2px;">
                            <label class="transDate">Vendor Name</label>
                            <select class="selectVendorName">
                                <option></option>
                                <?php
                                if (!empty($this->vendors)) {
                                    foreach ($this->vendors as $vendor) {
                                        echo '<option value="' . $vendor->id . '" title="' . $vendor->supplierAccount . '" >' . $vendor->name . '</option>';
                                    }
                                }
                                ?>
                            </select>
							<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports"/>
                        </div>
						
                        <div style="clear:both;"></div>
						<div class="lineDivider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	if (!$this->vendors) {
		?>
	   <div class="TC" style="margin-top: 80px;font-family: Verdana;font-size:14px;text-align: center;color:#183867;font-weight:bold;">
			You don't have Form 2307.
		</div>
	<?php
	}else{
	?>
    <form class="hidden">
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline hidden" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;margin-top:30px;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform2307 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		<div style="clear:both;"></div>
		
        <div class="gen101">
            <div class="birform2307 divClass" id="divelement">
				  
			</div>
        </div>
		
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline hidden" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder buttonbelow">
			<input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
			<input type="button" value="POST" class="postform2307 addsavebutton buttonstyles2 addsavebuttonreports"/>
		</div>
		
    </form>
	<?php
	}
	?>
</div>


<script>
    $(function() {
		<?php
		if (isset($_GET['year'])) {
			?>
					$('.yearname2').val('<?= $_GET['year'] ?>');
					$('.selectVendorName').val('<?= $_GET['vendor'] ?>');

					$('.reportgenerate').click();
			<?php
		}
		?>
		
		<?php
		if (!$this->vendors) {
		?>
		   $('.DFs input').prop('disabled', true);
		   $('.DFs select').prop('disabled', true);
		<?php
		}
		?>
    })
</script>