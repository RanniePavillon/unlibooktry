<!DOCTYPE html>
<?php
$atc_form1601e = isset($this) && isset($this->atc_form1601e) ? $this->atc_form1601e : '';
$form1601e = isset($this) && isset($this->form1601e) ? $this->form1601e : '';
?>
<style>
	.textAlignCenter{
		text-align:center !important;
	}
	.textAlignLeft{
		text-align:left !important;
		padding-left:5px;
	}
	.textAlignRight{
		text-align:right !important;
		padding-right:5px;
	}
	input[type="text"] {
		font-weight: bold !important;
		font-size: 16px !important;
	}
</style>
<html>
<head>

<link rel="stylesheet" href="<?= $this->cssUrl?>1601e.css">
<link rel="stylesheet" href="<?= $this->cssUrl?>modal.css">
<script src="<?= $this->imageUrl ?>js/custom.js"></script>

</head>
<body>
<div class="container" style="margin-top:315px!important;">
	<div class="form-holder">
		<div class="header">
			<div class="topleft fl">
				<img src="<?= $this->imageUrl?>img/logo.png">
				<div id="banner" class="fl">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
			</div>
			<div class="mid fl tc">
				<h1>Monthly Remittance Return<br/>
				of Creditable Income Taxes <br/>
				Withheld (Expanded)</h1>
			</div>
			<div class="topright fr	">
				<div class="formNo">BIR Form No.
				<h1>1601-E</h1>
				September 2007 (ENCS)
				</div>
			</div>
		</div>
	<div class="section">
		<div class="one">
			<div class="topleft fl one">
				<b>1</b><small id="space"> For the Month (MM/YYYY)</small>
				<br/>
				<input type="text" name="item1" style="width: 50px;margin-left: 144px;" class="textAlignCenter yearCss" maxlength="4" value="<?= date('m', strtotime($_POST['month']))?>">
				<input type="text" name="item1" style="width: 70px;" class="textAlignCenter" size=4 onkeypress="return isNumber(event)" maxlength="4" value="<?= date('Y', strtotime($_POST['year']))?>">
			</div>
		</div>
		<div class="two" style="border:0;">
			<div class="topleft fl two">
				<b>2</b><small id="space"> Amended Return?</small>
				<br/>
				<div class="indent mdd box">
					<input type="radio" name="item2" id="item2_yes" value="yes" <?= setData($form1601e, 'item2') == 'yes' ? 'checked' : ''?>>
						<label for="item2_yes">Yes</label>
					<input type="radio" name="item2" id="item2_no" value="no" <?= setData($form1601e, 'item2') == 'no' ? 'checked' : ''?>>
						<label for="item2_no">No</label>
				</div>
			
			</div>
		</div>
		<div class="three" style="border:0;">
			<div class="topleft fl three">
				<b>3</b><small id="space"> No. of Sheets Attached?</small>
				<br/>
				<div class="indent mdd">
					<input type="text" size=6 onkeypress="return isNumber(event)" class="textAlignCenter" name="item3" value="<?= setData($form1601e, 'item3'); ?>"> 
					
				</div>
			
			</div>
		</div>
			<div class="four" style="border:0;">
			<div class="topleft fl four">
				<b>4</b><small id="space">Any Taxes Withheld?</small>
				<br/>
				<div class="indent mdd box" style="padding-left: 30px;">
					<input type="radio" name="item4"  id="item4_yes" value="yes" <?= setData($form1601e, 'item2') == 'yes' ? 'checked' : ''?>>
						<label for="item4_yes">Yes</label>
					<input type="radio" name="item4"  id="item4_no" value="no" <?= setData($form1601e, 'item2') == 'no' ? 'checked' : ''?>>
						<label for="item4_no">No</label>
					
					
				</div>
			
			</div>
		</div>
	</div>
	<div class="section1">
		<div class="fl">
			<b>Part I	
		</div>
		<div class="mid1">
			Background Information</b>
		</div>
	</div>
	<div class="section2">
		<div class="five">
			<div class="topleft fl five" style="border:0;">
				<b>5</b><small id="space"> TIN</small>
				<?php
					$tin1 = setData($form1601e, 'item5');
					$tin = explode('-', $tin1);
				?>
				
				<input type="text" style="width:60px;" maxlength=3 onkeypress="return isNumber(event)" class="textAlignCenter tinPrintCss" name="item5[]" value="<?= isset($tin[0]) ? $tin[0] : ''?>"> 
				<input type="text" style="width:60px;" maxlength=3 onkeypress="return isNumber(event)" class="textAlignCenter tinPrintCss" name="item5[]" value="<?= isset($tin[1]) ? $tin[1] : '' ?>">
				<input type="text" style="width:60px;" maxlength=3 onkeypress="return isNumber(event)" class="textAlignCenter tinPrintCss" name="item5[]" value="<?= isset($tin[2]) ? $tin[2] : '' ?>">
				<input type="text" style="width:60px;" maxlength=3 onkeypress="return isNumber(event)" class="textAlignCenter tinPrintCss" name="item5[]" value="<?= isset($tin[3]) ? $tin[3] : '' ?>">
			</div>
		</div>
		<div class="six">
			<div class="topleft fl six" style="border:0;">
				<b>6</b><small id="space"> RDO </small>
				<input type="text" name="item6" value="<?= setData($form1601e, 'item6'); ?>" class="textAlignCenter" style="width:50px;">
				<br/><small id="space">Code</small>
				
			</div>
		</div>
		<div class="seven">
			<div class="topleft fl seven" style="border:0;">
				<b>7</b><small id="space"> Line of Business/Occupation</small>
				<input type="text" class="textAlignLeft" name="item7" value="<?= setData($form1601e, 'item7'); ?>" size=20>
				
			</div>
		</div>
	</div>
	<div class="section3">
		<div class="fl eight">
			<b>8</b> <small>Withholding Agent's Name (Last Name, First Name, Middle Name for Individuals) /(Registered Name for Non-Individuals)</small>
		<br/><input type="text" name="item8" value="<?= setData($form1601e, 'item8'); ?>" class="indent textAlignLeft" size=55>
		</div>
		<div class="fl nine">
			<b>9</b> <small>Telephone Number</small>
			<br/><input type="text" name="item9" value="<?= setData($form1601e, 'item9'); ?>" class="indent textAlignCenter" size=14 onkeypress="return isNumber(event)">
		</div>
	</div>
	<div class="section4">
		<div class="fl ten">
			<b>10</b> <small>Registered Address</small>
		<br/><input type="text" name="item10"  value="<?= setData($form1601e, 'item10'); ?>" class="indent textAlignLeft" style="width:710px;">
		</div>
		<div class="fl eleven">
			<b>11</b> <small>Zip<br/>Code</small>
			<br/><input type="text" name="item11" value="<?= setData($form1601e, 'item11'); ?>" class="indent textAlignCenter" size=3 onkeypress="return isNumber(event)">
		</div>
	</div>
	<div class="section5">
		<div class="fl twelve">
			<b>12</b> <small>Category of Withholding Agent</small><br/>
			<div class="box" style="  height: 25px;width: 190px;">
				<div class="indent mdd twelve" style="float:left;border:0px;">
						<input type="radio" name="item12"  id="private" value="private" <?= setData($form1601e, 'item12') == 'private' ? 'checked' : ''?>> 
							<label for="private">Private</label>
						<input type="radio" name="item12"  id="government" value="government" <?= setData($form1601e, 'item12') == 'government' ? 'checked' : ''?>>
							<label for="government">Government</label>
				</div>	
			</div>
		</div>
		<div class="fl thirteen">
			<b>13</b> <small>Are there payees availing of tax relief under 
			Special Law or International<br/>Tax Treaty?</small><br/>
			<div class="box" style="  margin: 5px 20px;">
			<center><input type="radio" name="item13" id="item13yes" value="yes" <?= setData($form1601e, 'item13') == 'yes' ? 'checked' : ''?>> 
						<label style="margin-right:105px;" for="item13yes">Yes</label>
					<input type="radio" name="item13" id="item13no" value="no" <?= setData($form1601e, 'item13') == 'no' ? 'checked' : ''?>>
						<label for="item13no">No</label><br/>
			</center>
			</div>
			<center>
					<small>If yes, specify</small>
					<select  disabled>
						<option></option>
						<option>Special Rate</option>
						<option>International Tax Treaty</option>
					</select>
			</center>
		</div>
		
		
	</div>
	<div class="section1">
		<div class="fl">
			<b>Part II	
		</div>
		<div class="mid1">
			Computation of Tax</b>
			<label style="float:right"><a href="#atcs">ATC</a></label>
			
		</div>
		
	</div>
	<div class="section1">
		<table>
			<tr>
				<th width="40%" style="text-align: left;">NATURE OF INCOME PAYMENT</th>
				<th width="5%">ATC</th>
				<th width="30%">TAX BASE</th>
				<th width="10%">TAX RATE</th>
				<th width="20%">TAX REQUIRED TO <br/>BE WITHHELD </th>
			</tr>
		<?php
			if(isset($atc_form1601e) && !empty($atc_form1601e)){
				foreach($atc_form1601e as $each){
		?>
			<tr>
				<td><?= $each->accountName ?></td>
				<td><input value="<?= $each->atcCode ?>"/></td>
				<td><input class="isNumeric textAlignRight" value="<?= $each->amount ?>"/></td>
				<td><input class="isNumeric textAlignRight" value="<?= $each->rate ?>"/></td>
				<td><input class="isNumeric textAlignRight" value="<?= $each->taxRequired ?>"/></td>
			</tr>
		<?php
				}
			}
		?>
		</table>
			
	</div>
		
	</div>
	<div class="section6" style="line-height:100%">

		<table>
			<tr>
				<td width="76%"><b class="mr dsp">14</b>Total Tax Required to be Withheld and Remitted</td>
				<td width="24%">
				<b class="mr">14</b>
				<input type="text" size=15 class="isNumeric" name="item14" value="<?= setData($form1601e, 'item14') ?>"></td>
			</tr>
			<tr>
				<td width="76%"><b class="mr">15</b>Less : Tax Credits/Payments    </td>
				<td width="24%"></td>
			</tr>
			<tr>
				<td width="76%"><b class="ml" style="margin-right:10px;">15A</b>Tax Remitted in Return Previously Filed, if this is an amended return </td>
				<td width="24%">
					<b class="" style="margin-right:10px;">15A</b>
					<input type="text" size=15 class="isNumeric" name="item15A" value="<?= setData($form1601e, 'item15A') ?>">
				</td>
			</tr>
			<tr>
				<td width="76%"><b class="ml" style="margin-right:10px;">15B</b> Advance Payments Made (please attach proof of payment - BIR Form No. 0605)</td>
				<td width="24%">
					<b class="" style="margin-right:10px;">15B</b>
					<input type="text" size=15 class="isNumeric" name="item15B" value="<?= setData($form1601e, 'item15B') ?>">
				</td>
			</tr>
			<tr>
				<td width="76%"><b class="ml" style="margin-right:10px;">15C</b>Total Tax Credits/Payments (Sum of Items 15A and 15B) </td>
				<td width="24%">
					<b class="" style="margin-right:10px;">15C</b>
					<input type="text" size=15 class="isNumeric" name="item15C" value="<?= setData($form1601e, 'item15C') ?>">
				</td>
			</tr>
			<tr>
				<td width="76%"><b class="mr dsp">16</b>Tax Still Due/(Overremittance) (Item 14 less Item 15C)</td>
				<td width="24%">
					<b class="mr">16</b>
					<input type="text" size=15 class="isNumeric" name="item16" value="<?= setData($form1601e, 'item16') ?>">
				</td>
			</tr>
			<tr>
				<td width="76%"><b class="mr">17</b> Add: Penalties </td>
				<td width="24%"></td>
			</tr>
			<tr>
				<td width="76%">
				<label class="ml"></label><small class="ml" style="margin-right:100px;">Surcharge</small>
				<label class="ml"></label><small class="ml" style="margin-right:70px;">Interest</small>
				<label class="ml"></label><small class="ml" style="margin-right:30px;">Compromise</small>
				</td>
				<td width="24%"></td>
			</tr>
			<tr>
				<td width="76%">
					<b class="ml mr" style="margin-right:10px;">17A</b>
					<input type="text" size=12 class="isNumeric" name="item17A" value="<?= setData($form1601e, 'item17A') ?>">
					<b class=" mr" style="margin-right:10px;">17B</b>
					<input type="text" size=12 class="isNumeric" name="item17B" value="<?= setData($form1601e, 'item17B') ?>">
					<b class=" mr" style="margin-right:10px;">17C</b>
					<input type="text" size=12 class="isNumeric" name="item17C" value="<?= setData($form1601e, 'item17C') ?>">
				</td>
				<td width="24%">
					<b class="mr" style="margin-right:10px">17D</b>
					<input type="text" size=15 class="isNumeric" name="item17D" value="<?= setData($form1601e, 'item17D') ?>">
				</td>
			</tr>
			<tr>
				
				<td width="76%"><b class="mr dsp">18</b>Total Amount Still Due(Overremittance)(Sum of Items 16 & 17D)</td>
				<td width="24%">
					<b class="mr" >18</b>
					<input type="text" size=15 class="isNumeric" name="item18" value="<?= setData($form1601e, 'item18') ?>">
				</td>
			</tr>
		</table>
	</div>
	</div>
