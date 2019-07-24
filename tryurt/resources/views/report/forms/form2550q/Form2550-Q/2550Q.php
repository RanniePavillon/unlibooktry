<!DOCTYPE html>
<?php
	$form2550qData = (isset($this) && (isset($this->form2550q) && !empty($this->form2550q))) ? $this->form2550q : '';
	
	// print_r($form2550qData);
	// exit;
	
?>
<style>
	.textAlignCenter{
		text-align:center !important;
	}
	.textAlignLeft{
		text-align:left !important;
		padding-left:5px;
	}
	.theta {
		margin: -10% 0 0 35%;
	}
	.beta {
		border-left: #777 solid 1px;
		width: 26%;
		padding: .5% 0 .2% 1%;
	}
	.zetha {
		padding: .5% 0 .5% 1%
	}
	.zeta {
		padding: .5% 0 1% 1%;
	}
	/* .topright {
		width: calc(100% - 730px);
		margin-right: 20px;
	} */
	.au {
		padding: .5% .5% 1.5% .5%;
	}
	.ag {
		padding: .5% .5% 1.5% .5%;
	}
	input[type="text"] {
		font-weight: bold !important;
		font-size: 15px !important;
	}
</style>
<html>
<head>
	<link rel="stylesheet" href="<?= $this->cssUrl ?>style.css">
	<link rel="stylesheet" href="<?= $this->cssUrl ?>modal.css">
	<script src="<?= URL ?>views/report/forms/form2550q/Form2550-Q/js/custom.js"></script>
</head>
<body>
<div class="container" style="margin: auto;margin-top:212px !important;">
<div id="header">
	<div class="topleft fl">
		<img src="<?= $this->imageUrl?>img/logo.png">
		<div id="banner" class="fl" style="font-size: 13px;">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
	</div>
	<div class="mid fl tc" style="margin-top: -.1%;">
		<h1>Quarterly Value-Added Tax Return</h1>
		<div style="font-size: 15px; margin-top: -1%;">(Cumulative For 3 Months)</div>
	</div>
	<div class="topright fr	" style="margin-top:0px!important;">
		<div class="formNo">BIR Form No.</div>
		<div class="formNo"><h1>2550Q</h1></div>
		<div class="formNo" style="font-size: 13px;">February 2007 (ENCS)</div>
	</div>
</div>

