<?php
	$form2550mData = (isset($this->form2550m) && !empty($this->form2550m)) ? $this->form2550m : '';
 ?>
<style>
	.textAlignCenter{
		text-align:center !important;
	}
	.textAlignLeft{
		text-align:left !important;
		padding-left:5px;
	}
	input[type="text"] {
		font-weight: bold !important;
		font-size: 16px !important;
	}
</style> 
	<link rel="stylesheet" href="<?= $this->cssUrl ?>style.css">
	<link rel="stylesheet" href="<?= $this->cssUrl ?>modal.css">
	<script src="<?= $this->imageUrl ?>js/custom.js"></script>
<div class="container" style="margin: auto;margin-top: 210px !important;">
<div id="header">
	<div class="topleft fl">
		<img src="<?= $this->imageUrl ?>img/logo.png">
		<div id="banner" class="fl" style="font-size: 13px;">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
	</div>
	<div class="mid fl tc">
		<h1>Monthly Value-Added Tax Declaration</h1>
	</div>
	<div class="topright fr	">
		<div class="formNo">BIR Form No.</div>
		<div class="formNo"><h1>2550M</h1></div>
		<div class="formNo" style="font-size: 13px;">February 2007 (ENCS)</div>
	</div>
</div>

<div class="content">
	<div class="rows" style="padding: 0 0 5% 0;">
		<div class="fl" style="width: 10%; margin: 1% 0 0 1%;">
			<div style="margin: 5% 0 0 0;">
				<span style="font-size: 10px; margin: 0 0 0 5%;"> For the Month of</span>
			</div>
		</div>
		<div class="fl" style="width: 7%; margin: 1% 0 0 1%;">
			<div style="margin: 8% 0 0 0;">
				<span style="font-size: 10px; margin: 0 0 0 5%;">(MM/YYYY)</span>
			</div>
		</div>
		
		<div class="fl" style="margin: .5% 0 0 3%; padding: 0 .5% 0 0;">
			<div>
				<input type="text" name="item1" class="inset textAlignCenter" style="width:40px;" value="<?= date('m',strtotime($_POST['month']))?>"> 
				<input type="text" name="item1" class="inset textAlignCenter" style="width:60px;" maxlength="4" value="<?= getF2550p1Data($form2550mData,'item1Y');  ?>">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; padding: .5% 0 2.4% 0;">
			<span style="font-size: 10px; margin: 0 0 0 5%;"> Amended Return?</span>
			<span style="font-size: 12px; margin: 0 0 0 5%;">
				<input type="radio" name="item2" id="yes" value="yes" <?= $form2550mData->item2 == 'yes' ? 'checked' : '' ?> > 
					<label for="yes">Yes</label> 
				<input type="radio" name="item2" id="no" value="no" <?= $form2550mData->item2 == 'no' ? 'checked' : '' ?> > 
					<label for="no">No</label> 
			</span>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 30%; padding: .5% 0 1.7% 1%;">
			<span style="font-size: 10px; margin: 0 0 0 5%;"> No. of Sheets Attached</span>
			<input type="text" name="item3" class="inset textAlignCenter" size="5" style="margin: 0 0 0 10%;" value="<?= getF2550p1Data($form2550mData,'item3');  ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part I</strong>
		</div>
		
		<span style="padding-left: 30%;">
			<strong>Background Information</strong>
		</span>
	</div>
	
	<div class="rows" style="padding: 0 0 4% 0;">
		<div class="fl" style="width: 31%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>4</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">TIN</span>
			<?php
				$tin1 = getF2550p1Data($form2550mData,'item4');
				$tin = explode('-',$tin1);
			?>
			<input type="text" name="item4[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[0]) ? $tin[0] : ''?>">
			<input type="text" name="item4[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[1]) ? $tin[1] : ''?>">
			<input type="text" name="item4[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[2]) ? $tin[2] : ''?>">
			<input type="text" name="item4[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[3]) ? $tin[3] : ''?>">
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 15%; padding: 1% 0 1.2% 1%;">
			<strong>5</strong><div style="width: 50%; margin: -11% 0 0 10%;"><span style="font-size: 10px; padding: 0 3% 0 3%;">RDO Code</span></div>
			<div style="width: 35%; margin: -15% 0 0 60%;">
				<input type="text" name="item5" value="<?= getF2550p1Data($form2550mData,'item5');  ?>" class="textAlignCenter" style="width:50px;">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 50%; padding: .3% 0 .4% 1%;">
			<strong>6</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Line of Business / Occupation</span>
			<input type="text" name="item6" class="inset textAlignLeft" style="margin: 1% 0 0 5%;" size="18" value="<?= getF2550p1Data($form2550mData,'item6');  ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7.2% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>7</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer's Name</span>
			<input type="text" name="item7" class="inset textAlignLeft" size="50" style="margin: 1% 0 0 5.6%;" value="<?= getF2550p1Data($form2550mData,'item7');  ?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 27%; margin: 0 0 0 0; padding: .5% .5% 1.5% .5%;">
			<strong>8</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Telephone Number</span>
			<input type="text" name="item8" class="inset textAlignCenter" size="13" style="margin: 2.5% 0 0 14.5%;" value="<?= getF2550p1Data($form2550mData,'item8');  ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7.1% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>9</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Registered Address</span>
			<input type="text" name="item9" class="inset textAlignLeft" size="50" style="margin: 1% 0 0 5.6%;" value="<?= getF2550p1Data($form2550mData,'item9');  ?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 27%; margin: 0 0 0 0; padding: .5% .5% 1% .5%;">
			<strong>10</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span>
			<input type="text" name="item10" class="inset textAlignCenter" size="13" style="margin: 2.5% 0 0 14.5%;" value="<?= getF2550p1Data($form2550mData,'item10');  ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 1% 0 1% .1%;">
		<strong>11</strong><span style="font-size: 10px; padding: 0 15% 0 1.2%;">Are you availing of tax relief under under Special Law / International Tax Treaty?</span>
		<input type="radio" name="item11" id="item11yes" value="yes" <?= $form2550mData->item11 == 'yes' ? 'checked' : '' ?>>
			<label for="item11yes">Yes</label>
		<input type="radio" name="item11" id="item11no" value="no" <?= $form2550mData->item11 == 'no' ? 'checked' : '' ?>>
			<label for="item11no">No</label>
		<span style="font-size: 10px; padding: 0 0 0 3%;">If yes, specify</span>
		<select name="item11Specify" class="select">
			<option></option>
			<option <?= getF2550p1Data($form2550mData,'item11Specify') == 'Special Rate' ? 'selected' : ''?>>Special Rate</option>
			<option <?= getF2550p1Data($form2550mData,'item11Specify') == 'International Tax Treaty' ? 'selected' : ''?>>International Tax Treaty</option>
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
				<td style="width: 46%;"><strong>12</strong>Vatable Sales/Receipt - Private <a href="#openModal">( Sch. 1 )</a></td>
				<td style="width: 27%;"><strong>12A</strong><input type="text" name="part2Item12A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item12A'),2)  ?>"></td>
				<td style="width: 27%;"><strong>12B</strong><input type="text" name="part2Item12B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item12B'),2)  ?>"></td>
			</tr>
			<tr>
				<td><strong>13</strong>Sales to Government</td>
				<td><strong>13A</strong><input type="text" name="part2Item13A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item13A'),2)  ?>"></td>
				<td><strong>13B</strong><input type="text" name="part2Item13B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item13B'),2)  ?>"></td>
			</tr>
			<tr>
				<td><strong>14</strong>Zero Rated Sales/Receipts</td>
				<td style="padding-left: 1.5%;"><strong>14</strong><input type="text" name="part2Item14" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item14'),2)  ?>"></td>
				<td></td>
			</tr>
			<tr>
				<td><strong>15</strong>Exempt Sales/Receipts</td>
				<td style="padding-left: 1.5%;"><strong>15</strong><input type="text" name="part2Item15" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item15'),2)  ?>"></td>
				<td></td>
			</tr>
			<tr>
				<td><strong>16</strong>Total Sales/Receipts and Output Tax Due</td>
				<td><strong>16A</strong><input type="text" name="part2Item16A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item16A'),2)  ?>"></td>
				<td><strong>16B</strong><input type="text" name="part2Item16B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item16B'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>17</strong></td>
				<td style="width: 72%;">Less: Allowable Input Tax</td>
				<td style="width: 30%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17A</strong> Input Tax Carried Over from Previous Period</td>
				<td><strong>17A</strong><input type="text" name="part2Item17A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17A'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17B</strong> Input Tax Deferred on Capital Goods Exceeding P1Million from Previous Period</td>
				<td><strong>17B</strong><input type="text" name="part2Item17B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17B'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17C</strong> Transitional Input Tax</td>
				<td><strong>17C</strong><input type="text" name="part2Item17C" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17C'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17D</strong> Presumptive Input Tax</td>
				<td><strong>17D</strong><input type="text" name="part2Item17D" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17D'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17E</strong> Others</td>
				<td><strong>17E</strong><input type="text" name="part2Item17E" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17E'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>17F</strong> Total (Sum of Item 17A, 17B, 17C, 17D & 17E)</td>
				<td><strong>17F</strong><input type="text" name="part2Item17F" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item17F'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>18</strong></td>
				<td style="width: 42%;">Current Transactions</td>
				<td style="width: 25%;"><span style="margin-left: 23%;">Purchases</span></td>
				<td style="width: 25%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18A/B</strong> Purchase of Capital Goods not exceeding P1Million <a href="#sc2">(See Sch. 2 )</a></td>
				<td><strong>18A</strong><input type="text" name="part2Item18A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18A'),2)  ?>"></td>
				<td><strong>18B</strong><input type="text" name="part2Item18B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18B'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18C/D</strong> Purchase of Capital Goods exceeding P1Million <a href="#sc3">(See Sch. 3 )</a></td>
				<td><strong>18C</strong><input type="text" name="part2Item18C" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18C'),2)  ?>"></td>
				<td><strong>18D</strong><input type="text" name="part2Item18D" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18D'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18E/F</strong> Domestic Purchases of Goods Other than Capital Goods</td>
				<td><strong>18E</strong><input type="text" name="part2Item18E" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18E'),2)  ?>"></td>
				<td><strong>18F</strong><input type="text" name="part2Item18F" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18F'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18G/H</strong> Importation of Goods Other than Capital Goods</td>
				<td><strong>18G</strong><input type="text" name="part2Item18G" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18G'),2)  ?>"></td>
				<td><strong>18H</strong><input type="text" name="part2Item18H" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18H'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18I/J</strong> Domestic Purchase of Services</td>
				<td><strong>18I</strong><input type="text" name="part2Item18I" class="inset tr isInt" size="15" style="margin: 1% 0 0 4%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18I'),2)  ?>"></td>
				<td><strong>18J</strong><input type="text" name="part2Item18J" class="inset tr isInt" size="15" style="margin: 1% 0 0 2%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18J'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18K/L</strong> Services rendered by Non-residents</td>
				<td><strong>18K</strong><input type="text" name="part2Item18K" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18K'),2)  ?>"></td>
				<td><strong>18L</strong><input type="text" name="part2Item18L" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18L'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18M</strong> Purchases Not Qualified for Input Tax</td>
				<td><strong>18M</strong><input type="text" name="part2Item18M" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18M'),2)  ?>"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18N/O</strong> Others</a></td>
				<td><strong>18N</strong><input type="text" name="part2Item18N" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18N'),2)  ?>"></td>
				<td><strong>18O</strong><input type="text" name="part2Item18O" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18O'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>18P</strong> Total Current Purchases (Sum of Item 18A, 18C, 18E, 18G, 18I, 18K, 18M & 18N)</td>
				<td><strong>18P</strong><input type="text" name="part2Item18P" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item18P'),2)  ?>"></td>
				<td></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>19</strong></td>
				<td style="width: 70%;">Total Available Input Tax (Sum of Item 17F, 18B, 18D, 18F, 18H, 18J, 18L & 18O)</td>
				<td style="width: 20%;"><strong>19</strong><input type="text" name="part2Item19" class="inset tr isInt" size="15" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item19'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>20</strong></td>
				<td style="width: 72.1%;">Less: Deductions from Input Tax</td>
				<td style="width: 27%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20A</strong> Input Tax on Purchases of Capital Goods exceeding P1Million deferred for the succeeding period <a href="#sc3">(See Sch. 3 )</a></td>
				<td><strong>20A</strong><input type="text" name="part2Item20A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20A'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20B</strong> Input Tax on Sale to Gov't. closed to expense <a href="#sc4">( Sch. 4 )</a></td>
				<td><strong>20B</strong><input type="text" name="part2Item20B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20B'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20C</strong> Input Tax allocable to Exempt Sales <a href="#sc5">( Sch. 5 )</a></td>
				<td><strong>20C</strong><input type="text" name="part2Item20C" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20C'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20D</strong> VAT Refund/TCC claimed</td>
				<td><strong>20D</strong><input type="text" name="part2Item20D" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20D'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20E</strong> Others</td>
				<td><strong>20E</strong><input type="text" name="part2Item20E" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20E'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>20F</strong> Total (Sum of Item 20A, 20B, 20C, 20D & 20E)</td>
				<td><strong>20F</strong><input type="text" name="part2Item20F" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item20F'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>21</strong></td>
				<td style="width: 70.5%;">Total Allowable Input Tax (Item 19 less Item 20F)</td>
				<td style="width: 20%;"><strong>21</strong><input type="text" name="part2Item21" class="inset tr isInt" size="15" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item21'),2)  ?>"></td>
			</tr>
			<tr>
				<td><strong>22</strong></td>
				<td>Net VAT Payable (Item 16B less Item 21)</td>
				<td><strong>22</strong><input type="text" name="part2Item22" class="inset tr isInt" size="15" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item22'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>23</strong></td>
				<td style="width: 72%;">Less: Deductions from Input Tax</td>
				<td style="width: 30%;"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23A</strong> Creditable Value-Added Tax Withheld <a href="#sc6">(See Sch. 6 )</a></td>
				<td><strong>23A</strong><input type="text" name="part2Item23A" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23A'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23B</strong> Advance Payment  <a href="#sc7">( Sch. 7 )</a></td>
				<td><strong>23B</strong><input type="text" name="part2Item23B" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23B'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23C</strong> VAT withheld on Sales to Government <a href="#sc8">( Sch. 8 )</a></td>
				<td><strong>23C</strong><input type="text" name="part2Item23C" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23C'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23D</strong> VAT paid in return previously filed, if this is an amended return</td>
				<td><strong>23D</strong><input type="text" name="part2Item23D" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23D'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23E</strong> Advance Payments made (please attach proof of payments - BIR Form No. 0605)</td>
				<td><strong>23E</strong><input type="text" name="part2Item23E" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23E'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23F</strong> Others</td>
				<td><strong>23F</strong><input type="text" name="part2Item23F" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23F'),2)  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><strong>23G</strong> Total Tax Credits/Payment (Sum of Item 23A, 23B, 23C, 23D & 23E)</td>
				<td><strong>23G</strong><input type="text" name="part2Item23G" class="inset tr isInt" size="15" style="margin: 1% 0 0 1%;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item23G'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>24</strong></td>
				<td style="width: 71%;">Tax Still Payable/(Overpayment) (Item 22 less Item 23F)</td>
				<td style="width: 20%;"><strong>24</strong><input type="text" name="part2Item24" class="inset tr isInt" size="15" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item24'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>25</strong></td>
				<td style="width: 12%; padding-left: 3%;" class="tc">Add Penalties</td>
				<td style="width: 20%; padding-left: 8%;">Surcharge</td>
				<td style="width: 20%; padding-left: 8%;">Interest</td>
				<td style="width: 20%; padding-left: 7%;">Compromise</td>
				<td style="width: 20%;"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><strong>25A</strong><input type="text" name="part2Item25A" class="inset tr isInt" size="10" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25A'),2)  ?>"></td>
				<td><strong>25B</strong><input type="text" name="part2Item25B" class="inset tr isInt" size="10" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25B'),2)  ?>"></td>
				<td><strong>25C</strong><input type="text" name="part2Item25C" class="inset tr isInt" size="10" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25C'),2)  ?>"></td>
				<td><strong>25D</strong><input type="text" name="part2Item25D" class="inset tr isInt" size="10" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item25D'),2)  ?>"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>26</strong></td>
				<td style="width: 80%;">Total Amount Payable/ (Overpayment) (Sum of Items 24 & 25D)</td>
				<td style="width: 20%;"><strong>26</strong><input type="text" name="part2Item26" class="inset tr isInt" size="10" style="margin: 1% 0 0 0;" value="<?= number_format((float) getF2550p1Data($form2550mData,'part2Item26'),2)  ?>"></td>
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
				<td><input type="text" name="" class="tr isInt" size="15" value=""></td>
				<td><input type="text" name="" class="tr isInt" size="15" value=""></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 67%;">To Item 12A/B</th>
					<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
					<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 67%;">To Item 12A/B</th>
					<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
					<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr" size="10" value="" style="margin-left: 22%;"></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 38%;" maxlength="2"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 32.7%;">Total (To Item 18C/D)</th>
					<th><input type="text" name="" class="tr isInt" size="15" value=""></th>
					<th><input type="text" name="" class="tr isInt" size="15" value=""></th>
					<th style="width: 66%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr" size="10" value="" style="margin-left: 22%;"></td>
				<td><input type="text" name="" size="10" value="" style="margin-left: 38%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
				<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<th style="width: 90%;"><center>Total</center></th>
					<th style="width: 10%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
					<th style="width: 90%; text-align: left;">C) Total Input Tax Deferred for future period from current and previous purchase (To item 20A) </th>
					<th style="width: 10%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
					<td style="width: 25%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<td style="width: 45%;">
					<table style="width: 100%;">
						<tr>
							<td><center>Taxable sales to government</center></td>
							<td><input type="text" name="" class="tr" size="20" value=""></td>
						</tr>
						<tr>
							<td><center>---------------------------------------------<br/>Total Sales</center></td>
							<td><input type="text" name="" class="tr" size="20" value=""></td>
						</tr>
					</table>
				</td>
				<td>X Amount of Input Tax not directly attributable </td>
				<td><input type="text" name="" class="tr" size="20" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="tr" size="20" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total Input Tax attributable to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Less: Standard Input Tax to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Input Tax on Sale to Govt. closed to expense (To Item 20B)</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
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
					<td style="width: 25%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
		</div>
		<table style="border: outset 1px; width: 100%; font-size: 10px;">
			<tr>
				<td style="width: 45%;">
					<table style="width: 100%;">
						<tr>
							<td><center>Taxable Exempt Sale </center></td>
							<td><input type="text" name="" class="tr" size="20" value=""></td>
						</tr>
						<tr>
							<td><center>---------------------------------------------<br/>Total Sales</center></td>
							<td><input type="text" name="" class="tr" size="20" value=""></td>
						</tr>
					</table>
				</td>
				<td>X Amount of Input Tax not directly attributable </td>
				<td><input type="text" name="" class="tr" size="20" value="" style="margin-left: 7%;"></td>
				<td><input type="text" name="" class="tr" size="20" value="" style="margin-left: 15%;"></td>
			</tr>
		</table>
		<div style="border: outset 1px;">
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total Input Tax attributable to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
			<table style="border-bottom: solid 1px #777; font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Less: Standard Input Tax to sale to government</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
				</tr>
			</table>
			<table style="font-size: 10px; text-align: right;">
				<tr>
					<td style="width: 90%;"><center>Total input tax attributable to exempt sale (To item 20 C)</center></td>
					<td style="width: 10%;"><input type="text" name="" class="tr" size="20" value=""></td>
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
					<th>Applied Current mo.</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 19%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 18%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 20%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 19%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 23A)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
					<th>Applied Current mo.</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 13%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 13%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 12%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 12%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 14%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 13%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 23B)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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
					<th>Applied Current mo.</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="" value=""></td>
					<td><input type="text" name="" size="10" value=""  style="margin-left: 19%;"></td>
					<td><input type="text" name="" size="20" value="" style="margin-left: 18%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 20%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 19%;"></td>
					<td><input type="text" name="" class="tr isInt" size="15" value="" style="margin-left: 19%;"></td>
				</tr>
			</table>
			<div style="border: outset 1px;">
				<table style="font-size: 10px; text-align: right;">
					<tr>
						<th style="width: 77%;"><center>Total (To Item 23C)</center></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
						<th style="width: 0%;"><input type="text" name="" class="tr isInt" size="15" value=""></th>
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