</div>



<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
			<center>Please choose from the checkbox if you want to delete a row.</center>
		<table style="border:1px solid #aaa">
			<tr>
				<th style="border:1px solid #aaa">Month/Year</th>
				<th style="border:1px solid #aaa">Previous Month(s)/Year(1)<br/>(MM/YYYY)</th>
				<th style="border:1px solid #aaa">Date Paid(2)<br/>(MM/DD/YYYY)</th>
				<th style="border:1px solid #aaa">Bank Validation/ROR No</th>
				<th style="border:1px solid #aaa">Bank Code</th>
				<th style="border:1px solid #aaa">Tax Paid(Excluding Penalties)</th>
				<th style="border:1px solid #aaa">Should Be Tax Due</th>
				<th style="border:1px solid #aaa">From Current Year(7a)</th>
				<th style="border:1px solid #aaa">From Year-End</th>

			</tr>
		</table>
		<br/>
			<label style="float:right">
				Total Amount (total 7a plus 7b) <input type="text">
				<br/>
				<button>Add</button>
				<button>Delete</button>
			</label>
			<div style="margin-top:100px">
				<center>
					<button>OK</button>
					<a href="#close"><button>CANCEL</button></a>
				</center>
			</div>
			
	</div>
</div>


<div id="atc" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<center>ATC</center>
		<table style="border: solid 1px #000; width: 100%;">
			<tr>
				<td colspan="3"><small>Please click a check box to select and deselect an ATC.  </small></td>
			</tr>
			<tr>
				<th style="width: 10%; border: solid 1px #777;">ATC</th>
				<th style="width: 60%; border: solid 1px #777;">Description</th>
				<th style="width: 10%; border: solid 1px #777;">Rate</th>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC010</td>
				<td style="border: solid 1px #777;">PROFL TALENT FEE PD TO JURIDICL (GROSS INC <= 720,000)</td>
				<td style="border: solid 1px #777;">10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC011</td>
				<td style="border: solid 1px #777;">PROFL TALENT FEE PD TO JURIDICL (GROSS INC > 720,000) </td>
				<td style="border: solid 1px #777;">15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC050 </td>
				<td style="border: solid 1px #777;">MANAGEMENT AND TECHNICAL CONSULTANTS (GROSS INC <= 720,000)</td>
				<td style="border: solid 1px #777;"> 10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC051</td>
				<td style="border: solid 1px #777;">  MANAGEMENT AND TECHNICAL CONSULTANTS (GROSS INC > 720,000) </td>
				<td style="border: solid 1px #777;"> 15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC100</td>
				<td style="border: solid 1px #777;">  RENTALS (CORP.)  </td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC110</td>
				<td style="border: solid 1px #777;">  CINEM. FILM RENTALS (CORP.) </td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC140</td>
				<td style="border: solid 1px #777;">   AMOUNTS PAID TO CERTAIN BROKERS AND AGENTS (CORP.) </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC156</td>
				<td style="border: solid 1px #777;">  CREDIT CREDIT CARD COMPANIES </td>
				<td style="border: solid 1px #777;"> 0.5</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC157</td>
				<td style="border: solid 1px #777;">  PYMT BY GOVT TO LOCAL/RSDNT SUPPLIER(CORP-SERVICES) </td>
				<td style="border: solid 1px #777;"> 2.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC158</td>
				<td style="border: solid 1px #777;">  INC PYMTS MADE BY TOP 20,000 CORP TO LOCAL SUPP OF GOODS  </td>
				<td style="border: solid 1px #777;">1.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC160</td>
				<td style="border: solid 1px #777;">  INC PYMTS MADE BY TOP 20,000 CORP TO LOCAL SUPP. OF SVCS  </td>
				<td style="border: solid 1px #777;">2.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC515</td>
				<td style="border: solid 1px #777;">  COMM OF INDPNT AND/OR EXCL SALES REP,MKTG AGENTS(CORP)  </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC535</td>
				<td style="border: solid 1px #777;">  PYMTS MADE BY PRE-NEED CO. TO FUNERAL PARLORS(CORP) </td>
				<td style="border: solid 1px #777;"> 1.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC540</td>
				<td style="border: solid 1px #777;">  TOLLING FEE PAID TO REFINERIES(CORPORATE) </td>
				<td style="border: solid 1px #777;"> 5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC610</td>
				<td style="border: solid 1px #777;">  PYMTS MADE TO SUPPLIERS OF AGRICULTURAL PRODUCTS(CORP)  </td>
				<td style="border: solid 1px #777;">1.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC630</td>
				<td style="border: solid 1px #777;">  PYMTS ON PURCH-MINERALS,MINERAL PROD,QUARRY RESRCS(CORP) </td>
				<td style="border: solid 1px #777;"> 5.0</td>
			</tr>
						<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC632 </td>
				<td style="border: solid 1px #777;">  INCME PYMT ON PURCH OF GOLD BYBSPTO GOLDMINRS RA7076  /td>
				<td style="border: solid 1px #777;"> 5.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC640</td>
				<td style="border: solid 1px #777;">   PYMT BY GOVT TO LOCAL/RSDNT SUPPLIER(CORP-GOODS)  </td>
				<td style="border: solid 1px #777;"> 1.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC650</td>
				<td style="border: solid 1px #777;">   WITHHOLDING ON GROSS AMOUNT OF REFUND TO MERALCO CUSTOMERS  </td>
				<td style="border: solid 1px #777;">25.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC651</td>
				<td style="border: solid 1px #777;">   WITHHOLDING ON GROSS AMT OF REF TO MERALCO CUS-TERMINATED </td>
				<td style="border: solid 1px #777;"> 32.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC660</td>
				<td style="border: solid 1px #777;">  GROS OF INT RFUND OF MTER DPOSIT RESIDNTL ELECT>200KW MER  </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC661</td>
				<td style="border: solid 1px #777;">   GROS OF INT RFUND OF MTER DPOSIT NONRES ELECT>200KW MER  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC662</td>
				<td style="border: solid 1px #777;">   GROS OF INT RFUND OF MTER DPOSIT RESIDNTL ELECT>200KW DU  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC663</td>
				<td style="border: solid 1px #777;">   GROS OF INT RFUND OF MTER DPOSIT NONRES ELECT>200KW DU  </td>
				<td style="border: solid 1px #777;">20.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI010</td>
				<td style="border: solid 1px #777;">   PROFLS, LAWYERS,CPAS, ENGR (GROSS INC <= 720,000) </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI011</td>
				<td style="border: solid 1px #777;">   PROFLS, LAWYERS,CPAS, ENGR (GROSS INC > 720,000) </td>
				<td style="border: solid 1px #777;">15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI020</td>
				<td style="border: solid 1px #777;">   PROF ENTRTNR-IF CURR YR GROSS INC DOESNT EXCEED P720,000  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI021</td>
				<td style="border: solid 1px #777;">  PROF ENTRTAINRS-IF CURRENT YR GROSS INC EXCEEDS P720,000   </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI021</td>
				<td style="border: solid 1px #777;">   PROF ENTRTAINRS-IF CURRENT YR GROSS INC EXCEEDS P720,000   </td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI030</td>
				<td style="border: solid 1px #777;">   PROF ATH-IF CURR YR GROSS INC DOESNT EXCEED P720,000   </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI031</td>
				<td style="border: solid 1px #777;">     PROF ATHLETES-IF CURRENT YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;"> 10.0 </td>
			</tr>
				<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI031</td>
				<td style="border: solid 1px #777;">  PROF ATHLETES-IF CURRENT YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;"> 5.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI040</td>
				<td style="border: solid 1px #777;">  MOVIE,STAGE,ETC-IF CURR YR GROSS INC DOESNT EXCEED P720T  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI041</td>
				<td style="border: solid 1px #777;">  MOVIE,STAGE,ETC-IF CURRENT YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI041</td>
				<td style="border: solid 1px #777;">  MOVIE,STAGE,ETC-IF CURRENT YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI030</td>
				<td style="border: solid 1px #777;">   PROF ATH-IF CURR YR GROSS INC DOESNT EXCEED P720,000   </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI050</td>
				<td style="border: solid 1px #777;">  MANAGEMENT AND TECHNICAL CONSULTANTS (GROSS INC <= 720,000) </td>
				<td style="border: solid 1px #777;"> 10.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI051</td>
				<td style="border: solid 1px #777;">   MANAGEMENT AND TECHNICAL CONSULTANTS (GROSS INC >720,000) </td>
				<td style="border: solid 1px #777;">  15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI060</td>
				<td style="border: solid 1px #777;">  BUSINESS AND BOOKKEEPING AGENTS (GROSS INC <= 720,000)  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI061</td>
				<td style="border: solid 1px #777;">   BUSINESS AND BOOKKEEPING AGENTS (GROSS INC > 720,000)   </td>
				<td style="border: solid 1px #777;">15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI070</td>
				<td style="border: solid 1px #777;">   INSURANCE AGENTS AND ADJUSTERS (GROSS INC <= 720,000) </td>
				<td style="border: solid 1px #777;"> 10.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI071</td>
				<td style="border: solid 1px #777;">   INSURANCE AGENTS AND ADJUSTERS (GROSS INC > 720,000)</td>
				<td style="border: solid 1px #777;">  15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI080</td>
				<td style="border: solid 1px #777;">  OTHER RCPNT OF TF-IF CURR YR GROSS INC DSNT EXCEED P720T  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI081</td>
				<td style="border: solid 1px #777;">   OTHER RCPNT OF TF-IF CURR YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI081</td>
				<td style="border: solid 1px #777;">   OTHER RCPNT OF TF-IF CURR YR GROSS INC EXCEEDS P720,000  </td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI061</td>
				<td style="border: solid 1px #777;">   BUSINESS AND BOOKKEEPING AGENTS (GROSS INC > 720,000)   </td>
				<td style="border: solid 1px #777;">15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI090</td>
				<td style="border: solid 1px #777;">   FEES OF DIRECTORS NOT EMPLOYEE OF COMP(GROSS INC <= 720,000) </td>
				<td style="border: solid 1px #777;">  10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI090</td>
				<td style="border: solid 1px #777;">   FEES OF DIRECTORS NOT EMPLOYEE OF COMP(GROSS INC <= 720,000)  </td>
				<td style="border: solid 1px #777;">  5.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI091</td>
				<td style="border: solid 1px #777;">   FEES OF DIRECTORS NOT EMPLOYEE OF COMP(GROSS INC > 720,000)  </td>
				<td style="border: solid 1px #777;">  15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI100</td>
				<td style="border: solid 1px #777;">   RENTALS (INDIVIDUAL)  </td>
				<td style="border: solid 1px #777;"> 5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI110</td>
				<td style="border: solid 1px #777;">    CINEM. FILM RENTALS -(INDIVIDUAL)  </td>
				<td style="border: solid 1px #777;">  5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI120</td>
				<td style="border: solid 1px #777;">   CONTRACTORS (INDIVIDUAL)  </td>
				<td style="border: solid 1px #777;">  2.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI130</td>
				<td style="border: solid 1px #777;">    INCOME DISTRIBUTION TO BENEFICIARIES  </td>
				<td style="border: solid 1px #777;">  15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI140</td>
				<td style="border: solid 1px #777;">    AMOUNTS PAID TO CERTAIN BROKERS AND AGENTS (IND.)  </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI141</td>
				<td style="border: solid 1px #777;">    PYMTS FOR MED PRACTITIONRS THRU A DULY REG PROF PRTNRSHP  </td>
				<td style="border: solid 1px #777;">10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI142</td>
				<td style="border: solid 1px #777;">   Pymt to med pract of med prof if crntyr inc>720K  </td>
				<td style="border: solid 1px #777;">  15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI150</td>
				<td style="border: solid 1px #777;">   PYMT TO MED PRACTNRS THRU HOSP/CLINICS(GROSS INC >720,000) </td>
				<td style="border: solid 1px #777;">  15.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI151</td>
				<td style="border: solid 1px #777;">   PYMT TO MED PRACTNRS THRU HOSP/CLINICS(GROSS INC <= 720,000)   </td>
				<td style="border: solid 1px #777;"> 10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI141</td>
				<td style="border: solid 1px #777;">    PYMTS FOR MED PRACTITIONRS THRU A DULY REG PROF PRTNRSHP  </td>
				<td style="border: solid 1px #777;">10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI152</td>
				<td style="border: solid 1px #777;">   PAYM TO PARTNERS IN PROF PARTNERSHIP </td>
				<td style="border: solid 1px #777;">   10.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI156</td>
				<td style="border: solid 1px #777;">  PAYMENTS MADE BY CREDIT CARD COMPANIES TO INDIVIDUALS  </td>
				<td style="border: solid 1px #777;">  0.5</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI157</td>
				<td style="border: solid 1px #777;">   PYMT BY GOVT TO LOCAL/RSDNT SUPPLIER(INDIV-SERVICES)  </td>
				<td style="border: solid 1px #777;">  2.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI158</td>
				<td style="border: solid 1px #777;">    INC PYMTS MADE BY TOP 10,000 CORP TO LOCAL SUPP OF GOODS   </td>
				<td style="border: solid 1px #777;">  1.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI159</td>
				<td style="border: solid 1px #777;">  ADDL PAYMENTS TO GOVT PERSONNEL FROM IMPORTERS,SHIPPING S  </td>
				<td style="border: solid 1px #777;">  15.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI160</td>
				<td style="border: solid 1px #777;"> INC PYMTS MADE BY TOP 10,000 CORP TO LOCAL SUPP. OF SVCS</td>
				<td style="border: solid 1px #777;"> 2.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI515</td>
				<td style="border: solid 1px #777;">     COMM OF INDPNT AND/OR EXCL SALES REP,MKTG AGENTS OF CO. </td>
				<td style="border: solid 1px #777;">  10.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI530</td>
				<td style="border: solid 1px #777;"> GROSS PYMTS TO EMBALMERS BY FUNERAL COMPANIES </td>
				<td style="border: solid 1px #777;">  1.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI535</td>
				<td style="border: solid 1px #777;">  PYMTS MADE BY PRE-NEED CO. TO FUNERAL PARLORS</td>
				<td style="border: solid 1px #777;"> 1.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI540</td>
				<td style="border: solid 1px #777;">    TOLLING FEE PAID TO REFINERIES </td>
				<td style="border: solid 1px #777;"> 5.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI610</td>
				<td style="border: solid 1px #777;"> PYMTS MADE TO SUPPLIERS OF AGRICULTURAL PRODUCTS </td>
				<td style="border: solid 1px #777;">  1.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI630</td>
				<td style="border: solid 1px #777;"> PYMTS ON PURCH-MINERALS,MINERAL PROD,QUARRY RESOURCES</td>
				<td style="border: solid 1px #777;">  5.0    </td>
			</tr>	
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI632</td>
				<td style="border: solid 1px #777;">  INCM PYMT ON PURCH OF GOLD BYBSPTO GOLDMINRS RA7076 IND</td>
				<td style="border: solid 1px #777;"> 5.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI640</td>
				<td style="border: solid 1px #777;">  PYMT BY GOVT TO LOCAL/RSDNT SUPPLIER(INDIV-GOODS) </td>
				<td style="border: solid 1px #777;"> 1.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI650</td>
				<td style="border: solid 1px #777;">  WITHHOLDING ON GROSS AMOUNT OF REFUND TO MERALCO CUSTOMERS </td>
				<td style="border: solid 1px #777;">  25.0   </td>
			</tr>		
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI651</td>
				<td style="border: solid 1px #777;"> WITHHOLDING ON GROSS AMT OF REF TO MERALCO CUS-TERMINATED  </td>
				<td style="border: solid 1px #777;">   32.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI660</td>
				<td style="border: solid 1px #777;">  GROS OF INT RFUND OF MTER DPOSIT RESID ELECT>200KW MER IND </td>
				<td style="border: solid 1px #777;"> 10.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI661</td>
				<td style="border: solid 1px #777;">   GROS OF INT RFUND OF MTER DPOSIT NONRS ELECT>200KW MER IND </td>
				<td style="border: solid 1px #777;">  10.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI662</td>
				<td style="border: solid 1px #777;">  GROS OF INT RFUND OF MTER DPOSIT RESID ELECT>200KW DU IND </td>
				<td style="border: solid 1px #777;">    10.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI663</td>
				<td style="border: solid 1px #777;">GROS OF INT RFUND OF MTER DPOSIT NONRS ELECT>200KW DU IND</td>
				<td style="border: solid 1px #777;">  20.0   </td>
			</tr>	
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI670</td>
				<td style="border: solid 1px #777;"> INCOME PAYMENTS MADE BY TOP 20,000 PRIVATE CORPORATIONS, GOODS, INDIVIDUAL</td>
				<td style="border: solid 1px #777;">  1.0    </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC670</td>
				<td style="border: solid 1px #777;"> INCOME PAYMENTS MADE BY TOP 20,000 PRIVATE CORPORATIONS, GOODS, CORPORATE</td>
				<td style="border: solid 1px #777;">  1.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI672</td>
				<td style="border: solid 1px #777;"> INCOME PAYMENTS MADE BY TOP 20,000 PRIVATE CORPORATIONS, SERVICES, INDIVIDUAL</td>
				<td style="border: solid 1px #777;">    2.0    </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC672</td>
				<td style="border: solid 1px #777;"> INCOME PAYMENTS MADE BY TOP 20,000 PRIVATE CORPORATIONS, SERVICES, CORPORATE</td>
				<td style="border: solid 1px #777;">   2.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI680</td>
				<td style="border: solid 1px #777;">INCOME PAYMENTS MADE BY POLITICAL PARTIES AND CANDIDATES OF LOCAL AND NATIONAL ELECTIONS, INDIVIDUAL</td>
				<td style="border: solid 1px #777;">    5.0   </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC680</td>
				<td style="border: solid 1px #777;">INCOME PAYMENTS MADE BY POLITICAL PARTIES AND CANDIDATES OF LOCAL AND NATIONAL ELECTIONS, CORPORATE</td>
				<td style="border: solid 1px #777;">    5.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC690</td>
				<td style="border: solid 1px #777;">   INCOME PAYMENTS SUBJECT TO WITHHOLDING TAX RECEIVED BY REAL ESTATE INVESTMENT TRUST (REIT)  </td>
				<td style="border: solid 1px #777;"> 1.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI555</td>
				<td style="border: solid 1px #777;">    SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN INDIVIDUAL </td>
				<td style="border: solid 1px #777;">  1.5    </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI556</td>
				<td style="border: solid 1px #777;">   SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN INDIVIDUAL  </td>
				<td style="border: solid 1px #777;">  3.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI557</td>
				<td style="border: solid 1px #777;">  SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN INDIVIDUAL </td>
				<td style="border: solid 1px #777;">  5.0   </td>
			</tr>	
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC555</td>
				<td style="border: solid 1px #777;">   SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN CORPORATE  </td>
				<td style="border: solid 1px #777;"> 1.5 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC556</td>
				<td style="border: solid 1px #777;">   SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN CORPORATE </td>
				<td style="border: solid 1px #777;"> 3.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC557</td>
				<td style="border: solid 1px #777;">  SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN CORPORATE  </td>
				<td style="border: solid 1px #777;"> 5.0 </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC558</td>
				<td style="border: solid 1px #777;">  SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN CORPORATE  </td>
				<td style="border: solid 1px #777;">  6.0  </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WC710</td>
				<td style="border: solid 1px #777;">  EXPANDED WITHHOLDING TAX PURSUANT TO RR NO. 14-2012 (CORPORATE)  </td>
				<td style="border: solid 1px #777;"> 20.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">WI710</td>
				<td style="border: solid 1px #777;">  EXPANDED WITHHOLDING TAX PURSUANT TO RR NO. 14-2012 (INDIVIDUAL)  </td>
				<td style="border: solid 1px #777;">20.0 </td>
			</tr>
		</table>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>





<?php

function setData($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index != '') {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        } else {
            if (!empty($array->$data)) {
                return $array->$data;
            }
        }
    }
}
?>	
</body>
</html>