<div class="content">
	<div class="rows" style="padding: 0 0 5.5% 0;">
		<div class="fl" style="width: 7%; margin: 1% 0 0 1%;">
			<div style="margin: 8% 0 0 0;">
				<span style="font-size: 10px;"> Year Ended (MM/YYYY)</span>
			</div>
		</div>
		
		<div class="fl" style="margin: .5% 0 0 0; padding: 0 .5% 0 0;">
			<div>
				<input type="radio" name="yearEnded" value="calendar" <?= $form2550qData->yearEnded == 'calendar' ? 'checked' : ''?>> Calendar
				<input type="radio" name="yearEnded" value="fiscal" <?= $form2550qData->yearEnded == 'fiscal' ? 'checked' : ''?>> Fiscal
			</div>
			<div style="margin-top: 1%; margin-left: 7%;">
				<input type="text" name="item1_month" class="textAlignCenter" style="width: 83px; font-size: 15px;" value="<?= date('F',strtotime($_POST['month']))?>">
				<input type="text" name="item1_year" class="textAlignCenter" style="font-size: 15px;" value="<?= date('Y', strtotime($_POST['year'])) ?>" class="inset" maxlength="4" size="3" >
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 17%; padding: .5% 0 1% 1%;">
			<strong>2</strong><span style="font-size: 10px; margin: 0 0 0 5%;">Quarter</span>
			<div>
				<input type="radio" name="item2" value="1st" <?= $form2550qData->item2 == '1st' ? 'checked' : ''?>> 1 
				<input type="radio" name="item2" value="2nd" <?= $form2550qData->item2 == '2nd' ? 'checked' : ''?>> 2
				<input type="radio" name="item2" value="3rd" <?= $form2550qData->item2 == '3rd' ? 'checked' : ''?>> 3
				<input type="radio" name="item2" value="4th" <?= $form2550qData->item2 == '4th' ? 'checked' : ''?>> 4
			</div>
		</div>
		
		<div class="fl beta">
			<strong>3</strong><span style="font-size: 10px; margin: 0 0 0 27%;"> Return Period (MM/YYYY)</span>
			<div style="padding: 0 0 0 3%;">
				<span style="font-size: 10px;">From: </span>
					<input type="text" class="inset textAlignCenter" name="item3From" value="<?= $form2550qData->item3From != '0000-00-00' ? date('m/Y', strtotime($form2550qData->item3From)) : '' ?>" maxlength="7" size="4">
				<span style="font-size: 10px;">To: </span>
					<input type="text" class="inset textAlignCenter" name="item3To" value="<?= $form2550qData->item3To != '0000-00-00' ? date('m/Y', strtotime($form2550qData->item3To)) : '' ?>" maxlength="7" size="4">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 13%; padding: .5% 0 .1% 1%;">
			<strong>4</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> Amended Return?</span>
			<div style="padding: 3% 5% 3% 5%;">
				<input type="radio" name="item4" value="yes" <?= $form2550qData->item4 == 'yes' ? 'checked' : ''?>> Yes 
				<input type="radio" name="item4" value="no" <?= $form2550qData->item4 == 'no' ? 'checked' : ''?>> No
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 13%; padding: .5% 0 .1% 1%;">
			<strong>5</strong><span style="font-size: 10px; margin: 0 0 0 5%;">Short Period Return?</span>
			<div style="padding: 3% 5% 3% 5%;">
				<input type="radio" name="item5" value="yes" <?= $form2550qData->item5 == 'yes' ? 'checked' : ''?>> Yes 
				<input type="radio" name="item5" value="no" <?= $form2550qData->item5 == 'no' ? 'checked' : ''?>> No
			</div>
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 4% 0;">
		<div class="fl" style="width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>6</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">TIN</span>
			<?php
				$tin1 = getF2550p1Data($form2550qData, 'item6');
				$tin = explode('-',$tin1);
			?>
			<input type="text" name="item6[]" value="<?= isset($tin[0]) ? $tin[0] : '' ?>" style="font-size: 15px;" class="inset textAlignCenter" maxlength="3" size="1" >
			<input type="text" name="item6[]" value="<?= isset($tin[1]) ? $tin[1] : '' ?>" style="font-size: 15px;" class="inset textAlignCenter" maxlength="3" size="1" >
			<input type="text" name="item6[]" value="<?= isset($tin[2]) ? $tin[2] : '' ?>" style="font-size: 15px;" class="inset textAlignCenter" maxlength="3" size="1" >
			<input type="text" name="item6[]" value="<?= isset($tin[3]) ? $tin[3] : '' ?>" style="font-size: 15px;" class="inset textAlignCenter" maxlength="3" size="1">
		</div>
		
		<div class="fl zetha" style="border-left: #777 solid 1px; width: 25%; margin-right: -10%;">
			<strong>7</strong><div style="width: 23%; margin: -8% 0 0 10%;"><span style="font-size: 10px; padding: 0 3% 0 3%;">RDO Code</span></div>
			<div class="theta">
				<input type="text" name="item7" value="<?= getF2550p1Data($form2550qData,'item7');  ?>" class="textAlignCenter" style="width:50px;">
			</div>
		</div>
		
		<div class="fl zeta" style="border-left: #777 solid 1px; width: 22%;">
			<strong>8</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">No. of Sheets Attached</span>
			<input type="text" name="item8" value="<?= getF2550p1Data($form2550qData, 'item8') ?>" class="inset textAlignCenter" size="3" style="margin: 1% 0 0 5%; font-size: 15px;" >
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 34%; padding: .5% 0 1% 1%;">
			<strong>9</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Line of Business / Occupation</span>
			<input type="text" name="item9" value="<?= getF2550p1Data($form2550qData, 'item9') ?>" class="inset textAlignLeft" style="margin: 1% 0 0 0; font-size: 15px;" size="13">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7.2% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>10</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer's Name</span>
			<input type="text" name="item10" value="<?= getF2550p1Data($form2550qData, 'item10') ?>" class="inset textAlignLeft" style="margin: 1% 0 0 5.6%; width:610px;">
		</div>
		<div class="au fl" style="border-left: #777 solid 1px; width: 27%; margin: 0 0 0 0;">
			<strong>11</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Telephone Number</span>
			<input type="text" name="item11" value="<?= getF2550p1Data($form2550qData, 'item11') ?>" class="inset textAlignCenter" size="13" style="margin: 1% 0 0 0;" >
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7.1% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>12</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Registered Address</span>
			<input type="text" name="item12" value="<?= getF2550p1Data($form2550qData, 'item12') ?>" class="inset textAlignLeft" style="margin: 1% 0 0 4%;width:620px;">
		</div>
		<div class="ag fl" style="border-left: #777 solid 1px; width: 27%; margin: 0 0 0 0;">
			<strong>13</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span>
			<input type="text" name="item13" value="<?= getF2550p1Data($form2550qData, 'item13') ?>" class="inset textAlignCenter" size="13" style="margin: 1% 0 0 14.5%;">
		</div>
	</div>
	
	<div class="rows" style="padding: 1% 0 1% .1%;">
		<strong>14</strong><span style="font-size: 10px; padding: 0 16% 0 1.2%;">Are you availing of tax relief under under Special Law / International Tax Treaty?</span>
		<input type="radio" name="item14" value="Yes" <?= $form2550qData->item14 == 'Yes' ? 'checked' : ''?>>Yes
		<input type="radio" name="item14" value="No" <?= $form2550qData->item14 == 'No' ? 'checked' : ''?>>No
		<span style="font-size: 10px; padding: 0 0 0 3%;">If yes, specify</span>
		<select name="item14Specify" class="select">
			<option></option>
			<option <?= getF2550p1Data($form2550qData, 'item14Specify') == 'Special Rate' ? 'selected' : ''?>>Special Rate</option>
			<option <?= getF2550p1Data($form2550qData, 'item14Specify') == 'International Tax Treaty' ? 'selected' : ''?>>International Tax Treaty</option>
		</select>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part II</strong>
		</div>
		
		<span style="padding-left: 32%;">
			<strong>Computation of Tax</strong>
		</span>
	</div>
	
	<div style="padding: 0 0 0 0; width: 100%; border-bottom: #777 solid 1px; font-size: 10px; text-align: left;">
		<table style="width: 100%;">
			<tr>
				<th style="width: 80%;"><center>Sales/Receipts for the Month (Exclusive of VAT)</center></th>
				<th style="width: 30%;">Output Tax Due for the Month</th>
			</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="width: 41%;"><strong>15</strong>Vatable Sales/Receipt - Private <a href="#openModal">( Sch. 1 )</a></td>
				<td style="width: 25%;">
					<strong>15A</strong>
					<input type="text" name="part2Item15A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item15A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td style="width: 25%;">
					<strong>15B</strong>
					<input type="text" name="part2Item15B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item15B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td><strong>16</strong>Sales to Government</td>
				<td>
					<strong>16A</strong>
					<input type="text" name="part2Item16A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item16A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td>
					<strong>16B</strong>
					<input type="text" name="part2Item16B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item16B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td><strong>17</strong>Zero Rated Sales/Receipts</td>
				<td style="padding-left: 1.5%;">
					<strong>17</strong>
					<input type="text" name="part2Item17" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item17'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td></td>
			</tr>
			<tr>
				<td><strong>18</strong>Exempt Sales/Receipts</td>
				<td style="padding-left: 1.5%;">
					<strong>18</strong>
					<input type="text" name="part2Item18" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item18'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td></td>
			</tr>
			<tr>
				<td><strong>19</strong>Total Sales/Receipts and Output Tax Due</td>
				<td>
					<strong>19A</strong>
						<input type="text" name="part2Item19A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item19A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
					</td>
				<td>
					<strong>19B</strong>
					<input type="text" name="part2Item19B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item19B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>20</strong></td>
				<td style="width: 71.4%;">Less: Allowable Input Tax</td>
				<td style="width: 30%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20A</strong> Input Tax Carried Over from Previous Period</td>
				<td>
					<strong>20A</strong>
					<input type="text" name="part2Item20A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20B</strong> Input Tax Deferred on Capital Goods Exceeding P1Million from Previous Period</td>
				<td>	
					<strong>20B</strong>
					<input type="text" name="part2Item20B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20C</strong> Transitional Input Tax</td>
				<td>
					<strong>20C</strong>
					<input type="text" name="part2Item20C" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20C'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20D</strong> Presumptive Input Tax</td>
				<td>
					<strong>20D</strong>
					<input type="text" name="part2Item20D" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20D'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20E</strong> Others</td>
				<td>
					<strong>20E</strong>
					<input type="text" name="part2Item20E" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20E'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20F</strong> Total (Sum of Item 20A, 20B, 20C, 20D & 20E)</td>
				<td>
					<strong>20F</strong>
					<input type="text" name="part2Item20F" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item20F'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>21</strong></td>
				<td style="width: 39%;">Current Transactions</td>
				<td style="width: 25%;"><span style="margin-left: 41%;">Purchases</span></td>
				<td style="width: 25%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21A/B</strong> Purchase of Capital Goods not exceeding P1Million <a href="#sc2">(See Sch. 2 )</a></td>
				<td>
					<strong>21A</strong>
					<input type="text" name="part2Item21A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td>
					<strong>21B</strong>
					<input type="text" name="part2Item21B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21C/D</strong> Purchase of Capital Goods exceeding P1Million <a href="#sc3">(See Sch. 3 )</a></td>
				<td>
					<strong>21C</strong>
					<input type="text" name="part2Item21C" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21C'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td>
					<strong>21D</strong>
					<input type="text" name="part2Item21D" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21D'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21E/F</strong> Domestic Purchases of Goods Other than Capital Goods</td>
				<td>
					<strong>21E</strong>
					<input type="text" name="part2Item21E" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21E'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 2%;">
				</td>
				<td>
					<strong>21F</strong>
					<input type="text" name="part2Item21F" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21F'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1.8%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21G/H</strong> Importation of Goods Other than Capital Goods</td>
				<td>
					<strong>21G</strong>
					<input type="text" name="part2Item21G" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21G'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td>
					<strong>21H</strong>
					<input type="text" name="part2Item21H" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21H'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21I/J</strong> Domestic Purchase of Services</td>
				<td>
					<strong>21I</strong>
					<input type="text" name="part2Item21I" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21I'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 4.5%;">
				</td>
				<td>
					<strong>21J</strong>
					<input type="text" name="part2Item21J" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21J'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 2%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21K/L</strong> Services rendered by Non-residents</td>
				<td>
					<strong>21K</strong>
					<input type="text" name="part2Item21K" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21K'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1.7%;">
				</td>
				<td>
					<strong>21L</strong>
					<input type="text" name="part2Item21L" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21L'), 2) ?>" class="inset" size="15" style="margin: 1% 0 0 1.8%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21M</strong> Purchases Not Qualified for Input Tax</td>
				<td>
					<strong>21M</strong>
					<input type="text" name="part2Item21M" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21M'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21N/O</strong> Others</a></td>
				<td>
					<strong>21N</strong>
					<input type="text" name="part2Item21N" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21N'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1.8%;">
				</td>
				<td>
					<strong>21O</strong>
					<input type="text" name="part2Item21O" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21O'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>21P</strong> Total Current Purchases (Sum of Item 21A, 21C, 21E, 21G, 21I, 21K, 21M & 21N)</td>
				<td>
					<strong>21P</strong>
					<input type="text" name="part2Item21P" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item21P'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 2.3%;">
				</td>
				<td></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>22</strong></td>
				<td style="width: 63%;">Total Available Input Tax (Sum of Item 20F, 21B, 21D, 21F, 21H, 21J, 21L & 21O)</td>
				<td style="width: 20%;">
					<strong>22</strong>
					<input type="text" name="part2Item22" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item22'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>23</strong></td>
				<td style="width: 71.6%;">Less: Deductions from Input Tax</td>
				<td style="width: 30%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23A</strong> Input Tax on Purchases of Capital Goods exceeding P1Million deferred for the succeeding period <a href="#sc3">(See Sch. 3 )</a></td>
				<td>
					<strong>23A</strong>
					<input type="text" name="part2Item23A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23B</strong> Input Tax on Sale to Gov't. closed to expense <a href="#sc4">( Sch. 4 )</a></td>
				<td>
					<strong>23B</strong>
					<input type="text" name="part2Item23B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23C</strong> Input Tax allocable to Exempt Sales <a href="#sc5">( Sch. 5 )</a></td>
				<td>
					<strong>23C</strong>
					<input type="text" name="part2Item23C" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23C'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23D</strong> VAT Refund/TCC claimed</td>
				<td>
					<strong>23D</strong>
					<input type="text" name="part2Item23D" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23D'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20E</strong> Others</td>
				<td>
					<strong>20E</strong>
					<input type="text" name="part2Item23E" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23E'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23F</strong> Total (Sum of Item 23A, 23B, 23C, 23D & 23E)</td>
				<td>
					<strong>23F</strong>
					<input type="text" name="part2Item23F" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item23F'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>24</strong></td>
				<td style="width: 62%;">Total Allowable Input Tax (Item 22 less Item 23F)</td>
				<td style="width: 20%;">
					<strong>24</strong>
					<input type="text" name="part2Item24" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item24'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
			<tr>
				<td><strong>25</strong></td>
				<td>Net VAT Payable (item 19B less Item 24)</td>
				<td>
					<strong>25</strong>
					<input type="text" name="part2Item25" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item25'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>26</strong></td>
				<td style="width: 71.3%;">Less: Deductions from Input Tax</td>
				<td style="width: 30%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26A</strong> Monthly VAT Payments - previous two months</td>
				<td>
					<strong>26A</strong>
					<input type="text" name="part2Item26A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26A'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26B</strong> Creditable Value-Added Tax Withheld <a href="#sc6">(See Sch. 6 )</a></td>
				<td>
					<strong>26B</strong>
					<input type="text" name="part2Item26B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26B'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26C</strong> Advance Payment for Sugar and Flour Industries<a href="#sc7">( Sch. 7 )</a></td>
				<td>
					<strong>26C</strong>
					<input type="text" name="part2Item26C" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26C'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26D</strong> VAT withheld on Sales to Government <a href="#sc8">( Sch. 8 )</a></td>
				<td>
					<strong>26D</strong>
					<input type="text" name="part2Item26D" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26D'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26E</strong> VAT paid in return previously filed, if this is an amended return</td>
				<td>
					<strong>26E</strong>
					<input type="text" name="part2Item26E" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26E'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26F</strong> Advance Payments made (please attach proof of payments - BIR Form No. 0605)</td>
				<td>
					<strong>26F</strong>
					<input type="text" name="part2Item26F" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26F'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 1%;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26G</strong> Others</td>
				<td>
					<strong>26G</strong>
					<input type="text" name="part2Item26G" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26G'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><strong>26H</strong> Total Tax Credits/Payments(Sum of Item 26A, 26B, 26C, 26D, 26E, 26F, & 26G)</td>
				<td>
					<strong>26H</strong>
					<input type="text" name="part2Item26H" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item26H'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>27</strong></td>
				<td style="width: 61%;">Tax Still Payable/ (Overpayment) (Item 25 less Item 26H)</td>
				<td style="width: 20%;">
					<strong>27</strong>
					<input type="text" name="part2Item27" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item27'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>28</strong></td>
				<td style="width: 12%; padding-left: 3%;" class="tc">Add Penalties</td>
				<td style="width: 20%; padding-left: 7%;">Surcharge</td>
				<td style="width: 20%; padding-left: 7%;">Interest</td>
				<td style="width: 20%; padding-left: 6%;">Compromise</td>
				<td style="width: 20%;"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<strong>28A</strong>
					<input type="text" name="part2Item28A" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item28A'), 2) ?>" class="inset demo2 isInt" style="margin: 1% 0 0 0; width:140px;">
				</td>
				<td>
					<strong>28B</strong>
					<input type="text" name="part2Item28B" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item28B'), 2) ?>" class="inset demo2 isInt" size="20" style="margin: 1% 0 0 0;width:140px;">
				</td>
				<td>
					<strong>28C</strong>
					<input type="text" name="part2Item28C" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item28C'), 2) ?>" class="inset demo2 isInt" size="20" style="margin: 1% 0 0 0;width:140px;">
				</td>
				<td>
					<strong>28D</strong>
					<input type="text" name="part2Item28D" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item28D'), 2) ?>" class="inset demo2 isInt" size="20" style="margin: 1% 0 0 0;width:140px;">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>29</strong></td>
				<td style="width: 62%;">Total Amount Payable (Overpayment) (Sum of Item 27& 28D)</td>
				<td style="width: 20%;">
					<strong>29</strong>
					<input type="text" name="part2Item29" value="<?= number_format((float) getF2550p1Data($form2550qData, 'part2Item29'), 2) ?>" class="inset demo2 isInt" size="15" style="margin: 1% 0 0 0;">
				</td>
			</tr>
		</table>
	</div>
