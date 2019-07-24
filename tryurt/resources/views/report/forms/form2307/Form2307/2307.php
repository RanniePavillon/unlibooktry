<?php
	$form2307 = isset($this->form2307) ? $this->form2307 : '';
?>
<html>
<head>
	<link rel="stylesheet" href="<?= $this->cssUrl?>style.css">
	<link rel="stylesheet" href="<?= $this->cssUrl?>modal.css">
	<script src="<?= URL?>views/report/forms/form2307/Form2307/2307.js"></script>
	<style>
		.row101 input[type="text"] {
			width: 115px;
		}
		.headers{
			padding:0 !important;
		}
		.containers{
			width: 100%;
			border: 1px solid #000;
			margin-left: 212px !important;
			margin-top: 337px !important;
		}
	</style>
</head>
<body>
<div class="containers">
<div class="headers">
	<div class="topleft fl">
		<img src="<?= $this->imageUrl?>img/logo.png">
		<div id="banner" class="fl" style="font-size: 13px;">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
	</div>
	<div class="mid fl tc">
		<h1>Certificate of Creditable Tax Withheld At Source</h1>
	</div>
	<div class="topright fr	">
		<div class="formNo">BIR Form No.</div>
		<div class="formNo"><h1>2307</h1></div>
		<div class="formNo" style="font-size: 13px;">October 2002 (ENCS)</div>
	</div>
</div>