</div>

<div id="openModal" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<div style="border: outset 1px;"><center>Schedule 1<span style="padding-left: 10%;"></span>Schedule of Sales/Receipts and Output Tax (Attach additional sheet, if necessary)</center></div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<th style="width: 65%;">Industry Covered by VAT </th>
				<th><a href="#inSide">ATC</a></th>
				<th>Amount of Sales/Receipts For the Period </th>
				<th>Output Tax for the Period </th>
			</tr>
			<tr>
				<td>VAT-ON BUSINESS SERVICES-IN GENERAL </td>
				<td><input type="text" name="" size="5" value="VB010"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value=""></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value=""></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 67%;">To Item 15A/B</th>
					<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
				</tr>
			</table>
		</div>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="inSide" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<table>
			<tr>
				<th style="width: 10%; ">ATC</th>
				<th style="width: 90%;">INDUSTRIES COVERED BY VAT </th>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB010</td>
				<td>VAT-ON BUSINESS SERVICES-IN GENERAL </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB100</td>
				<td>VAT-ON BUS SERV-HOTEL, MOTELS, ETC </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB101</td>
				<td>VAT -ON BUSINESS SERVICES -RESTAURANTS, CATERERS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB102</td>
				<td>VAT -ON BUS. SERVICES -DEALERS ON SEC/LENDING INVESTORS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB105</td>
				<td>VAT -COMMON CARRIERS -LAND BASED (ROAD FREIGHT) </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB106</td>
				<td>VAT -COMMON CARRIERS -DOMESTIC OCEAN-GOING VESSEL </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB107</td>
				<td>VAT -COMMON CARRIERS -INTER-ISLAND SHIPPING VESSEL </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB108</td>
				<td>VAT -COMMON CARRIERS -AIRCRAFT </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB109</td>
				<td>VAT -FRANCHISE HOLDERS -TELEPHONE </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB111</td>
				<td>VAT -FRANCHISE HOLDERS -RADIO/TELEPHONE BROAD</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB112</td>
				<td>VAT -FRANCHISE HOLDERS -OTHERS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB113</td>
				<td>VAT -NON-LIFE INSURANCE COMPANIES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VC010</td>
				<td>VAT -ON CONSTRUCTION </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VD010</td>
				<td>COMPULSORY SOCIAL SECURITY PUBLIC ADMIN AND DEFENSE </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VH010</td>
				<td>VAT -ON COMMUNITY, PERSONAL AND HOUSEHOLD SERVICES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VI010</td>
				<td>VAT -ON IMPORTATION OF GOODS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM010</td>
				<td>VAT -MANUFACTURING IN GEN. </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM020</td>
				<td>VAT ON MANUFACTURING - FOOD, PRODUCTS AND BEVERAGES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM030</td>
				<td>VAT ON MANUFACTURING - CEMENT </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM040</td>
				<td>VAT ON MANUFACTURING - TOBACCO </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM050</td>
				<td>VAT ON MANUFACTURING - FLOUR </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM100</td>
				<td>VAT -MANUFACTURING -PESTICIDES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM110</td>
				<td>VAT ON MANUFACTURING - ALCOHOL </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM120</td>
				<td>VAT ON MANUFACTURING - PETROLEUM </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM130</td>
				<td>VAT ON MANUFACTURING - AUTOMOBILES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM140</td>
				<td>VAT ON MANUFACTURING - NON ESSENTIALS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM150</td>
				<td>VAT ON MANUFACTURING - PHARMACUETICALS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VM160</td>
				<td>VAT ON MANUFACTURING - SUGAR </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VP100</td>
				<td>VAT - SALE OF REAL PROPERTY </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VP101</td>
				<td>VAT - LEASE OF REAL PROPERTY </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VP102</td>
				<td>VAT - SALE/LEASE OF INTANGIBLE PROPERTY </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VQ010</td>
				<td>VAT ON MINING AND QUARYING </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VS010</td>
				<td>VAT -ON STORAGE AND WAREHOUSING </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VT010</td>
				<td>VAT -ON WHOLESALE AND RETAIL TRADE </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB103</td>
				<td>VAT-OPERATORS OF TAXICABS/UTILITY CARS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB104</td>
				<td>VAT-OPERATORS OF TOURIST BUSES </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB110</td>
				<td>VAT-FRANCHISE HOLDERS-TELEGRAPH </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB114</td>
				<td>VAT-BOOKS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VB115</td>
				<td>VAT-NEWSPAPERS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VE010</td>
				<td>WT ON VAT -EXPORTER/TRADER </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VS111</td>
				<td>VAT ON SERVICES RENDERED BY BANKS, NON-BANK, ETC. </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">WI555</td>
				<td>SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN INDIVIDUAL </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VS062</td>
				<td>ON SERVICES RENDERED BY PERSONS ENGAGED IN THE PRACTICE OF PROFESSION OR CALLING AND PROFESSIONAL SERVICES RENDERED BY GENERAL PROFESSIONAL PARTNERSHIPS </td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value="">VS210</td>
				<td>ON SERVICES RENDERED BY STOCK, REAL ESTATE, COMMERCIAL, CUSTOMS, INSURANCE AND IMMIGRATION BROKERS </td>
			</tr>
		</table>
		<center><a href="#close"><button>OK</button></a></center>
	</div>
</div>

<div id="sc2" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<div style="border: outset 1px;"><center>Schedule 2<span style="padding-left: 10%;"></span>Purchases/Importation of Capital Goods (Aggregate Amount Not Exceeding P1Million)</center></div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<th style="width: 5%;"></th>
				<th>Date Purchased</th>
				<th>Description</th>
				<th>Amount (Net of VAT)</th>
				<th>Input Tax</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="10" value=""  style="margin-left: 15%;"></td>
				<td><input type="text" name="" size="20" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 67%;">Total (To Item 21C/D)</th>
					<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
				</tr>
			</table>
		</div>
		<div style="float: right; border: outset 1px; padding: .5% 1% .5% 87.2%;">
			<button>Add</button>
			<button>Delete</button>
		</div>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<button>CLEAR</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="sc3" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 3<span style="padding-left: 10%;"></span>Purchases/Importation of Capital Goods (Aggregate Amount Exceeds P1 Million)</center></div>
		<div style="border: outset 1px;"><center>A) Purchases/Importations This Period</center></div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<th style="width: 5%;"></th>
				<th>Date Purchased</th>
				<th style="padding-left: 1.2%;">Description</th>
				<th style="padding-left: 3%;">Amount (Net of VAT)</th>
				<th style="padding-left: 4%;">Input Tax (C*TaxRate) </th>
				<th style="padding-left: 4%;">Est. Life (in months) </th>
				<th style="padding-left: 4%;">Recognized Life (In Months)Useful life or 60 mos. (whichever is shorter) </th>
				<th style="padding-left: 3%;">Allowable Input Tax for the Period (D) divided by (F) </th>
				<th style="padding-left: 1.2%;">Balance of Input Tax to be carried to Next Period (D) less (G) </th>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="10" value=""></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 22%;" ></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 38%;" ></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 32.7%;">Total (To Item 21C/D)</th>
					<th><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					<th><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					<th style="width: 66%;"><input type="text" name="" size="15" value=""></th>
				</tr>
			</table>
		</div>
		<div style="float: right; border: outset 1px; padding: .5% .5px .5% 91.6%;">
			<button>Add</button>
			<button>Delete</button>
		</div>
		<div style="border: outset 1px;"><center>B) Purchases/Importations Previous Period</center></div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<th style="width: 5%;"></th>
				<th>Date Purchased</th>
				<th style="padding-left: 1.2%;">Description</th>
				<th style="padding-left: 3%;">Amount (Net of VAT)</th>
				<th style="padding-left: 4%;">Balance of Input Tax from previous period </th>
				<th style="padding-left: 4%;">Est. Life (in months) </th>
				<th style="padding-left: 4%;">Recognized Life (In Months)Useful life or 60 mos. (whichever is shorter) </th>
				<th style="padding-left: 3%;">Allowable Input Tax for the Period (D) divided by (F) </th>
				<th style="padding-left: 1.2%;">Balance of Input Tax to be carried to Next Period (D) less (G) </th>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="10" value=""></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 22%;" ></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 38%;" ></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 90%;"><center>Total</center></th>
					<th style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
				</tr>
			</table>
		</div>
		<div style="float: right; border: outset 1px; padding: .5% 1% .5% 90.6%;">
			<button>Add</button>
			<button>Delete</button>
		</div>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 90%; text-align: left;">C) Total Input Tax Deferred for future period from current and previous purchase (To item 23A)<br/>* - D divided by F multiplied by Number of months in use during the quarter </th>
					<th style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
				</tr>
			</table>
		</div>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<button>CLEAR</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="sc4" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 4<span style="padding-left: 10%;"></span>Input Tax Attributable to Sale to Government </center></div>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 25%;"></td>
					<td style="width: 25%;">Input Tax directly attributable to sale to government Add: Ratable portion of Input Tax not directly attributable to any activity: </td>
					<td style="width: 25%;"></td>
					<td style="width: 25%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<td style="width: 45%;">
					<table style="width: 100%;">
						<tr>
							<td><center>Taxable sales to government</center></td>
							<td><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
						</tr>
						<tr>
							<td><center>---------------------------------------------<br/>Total Sales</center></td>
							<td><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
						</tr>
					</table>
				</td>
				<td>X Amount of Input Tax not directly attributable </td>
				<td><input type="text" name="" class="demo2 isInt" size="20" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="20" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total Input Tax attributable to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Less: Standard Input Tax to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Input Tax on Sale to Govt. closed to expense (To Item 23B)</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<button>CLEAR</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="sc5" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 5<span style="padding-left: 10%;"></span>Input Tax Attributable to Exempt Sales </center></div>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 25%;"></td>
					<td style="width: 25%;">Input Tax directly attributable to exempt sale Add: Ratable portion of Input Tax not directly attributable to any activity: </td>
					<td style="width: 25%;"></td>
					<td style="width: 25%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<td style="width: 45%;">
					<table style="width: 100%;">
						<tr>
							<td><center>Total Exempt sale</center></td>
							<td><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
						</tr>
						<tr>
							<td><center>---------------------------------------------<br/>Total Sales</center></td>
							<td><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
						</tr>
					</table>
				</td>
				<td>X Amount of Input Tax not directly attributable </td>
				<td><input type="text" name="" class="demo2 isInt" size="20" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="demo2 isInt" size="20" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total Input Tax attributable to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Less: Standard Input Tax to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total input tax attributable to exempt sale (To item 23 C)</center></td>
					<td style="width: 10%;"><input type="text" name="" class="demo2 isInt" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<button>CLEAR</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="sc6" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 6<span style="padding-left: 10%;"></span>Tax Withheld Claimed as Tax Credit</center></div>
		<div style="border: outset 1px;">
			<table style="border: outset 1px; width: 100%; font-size: 10px;">
				<tr>
					<th style="width: 5%;"></th>
					<th>Period Covered</th>
					<th>Name of Withholding Agent</th>
					<th>Income Payment</th>
					<th>Total Tax Withheld</th>
					<th>Previous 2 mos</th>
					<th>Applied Current mo.</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 19%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 18%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 20%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 26B)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					</tr>
				</table>
			</div>
			<div style="float: right; border: outset 1px; padding: .5% 1% .5% 90.6%;">
				<button>Add</button>
				<button>Delete</button>
			</div>
			<div style="margin-top: 5%">
				<center>
					<button>OK</button>
					<button>CLEAR</button>
					<a href="#close"><button>CANCEL</button></a>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="sc7" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 7<span style="padding-left: 10%;"></span>Schedule of Advance Payment</center></div>
		<div style="border: outset 1px;">
			<table style="border: outset 1px; width: 100%; font-size: 10px;">
				<tr>
					<th style="width: 5%;"></th>
					<th>Period Covered</th>
					<th>Name of Miller</th>
					<th>Name of Tax Payer</th>
					<th>Official Receipt Number</th>
					<th>Amount Paid</th>
					<th>Previous 2 mos</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 13%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 13%;"></td>
					<td><input type="text" name="" size="15" value="" style="margin-left: 12%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 12%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 14%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 13%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 26C)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					</tr>
				</table>
			</div>
			<div style="float: right; border: outset 1px; padding: .5% 1% .5% 90.6%;">
				<button>Add</button>
				<button>Delete</button>
			</div>
			<div style="margin-top: 5%">
				<center>
					<button>OK</button>
					<button>CLEAR</button>
					<a href="#close"><button>CANCEL</button></a>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="sc8" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll; width: 90.1%;">
		<div style="border: outset 1px;"><center>Schedule 8<span style="padding-left: 10%;"></span>VAT Withheld on Sales to Government </center></div>
		<div style="border: outset 1px;">
			<table style="border: outset 1px; width: 100%; font-size: 10px;">
				<tr>
					<th style="width: 5%;"></th>
					<th>Period Covered</th>
					<th>Name of Withholding Agent</th>
					<th>Income Payment</th>
					<th>Total Tax Withheld</th>
					<th>Previous 2 mos</th>
					<th>Applied Current mo.</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 19%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 18%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 20%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="demo2 isInt" size="15" value="" style="margin-left: 19%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 26D)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="demo2 isInt" size="15" value=""></th>
					</tr>
				</table>
			</div>
			<div style="float: right; border: outset 1px; padding: .5% 1% .5% 90.6%;">
				<button>Add</button>
				<button>Delete</button>
			</div>
			<div style="margin-top: 5%">
				<center>
					<button>OK</button>
					<button>CLEAR</button>
					<a href="#close"><button>CANCEL</button></a>
				</center>
			</div>
		</div>
	</div>
</div>

</div>

<?php

function getF2550p1Data($obj, $name) {
    $return = "";

    if ($obj != '') {
        foreach ($obj as $var => $each) {
            if ($var == $name) {
                $return = $each;
            }
        }
    }
    return $return;
}
?>
</body>
</html>