<div class="content">
	<div class="rows" style="padding: 0 0 6.5% 0;">
		<div class="fl" style="width: 49%; padding: .5% 0 0 0;">
			<strong>1</strong><span style="font-size: 10px; margin: 0 0 0 5%;">For the Period</span>
				<div style="margin: 1% 0 0 15%;">
					<span style="font-size: 10px;">From</span>
					<span style="font-size: 10px; margin: 0 0 0 61%;">(MM / DD / YYYY)</span>
				</div>
				<div style="margin: -4% 0 0 23%;">
					<input type="text"name="item1FromM" size="2" maxlength="2" style="text-align: center;" value="<?= $_POST['date'] ? date('m',strtotime($_POST['date'])) : ''?>">
					<input type="text" name="item1FromD" size="2" maxlength="2" style="text-align: center;" value="<?= $_POST['date'] ? date('d',strtotime($_POST['date'])) : ''?>">
					<input type="text" name="item1FromY" size="4" maxlength="4" style="text-align: center;" value="<?= $_POST['date'] ? date('Y',strtotime($_POST['date'])) : ''?>">
				</div>
		</div>
		
		<div class="fl" style="width: 49%; padding: 2.3% 0 0 0;">
			<div style="margin: 1% 0 0 15%;">
				<span style="font-size: 10px;">To</span>
				<span style="font-size: 10px; margin: 0 0 0 63%;">(MM / DD / YYYY)</span> 
			</div>
			<div style="margin: -4% 0 0 23%;">
				<input type="text" name="item1ToM" size="2" maxlength="2" style="text-align: center;" value="<?= setData($form2307,'item1To') != '0000-00-00' ? date('m',strtotime(setData($form2307,'item1To'))) : ''?>">
				<input type="text" name="item1ToD" size="2" maxlength="2" style="text-align: center;" value="<?= setData($form2307,'item1To') != '0000-00-00' ? date('d',strtotime(setData($form2307,'item1To'))) : ''?>">
				<input type="text" name="item1ToY" size="4" maxlength="4" style="text-align: center;" value="<?= setData($form2307,'item1To') != '0000-00-00' ? date('Y',strtotime(setData($form2307,'item1To'))) : ''?>">
			</div>
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part I</strong>
		</div>
		
		<span style="padding-left: 32.5%;">
			<strong>Payee Information</strong>
		</span>
	</div>
	
	<div class="rows">
		<table style="width: 100%; margin-top: .5%;">
			<tr>
				<td style="width: 15%;"><strong>2</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer Identification No.</span></td>
				<td style="width: 90%;">
					<div style="margin-left: 7%;">
						<?php
							$tin = explode('-',setData($form2307,'item2'));
						?>
						
						<input type="text" name="item2[]" class="inset" maxlength="3" size="1" style="text-align: center;" value="<?= isset($tin[0]) ? $tin[0] : '' ?>">
						<input type="text" name="item2[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: center;" value="<?= isset($tin[1]) ? $tin[1] : '' ?>">
						<input type="text" name="item2[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: center;" value="<?= isset($tin[2]) ? $tin[2] : '' ?>">
						<input type="text" name="item2[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: center;" value="<?= isset($tin[3]) ? $tin[3] : '' ?>">
					</div>
				</td>
			</tr>
			<tr>
				<td><strong>3</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Payee's Name</span></td>
				<td>
					<input type="text" name="item3" class="inset" size="65" style="margin-left: 7%; text-align: left;" value="<?= setData($form2307,'item3') ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><span style="font-size: 10px; padding: 0 3% 0 23%;">(Last Name, First Name, Middle Name for individuals) (Registered Name for Non-Individuals)</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 15%;"><strong>4</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Registered Address</span></td>
				<td style="width: 58.8%;">
					<input type="text" name="item4" class="inset" size="50" style="margin-left: 7.3%; text-align: left;" value="<?= setData($form2307,'item4') ?>">
				</td>
				<td style="width: 1%; padding-left: 3%;"><strong>4A</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span></td>
				<td style="width: 15%;">
					<input type="text" name="item4A" class="inset" size="5" style="margin-left: 7%; text-align: left;" value="<?= setData($form2307,'item4A') ?>">
				</td>
			</tr>
			<tr>
				<td><strong>5</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Foreign Address</span></td>
				<td>
					<input type="text" name="item5" class="inset" size="50" style="margin-left: 7.3%; text-align: left;" value="<?= setData($form2307,'item5') ?>">
				</td>
				<td style="padding-left: 3%;"><strong>5A</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span></td>
				<td>
					<input type="text" name="item5A" class="inset" size="5" style="margin-left: 7%; text-align: left;" value="<?= setData($form2307,'item5A') ?>">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<span style="padding-left: 42.3%;">
			<strong>Payor Information</strong>
		</span>
	</div>
	
	<div class="rows">
		<table style="width: 100%; margin-top: 1%;">
			<tr>
				<td style="width: 15%;"><strong>6</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer Identification No.</span></td>
				<td style="width: 90%;">
					<div style="margin-left: 7%;">
						<?php
							$tin2 = explode('-',setData($form2307,'item6'));
						?>
					
						<input type="text" name="item6[]" class="inset" maxlength="3" size="1" style="text-align: left;" value="<?= isset($tin2[0]) ? $tin2[0] : '' ?>">
						<input type="text" name="item6[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: left;" value="<?= isset($tin2[1]) ? $tin2[1] : '' ?>">
						<input type="text" name="item6[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: left;" value="<?= isset($tin2[2]) ? $tin2[2] : '' ?>">
						<input type="text" name="item6[]" class="inset" maxlength="3" size="1" style="margin-left: 1%; text-align: left;" value="<?= isset($tin2[3]) ? $tin2[3] : '' ?>">
					</div>
				</td>
			</tr>
			<tr>
				<td><strong>7</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Payor's Name</span></td>
				<td>
					<input type="text" name="item7" class="inset" size="65" style="margin-left: 7%; text-align: left;" value="<?= setData($form2307,'item7') ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><span style="font-size: 10px; padding: 0 3% 0 23%;">(Last Name, First Name, Middle Name for individuals) (Registered Name for Non-Individuals)</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 15%;">
					<strong>8</strong>
					<span style="font-size: 10px; padding: 0 3% 0 3%;">Registered Address</span>
				</td>
				<td style="width: 58.8%;">
					<input type="text" name="item8" class="inset" size="50" style="margin-left: 7.3%; text-align: left;" value="<?= setData($form2307,'item8') ?>">
				</td>
				<td style="width: 1%; padding-left: 3%;">
					<strong>8A</strong>
					<span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span>
				</td>
				<td style="width: 15%;">
					<input type="text" name="item8A" class="inset" size="5" style="margin-left: 7%; text-align: left;" value="<?= setData($form2307,'item8A') ?>">
				</td>
			</tr>
		</table>
	</div>
	<!-- NO VALUES BEYOND THIS POINT -->
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part II</strong>
		</div>
		
		<span style="padding-left: 13%;">
			<strong>Details of Monthly Income Payments and Tax Withheld for the Quarter</strong>
		</span>
	</div>
	
	<div class="rows row101" style="padding: .2% 0 0.2% .5%; width: 99%;">
		<table border="1" style="width: 100%; font-size: 10px; border-collapse: collapse;">
			<tr>
				<th rowspan="2" style="width: 15%;">Income Payments Subject to Expanded Withholding Tax</th>
				<th rowspan="2" style="width: 5%;">ATC</th>
				<th colspan="4" style="width: 20%;">AMOUNT OF INCOME PAYMENTS</th>
				<th rowspan="2" style="width: 20%;">Tax Withheld For the Quarter</th>
			</tr>
			<tr>
				<th style="width: 10%;">1st Month of the Quarter</th>
				<th style="width: 10%;">2nd Month of the Quarter</th>
				<th style="width: 10%;">3rd Month of the Quarter</th>
				<th style="width: 10%;">Total</th>
			</tr>
		<?php
			$total1 = 0;
			$total2 = 0;
			$total3 = 0;
			$total4 = 0;
			$total5 = 0;
			
			for($x = 1; $x <= 15; $x++){
				$total1 += Controller::removeComma(checkPerQuarter($this->form2307Part2,$x-1,1));
				$total2 += Controller::removeComma(checkPerQuarter($this->form2307Part2,$x-1,2));
				$total3 += Controller::removeComma(checkPerQuarter($this->form2307Part2,$x-1,3));
				$total4 += Controller::removeComma(checkAmount($this->form2307Part2,$x-1));
				$total5 += Controller::removeComma(checkWht($this->form2307Part2,$x-1));
		?>
			<tr>
				<td style="font-size: 15px; background: #fff; padding: 2px;"><?= checkDescription($this->form2307Part2,$x-1) ?></td>
				<td><input type="text" name="atc" class="tc" size="10" style="text-align:center;" value="<?= checkAtc($this->form2307Part2,$x-1) ?>"></td>
				<td><input type="text" name="firstMonth" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= checkPerQuarter($this->form2307Part2,$x-1,1) ?>"></td>
				<td><input type="text" name="secondMonth" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= checkPerQuarter($this->form2307Part2,$x-1,2) ?>"></td>
				<td><input type="text" name="thirdMonth" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= checkPerQuarter($this->form2307Part2,$x-1,3) ?>"></td>
				<td><input type="text" name="total" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= checkAmount($this->form2307Part2,$x-1) ?>"></td>
				<td><input type="text" name="taxWithheld" class="tr isInt" size="25" style="margin-left: 3%; width: 92%;" value="<?= checkWht($this->form2307Part2,$x-1) ?>"></td>
			</tr>
		<?php
			}
		?>
			
			<tr>
				<th>Total</th>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= $total1 ?>"></td>
				<td><input type="text" name="" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= $total2 ?>"></td>
				<td><input type="text" name="" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= $total3 ?>"></td>
				<td><input type="text" name="" class="tr isInt" size="10" style="margin-left: 3.5%;" value="<?= $total4 ?>"></td>
				<td><input type="text" name="" class="tr isInt" size="25" style="margin-left: 3%; width: 92%;" value="<?= $total5 ?>"></td>
			</tr>
			<tr>
				<td>Government Money Payments Subject to Withholding of Business Tax</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<td><input type="text" name="" size="15" style="margin-left: 5%; width: 92%;"></td>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
			<tr>
				<th>Total</th>
				<td><input type="text" name="" size="10" style="margin-left: 2%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="10" style="margin-left: 3.5%;"></td>
				<td><input type="text" name="" class="tr" size="25" style="margin-left: 3%; width: 92%;"></td>
			</tr>
		</table>
	</div>
	
	<div class="rows">
		<span style="font-size: 12px; padding: 0 3% 0 3%;">I declare, under the penalties of perjury, that this certificate has been made in good faith, verified by me, and to the best of my knowledge and belief, is true and correct, pursuant to the provisions of the National Internal Revenue Code, as amended, and the regulations issued under authority thereof.</span>
		<table style="width: 100%; font-size: 10px; margin: 2% 0 0 0;">
			<tr>
				<th style="width: 5%;"></th>
				<th style="width: 5%;">9</th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
				<th style="width: 5%;"></th>
				<th style="width: 5%;">10</th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><center>President/Vice President/Authorized Representative/Tax Agent<br/>(Signature Over Printed Name)</center></td>
				<td></td>
				<td></td>
				<td><center>Treasurer/Asst. Treasurer/Authorized Representative<br/>(Signature Over Printed Name)</center></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th style="width: 5%;"></th>
				<th style="width: 5%;"></th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
				<th style="width: 5%;"></th>
				<th style="width: 5%;"></th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><center>Title/Position of Signatory</center></td>
				<td></td>
				<td></td>
				<td><center>Title/Position of Signatory</center></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th style="width: 5%;"></th>
				<th style="width: 5%;"></th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
				<th style="width: 5%;"></th>
				<th style="width: 5%;"></th>
				<th style="width: 30%;"><span style="border-bottom: solid 1px #777; padding-left: 80%;"></span></th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><center>TIN of Tax Agent (if applicable)</center></td>
				<td></td>
				<td></td>
				<td><center>Tax Agent Accreditation No./Date of Accreditation (if applicable)</center></td>
			</tr>
		</table>
	</div>

</div>
</body>
</html>
<?php

function setData($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index == '') {
            if (!empty($array->$data)) {
                return $array->$data;
            }
        } else {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        }
    }
}

function checkDescription($form2307,$index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return $form2307[$index]->accountName;
		}
	}
}
function checkAtc($form2307,$index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return $form2307[$index]->atcCode;
		}
	}
}
function checkPerQuarter($form2307,$index,$index2){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return checkDateQ($form2307[$index]->amount, $index2);
		}
	}
}
function checkDateQ($amount, $index2){
	$month = intVal(date('m',strtotime($_POST['date'])));
	if($index2 % 3 == ($month) % 3){
		return Controller::getFloat($amount);
	}
	return '0.00';
}
function checkAmount($form2307, $index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return Controller::getFloat($form2307[$index]->amount);
		}
	}
}
function checkWht($form2307, $index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return Controller::getFloat($form2307[$index]->taxRequired);
		}
	}
}